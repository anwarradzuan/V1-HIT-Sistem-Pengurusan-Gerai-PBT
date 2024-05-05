<div class="card">
    <div class="card-header">
        Senarai Permohonan

        <a href="<?= PORTAL ?>permohonan/cagaran/add" class="btn btn-primary btn-sm float-right">
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
                    <th class="text-center">Status</th>
                    <th class="text-right">:::</th>
                </tr>
            </thead>


            <tbody>
                <?php
                $n = 1;
                foreach (request_deposits::list() as $rd) {
                    $r = request_deposits::getBy(['rd_id' => $rd->rd_id]);
                    $r = $r[0];
                    $c = contracts::getBy(['c_id' => $r->rd_contract]);
                    $c = $c[0];
                    $s = shops::getBy(['s_id' => $c->c_shop]);
                    $s = $s[0];
                ?>
                    <tr>
                        <td class="text-center"><?= $n ?></td>
                        <td class="text-center"><?= $c->c_refer ?></td>
                        <td class="text-center"><?= $r->rd_date ?></td>
                        <td><?= $s->s_lotno ?>,<?= $s->s_road ?>,<?= $s->s_residential ?>,<?= $s->s_area ?>,<?= $s->s_postcode ?>,<?= $s->s_state ?>,<?= $s->s_country ?></td>
                        <td class="text-center">
                            <?php if ($r->rd_status == 0) {
                                echo 'Sedang Diproses';
                            } elseif ($r->rd_status == 1) {
                                echo 'Lulus';
                            } else {
                                echo 'Tidak Lulus';
                            }
                            ?>
                        </td>
                        <td class="text-right">
                            <a href="<?= PORTAL ?>permohonan/cagaran/edit/<?= $r->rd_id ?>" class="btn btn-sm btn-warning">
                                Kemaskini
                            </a>
                            <a href="<?= PORTAL ?>permohonan/cagaran/view/<?= $r->rd_id ?>" class="btn btn-sm btn-success">
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