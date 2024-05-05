<?php
Controller::alert();
?>
<div class="card">
	<div class="card-header">
		Senarai Kawasan

		<a href="<?= PORTAL ?>gerai/kawasan-perniagaan/add" class="btn btn-primary btn-sm">
			Tambah Kawasan
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
				foreach (shop_group::list() as $r) {
				?>
					<tr>
						<td class="text-center"><?= $no++ ?></td>
						<td class="text-center"><?= $r->sg_name ?></td>
						<td><?= $r->sg_address ?></td>
						<td class="text-center"><?= $r->sg_status ? "Aktif" : "Tidak Aktif" ?></td>
						<td><?= $r->sg_note ? $r->sg_note : "-" ?></td>
						<td class="text-right">
							<a href="<?= PORTAL ?>gerai/kawasan-perniagaan/view/<?= $r->sg_id ?>" class="btn btn-sm btn-info">
								Lihat
							</a>

							<a href="<?= PORTAL ?>gerai/kawasan-perniagaan/edit/<?= $r->sg_id ?>" class="btn btn-sm btn-warning">
								Kemaskini
							</a>

							<a href="<?= PORTAL ?>gerai/kawasan-perniagaan/delete/<?= $r->sg_id ?>" class="btn btn-sm btn-danger">
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