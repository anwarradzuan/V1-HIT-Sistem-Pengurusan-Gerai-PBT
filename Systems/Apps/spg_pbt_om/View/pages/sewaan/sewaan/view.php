<?php
Controller::alert();
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
        Tambah Sewaan

        <a href="<?= PORTAL ?>sewaan" class="btn btn-sm btn-primary">
            Kembali
        </a>
    </div>

    <div class="card-body">

    <?php
        
        $su = shop_user::getBy(["su_shop" => url::get(3)]);
        $rent = rentals::getBy(["r_shop" => url::get(3)]);
        $s = shops::getBy(["s_id" =>  url::get(3)]);
       /*  $u = users::getBy(["u_name" => $su[0]->su_user]); */
    ?>
       
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>Maklumat Diri</h4>

                    <div class="row">
                        <div class="col-md-6">
                            Nama Penuh:
                            <input type="text" class="form-control" name="name" placeholder="Nama Penuh..." value="<?= $rent[0]->r_name ?>"  disabled /><br />
                        </div>

                        <div class="col-md-6">
                            Email:
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $rent[0]->r_email ?>" disabled /><br />
                        </div>

                        <div class="col-md-6">
                            No Kad Pengenalan:
                            <input type="text" class="form-control" name="ic" placeholder="Kad Pengenalan" value="<?= $rent[0]->r_ic ?>" disabled /><br />
                        </div>

                        <div class="col-md-6">
                            Alamat
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $rent[0]->r_address ?>" disabled /><br />
                        </div>

                        <div class="col-md-6">
                            Nombor Tel/Hp:
                            <input type="number" class="form-control" name="phone" placeholder="Tel/Hp" value="<?= $rent[0]->r_phone ?>" disabled /><br />
                        </div>

                        <div class="col-md-6">
                            Gambar
                            <!-- <input type="file" id="gambar" name="gambar" disabled><br /> -->
                            <div class="row" style="height: 150px; width: 150px;">
                                <img src="<?= PORTAL ?>assets/images/test1.png" alt="" style="width: 100%; height: 100%;">
                            </div>
                        </div>



                        <div class=" col-md-6">
                            Dokumen SSM
                                
                        </div>
                    </div>
                </div>
            </div><br />

            <div class="card">
                <div class="card-body">
                    <h4>Maklumat Perniagaan</h4>

                    <div class="row">
                        <!-- <div class="col-md-6">
                            Nilai Sewaan:
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">RM</span>
                                </div>
                                <input type="text" class="form-control" placeholder="0.00" name="price" />
                            </div><br />
                        </div> -->
                        <div class="col-md-12">
                            Maklumat Perniagaan
                            <input type="text" class="form-control" name="maklumatPerniagaan" placeholder="Maklumat Perniagaan" disabled /><br />
                        </div>

                        <div class="col-md-6">
                            Dokumen SSM
                            <input type="file" id="ssm" name="ssm" disabled><br />
                        </div>
                    </div>
                </div>
            </div><br />


        </div>

        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h3 class="flex-h1  pr-4 pl-4">Lokasi Gerai Yang Dipilih</h3>
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
                            <h3 class="flex-h1 pt-4 pr-4 pl-4">Gerai Yang Telah Dipilih</h3>

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

    </div>
</div>

<?php
Page::append(<<<ASD
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
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA&callback=initMap&libraries=visualization&v=weekly">



</script>
ASD);