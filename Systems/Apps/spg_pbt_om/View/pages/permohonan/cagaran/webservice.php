<?php
switch (url::get(2)) {
    case 'list':
        $data = [];

        $data['contracts'] = contracts::list();

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
    case 'request-deposit':
        $rd_contract = input::post('rd_contract');
        $rd_tenant = input::post('rd_tenant');
        $rd_status = input::post('rd_status');
        $rd_updateBy = Session::get('user')->u_id;

        if (empty($rd_contract)) {
            Alert::set("error", "Data Tidak Lengkap");
        } else {
            $rd = request_deposits::insertInto([
                'rd_contract' =>  $rd_contract,
                'rd_tenant' => $rd_tenant,
                'rd_date' => date('Y-m-d h:m:s'),
                'rd_time' => F::GetTime(),
                'rd_status' =>  $rd_status,
                'rd_updateBy' => $rd_updateBy,
            ]);

            if ($rd) {

                $rdr  = request_deposits::getBy(['rd_contract' => $rd_contract]);

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

            Alert::set(
                "success",
                "Maklumat permohonan wang cagaran telah disimpan.",
            );
        }
        break;
    case 'update':
        $rd_id  = input::post('rd_id');
        $status  = input::post('status');
        $rd  = request_deposits::getBy(['rd_id' => $rd_id])[0];

        $u = request_deposits::updateBy(['rd_id' => $rd_id], [
            'rd_status' => $status,
        ]);

        if ($u) {
            $a = request_deposit_logs::insertInto([
                'rdl_request' => $rd_id,
                'rdl_user' => $rd->rd_tenant,
                'rdl_status' => $status,
                'rdl_date' => date('Y-m-d h:m:s'),
                'rdl_message' => 'Update Request',
                'rdl_time' => F::GetTime(),
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
