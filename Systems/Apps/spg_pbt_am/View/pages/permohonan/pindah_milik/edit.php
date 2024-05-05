<?php
Controller::alert();

$tr_id = url::get(3);
$tr = transfer_requests::getBy(['tr_id' => $tr_id])[0];
$c = contracts::getBy(['c_id' => $tr->tr_contract])[0];
$s = shops::getBy(["s_id" => $c->c_shop])[0];
$sender = users::getBy(['u_id' => $tr->tr_sender])[0];
$rcpt = users::getBy(['u_id' => $tr->tr_rcpt])[0];

?>


<div class="card">
    <div class="card-header">
        Lihat Permohonanan

        <a href="<?= PORTAL ?>permohonan/pindah-milik" class="btn btn-sm btn-primary float-right">
            Kembali
        </a>
    </div>

    <div class="card-body">
        <div class="row mt-4" id="maklumat">
            <input type="hidden" id="tr_id" value="<?= $tr_id ?>">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Maklumat Gerai</h4>
                        <div class="row">
                            <div class="col table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Rujukan</strong></td>
                                            <td>
                                                <p><?= $s->s_refno ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Lot Gerai</strong></td>
                                            <td>
                                                <p><?= $s->s_lot ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Level Gerai</strong></td>
                                            <td>
                                                <p><?= $s->s_level ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status</strong></td>
                                            <td>
                                                <p><?= $s->s_status ?></p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Harga</strong></td>
                                            <td>
                                                <p><?= $s->s_price ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Blok</strong></td>
                                            <td>
                                                <p><?= $s->s_block ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kumpulan</strong></td>
                                            <td>
                                                <p><?= $s->s_group ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Jalan Gerai</strong></td>
                                            <td>
                                                <p id="roadGerai"><?= $s->s_road ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kawasan Residensi</strong></td>
                                            <td>
                                                <p id="residentialGerai"><?= $s->s_residential ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kawasan</strong></td>
                                            <td>
                                                <p id="areaGerai"><?= $s->s_area ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Poskod</strong></td>
                                            <td>
                                                <p id="postcodeGerai"><?= $s->s_postcode ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Negeri</strong></td>
                                            <td>
                                                <p id="negeriGerai"><?= $s->s_state ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Negara</strong></td>
                                            <td>
                                                <p id="negaraGerai"><?= $s->s_country ?></p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Lokasi Gerai(longitude, latitude)</strong></td>
                                            <td>
                                                <p id="longitudeGerai"><?= $s->s_longitude ?></p>
                                                <p id="latitudeGerai"><?= $s->s_latitude ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-2">
                    <div class="card-body">
                        <h4>Maklumat Penyewa</h4>
                        <div class="row">
                            <div class="col">
                                <p><?= $sender->u_full_name ?></p>
                                <p><?= $sender->u_ic ?></p>
                                <p><?= $sender->u_email ?></p>
                                <p><?= $sender->u_phone ?></p>
                            </div>
                            <div class="col">
                                <h5>Alamat</h5>
                                <p><?= $sender->u_alamat ?></p>
                                <p><?= $sender->u_area ?></p>
                                <p><?= $sender->u_postcode ?></p>
                                <p><?= $sender->u_state ?></p>
                                <p><?= $sender->u_country ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Maklumat Penerima</h4>

                        <div class="row">
                            <div class="col">
                                <p><?= $rcpt->u_full_name ?></p>
                                <p><?= $rcpt->u_ic ?></p>
                                <p><?= $rcpt->u_email ?></p>
                                <p><?= $rcpt->u_phone ?></p>
                            </div>
                            <div class="col">
                                <h5>Alamat</h5>
                                <p><?= $rcpt->u_alamat ?></p>
                                <p><?= $rcpt->u_area ?></p>
                                <p><?= $rcpt->u_postcode ?></p>
                                <p><?= $rcpt->u_state ?></p>
                                <p><?= $rcpt->u_country ?></p>

                            </div>
                            <p>
                                <?php
                                if ($tr->tr_cagaran === 1) {
                                    echo "Permohonan ini beserta permohonan wang cagaran";
                                } else {
                                    echo "Permohonan ini tidak beserta permohonan wang cagaran";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col text-center mt-2">
                <button class="btn btn-sm btn-success" onclick="update(1)">Lulus</button>
                <button class="btn btn-sm btn-danger" onclick="update(2)">Tidak Lulus</button>
                <button class="btn btn-sm btn-primary" onclick="update(0)">Sedang Diproses</button>
            </div>
        </div>
    </div>
    <?php

    Page::append(
        <<<ASD
<script>

function update(status){
let data = {
    tr_id: $('#tr_id').val(),
    status: status
}

$.ajax({
    url: PORTAL + 'webservice/pindah-milik/update',
    type: "post",
    dataType: 'text',
    data: data,
    success: (item) => {
        // window.location = PORTAL + "permohonan/pindah-milik";
    },
    error: (err) => {
        console.log(err);
    }
})
}
</script>

ASD
    );
