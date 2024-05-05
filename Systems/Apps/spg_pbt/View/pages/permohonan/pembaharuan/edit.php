<?php
Controller::alert();
new Controller(["pembaharuan"]);
?>
<style type="text/css">
    #map {
        height: 400px;
        width: 100%;
    }
</style>

<style>
    .height {
        height: 100vh
    }

    .form {
        position: relative
    }

    .form .fa-search {
        position: absolute;
        top: 20px;
        left: 20px;
        color: #9ca3af
    }

    .form span {
        position: absolute;
        right: 17px;
        top: 13px;
        padding: 2px;
        border-left: 1px solid #d1d5db
    }

    .left-pan {
        padding-left: 7px
    }

    .left-pan i {
        padding-left: 10px
    }

    .form-input {
        height: 55px;
        text-indent: 33px;
        border-radius: 10px
    }

    .form-input:focus {
        box-shadow: none;
        border: none
    }
</style>

<div class="card">
    <div class="card-header">
        Edit Maklumat Kontrak

        <a href="<?= PORTAL ?>permohonan/pembaharuan" class="btn btn-sm btn-primary float-right">
            Kembali
        </a>
    </div>

    <div class="card-body">
        <?php
        $c = contracts::getBy(["c_id" => url::get(3)]);

        if (count($c) > 0) {
            $c = $c[0];
        
			$u = users::getBy([
				"u_id" => $c->c_tenant
			]);
			
			$s = shops::getBy([
				"s_id" => $c->c_shop
			]);
			 
			$p = users::getBy([
				"u_id"	=>	$c->c_pic
			]);
			
            $cs = contracts_status::getBy(["cs_contracts" => url::get(3)]);           
            ?>
			
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Maklumat Rujukan</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        No Fail:
                                        <input type="text" class="form-control" name="fail" value="<?= $c->c_fail ?>" disabled /><br />
                                    </div>

                                    <div class="col-md-6">
                                        Rujukan:
                                        <input type="text" class="form-control" name="refer" value="<?= $c->c_refer ?>" disabled /><br />
                                    </div>
									
									<div class="col-md-6">
										Nilai Sewaan:
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="price" value="<?= number_format($c->c_price, 2) ?>"  disabled />
										</div><br />
									</div>
									
									<div class="col-md-6">
										Nilai Cagaran:
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">RM</span>
											</div>
											
											<input type="text" class="form-control" name="deposit" value="<?= number_format($c->c_deposit, 2) ?>" disabled  />
										</div><br />
									</div>

                                    
                                </div>
                            </div>
                        </div><br />
						
						<div class="card container-fluid">
							<div class="row">
								<div class="col card m-2 border-0">
									<div class="card-body ">
										<h3 class="flex-h1 pt-4 pr-4 pl-4">Gerai Yang Disewa</h3>

										<div class="card mb-4 border-0 .d-flex">
											<div class="card-body">
												<table class="table table-striped">
													<thead>
														<tr>
															<th>No</th>
															<th>Alamat Gerai</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td><?= $s[0]->s_lot ?> - Tingkat <?= $s[0]->s_level ?> Blok <?= $s[0]->s_block ?>, <?= $s[0]->s_road ?>, <?= $s[0]->s_residential ?>, <?= $s[0]->s_postcode ?> <?= $s[0]->s_area ?> <?= $s[0]->s_state ?></td>

														   

														</tr>

													</tbody>
												</table>
											</div>
											<!-- <div class="align-self-center">
												<a href="sewaan">Maklumat Lanjut...</a>
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</div><br />
					

                    </div>
					
					<div class="col-md-6">
						
						<div class="card">
							<div class="card-body">
								<h4>Maklumat Pemilik</h4>
								
								<table class="table table-hover table-fluid">
									<tbody>
										<tr>
											<th>Nama</th>
											<td><?= $u[0]->u_full_name; ?></td>
										</tr>
										
										<tr>
											<th>Telefon</th>
											<td><?= $u[0]->u_phone; ?></td>
										</tr>
										
										<tr>
											<th>Email</th>
											<td><?= $u[0]->u_email; ?></td>
										</tr>
										
										<tr>
											<th>Alamat</th>
											<td><?= $u[0]->u_alamat; ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div><br />
					
						<div class="card">
							<div class="card-body">
								<h4>Maklumat Pelulus</h4>
								
								<table class="table table-hover table-fluid">
									<tbody>
										<tr>
											<th>Nama</th>
											<td><?= $p[0]->u_name; ?></td>
										</tr>
										
										<tr>
											<th>Telefon</th>
											<td><?= $p[0]->u_phone; ?></td>
										</tr>
										
										<tr>
											<th>Email</th>
											<td><?= $p[0]->u_email; ?></td>
										</tr>
										
										<tr>
											<th>Alamat</th>
											<td><?= $p[0]->u_alamat; ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div><br />
					
					</div>

                    
                </div>
				
				<div class="col-md-12 text-center">
					<div class="row">
						<div class="col-md-6">
							Tarikh Mula:
							<input type="date" class="form-control" name="datestart"  value="<?= $c->c_dateStart ?>" /><br />
						</div>

						<div class="col-md-6">
							Tarikh Tamat:
							<input type="date" class="form-control" name="dateend" value="<?= $c->c_dateEnd ?>" /><br />
						</div>
					
					</div>
					
					<?php
					Controller::form("pembaharuan", [
						"action"    => "edit"
					]);
					?>
					<button class="btn btn-sm btn-primary mb-5">
						Simpan Maklumat
					</button>
				</div>
				
            </form>
            <div class="col-md-12 ">
                
                <div class="card container">
                    <div class="row">
                        <div class="col card m-2 border-0">
                            <div class="card-body ">
                                <div class="d-inline-flex flex-row justify-content-end align-items-center">
                                    <h3 class="flex-h1  pr-4 pl-4">Status Permohonan</h3>
                                    <!-- Button trigger modal -->
                                    <?php if($_SESSION["user"]->data->u_role == 0) : ?>
                                        <button type="button" class="pl-3 pr-3 btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                            Edit
                                        </button>

                                    <?php endif; ?>
                                    
                                     
                                    

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Status</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post" id="update_form">
                                                        <input type="hidden" id="add_number_modal_id">
                                                        
                                                        <div class="form-group">
                                                            <label for="">Status</label></br>
                                                            <select id="status-select" name="status" class="form-control">
                                                            <?php if($cs[0]->cs_status == 0) : ?>
                                                                <option value="0">Dalam Proses</option>
                                                                <option value="1">Lulus</option>
                                                                <option value="3">Tidak Lulus</option>
                                                            <?php elseif($cs[0]->cs_status == 1) : ?>
                                                                <option value="1">Lulus</option>
                                                                <option value="0">Dalam Proses</option>
                                                                <option value="3">Tidak Lulus</option>
                                                            <?php else : ?>
                                                                <option value="3">Tidak Lulus</option>
                                                                <option value="1">Lulus</option>
                                                                <option value="0">Dalam Proses</option>
                                                            <?php endif; ?>
                                                            
                                                               <!--  <option value="pending">Pending</option>
                                                                <option value="lulus">Lulus</option>
                                                                <option value="gagal">Tidak Diterima</option> -->
                                                                 

                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Catitan</label>
                                                            <input type="text" class="form-control" id="catitan" name="description" value="<?= $cs[0]->cs_description ?? ''?>">
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <?php
                                                                Controller::form("pembaharuan", [
                                                                    "action"    => "edit_cs"
                                                                ]);
                                                            ?>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4 border-0 .d-flex">
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tarikh</th>
                                                    <th>Status</th>
                                                    <th>Catitan</th>

                                                </tr>
                                            </thead>
                                            <tbody id="status_table">
                                                <!-- <tr>
                                                    <th scope="row">1</th>
                                                    <td>1/1/2022</td>
                                                    <td>Pending</td>
                                                    <td>Masih Dalam Semakan</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>1/2/2022</td>
                                                    <td>Diterima</td>
                                                    <td>Permohonan Diterima</td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="align-self-center">
                                            <a href="sewaan">Maklumat Lanjut...</a>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
</div>


<?php
        } else {
            new Alert("error", "Maklumat kontrak tidak dijumpai.");
        }
?>
</div>
</div>

<?php 

Page::append(<<<ASD
<script>

var location

$( document ).ready(function() {
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);

    $.ajax({
        url: PORTAL + "webservice/permohonan/renewstatus",
        type: "post",
        dataType: 'json',
        data: {
            id: id,
        },
        success: function(data) {
            
			console.log(data.status.length);

           /*  var status = data.status */

			var tbody= "";

			var i = 1;
			var lastdata = data.status.length - 1;
			
			// for(let x = lastdata; x < data.status.length; x--)
			for(let x = 0; x < data.status.length; x++)
			{

                console.log(data.status[x].cs_status[0]);

                if(data.status[x].cs_status == 0){
                    var st = "Dalam Proses"
                } else if (data.status[x].cs_status == 1){
                    var st = "Lulus"
                } else {
                    var st = "Tidak Lulus"
                }

            
                tbody += "<tr>";
                tbody += `<td>\${i++}</td>`
                tbody += `<td>\${data.status[x].cs_date}</td>`
                tbody += `<td>\${st}</td>`
                tbody += `<td>\${data.status[x].cs_description}</td>`
                tbody += "<tr>";
          
			}
			
			$("#status_table").html(tbody);          

        },
        error: function(err) {
            console.log("error");
        }
    });
});


$(document).on("click", "#sim",function(e) {

     /* e.preventDefault() */
    
    var stats = document.getElementById("status-select");
    var strUser = stats.value;

    console.log(strUser)

    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    
    $.ajax({
        url: PORTAL + "webservice/permohonan/renewedit",
        type: "post",
        dataType: 'json', 
        data: {
            value: id,
            status: strUser
        },
        success: function(data) {
            console.log(data + "tre")

        },
        error: function(err) {
            console.log("error");
        }
    });

    

});


</script>           
ASD);

