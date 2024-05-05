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
        Tambah Permohonan

        <a href="<?= PORTAL ?>permohonan/gerai" class="btn btn-sm btn-primary float-right">
            Kembali
        </a>
    </div>

    <div class="card-body">

    <?php
        $s = applications::getBy(["a_id" => url::get(3)]);

        /* print_r($_SESSION["user"]->data->u_name); */
        ?>

<?php
        $a = shops::getBy(["s_id" =>  $s[0]->a_shop]);

      
        ?>
       
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Maklumat Diri</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    Nama Penuh:
                                    <input type="text" class="form-control" name="name" placeholder="Nama Penuh..." value="<?= $s[0]->a_name ?>"  disabled /><br />
                                </div>

                                <div class="col-md-6">
                                    Email:
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $s[0]->a_email ?>" disabled /><br />
                                </div>

                                <div class="col-md-6">
                                    No Kad Pengenalan:
                                    <input type="text" class="form-control" name="ic" placeholder="Kad Pengenalan" value="<?= $s[0]->a_ic ?>" disabled /><br />
                                </div>

                                <div class="col-md-6">
                                    Alamat
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $s[0]->a_alamat ?>" disabled /><br />
                                </div>

                                <div class="col-md-6">
                                    Nombor Tel/Hp:
                                    <input type="number" class="form-control" name="phone" placeholder="Tel/Hp" value="<?= $s[0]->a_phone ?>" disabled /><br />
                                </div>

                                <div class="col-md-6">
                                    Gambar
                                    <!-- <input type="file" id="gambar" name="gambar" disabled><br /> -->
                                    <div class="row" style="height: 150px; width: 150px;">
                                        <img src="<?= PORTAL ?>assets/images/permohonan/<?= $s[0]->a_gambar ?>" alt="" style="width: 100%; height: 100%;">
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
                                    <input type="text" class="form-control" name="maklumatPerniagaan" value="<?= $s[0]->a_mp ?>"  disabled /><br />
                                </div>

                                <div class="col-md-6">
                                    Dokumen SSM
									<img src="<?= PORTAL ?>assets/images/ssm/<?= $s[0]->a_ssm ?>" alt="" style="width: 100%; height: 100%;">
                                   
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
                                                        <td><?= $a[0]->s_lot ?> - Tingkat <?= $a[0]->s_level ?> Blok <?= $a[0]->s_block ?>, <?= $a[0]->s_road ?>, <?= $a[0]->s_residential ?>, <?= $a[0]->s_postcode ?> <?= $a[0]->s_area ?> <?= $a[0]->s_state ?></td>

                                                       

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

                <div class="col-md-12 text-center">
                    <?php
                    Controller::form("gerai/gerai", [
                        "action"    => "add"
                    ]);
                    ?>
                </div>
            </div>

       
        <div class="col-md-12 ">
            <!-- <div id="map"></div>

                    <input type="hidden" name="lat" id="lat" />
                    <input type="hidden" name="lng" id="lng" /> -->
            <!-- <br /> -->

            <div class="card container">
                <div class="row">
                    <div class="col card m-2 border-0">
                        <div class="card-body ">
                            <div class="d-inline-flex flex-row justify-content-end align-items-center">
                                <h3 class="flex-h1  pr-4 pl-4">Status Permohonan</h3>
                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Status</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                              
                                                    <input type="hidden" id="add_number_modal_id">
                                                    <div class="form-group">
                                                        <label for="">Status</label></br>
                                                        <select id="standard-select" class="form-control">
                                                            <option value="Option 1">Option 1</option>
                                                            <option value="Option 2">Option 2</option>
                                                            <option value="Option 3">Option 3</option>
                                                            <option value="Option 4">Option 4</option>
                                                            <option value="Option 5">Option 5</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Catitan</label>
                                                        <input type="text" class="form-control" id="catitan">
                                                    </div>

                                              
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    </div>
</div>

<?php
Page::append(<<<ASD
<script>

$( document ).ready(function() {
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);

    $.ajax({
        url: PORTAL + "webservice/permohonan/ajaxstatus",
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

                console.log(data.status[x].as_status)

                if(data.status[x].as_status == 0){
                    var st = "Pending"
                } else if (data.status[x].as_status == 1){
                    var st = "Lulus"
                } else {
                    var st = "Tidak Diterima"
                }

            
                tbody += "<tr>";
                tbody += `<td>\${i++}</td>`
                tbody += `<td>\${data.status[x].as_date}</td>`
                tbody += `<td>\${st}</td>`
                tbody += `<td>\${data.status[x].as_description}</td>`
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
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBehjO1GuDz--gzxCCBePfqBhpV82kfLPA&callback=initMap&libraries=visualization&v=weekly">



</script>
ASD);