<?php
Controller::alert();

$rd_id = url::get(3);
$rd = request_deposits::getBy(['rd_id' => $rd_id])[0];

$c = contracts::getBy(['c_id' => $rd->rd_contract])[0];
$user =  users::getBy(["u_id" => $c->c_tenant])[0];
$shop = shops::getBy(["s_id" => $c->c_shop])[0];
?>

<div class="card">
    <div class="card-header">
        Tambah Permohonanan

        <a href="<?= PORTAL ?>permohonan/cagaran" class="btn btn-sm btn-primary float-right">
            Kembali
        </a>
    </div>


    <div class="card-body">
        <input type="hidden" id="rd_id" value="<?= $rd_id ?>">
        <div class="row mt-4" id="maklumat">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Maklumat Penyewa</h4>
                        <div class="row">
                            <div class="col">
                                <p id="namaPenuhPenyewa"><?= $user->u_full_name ?></p>
                                <p id="icPenyewa"><?= $user->u_ic ?></p>
                                <p id="emailPenyewa"><?= $user->u_email ?></p>
                                <p id="phonePenyewa"><?= $user->u_phone ?></p>
                            </div>
                            <div class="col">
                                <h5>Alamat</h5>
                                <p id="alamatPenyewa"><?= $user->u_alamat ?></p>
                                <p id="areaPenyewa"><?= $user->u_area ?></p>
                                <p id="postcodePenyewa"><?= $user->u_postcode ?></p>
                                <p id="negeriPenyewa"><?= $user->u_state ?></p>
                                <p id="negaraPenyewa"><?= $user->u_country ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
                                                <?= $shop->s_refno ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Lot Gerai</strong></td>
                                            <td>
                                                <?= $shop->s_lot ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Level Gerai</strong></td>
                                            <td>
                                                <?= $shop->s_level ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status</strong></td>
                                            <td>
                                                <?= $shop->s_status ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Harga</strong></td>
                                            <td>
                                                <?= $shop->s_price ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Blok</strong></td>
                                            <td>
                                                <?= $shop->s_block ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kumpulan</strong></td>
                                            <td>
                                                <?= $shop->s_group ?>
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
                                                <?= $shop->s_road ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kawasan Residensi</strong></td>
                                            <td>
                                                <?= $shop->s_residential ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kawasan</strong></td>
                                            <td>
                                                <?= $shop->s_area ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Poskod</strong></td>
                                            <td>
                                                <?= $shop->s_postcode ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Negeri</strong></td>
                                            <td>
                                                <?= $shop->s_state ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Negara</strong></td>
                                            <td>
                                                <?= $shop->s_country ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Lokasi Gerai(longitude, latitude)</strong></td>
                                            <td>
                                                <?= $shop->s_longitude ?><br><?= $shop->s_latitude ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
        rd_id: $('#rd_id').val(),
        status: status
    }

    $.ajax({
        url: PORTAL + 'webservice/cagaran/update',
        type: "post",
        dataType: 'text',
        data: data,
        success: (item) => {
            window.location = PORTAL + "permohonan/cagaran";
        },
        error: (err) => {
            console.log(err);
        }
    })
}
</script>
 
ASD
    );
