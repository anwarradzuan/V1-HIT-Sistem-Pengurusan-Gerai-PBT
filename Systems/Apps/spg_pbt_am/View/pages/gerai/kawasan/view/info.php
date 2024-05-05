<style type="text/css">
#map {
	height: 400px;
	width: 100%;
}
</style>

<div class="row">
	<div class="col-md-12">
		<div id="map"></div><br />
	</div>
	
	<div class="col-md-6">
		Nama Kawasan / Bangunan:
		<input type="text" class="form-control" name="name" placeholder="Nama Kawasan / Bangunan" disabled value="<?= $sg->sg_name ?>" /><br />
		
		Keterangan:
		<textarea class="form-control" name="description" placeholder="Keterangan" disabled><?= $sg->sg_description ?></textarea><br />
		
		Alamat:
		<textarea class="form-control" name="address" placeholder="Alamat" disabled><?= $sg->sg_address ?></textarea><br />
		
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
		<select class="form-control" name="status" disabled>
			<option value="1" <?= $sg->sg_status ? "selected" : "" ?>>Aktif</option>
			<option value="0" <?= $sg->sg_status ? "" : "selected" ?>>Tidak Aktif</option>
		</select><br />
		
	</div>
	
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-6">
				Latitud:
				<input type="text" class="form-control" readonly name="lat" value="<?= $sg->sg_lat ?>" id="lat" /><br />
			</div>
			
			<div class="col-md-6">
				Longitud:
				<input type="text" class="form-control" readonly name="lng" value="<?= $sg->sg_lat ?>" id="lng" /><br />
			</div>
		</div>
		
		Nota:
		<textarea class="form-control" name="note" placeholder="Nota" disabled><?= $sg->sg_note ?></textarea><br />
		
		<a href="<?= PORTAL ?>gerai/kawasan-perniagaan/edit/<?= $sg->sg_id ?>" class="btn btn-sm btn-warning">
			Edit Maklumat
		</a>
	</div>
</div>
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
			map: map
		});
	} 
	
}
</script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA&callback=initMap&libraries=visualization&v=weekly">
</script>
HTML
);