<?php
switch (url::get(2)) {
    case 'list':
        $data = [];

        $data['contracts'] = contracts::list();
        $data['users'] = users::list();

        echo json_encode($data);
        break;
    case 'selected-contract':
        $id = input::post('c_id');
        $c = contracts::getBy(['c_id' => $id]);

        $data = [];
        $data['user'] =  users::getBy(["u_id" => $c[0]->c_tenant])[0];
        $data['shop'] = shops::getBy(["s_id" => $c[0]->c_shop])[0];

        echo json_encode($data);

        break;
    case 'request-transfer':
        $tr_contract = input::post('tr_contract');
        $tr_cagaran = input::post('tr_cagaran');
        $tr_sender = input::post('tr_sender');
        $tr_rcpt = input::post('tr_rcpt');

        $tr_status = input::post('tr_status');
        $tr_notes = input::post('tr_notes');
        $tr_staff = Session::get('user')->u_id;

        if (empty($tr_contract)) {
            Alert::set("error", "Data Tidak Lengkap");
        } else {
            $tr = transfer_requests::insertInto([
                'tr_contract' =>  $tr_contract,
                'tr_cagaran' =>  $tr_cagaran,
                'tr_sender' => $tr_sender,
                'tr_rcpt' => $tr_rcpt,
                'tr_date' => date('Y-m-d h:m:s'),
                'tr_time' => F::GetTime(),
                'tr_status' =>  $tr_status,
                'tr_staff' =>  $tr_staff,
                'tr_notes' =>  $tr_notes,
            ]);

            if ($tr) {

                $trr  = transfer_requests::getBy(['tr_contract' => $tr_contract]);

                if (count($trr) > 0) {
                    $t = $trr[0];

                    transfer_request_logs::insertInto([
                        'trl_request' => $t->tr_id,
                        'trl_user' => $t->tr_staff,
                        'trl_status' => $t->tr_status,
                        'trl_message' => 'Initial Request',
                        'trl_date' => date('Y-m-d h:m:s'),
                        'trl_time' => F::GetTime(),
                    ]);
                } else {
                    Alert::set("success", "Gagal mengambil maklumat.");
                }
            } else {
                Alert::set("success", "Gagal menyimpan data permohonan.");
            }

            Alert::set(
                "success",
                "Maklumat permohonan wang cagaran telah disimpan.",
            );
        }
        break;
    case 'update':
        $tr_id  = input::post('tr_id');
        $status  = input::post('status');
        $tr  = transfer_requests::getBy(['tr_id' => $tr_id])[0];

        if ($status == 1) {
            if ($tr->tr_cagaran != 0) {
                $rd = request_deposits::insertInto([
                    'rd_contract' =>  $tr->tr_contract,
                    'rd_tenant' => $tr->tr_sender,
                    'rd_date' => date('Y-m-d h:m:s'),
                    'rd_time' => F::GetTime(),
                    'rd_status' =>  0,
                    'rd_updateBy' => $tr->tr_staff,
                ]);

                if ($rd) {
                    $rdr  = request_deposits::getBy(['rd_contract' => $tr->tr_contract]);
                    if (count($rdr) > 0) {
                        $r = $rdr[0];
                        request_deposit_logs::insertInto([
                            'rdl_request' => $r->rd_id,
                            'rdl_user' => $r->rd_tenant,
                            'rdl_status' => $r->rd_status,
                            'rdl_date' => date('Y-m-d h:m:s'),
                            'rdl_message' => 'Initial Request',
                            'rdl_time' => F::GetTime(),
                        ]);
                    } else {
                        Alert::set("success", "Gagal mengambil maklumat.");
                    }
                } else {
                    Alert::set("success", "Gagal menyimpan data permohonan.");
                }
            } else {
                //create new contract

                //assign to new owner
            }
        }



        $u = transfer_requests::updateBy(['tr_id' => $tr_id], [
            'tr_status' => $status,
        ]);

        if ($u) {
            transfer_request_logs::insertInto([
                'trl_request' => $tr->tr_id,
                'trl_user' => $tr->tr_staff,
                'trl_status' => $status,
                'trl_message' => 'Update Status',
                'trl_date' => date('Y-m-d h:m:s'),
                'trl_time' => F::GetTime(),
            ]);
        } else {
            Alert::set("success", "Gagal mengambil maklumat status.");
        }
        Alert::set(
            "success",
            "Maklumat permohonan wang cagaran telah di kemaskini.",
        );
        break;
}
