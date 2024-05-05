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
        <button type="button" class="pl-3 pr-3 btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Cari Pengguna
        </button>
    </div>

    <div class="card-body">
        <form action="" method="POST">
            <div class="row">
                <!-- Modal -->
                <div class="modal" id="exampleModalLong" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Kemaskini Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="add_number_modal_id">
                                <div class="form-group ">
                                    <label for="">Nombor Kad Pengenalan</label></br>
                                  
                                    <select class="js-example-basic-single" id="standard-select" style="width: 75%" class="form-control">

                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" id="cp" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Maklumat Diri</h4>
							<input type="hidden" name="su_user" /><br />
                            <div class="row">
                                <div class="col-md-6">
                                    Nama Penuh:
                                    <input type="text" class="form-control name" name="name" placeholder="Nama Penuh..."  /><br />
                                </div>

                                <div class="col-md-6">
                                    Email:
                                    <input type="email" class="form-control" name="email" placeholder="Email"  /><br />
                                </div>

                                <div class="col-md-6">
                                    No Kad Pengenalan:
                                    <input type="text" class="form-control" name="ic" placeholder="Kad Pengenalan"  /><br />
                                </div>

                                <div class="col-md-6">
                                    Alamat
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" /><br />
                                </div>

                                <div class="col-md-6">
                                    Nombor Tel/Hp:
                                    <input type="number" class="form-control" name="phone" placeholder="Tel/Hp"  /><br />
                                </div>

                                <div class="col-md-6">
                                    Gambar
                                    <input type="file" id="gambar" name="gambar" disabled><br />
                                </div>

                                <div class="col-md-12">
                                    Amaun Bayaran Sewaan
                                    <input type="number" class="form-control" name="amaun" placeholder="Amaun"  /><br />
                                </div>
                            </div>
                        </div>
                    </div><br />
                </div>

                <div class="col-md-6">
                    <div class="card container-fluid">
                        <div class="row">
                            <div class="col card m-2 border-0">
                                <div class="card-body ">
                                    <h3 class="flex-h1 pt-4 pr-4 pl-4">Pilihan Gerai</h3>
                                    <div class="col-md-12">
                                        <div class="form"> <i class="fa fa-search"></i> <input type="text" class="form-control form-input" placeholder="Search anything..." id="search-g"></div>
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

                                                </tbody>
                                                <tbody id="search-body" style="display: none;">
                                                     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br />
                </div>

                <div class="col-md-12 text-center">
                    <?php
                    Controller::form("sewaan/sewaan", [
                        "action"    => "add"
                    ]);
                    ?>
                    <button class="btn btn-sm btn-primary">
                        Simpan Maklumat
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>

 

<?php 



Page::append(<<<ASD
<script>
$('.js-example-basic-single').select2();
var globdat;

$(document).on("click", "#cp", function(e) {
    e.preventDefault();

    var f = document.getElementById("standard-select");
    var strUser = f.value;
    $.ajax({
        url: PORTAL + "webservice/permohonan/ajax",
        type: "post",
        dataType: 'json',
        data: {
            value: strUser,
        },
        success: function(data) {
            console.log(data)
            
			$('[name="su_user"]').val(data.u_id)
            $('[name="name"]').val(data.u_name)
            $('[name="email"]').val(data.u_email)
            $('[name="ic"]').val(data.u_ic)
            $('[name="alamat"]').val(data.u_alamat)
            $('[name="phone"]').val(data.u_phone)
        },
        error: function(err) {
            console.log("lol");
        }
    });
});

fetch();

function fetch() {
   $.ajax({
    url: PORTAL + "webservice/permohonan/ajaxfetch",
    type: "post",
    dataType: 'json',
    data: {
        value: "lolo",
    },
    success: function(getDatas) {
        console.log(getDatas)

        var data = getDatas.gerai
        var userData = getDatas.user


        var tbody = "";
        var sbody = "";
        var i = 1
        var w = 1

        for(let x = 0; x < userData.length; x++){

           
            sbody += `<option value="\${userData[x].u_ic}">\${userData[x].u_ic}</option>`
                             

        }

        for(let x = 0; x < data.length; x++){

           
            tbody += "<tr>";
                                     tbody += "<th>" + data[x].s_lot + "</th>";
                                     tbody += "<td>" + data[x].s_lot + " - " + "Tingkat " + data[x].s_level + " Blok " + data[x].s_block + ", " + data[x].s_road + ", " + data[x].s_residential + ", " + data[x].s_postcode +  " " + data[x].s_area + " " + data[x].s_state + "</td>";
                                       tbody += `<td><input type="checkbox" name="shop_picked[]" value="\${data[x].s_id}"></td>`;  
                                     tbody += "<tr>";
                             

        }
        $("#tbody").html(tbody);
        $("#standard-select").html(sbody);

    },
    error: function(err) {
        console.log("lol");
    }
});
};

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
 
ASD
);