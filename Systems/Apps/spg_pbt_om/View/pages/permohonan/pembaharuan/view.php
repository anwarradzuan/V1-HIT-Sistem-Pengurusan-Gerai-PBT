<style type="text/css">
#map {
	height: 400px;
	width: 100%;
}
</style>

<div class="card">
	<div class="card-header">
		Lihat Kontrak
		
		<a href="<?= PORTAL ?>permohonan/pembaharuan/list" class="btn btn-sm btn-primary">
			Kembali
		</a>
	</div>
	
	<div class="card-body">
	<?php
		$c = contracts::getBy(["c_id" => url::get(3)]);
		
		if(count($c)){
			$c = $c[0];
			
			$s = shops::getBy([
				"s_id" => $c->c_shop
			]);
			
			$u = users::getBy([
				"u_id" => $c->c_tenant
			]);
			
			$p = users::getBy([
				"u_id"	=>	$c->c_pic
			]);
			
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
									<input type="text" class="form-control" value="<?= $s[0]->s_fileno ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Rujukan:
									<input type="text" class="form-control" value="<?= $s[0]->s_refno ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Tarikh Mula:
									<input type="text" class="form-control" value="<?= $c->c_dateStart ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Tarikh Tamat:
									<input type="text" class="form-control" value="<?= $c->c_dateEnd ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Nilai Sewaan:
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">RM</span>
										</div>
										
										<input type="text" class="form-control" placeholder="price" name="price" value="<?= number_format($c->c_price, 2) ?>"  disabled />
									</div><br />
								</div>
								
								<div class="col-md-6">
									Nilai Cagaran:
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">RM</span>
										</div>
										
										<input type="text" class="form-control" placeholder="price" name="price" value="<?= number_format($c->c_deposit, 2) ?>"  disabled />
									</div><br />
								</div>
								
							</div>
						</div>
					</div><br />
					
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
				
				<div class="col-md-6">

                    <div class="card">
                        <div class="card-body">
                            <h3 class="flex-h1  pr-4 pl-4">Lokasi Gerai Yang Disewa</h3>
                            <div id="map"></div>

                            <input type="hidden" name="lat" id="lat" />
                            <input type="hidden" name="lng" id="lng" />
                        </div>
                    </div>

                    <br />

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
			</div>
			
				 <div class="card container">
                <div class="row">
                    <div class="col card m-2 border-0">
                        <div class="card-body ">
                            <div class="d-inline-flex flex-row justify-content-end align-items-center">
                                <h3 class="flex-h1  pr-4 pl-4">Status Permohonan</h3>
                                <!-- Button trigger modal -->
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
		</form>
		
		<?php
		}else{
			new Alert("error", "Maklumat gerai tidak dijumpai.");
		}
	?>
	</div>
</div>


<?php
Page::append(<<<ASD
<script>

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
            
            console.log(data.status)

           /*  var status = data.status */

			var tbody= "";

			var i = 1;
			
			for(let x = 0; x < data.status.length; x++){

                console.log(data.status[x].cs_status)

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

 var map;
var marker = false;

function initMap() {
	var initLatLng = {
		lat: 5.366643538146448,
		lng: 100.410465570366
	};
	var centerOfMap = new google.maps.LatLng(initLatLng.lat, initLatLng.lng);

	var options = {
		center: centerOfMap,
		zoom: 10
	};

	map = new google.maps.Map(document.getElementById('map'), options);

	if (marker === false) {
		marker = new google.maps.Marker({
			position: initLatLng,
			map: map,
			draggable: true,
		});
		google.maps.event.addListener(marker, 'dragend', function(event) {
			markerLocation();
		});

		markerLocation();
	}


	google.maps.event.addListener(map, 'click', function(event) {
		var clickedLocation = event.latLng;
		marker.setPosition(clickedLocation);

		markerLocation();
	});
}

function markerLocation() {
	var currentLocation = marker.getPosition();
	console.log(currentLocation);
	// console.log(currentLocation.lat(), currentLocation.lng());
	document.getElementById('lat').value = lat = currentLocation.lat(); //latitude
	document.getElementById('lng').value = lng = currentLocation.lng(); //longitude

	console.log(lat, lng);

	var x = new XMLHttpRequest();
	x.onreadystatechange = function(res) {
		if (this.readyState == 4 && this.status == 200) {
			var obj = JSON.parse(this.responseText);

			if (obj.status != undefined && obj.status == "OK") {
				if (obj.results.length > 0) {
					var result = obj.results[0];

					console.log(result);
				} else {
					console.log("No data found.");
				}
			}
		} else {
			console.log("Fail");
		}
	};
	x.open("GET", "https://maps.googleapis.com/maps/api/geocode/json?latlng=" + lat + "," + lng + "&key=API_KEY");
	x.send();

	// $.ajax({
	// url: "https://maps.googleapis.com/maps/api/geocode/json?latlng="+ lat + "," + lng +"&key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA"
	// }).done(function(data){
	// console.log(data);
	// });
}

</script>

<script 
	async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA&callback=initMap&libraries=visualization&v=weekly">
</script>
ASD);
		