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
	<?php
		$sg = shop_group::getBy(["sg_id" => url::get(3)]);
		
		if(count($sg) > 0){
			$sg = $sg[0];
		?>
		<form action="" method="POST">
			<h3>
				Adakah anda pasti ingin padam maklumat ini?
			</h3>
			<div class="row">
				<div class="col-md-6">
					Nama Kawasan / Bangunan:
					<input type="text" class="form-control" name="name" disabled placeholder="Nama Kawasan / Bangunan" value="<?= $sg->sg_name ?>" /><br />
					
					Keterangan:
					<textarea class="form-control" name="description" disabled placeholder="Keterangan"><?= $sg->sg_description ?></textarea><br />
					
					Alamat:
					<textarea class="form-control" name="address" disabled placeholder="Alamat"><?= $sg->sg_address ?></textarea><br />
					
					Sub Kawasan Bagi:
					<select class="form-control" name="main" disabled>
						<option value="">Tiada</option>
					<?php
						foreach(shop_group::list() as $rsg){
						?>
						<option value="<?= $rsg->sg_id ?>" <?= $sg->sg_main == $rsg->sg_id ? "selected" : "" ?>><?= $rsg->sg_name ?></option>
						<?php
						}
					?>
					</select><br />
					
					Status
					<select class="form-control" name="main" disabled>
						<option value="1" <?= $sg->sg_status ? "selected" : "" ?>>Aktif</option>
						<option value="0" <?= $sg->sg_status ? "" : "selected" ?>>Tidak Aktif</option>
					</select><br />
					
				</div>
				
				<div class="col-md-6">
					<div id="map"></div><br />
					
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control"  disabled name="lat" id="lat" /><br />
						</div>
						
						<div class="col-md-6">
							<input type="text" class="form-control"  disabled name="lng" id="lng" /><br />
						</div>
					</div>
					
					Nota:
					<textarea class="form-control" name="note" disabled placeholder="Nota"><?= $sg->sg_note ?></textarea><br />
				</div>
				
				<div class="col-md-12 text-center">
				<?php
					Controller::form("gerai/kawasan", [
						"action"	=> "delete"
					]);
				?>
					<button class="btn btn-sm btn-danger">
						Padam Maklumat
					</button>
				</div>
			</div>
		</form>
		
<?php
Page::append(<<<HTML
<script>
var map; 
var marker = false; 

function initMap() {
	var initLatLng = {
		lat: $sg->sg_lat,
		lng: $sg->sg_lng
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

		}else{
			new Alert("error", "Kawasan dipilih tidak dijumpai.");
		}
	?>
	</div>
</div>



