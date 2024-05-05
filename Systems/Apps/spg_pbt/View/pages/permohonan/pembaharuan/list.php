<div class="card">
	<div class="card-header">
		Senarai Kontrak  
		
		<a href="<?= PORTAL ?>permohonan/pembaharuan/add" class="btn btn-sm btn-primary float-right">
            Tambah Permohonan
        </a>
		
	</div>
	
	<div class="card-body">
		<table class="table table-fluid table-hover">
			<thead>
				<tr>
                    <th class="text-center">No</th>
					<th class="text-center">Kontrak</th>
					<th>Gerai</th>
					<th class="text-center">Status</th>
                    <th>Nota</th>
					<th class="text-right">:::</th>
				</tr>
			</thead>
			
			<tbody>
			<?php
				$no = 1;
				foreach (contracts::list() as $c)
				{
					
					$s = shops::getBy([
						"s_id"	=> 	$c->c_shop
					]);
					
					$u = users::getBy([
						"u_id"	=>	$c->c_tenant
					]);
					
					$st = contracts_status::getBy
					([
						"cs_contracts"	=>	$c->c_id
					],
						["order"	=> "cs_id DESC"]
					);
					
				?>
					<tr>
						<td class="text-center"><?= $no++ ?></td>
						
						<td class="text-center">
							<?= $c->c_refer; ?>
						</td>
						
						<td>
						<?php
							if (count($s) > 0)
							{
								$s = $s[0];
							?>
								<?= $s->s_lot ?> <?= $s->s_level ?  " - Tingkat " . $s->s_level : "" ?> <?= $s->s_block ? "Blok " . $s->s_block : "" ?>,
								<?= $s->s_road ? $s->s_road . "," : "" ?>
								<?= $s->s_residential ? $s->s_residential . "," : "" ?>
								<?= $s->s_postcode ? $s->s_postcode : "" ?> <?= $s->s_area ? $s->s_area : "" ?>,
								<?= $s->s_state ? $s->s_state : "" ?>
						<?php	
							}
						?>			
						</td>

						<?php 
						if(count($st) > 0)
						{
							$status = $st[0]->cs_status;
							$desc = $st[0]->cs_description;
						?>
						<td class="text-center">
                            <?php
								
								if($status == 0) {
									echo "Dalam proses";
								}
								else if($status == 1){
									echo "Lulus";
								} 
								else{
									echo "Tidak lulus";
								}
                            ?>
                        </td>
							
						<td>
							<?= $desc ?? '' ?>
						</td>
						<?php } else { ?>

						<td class="text-center">
							Dalam Proses
						</td>
						<td>
							Permohonan Baru
						</td>
						<?php } ?>
						
						<td class="text-right">						
							<a href="<?= PORTAL ?>permohonan/pembaharuan/edit/<?= $c->c_id ?>" class="btn btn-sm btn-warning">
								Kemaskini
							</a>
							<a href="<?= PORTAL ?>permohonan/pembaharuan/view/<?= $c->c_id ?>" class="btn btn-sm btn-success">
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