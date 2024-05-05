<style>
	#map {
		width: 100%;
		height: 600px;
	}

	.graphs {
		height: 100%;
		width: 100%;
	}
</style>

<div class="row container-fluid">
	<div class="col-md-12 col-sm-12 col-12 mb-2 container-fluid">
		<div class="card lena-card  no-border hover-shadow">
			<div class="card-body d-flex flex-row">
				<div class="col-md-6">
					<select class="form-control" name="test">
						<option value="all">Semua</option>

					</select>
				</div>

				<div class="col-md-6">
					<select class="form-control" name="test">
						<option value="all">Semua</option>

					</select>
				</div>

			</div>

		</div>
	</div>
</div>


<div class="row container-fluid">
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
						<p class="mb-0">Jumlah Kawasan</p>
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

<div class="row container-fluid mt-3 mb-5 mapBlock">
	<div class="col-md-6 col-sm-6 col-6">
		<div id="map" style="height: 700px;"></div>
		<div class="card lena-card lena-main-card no-border hover-shadow shadow d-none d-md-block" style="width: 400px; height: 50px">
			<div class="card-header" id="pie-title" style="font-size: 14px;">
				Analisis Keseluruhan
			</div>
			<div class="card-body">
				<div id="chartContainer" style="height: 270px; width: 60%;"></div>
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

	<div class=" col-md-6 col-sm-6 col-6 d-flex flex-row justify-content-start   align-items-start container-fluid">
		<div class="row">
			<div class=" card col   m-3 d-flex flex-row justify-content-center  align-items-center" style="height: 200px; width:200px;">
				<div class="col-md-4 d-none d-md-block center-typcn mr-4 ">
					<span class="iconify" data-icon="foundation:graph-pie" data-width="100" data-height="100"></span>
				</div>
				<div class=" ">
					<p class="mb-0">Jumlah Kedai Kosong</p>
					<strong class="fontsize-card">0</strong>
				</div>
			</div>

			<div class=" card col   m-3 d-flex flex-row justify-content-center  align-items-center" style="height: 200px; width:200px;">
				<div class="col-md-4 d-none d-md-block center-typcn mr-4 ">
					<span class="iconify" data-icon="foundation:graph-pie" data-width="100" data-height="100"></span>
				</div>
				<div class=" ">
					<p class="mb-0">Jumlah Kedai Disewa</p>
					<strong class="fontsize-card">0</strong>
				</div>
			</div>

			<div class="w-100 "></div>
			<div class=" card col   m-3 d-flex flex-row justify-content-center  align-items-center" style="height: 200px; width:200px;">
				<div class="col-md-4 d-none d-md-block center-typcn mr-4 ">
					<span class="iconify" data-icon="foundation:graph-pie" data-width="100" data-height="100"></span>
				</div>
				<div class=" ">
					<p class="mb-0">Jumlah Kedai Rosak</p>
					<strong class="fontsize-card">0</strong>
				</div>
			</div>
			<div class=" card col   m-3 d-flex flex-row justify-content-center  align-items-center" style="height: 200px; width:200px;">
				<div class="col-md-4 d-none d-md-block center-typcn mr-4 ">
					<span class="iconify" data-icon="foundation:graph-pie" data-width="100" data-height="100"></span>
				</div>
				<div class=" ">
					<p class="mb-0">Jumlah Sedang Dibaiki</p>
					<strong class="fontsize-card">0</strong>
				</div>
			</div>
			<div class="w-100 "></div>
			<div class="card   container-fluid" style="width:790px; height: 240px;">
				<div class="row pt-4 d-flex flex-row justify-content-around  align-items-center" style="height: 70px;">
					<h4>Kawasan</h4>
					<div class="col-md-3">
						<select class="form-control" name="test">
							<option value="all">Parlimen</option>
							<option value="all">Daerah</option>
						</select>
					</div>
				</div>
				<hr />
				<div class="row pt-4 d-flex flex-row justify-content-around  align-items-center" style="height: 70px;">
					<div class="">
						<label for="">Disewa</label>
						<p>0</p>
					</div>
					<div class="">
						<label for="">Belum Disewa</label>
						<p>0</p>
					</div>
					<div class="">
						<label for="">Rosak</label>
						<p>0</p>
					</div>
				</div>

			</div>

		</div>

	</div>
</div>

<div class="row container-fluid mapBlock ">
	<div class="card col-md-3 col-sm-3 col-3  d-flex flex-column justify-content-start  align-items-center " style=" height: 900px;">
		<h3 class="mt-12" style="margin-top: 50px;">Jumlah Kedai Yang Disewa</h3>
		<div class=" bg-dark" style="height: 2px; width:80%"></div>
		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>

		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>
		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>
		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>
		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>
		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>
		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>
		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>
		<div class="row container-fluid " style="padding-top: 30px; padding-bottom:30px;">
			<div class="  col-md-6 col-sm-6 col-6 text-center " style="height: 20px;">
				asdsad
			</div>
			<div class="  col-md-6 col-sm-6 col-6   text-center" style="height: 20px;">
				asdsad
			</div>
		</div>

	</div>
	<!-- <div class="  col-md-1 col-sm-1 col-1 "></div> -->
	<div class="card col-md-9 col-sm-9 col-9  " style="height: 900px;">
		<div class="card-body text-center">
			<h3 class="flex-h1 pt-4 pr-4 pl-4">Senarai Nama Temu Duga</h3>


			<div class="card mb-4 border-0 .d-flex">
				<div class="card-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pemilik</th>
								<!-- <th>Nama Syarikat</th> -->
								<th>Jumlah Tunggakan (RM)</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>HIT</td>
								<td>10000</td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="align-self-center">
					<a href="sewaan">Maklumat Lanjut...</a>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="row container-fluid mt-3 mb-5 mapBlock">
	<div class="card col-md-6 col-sm-6 col-6  d-flex flex-row justify-content-center  align-items-center " style=" height: 500px;">
		<div class="  ">
			<h2 class="">Sewaan Bulanan</h2>
			<canvas id="myCharta" width="650" height="300"></canvas>
		</div>
	</div>
	<!-- <div class="  col-md-1 col-sm-1 col-1 "></div> -->
	<div class="card col-md-3 col-sm-3 col-3 d-flex flex-column justify-content-center  align-items-center  " style="height: 500px;">
		<div class="row  ">
			<div class="col  text-center">
				<h5>qweqwe</h5>
				<p>adasdasdasd</p>
			</div>
			<div class="col  text-center">
				<h5>qweqwe</h5>
				<p>adasdasdasd</p>
			</div>
			<div class="w-100"></div>
			<div class="col  text-center">
				<h5>qweqwe</h5>
				<p>adasdasdasd</p>
			</div>
			<div class="col  text-center">
				<h5>qweqwe</h5>
				<p>adasdasdasd</p>
			</div>
		</div>
		<div class="d-flex flex-column justify-content-center  align-items-center">
			<canvas id="lol" width="250" height="250"></canvas>

		</div>
	</div>
	<div class="card col-md-3 col-sm-3 col-3  d-flex flex-column justify-content-center  align-items-center" style="height: 500px;">
		<div class="row  ">
			<div class="col  text-center">
				<h5>qweqwe</h5>
				<p>adasdasdasd</p>
			</div>
			<div class="col  text-center">
				<h5>qweqwe</h5>
				<p>adasdasdasd</p>
			</div>
			<div class="w-100"></div>
			<div class="col  text-center">
				<h5>qweqwe</h5>
				<p>adasdasdasd</p>
			</div>
			<div class="col  text-center">
				<h5>qweqwe</h5>
				<p>adasdasdasd</p>
			</div>
		</div>
		<div class="   d-flex flex-column justify-content-center  align-items-center ">
			<canvas id="lol2" width="250" height="250"></canvas>

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

<script>
    var ctx = document.getElementById("myCharta").getContext('2d');
    var myCharta = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "Mei", ],
            datasets: [{
                label: 'Tahun Lepas',
                data: [12, 19, 3, 5, 2, 3, 14, 7, 8, 3, 1, 6],
                backgroundColor: '#D3D3D3',
                borderColor: "black",
                borderWidth: 0,
                barThickness: 18,

            }, {
                label: 'Tahun Semasa',
                data: [16, 12, 9, 3, 15, 10, 8, 10, 2, 9, 13, 10],
                backgroundColor: '#98d6eb',
                borderColor: "#000080",
                borderWidth: 0,
                barThickness: 15
            }]
        },
        options: {
            responsive: false,
            scales: {
                y: {
                    grid: {
                        drawborder: false,
                        drawOnChartArea: false,
                        display: false,
                    }

                },
                x: {
                    grid: {
                        drawborder: false,
                        drawOnChartArea: false,
                        display: false,
                    }
                }
            }
        }
    });
</script>
<script>
    var ctxxd = document.getElementById("myChartas).getContext('2d');
    var myChartss = new Chart(ctxxd, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "Mei", ],
            datasets: [{
                label: 'Tahun Lepas',
                data: [12, 19, 3, 5, 2, 3, 14, 7, 8, 3, 1, 6],
                backgroundColor: '#D3D3D3',
                borderColor: "black",
                borderWidth: 0,
                barThickness: 18,

            }, {
                label: 'Tahun Semasa',
                data: [16, 12, 9, 3, 15, 10, 8, 10, 2, 9, 13, 10],
                backgroundColor: '#98d6eb',
                borderColor: "#000080",
                borderWidth: 0,
                barThickness: 15
            }]
        },
        options: {
            responsive: false,
            scales: {
                y: {
                    grid: {
                        drawborder: false,
                        drawOnChartArea: false,
                        display: false,
                    }

                },
                x: {
                    grid: {
                        drawborder: false,
                        drawOnChartArea: false,
                        display: false,
                    }
                }
            }
        }
    });
</script>

<script>
    const labels = [
        'Sewa Tertunggak',
        'Sewa Yang Sudah Dibayar',
    ];

    var result;

        $.ajax({url: PORTAL + "webservice/dashboards/ajax",
            async: false,
            type: "post",
            dataType: 'json',
            data: {
                value: "lolo",
            }, 
            success: function(data){

                result = data
          
        },
    });
     
    console.log(result)

    var paid = result.p.length
    var unpaid = result.un.length
    var sk = result.psk.length
    var ske = result.pske.length
    console.log(paid)
    console.log(unpaid)
     
    

    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: ['rgb(255, 99, 132)', 'red', 'black'],
            borderColor: 'rgb(255, 99, 132)',
            data: [unpaid, paid],
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: false,
        }
    };
</script>

<script>
    const lol = new Chart(
        document.getElementById('lol'),
        config
    );
</script>

<script>
    const labelss = [
        'Kekosongan Kedai ',
        'Kedai Yang Disewakan',
         

    ];

    const dataa = {
        labels: labelss,
        datasets: [{
            label: 'My second dataset',
            backgroundColor: ['rgb(255, 99, 132)', 'red', 'black'],
            borderColor: 'rgb(255, 99, 132)',
            data: [sk, ske, ],
        }]
    };

    const config2 = {
        type: 'doughnut',
        data: dataa,
        options: {
            responsive: false,
        }
    };
</script>

<script>
    const lole = new Chart(
        document.getElementById('lol2'),
        config2
    );
</script>
AAA
);
?>