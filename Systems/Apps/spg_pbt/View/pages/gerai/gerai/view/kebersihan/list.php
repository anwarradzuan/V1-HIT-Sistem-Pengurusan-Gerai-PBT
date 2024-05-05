
<div class="card">
    <div class="card-header">
        Senarai Rekod Kebersihan
		
		<a href="#" data-toggle="modal" data-target="#modalTambahMaklumat" class="btn btn-primary btn-sm float-right">
			Tambah Rekod
		</a>
    </div>

	<table class="table table-fluid table-hover">
		<thead>
			<tr>
				<th class="text-center">Bil. </th>
				<th class="text-center">Tarikh </th>
				<th class="text-center">Status</th>
				<th class="text-center">Catatan</th>
				<th class="text-center">:::</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="text-center">1.</td>
				<td class="text-center">01-01-2001</td>
				<td class="text-center">Baik</td>
				<td class="text-center">--</td>
				<td class="text-center">
					<a href="#" data-toggle="modal" data-target="#modalEditMaklumat" class="btn btn-sm btn-warning">
						Kemaskini
					</a>
					<a href="#" data-toggle="modal" data-target="#modalLihatMaklumat" class="btn btn-sm btn-success">
						Lihat
					</a>
					<a href="#" data-toggle="modal" data-target="#modalPadamMaklumat" class="btn btn-sm btn-danger">
						Padam
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<!--Modal Add Record-->
<div class="modal fade" id="modalTambahMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalTambahMaklumatTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahMaklumatTitle">Tambah Maklumat Kebersihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="row">
										<div class="col-md-12 form-group">
											Gred
											<select id="status-select" name="gred" class="form-control">
												<option value="A">A-Amat Bersih</option>
												<option value="B">B-Bersih</option>
												<option value="C">C-Kurang Bersih</option>
												<option value="other">Tidak Bersih</option>
											</select>
										</div>
										
                                        <div class="col-md-12">
                                            Status Kebersihan:
                                            <input type="placeholder" class="form-control"  name="status" placeholder="Status"/><br />
                                        </div>

                                        <div class="col-md-12">
                                            Catatan:
                                            <input type="placeholder" class="form-control" name="description" placeholder="Catatan" /><br />
                                        </div>
                                    </div>
                                </div>
                            </div><br />
						</div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-sm btn-primary"> Simpan Maklumat </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->

<!--Modal Edit Record-->
<div class="modal fade" id="modalEditMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditTitle">Kemaskini Maklumat Kebersihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="row">
										<div class="col-md-12 form-group">
											Gred
											<select id="status-select" name="gred" class="form-control">
												<option value="A">A-Amat Bersih</option>
												<option value="B">B-Bersih</option>
												<option value="C">C-Kurang Bersih</option>
												<option value="other">Tidak Bersih</option>
											</select>
										</div>

                                        <div class="col-md-12">
                                            Status Kebersihan:
                                            <input type="placeholder" class="form-control"  name="status" placeholder="Status"/><br />
                                        </div>

                                        <div class="col-md-12">
                                            Catatan:
                                            <input type="placeholder" class="form-control" name="description" placeholder="Catatan" /><br />
                                        </div>
                                    </div>
                                </div>
                            </div><br />
						</div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-sm btn-primary"> Kemaskini Maklumat </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->

<!--Modal View Record-->
<div class="modal fade" id="modalLihatMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalLihatTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLihatTitle">Lihat Maklumat Kebersihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="row">
										<div class="col-md-12">
                                            Tarikh:
                                            <input type="date" class="form-control"  name="date" value="2001-01-01" disabled /><br />
                                        </div>
										
										<div class="col-md-12 form-group">
											Gred
											<select id="status-select" name="gred" class="form-control" disabled>
												<option value="A">A-Amat Bersih</option>
												<option value="B">B-Bersih</option>
												<option value="C">C-Kurang Bersih</option>
												<option value="other">Tidak Bersih</option>
											</select>
										</div>

                                        <div class="col-md-12">
                                            Status Kebersihan:
                                            <input type="placeholder" class="form-control"  name="status" value="Baik" placeholder="Status" disabled /><br />
                                        </div>

                                        <div class="col-md-12">
                                            Catatan:
                                            <input type="placeholder" class="form-control" name="description" placeholder="Catatan" value="--" disabled /><br />
                                        </div>
                                    </div>
                                </div>
                            </div><br />
						</div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-sm btn-primary"> Kembali </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->

<!--Modal Delete Record-->
<div class="modal fade" id="modalPadamMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalPadamTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPadamTitle">Anda pasti mahu padam maklumat ini?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="row">
										<div class="col-md-12">
                                            Tarikh:
                                            <input type="date" class="form-control"  name="date" value="2001-01-01" disabled /><br />
                                        </div>
										
										<div class="col-md-12 form-group">
											Gred
											<select id="status-select" name="gred" class="form-control" disabled>
												<option value="A">A-Amat Bersih</option>
												<option value="B">B-Bersih</option>
												<option value="C">C-Kurang Bersih</option>
												<option value="other">Tidak Bersih</option>
											</select>
										</div>

                                        <div class="col-md-12">
                                            Status Kebersihan:
                                            <input type="placeholder" class="form-control"  name="status" value="Baik" placeholder="Status" disabled /><br />
                                        </div>

                                        <div class="col-md-12">
                                            Catatan:
                                            <input type="placeholder" class="form-control" name="description" placeholder="Catatan" value="--" disabled /><br />
                                        </div>
                                    </div>
                                </div>
                            </div><br />
						</div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-sm btn-primary"> Padam </button>
							 <button class="btn btn-sm btn-primary"> Kembali</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->
