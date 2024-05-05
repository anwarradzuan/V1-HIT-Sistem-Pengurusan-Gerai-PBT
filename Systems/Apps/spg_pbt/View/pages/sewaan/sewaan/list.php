<div class="card">
	<div class="card-header">
		Senarai Sewaan

		<a href="<?= PORTAL ?>sewaan/sewaan/add" class="float-right btn btn-primary btn-sm">
			Tambah Sewaan
		</a>
	</div>

	<div class="card-body">
		<table class="table table-fluid table-hover">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Alamat Kedai</th>
					<th> Maklumat Pengguna </th>
					<th>Tarikh</th>
					<th class="text-right">:::</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no = 1;
				foreach (shops::list() as $su) {
					$rent = rentals::getBy(["r_shop" => $su->s_id]);
					if(count($rent) > 0){
					if (!$rent[0]->r_amount == 0) {
				?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td class="text-center">
								<?php
								$s = shops::getBy(["s_id" => $su->s_id]);
								if (count($s) > 0) {
									$s = $s[0];
								?>
									<?= $s->s_lot ?> <?= $s->s_level ?  " - Tingkat " . $s->s_level : "" ?> <?= $s->s_block ? "Blok " . $s->s_block : "" ?>,
									<?= $s->s_road ? $s->s_road . "," : "" ?>
									<?= $s->s_residential ? $s->s_residential . "," : "" ?>
									<?= $s->s_postcode ? $s->s_postcode : "" ?> <?= $s->s_area ? $s->s_area : "" ?>,
									<?= $s->s_state ? $s->s_state : "" ?>
								<?php
								} else {
									echo "NIL";
								}
								?>
							</td>
							<td>
								<?php
								$u = users::getBy(["u_name" => $rent[0]->r_name]);
								if (count($u) > 0) {
									$u = $u[0];
								?>
									<?= $u->u_name ?>
								<?php
									// echo $s->sg_name;
								} else {
									echo "NIL";
								}
								?>
							</td>
							<td>
								<?= $su->s_date ?? '' ?> <?= date("h:i:s A") ?? '' ?>
							</td>
							<td class="text-right">
								<a href="<?= PORTAL ?>sewaan/sewaan/view/<?= $su->s_id ?>" class="btn btn-sm btn-primary">
									Papar
								</a>
								<!-- <a href="<?= PORTAL ?>sewaan/sewaan/edit/<?= $su->su_id ?>" class="btn btn-sm btn-warning">
							Kemaskini
						</a> -->
								<!-- <a href="<?= PORTAL ?>sewaan/sewaan/delete/<?= $su->su_id ?>" class="btn btn-sm btn-danger">
									Padam
								</a> -->
							<?php } }  ?>
							</td>
						</tr>
					<?php
				}
					?>
			</tbody>
		</table>
	</div>
</div>