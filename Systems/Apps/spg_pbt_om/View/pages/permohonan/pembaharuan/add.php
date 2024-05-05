<?php
Controller::alert();
?>

<div class="card">
    <div class="card-header">
        Tambah Permohonan

        <a href="<?= PORTAL ?>permohonan/pembaharuan" class="btn btn-sm btn-primary float-right">
            Kembali
        </a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
				<select class="form-control" id="selectContract" name="group" style="width:100%">
					<option value="0">Sila Pilih</option>
				<?php
					foreach(contracts::list() as $c){					
					?>
					<option value="<?= $c->c_id ?>"><?= $c->c_refer ?> </option>
					<?php
					}
				?>
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
                        <h4>Maklumat Gerai</h4>
                        <div class="row">
                            <div class="col table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Rujukan</strong></td>
                                            <td>
                                                <p id="refer">-</p>
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
                                                <p id="price">-</p>
                                            </td>
                                        </tr>
										 <tr>
                                            <td><strong>Cagaran</strong></td>
                                            <td>
                                                <p id="deposit">-</p>
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
			<div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Maklumat Penyewa</h4>
                        <div class="row">
                            <div class="col">
                                <p id="nama">-</p>
                                <p id="ic">-</p>
                                <p id="email">-</p>
                                <p id="phone">-</p>
                            </div>
                            <div class="col">
                                <h5>Alamat</h5>
                                <p id="alamat">-</p>
                                <p id="area">-</p>
                                <p id="postcode">-</p>
                                <p id="negeri">-</p>
                                <p id="negara">-</p>
                            </div>
                        </div>
                    </div>
                </div><br>
				<div class="card">
                    <div class="card-body">
                        <h4>Tempoh Kontrak</h4>
                        <div class="row"> 
                            <div class="col table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Tarikh Mula</strong></td>
                                            <td>
                                                <p id="datestart">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tarikh Tamat</strong></td>
                                            <td>
                                                <p id="dateend">-</p>
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
			
            <div class="col text-center mt-2">
                <button class="btn btn-sm btn-primary" id="btnrenew">Mohon Pembaharuan</button>
            </div>
        </div>

    </div>
    <?php

    Page::append(
        <<<ASD
<script>

$('#selectContract').select2();
var globdat;

let penyewa = null;
let gerai = null;

$('#btnrenew').click(() => {
    let data = {
        c_id: $('#selectContract').val(),
		c_tenant: this.penyewa.u_id,
		c_shop: this.gerai.s_id,
		c_status: 0,
	}
	
    $.ajax({
        url: PORTAL + 'webservice/permohonan/renewcontract',
        type: "post",
        dataType: 'text',
        data: data,
        success: (item) => {
         
		 console.log('lalu')
          window.location = PORTAL + "permohonan/pembaharuan";
        },
        error: (err) => {
            console.log(err);
        }
    })
})

$("#btnSearchContract").click(()=>{
console.log('changed',)

let id = $('#selectContract').val()
    $.ajax({
        url: PORTAL + "webservice/permohonan/renewselect",
        type: "post",
        dataType: 'json',
        data: {
            id: id,
        },
        success: (data) => {
            
            var user = data.user;
            var shop = data.shop;
            var contract = data.contract;
          
			
			this.penyewa = data.user;
			this.gerai = data.shop;
			console.log('status gerai ->', this.gerai);
			
			$('#maklumat').show();
			
			switch(this.gerai)
			{
				case '0':
					$('#statusGerai').html("Tidak Sedia")
				break;
				case '1':
					$('#statusGerai').html("Sedia")
				break;
				case '2':
					$('#statusGerai').html("Pembangunan")
				break;
				case '3':
					$('#statusGerai').html("Baik Pulih")
				break;
				case '4':
					$('#statusGerai').html("Rosak")
				break;
				case '5':
					$('#statusGerai').html("Terbengkalai")
				break;
			}
			
		
			
			$('#nama').html(user.u_full_name);
			$('#ic').html(user.u_ic);
			$('#email').html(user.u_email);
			$('#alamat').html(user.u_alamat);
			$('#area').html(user.u_area);
			$('#postcode').html(user.u_postcode);
			$('#negeri').html(user.u_state);
			$('#negara').html(user.u_country);
			$('#phone').html(user.u_phone);
			$('#datestart').html(contract.c_dateStart);
			$('#dateend').html(contract.c_dateEnd);

			$('#refer').html(shop.s_refno);
			$('#price').html(shop.s_price);
			$('#deposit').html(contract.c_deposit);
			$('#lotGerai').html(shop.s_lot)
			$('#levelGerai').html(shop.s_level)
			$('#roadGerai').html(shop.s_road)
			$('#residentialGerai').html(shop.s_residential)
			$('#areaGerai').html(shop.s_area)
			$('#postcodeGerai').html(shop.s_postcode)
			$('#negeriGerai').html(shop.s_state)
			$('#negaraGerai').html(shop.s_country)
			
			$('#longitudeGerai').html(shop.s_longitude)
			$('#latitudeGerai').html(shop.s_latitude)
			$('#blockGerai').html(shop.s_block)
			$('#groupGerai').html(shop.s_group)
			
			

        },
        error: function(err) {
            console.log("error");
			
			 
        }
    });

})
</script>
 
ASD
    );
