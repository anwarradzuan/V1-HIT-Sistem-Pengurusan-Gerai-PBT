<style>
	#map {
		width: 100%;
		height: 700px;
	}
</style>

<div class="row">
	<div class="col-md-4 col-sm-6 col-12 mb-2">
		<div class="card lena-card  no-border hover-shadow">
			<div class="card-body">
				<?php
				$x = shop_group::getBy(["sg_status" => 1]);
				?>
				<div class="row">
					<div class="col-md-4 d-none d-md-block center-typcn">
						<span class="typcn typcn-location-outline"></span>
					</div>
					<div class="col-md-8 col-12 col-sm-6">
						<p class="mb-0">Jumlah Kawassan</p>
						<strong><?= count($x) ?></strong>
					</div>
				</div>
			</div>

			<div class="lena-progress bg-lena-pastel-green" data-progress="50"></div>
		</div>
	</div>

	<div class="col-md-4 col-sm-6 col-12 mb-2">
		<div class="card lena-card  no-border hover-shadow">
			<div class="card-body">
				<?php
				$y = shops::getBy(["s_status" => 1]);
				?>
				<div class="row">
					<div class="col-md-4 d-none d-md-block center-typcn">
						<span class="typcn typcn-wi-fi-outline"></span>
					</div>
					<div class="col-md-8 col-12 col-sm-6">
						<p class="mb-0">Jumlah Gerai</p>
						<strong><?= count($y) ?></strong>
					</div>
				</div>
			</div>

			<div class="lena-progress" data-progress="75"></div>
		</div>
	</div>

	<div class="col-md-4 col-sm-6 col-12 mb-2">
		<div class="card lena-card  no-border hover-shadow">
			<div class="card-body">
				<?php
				$z = applications::getBy(["a_status" => 0]);
				?>
				<div class="row">
					<div class="col-md-4 d-none d-md-block center-typcn">
						<span class="typcn typcn-map"></span>
					</div>
					<div class="col-md-8 col-12 col-sm-6">
						<p class="mb-0">Jumlah Permohonan</p>
						<strong><?= count($z) ?></strong>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row mt-1">
	<div class="col-12">
		<div class="card lena-card no-border hover-shadow shadow d-block d-sm-none">
			<div class="card-header">
				Stocks by market
			</div>

			<div class="card-body">
				<canvas class="mt-4" id="locationStocks1"></canvas>
			</div>
		</div>
	</div>
</div>

<div class="row mt-3 mapBlock">
	<div class="col-md-12 col-sm-12 col-12">
		<div id="map"></div>
		<div class="card lena-card lena-main-card no-border hover-shadow shadow d-none d-md-block" style="width: 300px">
			<div class="card-header" id="pie-title">
				Analisis Keseluruhan
			</div>
			<div class="card-body">
				<div id="chartContainer" style="height: 370px; width: 100%;"></div>
			</div>
		</div>

		<div class="card lena-card lena-secondary-card no-border hover-shadow shadow d-none d-md-block" style="top:85px !important;">
			<div class="card-header" id="top_locations">
				Pilih Jenis Map
			</div>
			<div class="card-body" id="toggle_5location">
				<ul class="lena-map-list">
					<li>
						<div class="row">
							<div class="col-6 lena-normal-text" id="maptype">
								Heat Map
							</div>
							<div class="col-6 text-right">
								<div data-sparkline="line"></div>
							</div>
						</div>
					</li>

					<li>
						<div class="row">
							<div class="col-6 text-right">
								<label class="switch">
									<input type="checkbox" id="toggleButton" value="false" name="toggleButton">
									<span class="slider round"></span>
								</label>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php
$heat = "";
$marker = "";
$x = shop_group::getBy(["sg_status" => 1]);
$portal = PORTAL;
if (count($x) > 0) {
	foreach ($x as $y) {
		$heat .= "new google.maps.LatLng(" . $y->sg_lat . ", " . $y->sg_lng . "),";

		$marker .= <<<H
		var content$y->sg_id = new google.maps.InfoWindow({
			content: `
				<div class="card">
					<img class="card-img-top" src="`+  PORTAL + `assets/images/$y->sg_picture" alt="Card image" style="width:100%;height:150px;">
					<div class="card-body">
						<h3>$y->sg_name</h3>
						<strong>$y->sg_description</strong>
						<br />
						<strong>$y->sg_address</strong>
						<br />
						<br />
						<button class="btn btn-sm btn-info">
							Lihat Analisis
						</button>
						
						<a href="`+  PORTAL + `gerai/kawasan-perniagaan/view/$y->sg_id" class="btn btn-sm btn-primary">
							Maklumat Lanjut
						</a>
					</div>
				</div>
			`
		});

		var marker$y->sg_id = new google.maps.Marker({
			position: new google.maps.LatLng($y->sg_lat, $y->sg_lng),
			map: map
		});
		
		marker$y->sg_id.addListener("click", function(){
			$("#pie-title").text("Analisis $y->sg_name");
			
			content$y->sg_id.open({
				anchor: marker$y->sg_id,
				map: map,
				shouldFocus: false,
			});
		});
		
		content$y->sg_id.addListener('closeclick', ()=>{
			$("#pie-title").text("Analisis Keseluruhan");
		});
		
H;
	}
}

Page::append(
	<<<AAA
<script>
let map, heatmap , marker;
var toggle_marker = false;
var global_map = "heat";
var i = 0; 

$("#top_locations").on("click" , function(){
	$("#toggle_5location").toggle();
});

$("#pie-title").on("click" , function(){
	$("#chartContainer").toggle();
	$("#top_locations").toggle();
	$("#toggle_5location").hide();
});
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 51.08, label: "Chrome" },
			{ y: 27.34, label: "Internet Explorer" },
			{ y: 10.62, label: "Firefox" },
			{ y: 5.02, label: "Microsoft Edge" },
			{ y: 4.07, label: "Safari" },
			{ y: 1.22, label: "Opera" },
			{ y: 0.44, label: "Others" }
		]
	}]
});
chart.render();
$("#chartContainer").hide();
$("#toggle_5location").hide();
}

$("#toggleButton").on("change" , function(){
	if ($(this).is(':checked')) {
		global_map = "marker";
		var textmap = $("#maptype").text('Pointer Map')
	}else {
		global_map = "heat";
		var heattextmap = $("#maptype").text('Heat Map')
	}
	
	initMap();
});

function initMap() {
	map = new google.maps.Map(document.getElementById("map"), {
		zoom: 10,
		center: { lat: 5.366643538146448, lng: 100.410465570366 },
		mapTypeId: "satellite",
	});
	
	switch(global_map){
		case "heat":
			heatmap = new google.maps.visualization.HeatmapLayer({
				data: getPoints(),
				map: map,
			});
		break;
		
		case "marker":
			getmarkerPoints()
		break;
	}
}

function toggleHeatmap() {
	heatmap.setMap(heatmap.getMap() ? null : map);
}

function getmarkerPoints(){
	$marker
}

function getPoints() {
	return [
		$heat
	];
}
</script>
<script async
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA&libraries=visualization&callback=initMap">
</script>
AAA
);
?>