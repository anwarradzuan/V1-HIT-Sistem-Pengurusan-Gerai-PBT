<style type="text/css">
#map {
	height: 400px;
	width: 100%;
}
</style>

<div class="card">
	<div class="card-header">
		Padam Sewaan 
		
		<a href="<?= PORTAL ?>sewaan" class="btn btn-sm btn-primary">
			Kembali
		</a>
	</div>
	
	<div class="card-body">
	<?php
		$su = shop_user::getBy(["su_id" => url::get(3)]);
		
		if(count($su)){
			$su = $su[0];
			$s = shops::getBy(["s_id" => $su->su_shop]);
			$u = users::getBy(["u_id" => $su->su_user]);

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
							<input type="hidden" name="su_id" value="<?= $su->su_id ?>">
							<h4>Maklumat Pemilik</h4>
							<table class="table table-hover table-fluid">
								<tbody>
									<tr>
										<th>Nama</th>
										<td> <?= $u[0]->u_name ?> </td>
									</tr>
									
									<tr>
										<th>Telefon</th>
										<td> <?= $u[0]->u_phone ?> </td>
									</tr>
									
									<tr>
										<th>Email</th>
										<td> <?= $u[0]->u_email ?> </td>
									</tr>
									
									<tr>
										<th>Alamat</th>
										<td><?= $u[0]->u_alamat ?> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><br />
				</div>
				
				<div class="col-md-6">
					
					<div class="card">
						<div class="card-body">
							<h4>Alamat Gerai</h4>
							
							<div class="row">
								<div class="col-md-4">
									No / Lot:
									<input type="text" class="form-control" name="lot" placeholder="Lot" value="<?= $s[0]->s_lot ?>" disabled /><br />
								</div>
								
								<div class="col-md-4">
									Tingkat:
									<input type="text" class="form-control" name="level" placeholder="Tingkat" value="<?= $s[0]->s_level ?>" disabled /><br />
								</div>
								
								<div class="col-md-4">
									Blok:
									<input type="text" class="form-control" name="block" placeholder="Blok" value="<?= $s[0]->s_block ?>" disabled /><br />
								</div>
								
								<div class="col-md-12">
									Jalan:
									<input type="text" class="form-control" name="road" placeholder="Jalan" value="<?= $s[0]->s_road ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Taman:
									<input type="text" class="form-control" name="residential" placeholder="Taman" value="<?= $s[0]->s_residential ?>" disabled /><br />
								</div>
								
								
								<div class="col-md-6">
									Poskod:
									<input type="text" class="form-control" name="postcode" placeholder="Poskod" value="<?= $s[0]->s_postcode ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Daerah:
									<input type="text" class="form-control" name="area" placeholder="Daerah" value="<?= $s[0]->s_area ?>" disabled /><br />
								</div>
								
								<div class="col-md-6">
									Negeri:
									<input type="text" class="form-control" name="state" placeholder="Negeri" value="<?= $s[0]->s_state ?>" disabled /><br />
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<div class="col-md-12 text-center">
				<?php
					Controller::form("sewaan/sewaan", [
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