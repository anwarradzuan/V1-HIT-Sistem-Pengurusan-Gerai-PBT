<?php
Controller::alert();
?>


<div class="card">
    <div class="card-header">
        Tambah Permohonanan

        <a href="<?= PORTAL ?>permohonan/cagaran" class="btn btn-sm btn-primary float-right">
            Kembali
        </a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <select class="form-control" id="selectContract" style="width: 100%">
                </select>
            </div>
            <div class="col-2">
                <button class="btn btn-sm btn-primary float-right" id="btnSearchContract">Cari Kontrak</button>
            </div>
        </div>
        <div class="row mt-4" id="maklumat" style="display: none;">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Maklumat Penyewa</h4>
                        <div class="row">
                            <div class="col">
                                <p id="namaPenuhPenyewa">-</p>
                                <p id="icPenyewa">-</p>
                                <p id="emailPenyewa">-</p>
                                <p id="phonePenyewa">-</p>
                            </div>
                            <div class="col">
                                <h5>Alamat</h5>
                                <p id="alamatPenyewa">-</p>
                                <p id="areaPenyewa">-</p>
                                <p id="postcodePenyewa">-</p>
                                <p id="negeriPenyewa">-</p>
                                <p id="negaraPenyewa">-</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Maklumat Gerai</h4>
                        <div class="row">
                            <div class="col table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Rujukan</strong></td>
                                            <td>
                                                <p id="refGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Lot Gerai</strong></td>
                                            <td>
                                                <p id="lotGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Level Gerai</strong></td>
                                            <td>
                                                <p id="levelGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status</strong></td>
                                            <td>
                                                <p id="statusGerai">-</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Harga</strong></td>
                                            <td>
                                                <p id="priceGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Blok</strong></td>
                                            <td>
                                                <p id="blockGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kumpulan</strong></td>
                                            <td>
                                                <p id="groupGerai">-</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Jalan Gerai</strong></td>
                                            <td>
                                                <p id="roadGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kawasan Residensi</strong></td>
                                            <td>
                                                <p id="residentialGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kawasan</strong></td>
                                            <td>
                                                <p id="areaGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Poskod</strong></td>
                                            <td>
                                                <p id="postcodeGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Negeri</strong></td>
                                            <td>
                                                <p id="negeriGerai">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Negara</strong></td>
                                            <td>
                                                <p id="negaraGerai">-</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Lokasi Gerai(longitude, latitude)</strong></td>
                                            <td>
                                                <p id="longitudeGerai">-</p>
                                                <p id="latitudeGerai">-</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center mt-2">
                <button class="btn btn-sm btn-primary" id="btnMohonCagaran">Mohon Wang Cagaran</button>
            </div>
        </div>
    </div>
    <?php
    Page::append(
        <<<ASD
<script>
$('#selectContract').select2();
var globdat;

let penyewa=null;
let gerai=null;

$('#btnMohonCagaran').click(() => {
    let data = {
        rd_contract: $('#selectContract').val(),
        rd_tenant: this.penyewa.u_id,
        rd_status: 0,
    }

    $.ajax({
        url: PORTAL + 'webservice/cagaran/request-deposit',
        type: "post",
        dataType: 'text',
        data: data,
        success: (item) => {
            console.log('lalu')
            window.location = PORTAL + "permohonan/cagaran";
        },
        error: (err) => {
            console.log(err);
        }
    })
})

$.ajax({
    url: PORTAL + "webservice/cagaran/list",
    type: "get",
    dataType: 'json',
    success: (item) => {
        let contracts = item.contracts;
        console.log('item', contracts);

        contracts.forEach((contract) => {
            console.log('contract', contract);
            $('#selectContract').append('<option value="' + contract.c_id + '">' + contract.c_refer + '</option>');
        });

        $('#selectContract').select2();
    },
    error: (err) => {
        console.log(err);
        
    }
   
})

$("#btnSearchContract").click(()=>{
console.log('changed',)

let c_id = $('#selectContract').val()
$.ajax({
    url: PORTAL + "webservice/cagaran/selected-contract",
    type: "post",
    dataType: 'json',
    data:{
        c_id: c_id
    },
    success: (item) => {
        this.penyewa = item.user;
        this.gerai = item.shop;
        $('#maklumat').show();
        console.log('c', item);
        $('#namaPenuhPenyewa').html(item.user.u_full_name)
        $('#icPenyewa').html(item.user.u_ic)
        $('#emailPenyewa').html(item.user.u_email)
        $('#alamatPenyewa').html(item.user.u_alamat)
        $('#areaPenyewa').html(item.user.u_area)
        $('#postcodePenyewa').html(item.user.u_postcode)
        $('#negeriPenyewa').html(item.user.u_state)
        $('#negaraPenyewa').html(item.user.u_country)
        $('#phonePenyewa').html(item.user.u_phone)

        $('#refGerai').html(item.shop.s_refno)
        $('#lotGerai').html(item.shop.s_lot)
        $('#levelGerai').html(item.shop.s_level)
        $('#roadGerai').html(item.shop.s_road)
        $('#residentialGerai').html(item.shop.s_residential)
        $('#areaGerai').html(item.shop.s_area)
        $('#postcodeGerai').html(item.shop.s_postcode)
        $('#negeriGerai').html(item.shop.s_state)
        $('#negaraGerai').html(item.shop.s_country)
        $('#statusGerai').html(item.shop.s_status)
        $('#longitudeGerai').html(item.shop.s_longitude)
        $('#latitudeGerai').html(item.shop.s_latitude)
        $('#priceGerai').html(item.shop.s_price)
        $('#blockGerai').html(item.shop.s_block)
        $('#groupGerai').html(item.shop.s_group)

    },
    error: (err) => {
        console.log(err);
    }
   
})
})
</script>
 
ASD
    );
