<?php
Controller::alert();
new Controller(["permohonan"]);
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

        if (count($s)) {
            $s = $s[0];
        ?>

            <?php
            $a = application_status::getBy(["as_application" => url::get(3)]);           
            ?>
             
        
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Maklumat Diri</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        Nama Penuh:
                                        <input type="text" class="form-control" name="name" placeholder="Nama Penuh..." value="<?= $s->a_name ?>" /><br />
                                    </div>

                                    <div class="col-md-6">
                                        Email:
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $s->a_email ?>" /><br />
                                    </div>

                                    <div class="col-md-6">
                                        No Kad Pengenalan:
                                        <input type="text" class="form-control" name="ic" placeholder="Kad Pengenalan" value="<?= $s->a_ic ?>" /><br />
                                    </div>

                                    <div class="col-md-6">
                                        Alamat
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $s->a_alamat ?>" /><br />
                                    </div>

                                    <div class="col-md-6">
                                        Nombor Tel/Hp:
                                        <input type="number" class="form-control" name="phone" placeholder="Tel/Hp" value="<?= $s->a_phone ?>" /><br />
                                    </div>

                                    <div class="col-md-6">
                                        Gambar
                                        <input type="file" id="gambar" name="gambar" value="<?= $s->a_gambar ?>"><br />
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
                                        <input type="text" class="form-control" name="maklumatPerniagaan" placeholder="Maklumat Perniagaan"  value="<?= $s->a_mp ?>"/><br />
                                    </div>

                                    <div class="col-md-6">
                                        Dokumen SSM
                                        <input type="file" id="ssm" name="ssm"  value="<?= $s->a_ssm ?>"><br />
                                    </div>
                                </div>
                            </div>
                        </div><br />

                        <!-- <div class="card">
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
                    </div><br /> -->
                    </div>

                    <div class="col-md-6">
                        <!-- <div id="map"></div>

                    <input type="hidden" name="lat" id="lat" />
                    <input type="hidden" name="lng" id="lng" /> -->
                        <!-- <br /> -->

                        <div class="card container-fluid">
                            <div class="row">
                                <div class="col card m-2 border-0">
                                    <div class="card-body ">
                                        <h3 class="flex-h1 pt-4 pr-4 pl-4">Pilihan Gerai</h3>
                                        <div class="col-md-12">
                                            <div class="form"> <i class="fa fa-search"></i> <input type="text" class="form-control form-input" placeholder="Search anything..."  id="search-g"></div>
                                        </div>
                                        <div class="card mb-4 border-0 .d-flex">
                                            <div class="card-body">
                                                <table class="table table-striped" id="gerai-table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                
                                                        <th>Alamat Gerai</th>

                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">

                                                    

                                                    <!-- <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>HIT</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>HIT</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>HIT</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>HIT</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>HIT</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>HIT</td>

                                                    </tr> -->
                                                </tbody>
                                                <tbody id="search-body" style="display: none;">
                                                     
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
                        Controller::form("permohonan", [
                            "action"    => "edit"
                        ]);
                        ?>
                        <button class="btn btn-sm btn-primary mb-5" id="sim">

                            Simpan Maklumat
                        </button>
                    </div>
                </div>

            </form>
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
                                    <?php if($_SESSION["user"]->data->u_email == "admin@admin") : ?>
                                        <button type="button" class="pl-3 pr-3 btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                            Edit
                                        </button>

                                    <?php endif; ?>
                                    
                                     
                                    

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
                                                    <form action="" method="post" id="update_form">
                                                        <input type="hidden" id="add_number_modal_id">
                                                        
                                                        <div class="form-group">
                                                            <label for="">Status</label></br>
                                                            <select id="status-select" name="status" class="form-control">
                                                            <?php if($a[0]->as_status == 0) : ?>
                                                                <option value="0">Pending</option>
                                                                <option value="1">Lulus</option>
                                                                <option value="3">Tidak Diterima</option>
                                                            <?php elseif($a[0]->as_status == 1) : ?>
                                                                <option value="1">Lulus</option>
                                                                <option value="0">Pending</option>
                                                                <option value="3">Tidak Diterima</option>
                                                            <?php else : ?>
                                                                <option value="3">Tidak Diterima</option>
                                                                <option value="1">Lulus</option>
                                                                <option value="0">Pending</option>
                                                            <?php endif; ?>
                                                            
                                                               <!--  <option value="pending">Pending</option>
                                                                <option value="lulus">Lulus</option>
                                                                <option value="gagal">Tidak Diterima</option> -->
                                                                 

                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Catitan</label>
                                                            <input type="text" class="form-control" id="catitan" name="description" value="<?= $a[0]->as_description ?? '' ?>">
                                                        </div>
                                                        <?php
                                                        Controller::form("permohonan", [
                                                            "action"    => "edit_as"
                                                        ]);
                                                        ?>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
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
        } else {
            new Alert("error", "Maklumat gerai tidak dijumpai.");
        }
?>
</div>
</div>

<?php 

Page::append(<<<ASD
<script>

var location

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


$(document).on("click", "#sim",function(e) {

     /* e.preventDefault() */
    
    var stats = document.getElementById("status-select");
    var strUser = stats.value;

    console.log(strUser)
     
   
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    var name = $('[name="name"]').val()
    var email = $('[name="email"]').val()
    var ic = $('[name="ic"]').val()
    var alamat = $('[name="alamat"]').val()
    var phone = $('[name="phone"]').val()
    var shop_picked = $('[name="shop_picked"]:checked').val()

     

    var r = ($('[name="shop_picked"]:checked').val()) 
    console.log(r)

    
    $.ajax({
        url: PORTAL + "webservice/permohonan/ajaxedit",
        type: "post",
        dataType: 'json', 
        data: {
            value: id,
            name: name,
            email: email,
            ic: ic,
            alamat: alamat,
            phone: phone,
            shop_picked: shop_picked,
            status: strUser
        },
        success: function(data) {
            console.log(data + "tre")
            
            

        },
        error: function(err) {
            console.log("error");
        }
    });

    

});

function fetch() {
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);

    $.ajax({
     url: PORTAL + "webservice/permohonan/ajaxplace",
     type: "post",
     dataType: 'json',
     data: {
         id:id,
     },
     success: function(getDatas) {
         console.log(getDatas)
          

         var data = getDatas.gerai
        var userData = getDatas.pilihan_gerai
        console.log(userData[0].a_shop)


        var tbody = "";
       
        var i = 1


       

        for(let x = 0; x < data.length; x++){

            console.log(data[x].s_id)

            if(data[x].s_id == userData[0].a_shop){
                tbody += "<tr>";
                                     tbody += "<th>" + data[x].s_lot + "</th>";
                                     tbody += "<td>" + data[x].s_lot + " - " + "Tingkat " + data[x].s_level + " Blok " + data[x].s_block + ", " + data[x].s_road + ", " + data[x].s_residential + ", " + data[x].s_postcode +  " " + data[x].s_area + " " + data[x].s_state + "</td>";
                                    tbody += `<td><input type="checkbox" name="shop_picked" value="\${data[x].s_id}" checked></td>`;  

                                     tbody += "<tr>";
            } else {
                tbody += "<tr>";
                                     tbody += "<th>" + data[x].s_lot + "</th>";
                                     tbody += "<td>" + data[x].s_lot + " - " + "Tingkat " + data[x].s_level + " Blok " + data[x].s_block + ", " + data[x].s_road + ", " + data[x].s_residential + ", " + data[x].s_postcode +  " " + data[x].s_area + " " + data[x].s_state + "</td>";
                                    tbody += `<td><input type="checkbox" name="shop_picked" value="\${data[x].s_id}" ></td>`;  

                                     tbody += "<tr>";
            }

           
                
                             

        }
        
        $("#tbody").html(tbody);
      
        
         
        
         
 
     },
     error: function(err) {
         console.log("error");
     }
 });
 };

 fetch();

$(document).on("keypress", "#search-g", function(e) {

    var input = $("#search-g").val()

    var tbody = "";
    var i = 1
    
     
    if(e.which == 13) {
        if(!(input === "")){
            e.preventDefault();
            $.ajax({
             url: PORTAL + "webservice/permohonan/ajaxsearch",
             type: "post",
             dataType: 'json',
             data: {
                value: input,
             },success: function(data){
                console.log(data)
                for(let x = 0; x < data.length; x++){

                    console.log("lol");
        
                    
                 
                    tbody += "<tr>";
                                             tbody += "<th>" + i++ + "</th>";
                                             tbody += "<td>" + data[x].s_lot + " - " + "Tingkat " + data[x].s_level + " Blok " + data[x].s_block + ", " + data[x].s_road + ", " + data[x].s_residential + ", " + data[x].s_postcode +  " " + data[x].s_area + " " + data[x].s_state + "</td>";
                                             tbody += `<td><input type="checkbox" name="shop_picked" value="\${data[x].s_id}"></td>`;  
                 
                                             tbody += "<tr>";
                                     
        
                }
                $("#search-body").html(tbody);
             },
             error: function(err) {

             }
            })
            $("#tbody").hide();
            $("#search-body").show();
             
        } else {
            e.preventDefault();
            $("#tbody").show();
        }
        


    }

    
});
</script>           
ASD);

