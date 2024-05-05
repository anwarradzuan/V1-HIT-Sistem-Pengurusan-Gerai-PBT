<div class="card">
	<div class="card-header">
		Senarai Gerai

		<a href="<?= PORTAL ?>gerai/gerai/add" class="btn btn-primary btn-sm">
			Tambah Gerai
		</a>
	</div>

	<div class="card-body">
		<table class="table table-fluid table-hover">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Kawasan</th>
					<th>Alamat</th>
					<th class="text-center">Status</th>
					<th>Nota</th>
					<th class="text-right">:::</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no = 1;
				foreach (shops::list() as $s) {
				?>
					<tr>
						<td class="text-center"><?= $no++ ?></td>
						<td class="text-center">
							<?php
							$sg = shop_group::getBy(["sg_id" => $s->s_group]);

							if (count($sg) > 0) {
								$sg = $sg[0];

								echo $sg->sg_name;
							} else {
								echo "NIL";
							}
							?>
						</td>
						<td>
							<?= $s->s_lot ?> <?= $s->s_level ?  " - Tingkat " . $s->s_level : "" ?> <?= $s->s_block ? "Blok " . $s->s_block : "" ?>,
							<?= $s->s_road ? $s->s_road . "," : "" ?>
							<?= $s->s_residential ? $s->s_residential . "," : "" ?>
							<?= $s->s_postcode ? $s->s_postcode : "" ?> <?= $s->s_area ? $s->s_area : "" ?>,
							<?= $s->s_state ? $s->s_state : "" ?>
						</td>
						<td class="text-center">
							<?php
							switch ($s->s_status) {
								case 1:
									echo "Sedia";
									break;

								case 0:
									echo "Tidak Sedia";
									break;

								case 2:
									echo "Pembangunan";
									break;

								case 3:
									echo "Baik Pulih";
									break;

								case 4:
									echo "Rosak";
									break;

								case 5:
									echo "Terbengkalai";
									break;
							}
							?>
						</td>
						<td>-</td>
						<td class="text-right">
							<a href="<?= PORTAL ?>gerai/gerai/view/<?= $s->s_id ?>" class="btn btn-sm btn-info">
								Lihat
							</a>
							<a href="<?= PORTAL ?>gerai/gerai/edit/<?= $s->s_id ?>" class="btn btn-sm btn-warning">
								Kemaskini
							</a>
							<a href="<?= PORTAL ?>gerai/gerai/delete/<?= $s->s_id ?>" class="btn btn-sm btn-danger">
								Padam
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