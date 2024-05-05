<div class="card">
    <div class="card-header">
        Senarai Aduan
		
		<a href="#" data-toggle="modal" data-target="#modalTambahMaklumat" class="btn btn-primary btn-sm float-right">
			Tambah Aduan
		</a>
    </div>

	<table class="table table-fluid table-hover">
		<thead>
			<tr>
				<th class="text-center">Bil. </th>
				<th class="text-center">Tarikh</th>
				<th class="text-center">Aduan</th>
				<th class="text-center">:::</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="text-center">1</td>		
				<td class="text-center">2022-08-03</td>
				<td class="text-center">try</td>
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
                <h5 class="modal-title" id="modalTambahMaklumatTitle">Tambah Aduan</h5>
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
                                            <input type="date" class="form-control"  value="<?= date("Y-m-d")?>"  /><br />
                                        </div>

                                        <div class="col-md-12">
                                            Aduan:
                                            <input type="placeholder" class="form-control" name="complaint" placeholder="Aduan" /><br />
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
<div class="modal fade" id="modalEditMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalEditMaklumatTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditMaklumatTitle">Kemaskini Aduan</h5>
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
                                            <input type="date" class="form-control"  value="2022-08-03"  /><br />
                                        </div>

                                        <div class="col-md-12">
                                            Aduan:
                                            <input type="placeholder" class="form-control" name="complaint" placeholder="try" /><br />
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
<div class="modal fade" id="modalLihatMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalLihattMaklumatTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLihattMaklumatTitle">Lihat Aduan</h5>
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
                                            <input type="date" class="form-control"  value="2022-08-03" disabled /><br />
                                        </div>

                                        <div class="col-md-12">
                                            Aduan:
                                            <input type="placeholder" class="form-control" name="complaint" placeholder="try" disabled /><br />
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
<div class="modal fade" id="modalPadamMaklumat" tabindex="-1" role="dialog" aria-labelledby="modalPadamMaklumatTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPadamMaklumatTitle">Anda pasti mahu padam maklumat ini?</h5>
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
                                            <input type="date" class="form-control"  value="2022-08-03" disabled /><br />
                                        </div>

                                        <div class="col-md-12">
                                            Aduan:
                                            <input type="placeholder" class="form-control" name="complaint" placeholder="try" disabled /><br />
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
