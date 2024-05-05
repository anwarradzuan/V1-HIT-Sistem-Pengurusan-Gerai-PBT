<style type="text/css">
#map {
	height: 400px;
	width: 100%;
}
</style>

<div class="card">
	<div class="card-header">
		Padam Gerai 
		
		<a href="<?= PORTAL ?>gerai/gerai/list" class="btn btn-sm btn-primary">
			Kembali
		</a>
	</div>
	
	<div class="card-body">
	<?php
		$s = shops::getBy(["s_id" => url::get(3)]);
		
		if(count($s)){
			$s = $s[0];
		?>
		<h3>
			Adakah anda pasti untuk padam?
		</h3>
		
		<p>
			Maklumat dipadam tidak dapat dikemKembalian semula.
		</p>
		
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h4>Maklumat Rujukan</h4>
							
							<div class="row">
								<div class="col-md-6">
									No Fail:
									<input type="text" class="form-control" name="fileno" placeholder="No Fail" value="<?= $s->s_fileno ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Rujukan:
									<input type="text" class="form-control" name="refno" placeholder="Rujukan" value="<?= $s->s_refno ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									No Lot:
									<input type="text" class="form-control" name="lotno" placeholder="No Lot (Tanah)" value="<?= $s->s_lotno ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									No HSD:
									<input type="text" class="form-control" name="hsd" placeholder="No HSD (Tanah)" value="<?= $s->s_hsd ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Rujukan 2:
									<input type="text" class="form-control" name="ref1" placeholder="Rujukan 2" value="<?= $s->s_ref1 ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Rujukan 3:
									<input type="text" class="form-control" name="ref2" placeholder="Rujukan 3" value="<?= $s->s_ref2 ?>" disabled /><br />
								</div>
								
								<div class="col-md-12">
									Kawasan / Bangunan:
									<select class="form-control" name="group" disabled>
										<option value="0">Sila Pilih</option>
									<?php
										foreach(shop_group::list() as $sg){
										?>
										<option value="<?= $sg->sg_id ?>" <?= $s->s_group == $sg->sg_id ? "selected"  : "" ?>>
											<?= $sg->sg_name ?>
										</option>
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
										
										<input type="text" class="form-control" placeholder="price" name="price" value="<?= number_format($s->s_price, 2) ?>" disabled  />
									</div><br />
								</div>
								
								<div class="col-md-6">
									Status:
									<select class="form-control" name="status" disabled>
										<option value="1" <?= $s->s_status == 1 ? "selected" : "" ?>>Sedia</option>
										<option value="0" <?= $s->s_status == 0 ? "selected" : "" ?>>Tidak Sedia</option>
										<option value="2" <?= $s->s_status == 2 ? "selected" : "" ?>>Pembangunan</option>
										<option value="3" <?= $s->s_status == 3 ? "selected" : "" ?>>Baik Pulih</option>
										<option value="4" <?= $s->s_status == 4 ? "selected" : "" ?>>Rosak</option>
										<option value="5" <?= $s->s_status == 5 ? "selected" : "" ?>>Terbengkalai</option>
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
									<input type="text" class="form-control" name="lot" placeholder="Lot" value="<?= $s->s_lot ?>" disabled /><br />
								</div>
								
								<div class="col-md-4">
									Tingkat:
									<input type="text" class="form-control" name="level" placeholder="Tingkat" value="<?= $s->s_level ?>" disabled /><br />
								</div>
								
								<div class="col-md-4">
									Blok:
									<input type="text" class="form-control" name="block" placeholder="Blok" value="<?= $s->s_block ?>" disabled /><br />
								</div>
								
								<div class="col-md-12">
									Jalan:
									<input type="text" class="form-control" name="road" placeholder="Jalan" value="<?= $s->s_road ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Taman:
									<input type="text" class="form-control" name="residential" placeholder="Taman" value="<?= $s->s_residential ?>" disabled /><br />
								</div>
								
								
								<div class="col-md-6">
									Poskod:
									<input type="text" class="form-control" name="postcode" placeholder="Poskod" value="<?= $s->s_postcode ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Daerah:
									<input type="text" class="form-control" name="area" placeholder="Daerah" value="<?= $s->s_area ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Negeri:
									<input type="text" class="form-control" name="state" placeholder="Negeri" value="<?= $s->s_state ?>" disabled /><br />
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<div class="col-md-12 text-center">
				<?php
					Controller::form("gerai/gerai", [
						"action"	=> "delete"
					]);
				?>
					<button class="btn btn-sm btn-danger">
						Padam Maklumat
					</button>	
				</div>
			</div>
		</form>
<script>
var map; 
var marker = false; 

function initMap() {
	var initLatLng = {
		lat: <?= $s->s_latitude ?>,
		lng: <?= $s->s_longitude ?>
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
	
	// console.log(currentLocation.lat(), currentLocation.lng());
    document.getElementById('lat').value = currentLocation.lat(); //latitude
    document.getElementById('lng').value = currentLocation.lng(); //longitude
}
</script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA&callback=initMap&libraries=visualization&v=weekly">
</script>
		<?php
		}else{
			new Alert("error", "Maklumat gerai tidak dijumpai.");
		}
	?>
	</div>
</div>