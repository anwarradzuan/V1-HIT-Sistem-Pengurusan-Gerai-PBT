<div class="card">
    <div class="card-header">
        Senarai Permohonan

        <a href="<?= PORTAL ?>permohonan/pindah-milik/add" class="btn btn-primary btn-sm float-right">
            Tambah Permohonan
        </a>
    </div>

    <div class="card-body">
        <table class="table table-fluid table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Kontrak</th>
                    <th>Tarikh Mohon</th>
                    <th>Gerai</th>
                    <th>Pemilik Asal</th>
                    <th>Penerima</th>
                    <th class="text-center">Beserta Wang Cagaran</th>
                    <th class="text-center">Status</th>
                    <th class="text-right">:::</th>
                </tr>
            </thead>


            <tbody>
                <?php
                $n = 1;
                foreach (transfer_requests::list() as $tr) {
                    $t = transfer_requests::getBy(['tr_id' => $tr->tr_id]);
                    $t = $t[0];
                    $c = contracts::getBy(['c_id' => $tr->tr_contract]);
                    $c = $c[0];
                    $s = shops::getBy(['s_id' => $c->c_shop]);
                    $s = $s[0];
                ?>
                    <tr>
                        <td class="text-center"><?= $n ?></td>
                        <td class="text-center"><?= $c->c_refer ?></td>
                        <td class="text-center"><?= $t->tr_date ?></td>
                        <td><?= $s->s_lotno ?>,<?= $s->s_road ?>,<?= $s->s_residential ?>,<?= $s->s_area ?>,<?= $s->s_postcode ?>,<?= $s->s_state ?>,<?= $s->s_country ?></td>
                        <td>
                            <?php
                            $sender = users::getBy(["u_id" => $t->tr_sender])[0];
                            echo $sender->u_name;
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            $rcpt = users::getBy(["u_id" => $t->tr_rcpt])[0];
                            echo $rcpt->u_name;
                            ?>
                        </td>
                        <td class="text-center">
                            <?php if ($t->tr_cagaran == 0) {
                                echo 'Tidak';
                            } else {
                                echo 'Ya';
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php if ($t->tr_status == 0) {
                                echo 'Sedang Diproses';
                            } elseif ($t->tr_status == 1) {
                                echo 'Lulus';
                            } else {
                                echo 'Tidak Lulus';
                            }
                            ?>
                        </td>
                        <td class="text-right">
                            <a href="<?= PORTAL ?>permohonan/pindah-milik/edit/<?= $t->tr_id ?>" class="btn btn-sm btn-warning">
                                Kemaskini
                            </a>
                            <a href="<?= PORTAL ?>permohonan/pindah-milik/view/<?= $t->tr_id ?>" class="btn btn-sm btn-success">
                                Lihat
                            </a>
                        </td>
                    </tr>
                <?php
                    $n++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>