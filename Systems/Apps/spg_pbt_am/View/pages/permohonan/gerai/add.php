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
        Tambah Permohonanan

        <a href="<?= PORTAL ?>permohonan/gerai" class="btn btn-sm btn-primary float-right">
            Kembali
        </a>

        <button type="button" class="pl-3 pr-3 btn-sm btn-primary " data-toggle="modal" data-target="#exampleModalLong">
            Cari Pengguna
        </button>
    </div>

    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <!-- Modal -->
                <div class="modal" id="exampleModalLong" role="dialog" aria-labelledby="exampleModalLongTitle"
                    aria-hidden="true">
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
                                <div class="form-group ">
                                    <label for="">Nombor Kad Pengenalan</label></br>
                                    <!-- <select class="js-example-basic-single" style="width: 75%" name="state">
                                        <option value="990303015521">Alabama</option>
                                            ...
                                        <option value="WY">Wyoming</option> -->
                                    <select class="js-example-basic-single" id="standard-select" style="width: 75%"
                                        class="form-control">
                                        <!-- <option value="00000000000">00000000000</option>
                                        <option value="990303015521">1111</option>
                                        <option value="00000000000">00000000000</option>
                                        <option value="00000000000">00000000000</option> -->
                                    </select>
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" id="cp" class="btn btn-primary"
                                    data-dismiss="modal">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Maklumat Diri</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    Nama Penuh:
                                    <input type="text" class="form-control name" name="name"
                                        placeholder="Nama Penuh..." /><br />
                                </div>

                                <div class="col-md-6">
                                    Email:
                                    <input type="email" class="form-control" name="email" placeholder="Email" /><br />
                                </div>

                                <div class="col-md-6">
                                    No Kad Pengenalan:
                                    <input type="text" class="form-control" name="ic"
                                        placeholder="Kad Pengenalan" /><br />
                                </div>

                                <div class="col-md-6">
                                    Alamat
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" /><br />
                                </div>

                                <div class="col-md-6">
                                    Nombor Tel/Hp:
                                    <input type="number" class="form-control" name="phone" placeholder="Tel/Hp" /><br />
                                </div>

                                <div class="col-md-6">
                                    Gambar
                                    <input type="file" id="gambar" name="gambar"><br />
                                </div>
                            </div>
                        </div>
                    </div><br />


                    <div class="card container-fluid">
                        <div class="card-body container-fluid">
                            <h4>Maklumat Perniagaan</h4>

                            <div class="row container-fluid">
                                <!-- <div class="col-md-6">
                                    Nilai Sewaan:
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">RM</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="0.00" name="price" />
                                    </div><br />
                                </div> -->
                                <div class="col-md-6">
                                    Maklumat Perniagaan
                                    <input type="text" class="form-control" name="maklumatPerniagaan"
                                        placeholder="Maklumat Perniagaan" /><br />
                                </div>

                                <div class="col-md-6">
                                    Dokumen SSM
                                    <input type="file" id="ssm" name="ssm"><br />
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
                                        <div class="form"> <i class="fa fa-search"></i> <input type="text"
                                                class="form-control form-input" placeholder="Search anything..."
                                                id="search-g"></div>
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
                    <div class="card container-fluid">
                        <div class="card-body container-fluid">
                            <h4>Dokumen-Dokumen Pemohon</h4>
                            <table class="table table-responsive table-bordered" id="failtable">
                                <thead>
                                    <tr>
                                        <th class="col-5">Dokumen</th>
                                        <th class="col-1">Label</th>
                                        <th class="col-1">Tindakan</th>

                                    </tr>
                                </thead>
                                <tbody id="filesContainer">
                                    <tr>

                                        <td class="col-5">
                                            <input type="file" id="dokfile" name="titles[]"><br />
                                        </td>
                                        <td class="col-1">
                                            <input type="text" id="doklabel" name="doklabel[]"><br />
                                        </td>
                                        <td class="col-1"><button>Padam</button></td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="col-md-12 text-center" id="tambahFail">
                                <button class="btn btn-sm btn-primary">
                                    Tambah Fail
                                </button>

                            </div>
                        </div>
                    </div><br />

                </div>



                <div class="col-md-12 text-center">
                    <?php
                    Controller::form("permohonan", [
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

            if(userData[x].u_role == 4) {
                sbody += `<option value="\${userData[x].u_ic}">\${userData[x].u_ic}</option>`
            }

            
        }

        for(let x = 0; x < data.length; x++){

           
            tbody += "<tr>";
            tbody += "<th>" + data[x].s_lot + "</th>";
            tbody += "<td>" + data[x].s_lot + " - " + "Tingkat " + data[x].s_level + " Blok " + data[x].s_block + ", " + data[x].s_road + ", " + data[x].s_residential + ", " + data[x].s_postcode +  " " + data[x].s_area + " " + data[x].s_state + "</td>";
            tbody += `<td><input type="checkbox" name="shop_picked" value="\${data[x].s_id}"></td>`;  

            /* <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> */
         
            tbody += "</tr>";
                             

        }
        $("#tbody").html(tbody);
        $("#standard-select").html(sbody);

    },
    error: function(err) {
        console.log("lol");
    }
});
};

$(document).on("click", "#tambahFail", function(e) {
    e.preventDefault();

    var f = document.getElementById("standard-select");
    var strUser = f.value;
     
    var tbody = "";
    var sbody = "";
   
    tbody += `<tr class="table-data">`;
    tbody += `<td class="col-5"><input type="file" id="dokfile" name="titles[]"><br /></td>`;
    tbody += `<td class="col-1"><input type="text" id="doklabel" name="doklabel[]"><br /></td>`;
    tbody += `<td class="col-1" ><button id="delfbtn">Padam</button></td>`;           
    tbody += "</tr>";
  
        
    $("#filesContainer").append(tbody);
         

});

$(document).on("click", "#delfbtn", function(e) {
    e.preventDefault();

    console.log("lol")
    document.getElementById("failtable").deleteRow(1);
         

});

$(document).on("click", "#testFail", function(e) {
    e.preventDefault();

    var mod = [];

    var titles = $('input[name^=titles]').map(function(idx, elem) {
        return $(elem).val();
      }).get();
    
    for(let i = 0; i < titles.length; i++){
       var tit = titles[i].substr(12)

        mod.push(tit);
    }
    console.log(mod)

});

 

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