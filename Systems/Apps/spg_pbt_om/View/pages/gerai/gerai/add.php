<?php
Controller::alert();
?>
<style type="text/css">
#map {
	height: 400px;
	width: 100%;
}
</style>

<div class="card">
	<div class="card-header">
		Tambah Gerai 
		
		<a href="<?= PORTAL ?>gerai/gerai/list" class="btn btn-sm btn-primary">
			Kembali
		</a>
	</div>
	
	<div class="card-body">
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h4>Maklumat Rujukan</h4>
							
							<div class="row">
								<div class="col-md-6">
									No Fail:
									<input type="text" class="form-control" name="fileno" placeholder="No Fail" /><br />
								</div>
								
								<div class="col-md-6">
									Rujukan:
									<input type="text" class="form-control" name="refno" placeholder="Rujukan" /><br />
								</div>
								
								<div class="col-md-6">
									No Lot:
									<input type="text" class="form-control" name="lotno" placeholder="No Lot (Tanah)" /><br />
								</div>
								
								<div class="col-md-6">
									No HSD:
									<input type="text" class="form-control" name="hsd" placeholder="No HSD (Tanah)" /><br />
								</div>
								
								<div class="col-md-6">
									Rujukan 2:
									<input type="text" class="form-control" name="ref1" placeholder="Rujukan 2" /><br />
								</div>
								
								<div class="col-md-6">
									Rujukan 3:
									<input type="text" class="form-control" name="ref2" placeholder="Rujukan 3" /><br />
								</div>
								
								<div class="col-md-12">
									Kawasan / Bangunan:
									<select class="form-control" name="group">
										<option value="0">Sila Pilih</option>
									<?php
										foreach(shop_group::list() as $sg){
										?>
										<option value="<?= $sg->sg_id ?>"><?= $sg->sg_name ?></option>
										<?php
										}
									?>
									</select>
								</div>
							</div>
						</div>
					</div><br />
					
					<div class="card">
						<div class="card-body">
							<h4>Maklumat Sewaan</h4>
							
							<div class="row">
								<div class="col-md-6">
									Nilai Sewaan:
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">RM</span>
										</div>
										<input type="text" class="form-control" placeholder="0.00" name="price" />
									</div><br />
								</div>
								
								<div class="col-md-6">
									Status:
									<select class="form-control" name="status">
										<option value="1">Sedia</option>
										<option value="0">Tidak Sedia</option>
										<option value="2">Pembangunan</option>
										<option value="3">Baik Pulih</option>
										<option value="4">Rosak</option>
										<option value="5">Terbengkalai</option>
									</select>
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
										<td>Ahmad Khairi Aiman</td>
									</tr>
									
									<tr>
										<th>Telefon</th>
										<td>018-782 4900</td>
									</tr>
									
									<tr>
										<th>Email</th>
										<td>heryintelt@gmail.com</td>
									</tr>
									
									<tr>
										<th>Alamat</th>
										<td>0402 Jalan Pendidikan 3, Taman Universiti</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><br />
				</div>
				
				<div class="col-md-6">
					<div id="map"></div>
					
					<input type="hidden" name="lat" id="lat" />
					<input type="hidden" name="lng" id="lng" />
					<br />
					
					<div class="card">
						<div class="card-body">
							<h4>Alamat Gerai</h4>
							
							<div class="row">
								<div class="col-md-4">
									No / Lot:
									<input type="text" class="form-control" name="lot" placeholder="Lot" /><br />
								</div>
								
								<div class="col-md-4">
									Tingkat:
									<input type="text" class="form-control" name="level" placeholder="Tingkat" /><br />
								</div>
								
								<div class="col-md-4">
									Blok:
									<input type="text" class="form-control" name="block" placeholder="Blok" /><br />
								</div>
								
								<div class="col-md-12">
									Jalan:
									<input type="text" class="form-control" name="road" placeholder="Jalan" /><br />
								</div>
								
								<div class="col-md-6">
									Taman:
									<input type="text" class="form-control" name="residential" placeholder="Taman" /><br />
								</div>
								
								
								<div class="col-md-6">
									Poskod:
									<input type="text" class="form-control" name="postcode" placeholder="Poskod" /><br />
								</div>
								
								<div class="col-md-6">
									Daerah:
									<input type="text" class="form-control" name="area" placeholder="Daerah" /><br />
								</div>
								
								<div class="col-md-6">
									Negeri:
									<input type="text" class="form-control" name="state" placeholder="Negeri" /><br />
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<div class="col-md-12 text-center">
				<?php
					Controller::form("gerai/gerai", [
						"action"	=> "add"
					]);
				?>
					<button class="btn btn-sm btn-primary">

						Simpan Maklumat
					</button>	
				</div>
			</div>
		</form>
		
	</div>
</div>

<script>
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
	
	if(marker === false){
		marker = new google.maps.Marker({
			position: initLatLng,
			map: map,
			draggable: true,
		});
		google.maps.event.addListener(marker, 'dragend', function(event){
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
  
function markerLocation(){
    var currentLocation = marker.getPosition();
	console.log(currentLocation);
	// console.log(currentLocation.lat(), currentLocation.lng());
    document.getElementById('lat').value = lat = currentLocation.lat(); //latitude
    document.getElementById('lng').value = lng = currentLocation.lng(); //longitude
	
	console.log(lat, lng);
	
	var x = new XMLHttpRequest();
	x.onreadystatechange = function(res){
		if(this.readyState == 4 && this.status == 200){
			var obj = JSON.parse(this.responseText);
			
			if(obj.status != undefined && obj.status == "OK"){
				if(obj.results.length > 0){
					var result = obj.results[0];
					
					console.log(result);
				}else{
					console.log("No data found.");
				}
			}
		}else{
			console.log("Fail");
		}
	};
	x.open("GET", "https://maps.googleapis.com/maps/api/geocode/json?latlng="+ lat + "," + lng +"&key=API_KEY");
	x.send();
	
	// $.ajax({
		// url: "https://maps.googleapis.com/maps/api/geocode/json?latlng="+ lat + "," + lng +"&key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA"
	// }).done(function(data){
		// console.log(data);
	// });
}
</script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA&callback=initMap&libraries=visualization&v=weekly">
</script>
