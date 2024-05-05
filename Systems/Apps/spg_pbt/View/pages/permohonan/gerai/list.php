<div class="card">
    <div class="card-header">
        Senarai Permohonan

        <a href="<?= PORTAL ?>permohonan/gerai/add" class="btn btn-primary btn-sm float-right">
            Tambah Permohonan
        </a>
    </div>

    <div class="card-body">
        <table class="table table-fluid table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th>Tarikh Mohon</th>
                    <th>Gerai</th>
                    <th class="text-center">Status</th>
                    <th>Nota</th>
                    <th class="text-right">:::</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach (applications::list() as $s) {
					
					$as = application_status::getBy([
						"as_application"	=>	$s->a_id
					]);
					
					if(count($as) > 0)
					{
						$as = $as[0];
						
						$ss = $as->as_description;
						$status = $as->as_status;
					}
					else{
						$ss = "";
						$status = "";
					}
                ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td class="text-center">
                            <?php
                                echo $s->a_name;
                            ?>
                        </td>
                        <td>
                            <?php
								echo $s->a_date;
                            ?>
                        </td>
                        <td>
						<?php
							$sn = shops::getBy(["s_id"	=>	$s->a_shop]);
							
							if(count($sn) > 0)
							{
								$sn = $sn[0];
							?>	
								<?= $sn->s_lot ?> <?= $sn->s_level ?  " - Tingkat " . $sn->s_level : "" ?> <?= $sn->s_block ? "Blok " . $sn->s_block : "" ?>,
								<?= $sn->s_road ? $sn->s_road . "," : "" ?>
								<?= $sn->s_residential ? $sn->s_residential . "," : "" ?>
								<?= $sn->s_postcode ? $sn->s_postcode : "" ?> <?= $sn->s_area ? $sn->s_area : "" ?>,
								<?= $sn->s_state ? $sn->s_state : "" ?>		
							<?php
							}
						?>
                        </td>
                        <td class="text-center">
                            <?php
								
								if($status == 0) {
									echo "Pending";
								}
								else if($status == 1){
									echo "Lulus";
								} 
								else{
									echo "Tidak diterima";
								}
                            ?>
                        </td>
                        <td>
							<?php
								echo $ss;
							?>
						</td>
                        <td class="text-right">
                            <a href="<?= PORTAL ?>permohonan/gerai/edit/<?= $s->a_id ?>" class="btn btn-sm btn-warning">
                                Kemaskini
                            </a>
                            <a href="<?= PORTAL ?>permohonan/gerai/view/<?= $s->a_id ?>" class="btn btn-sm btn-success">
                                Lihat
                            </a>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>