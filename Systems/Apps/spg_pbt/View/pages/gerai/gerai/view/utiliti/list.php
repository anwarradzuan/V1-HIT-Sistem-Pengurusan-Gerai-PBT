

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
				<th class="text-center">No Akaun</th>
				<th class="text-center">Jumlah Bil</th>
				<th class="text-center">:::</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td class="text-center">1.</td>
					<td class="text-center">2022-08-01</td>
					<td class="text-center">MY12425</td>
					<td class="text-center">RM 200</td>
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
                <h5 class="modal-title" id="modalTambahMaklumatTitle">Tambah Maklumat Utiliti</h5>
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
                                            No Akaun:
                                            <input type="text" class="form-control" name="noAcc" placeholder="No Akaun"/><br />
                                        </div>
                                        <div class="col-md-12">
                                            Bil Air:
                                            <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="waterBill" value="0" />
											</div><br />
                                        </div>
										 <div class="col-md-12">
                                            Bil Elektrik:
                                            <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="elBill" value="0" />
											</div><br />
                                        </div>

                                        <div class="col-md-12">
                                            Lain-lain:
                                            <input type="placeholder" class="form-control" name="other" placeholder="Lain-lain" /><br />
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

<!--Modal Add Record-->
<div class="modal fade" id="modalEditMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalEditMaklumatTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditMaklumatTitle">Kemaskini Maklumat Utiliti</h5>
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
                                            No Akaun:
                                            <input type="text" class="form-control" name="noAcc" placeholder="No Akaun" value="MY12425"/><br />
                                        </div>
                                        <div class="col-md-12">
                                            Bil Air:
                                            <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="waterBill" value="100" />
											</div><br />
                                        </div>
										 <div class="col-md-12">
                                            Bil Elektrik:
                                            <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="elBill" value="100" />
											</div><br />
                                        </div>

                                        <div class="col-md-12">
                                            Lain-lain:
                                            <input type="placeholder" class="form-control" name="other" placeholder="Lain-lain" /><br />
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

<!--Modal Add Record-->
<div class="modal fade" id="modalLihatMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalLihatMaklumatTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLihatMaklumatTitle">Maklumat Utiliti</h5>
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
                                            <input type="date" class="form-control"  name="date" value="2022-08-01" disabled /><br />
                                        </div>
										 <div class="col-md-12">
                                            No Akaun:
                                            <input type="text" class="form-control" name="noAcc" placeholder="No Akaun" value="MY12425" disabled /><br />
                                        </div>
                                        <div class="col-md-12">
                                            Bil Air:
                                            <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="waterBill" value="100" disabled />
											</div><br />
                                        </div>
										 <div class="col-md-12">
                                            Bil Elektrik:
                                            <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="elBill" value="100" disabled />
											</div><br />
                                        </div>

                                        <div class="col-md-12">
                                            Lain-lain:
                                            <input type="placeholder" class="form-control" name="other" placeholder="--" disabled /><br />
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

<!--Modal Add Record-->
<div class="modal fade" id="modalPadamMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalPadamMaklumatTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPadamMaklumatTitle">Anda pasti ingin padam maklumat ini?</h5>
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
                                            <input type="date" class="form-control"  name="date" value="2022-08-01" disabled /><br />
                                        </div>
										 <div class="col-md-12">
                                            No Akaun:
                                            <input type="text" class="form-control" name="noAcc" placeholder="No Akaun" value="MY12425" disabled /><br />
                                        </div>
                                        <div class="col-md-12">
                                            Bil Air:
                                            <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="waterBill" value="100" disabled />
											</div><br />
                                        </div>
										 <div class="col-md-12">
                                            Bil Elektrik:
                                            <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="elBill" value="100" disabled />
											</div><br />
                                        </div>

                                        <div class="col-md-12">
                                            Lain-lain:
                                            <input type="placeholder" class="form-control" name="other" placeholder="--" disabled /><br />
                                        </div>
                                    </div>
                                </div>
                            </div><br />
						</div>
                        <div class="col-md-12 text-center">
							<button class="btn btn-sm btn-primary"> Padam </button>
                            <button class="btn btn-sm btn-primary"> Kembali </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->
