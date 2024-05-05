<?php
Controller::alert();
?>
<style type="text/css">
#map {
	height: 300px;
	width: 100%;
}
</style>

<div class="card">
	<div class="card-header">
		Tambah Kawasan 
		
		<a href="<?= PORTAL ?>gerai/kawasan-perniagaan/list" class="btn btn-sm btn-primary">
			Kembali
		</a>
	</div>
	
	<div class="card-body">
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					Nama Kawasan / Bangunan:
					<input type="text" class="form-control" name="name" placeholder="Nama Kawasan / Bangunan" /><br />
					
					Keterangan:
					<textarea class="form-control" name="description" placeholder="Keterangan"></textarea><br />
					
					Alamat:
					<textarea class="form-control" name="address" placeholder="Alamat"></textarea><br />
					
					Sub Kawasan Bagi:
					<select class="form-control" name="main">
						<option value="">Tiada</option>
					<?php
						foreach(shop_group::list() as $rsg){
						?>
						<option value="<?= $rsg->sg_id ?>"><?= $rsg->sg_name ?></option>
						<?php
						}
					?>
					</select><br />
					
					Status
					<select class="form-control" name="main">
						<option value="1">Aktif</option>
						<option value="0">Tidak Aktif</option>
					</select><br />
					
				</div>
				
				<div class="col-md-6">
					<div id="map"></div><br />
					
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" readonly name="lat" id="lat" /><br />
						</div>
						
						<div class="col-md-6">
							<input type="text" class="form-control" readonly name="lng" id="lng" /><br />
						</div>
					</div>
					
					Nota:
					<textarea class="form-control" name="note" placeholder="Nota"></textarea><br />
				</div>
				
				<div class="col-md-12 text-center">
				<?php
					Controller::form("gerai/kawasan", [
						"action"	=> "add"
					]);
				?>
					<button class="btn btn-sm btn-success">
						Simpan Maklumat
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<?php
Page::append(<<<HTML
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
	
	$("#lat").val(currentLocation.lat());
	$("#lng").val(currentLocation.lng());
}
</script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA&callback=initMap&libraries=visualization&v=weekly">
</script>
HTML
);

