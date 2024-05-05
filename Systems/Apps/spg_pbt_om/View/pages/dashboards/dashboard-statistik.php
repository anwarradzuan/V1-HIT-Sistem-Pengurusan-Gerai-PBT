<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&family=Roboto:wght@300;400;500;700&display=swap');

    * {
        font-family: 'Encode Sans Expanded', sans-serif;
        font-family: 'Roboto', sans-serif;
    }

    .Loading {
        margin: 0 0 0 30px;

        position: relative;
        display: inline-block;
        width: 80%;
        height: 10px;
        background: #f1f1f1;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
        border-radius: 4px;
        overflow: hidden;
    }

    .Loading:after {
        content: '';
        position: absolute;
        left: 0;
        width: 0;
        height: 100%;
        border-radius: 4px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .2);
        width: 100%;
        background: #5d5d5d;
    }

    .Loading-2 {
        margin: 0 0 0 30px;

        position: relative;
        display: inline-block;
        width: 80%;
        height: 10px;
        background: #f1f1f1;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
        border-radius: 4px;
        overflow: hidden;
    }

    .Loading-2:after {
        content: '';
        position: absolute;
        left: 0;
        width: 0;
        height: 100%;
        border-radius: 4px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .2);
        width: 60%;
        background: #1dc9b7;
    }

    .Loading-3 {
        margin: 0 0 0 30px;

        position: relative;
        display: inline-block;
        width: 80%;
        height: 10px;
        background: #f1f1f1;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
        border-radius: 4px;
        overflow: hidden;
    }

    .Loading-3:after {
        content: '';
        position: absolute;
        left: 0;
        width: 0;
        height: 100%;
        border-radius: 4px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .2);
        width: 60%;
        background: #39a1f4;
    }

    .Loading-4 {
        margin: 0 0 0 30px;

        position: relative;
        display: inline-block;
        width: 80%;
        height: 10px;
        background: #f1f1f1;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
        border-radius: 4px;
        overflow: hidden;
    }

    .Loading-4:after {
        content: '';
        position: absolute;
        left: 0;
        width: 0;
        height: 100%;
        border-radius: 4px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .2);
        width: 60%;
        background: #a38cc6;
    }


    .side-data {

        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }

    .load-title {
        padding-left: 30px;
    }

    .loading-pos {

        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }

    .g-box-size {
        width: 100%;
        display: flex;
        flex-direction: row;
    }

    .graphs {
        height: 100%;
        width: 1000px;
    }

    .big-graph {
        height: 1000px;
        width: 100%;
    }

    #map {
        width: 100%;
        height: 700px;
    }

    .pie-size {
        width: 100px;
        height: 500px;
    }

    .piechart {
        width: 400px;
        height: 400px;
    }

    td {
        font-size: 30px;
    }

    h1 {
        font-weight: bold;
    }

    .hm-gradient {
        background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
    }

    .darken-grey-text {
        color: #2E2E2E;
    }

    .input-group.md-form.form-sm.form-2 input {
        border: 1px solid #bdbdbd;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .input-group.md-form.form-sm.form-2 input.purple-border {
        border: 1px solid #9e9e9e;
    }

    .input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
        border: 1px solid #ba68c8;
        box-shadow: none;
    }

    .form-2 .input-group-addon {
        border: 1px solid #ba68c8;
    }

    .danger-text {
        color: #ff3547;
    }

    .success-text {
        color: #00C851;
    }

    .table-bordered.red-border,
    .table-bordered.red-border th,
    .table-bordered.red-border td {
        border: 1px solid #ff3547 !important;
    }

    .table.table-bordered th {
        text-align: center;
    }

    .height {
        height: 100vh
    }

    .search {
        position: relative;
        box-shadow: 0 0 40px rgba(51, 51, 51, .1)
    }

    .search input {
        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4
    }

    .search input:focus {
        box-shadow: none;
        border: 2px solid blue
    }

    .search .fa-search {
        position: absolute;
        top: 20px;
        left: 16px
    }

    .search button {
        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
        background: blue
    }

    .flex-h1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;

    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        outline: 0;
        box-shadow: none;
        border: 0 !important;
        background: #5c6664;
        background-image: none;
        flex: 1;
        padding: 0 .5em;
        color: #fff;
        cursor: pointer;
        font-size: 1em;
        font-family: 'Open Sans', sans-serif;
    }

    select::-ms-expand {
        display: none;
    }

    .select {
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        line-height: 3;
        background: #5c6664;
        overflow: hidden;
        border-radius: .25em;
    }

    .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 0 1em;
        background: #2b2e2e;
        cursor: pointer;
        pointer-events: none;
        transition: .25s all ease;
    }

    .select:hover::after {
        color: #23b499;
    }
</style>

<div class="row mb-3">
    <div class="col-md-4 col-sm-6 col-12 mb-2">
        <div class="card lena-card  no-border hover-shadow">
            <div class="card-body">
                <?php
                $x = shop_group::getBy(["sg_status" => 1]);
                $rx = rentals::getBy(["r_status" => 0]);
                $rxxe = rentals::getBy(["r_status" => 1]);
                $r = rentals::list();
                $sr = shops::getBy(["s_owner" => 0]);
                $skkk = shops::getBy(["s_status" => 0]);
                $sk = shops::getBy(["s_status" => 0]);
                $skee = shops::getBy(["s_status" => 1]);
                $s = shops::list();
                $initial = 0;
                for ($i = 0; $i < count($rx); $i++) {

                    $change = $rx[$i]->r_amount;
                    $changed = (int)$change;
                    $initial += $changed;
                    /* var_dump($initial); */
                }
                /* die(var_dump($initial)); */
                ?>
                <div class="row">
                    <div class="col-md-4 d-none d-md-block center-typcn">
                        <span class="iconify" data-icon="foundation:graph-pie" data-width="100" data-height="100"></span>
                    </div>
                    <div class="col-md-8 col-12 col-sm-6">
                        <p class="mb-0">Kedaid Kosong</p>
                        <strong class="fontsize-card"><?= count($skee) ?></strong>
                        <p class="mb-0">Kedai Yang Dah Diambil</p>
                        <strong class="fontsize-card"><?= count($skkk) ?></strong>
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
                        <span class="iconify" data-icon="carbon:chart-median" data-width="100" data-height="100"></span>
                    </div>
                    <div class="col-md-8 col-12 col-sm-6">
                        <p class="mb-0">Kedai Yang Sudah Dibayar</p>
                        <strong class="fontsize-card"><?= count($rxxe) ?></strong>
                        <p class="mb-0">Kedai Yang Belum Bayar</p>
                        <strong class="fontsize-card"><?= count($rx) ?></strong>
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
                        <span class="iconify" data-icon="codicon:graph" data-width="100" data-height="100"></span>
                    </div>
                    <div class="col-md-8 col-12 col-sm-6">
                        <p class="mb-0">Jumlah Tunggakan</p>
                        <strong class="fontsize-card"><?= $initial ?></strong>
                    </div>
                </div>
            </div>
            <div class="lena-progress bg-lena-pastel-blue" data-progress="50"></div>
        </div>
    </div>
</div>

<div class="mb-5 container-fluid card ">
    <div class="row ">

        <div class="card-body g-box-size">
            <div class="graphs">
                <h2 class="">Sewaan Bulanan</h2>
                <canvas id="myChart" width="1000" height="300"></canvas>
            </div>
            <div class="side-data">
                <div class="loading-pos">
                    <div class="load">
                        <div class="load-title">Jumlah berbayar / Jumalah Tunggakan</div>
                        <div class="Loading"></div>
                    </div>
                    <div class="load">
                        <div class="load-title">Kedai yang belum mampu disewakan</div>
                        <div class="Loading-2"></div>
                    </div>
                    <div class="load">
                        <div class="load-title">lol</div>
                        <div class="Loading-3"></div>
                    </div>
                    <div class="load">
                        <div class="load-title">lol</div>
                        <div class="Loading-4"></div>
                    </div>




                </div>
            </div>
        </div>
    </div>

</div>

<div class="mb-2 container-fluid ">
    <div class="row">
        <div class="col card m-2 ">
            <div class="card-body ">
                <h3 class="flex-h1 pt-4 pr-4 pl-4">Senarai Gerai Yang Masih Tertunggak</h3>


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
                                <?php
                                $point = 1;

                                foreach (rentals::getBy(["r_status" => 0]) as $t) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $point++ ?></th>
                                        <td><?= $t->r_name; ?></td>
                                        <!-- <td>HIT</td> -->
                                        <td><?= $t->r_amount; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <!-- <tr>
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
                                </tr> -->
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
</div>




<div class="mb-2 container-fluid bg-white shadow">
    <div class="row" style="height: 800px; width:100%;padding:20px;">
        <div class="col-4 d-flex justify-content-start flex-column mt-5 align-items-center">
            <div class="select mb-3" style="width: 100%;">
                <select name="format" id="format" onclick="myFunction()">

                    <option selected value="statistik tunggakan sewa">Statistik Tunggakan Sewa</option>
                    <option value="statistik kekosongan kedai" class="op-2">Statistik Kekosongan Kedai</option>
                </select>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <ul class="list-group list-group-flush" id="st">
                        <li class="list-group-item">Gerai Yang Disewakan : <span><?= count($r) ?></span></li>
                        <li class="list-group-item">Gerai Yang Tertunggak : <span><?= count($rx) ?></span></li>
                        <li class="list-group-item">Jumlah Tunggakan : <span><?= $initial ?></span></li>
                    </ul>
                    <ul hidden class="list-group list-group-flush" id="kk">
                        <li class="list-group-item">Kedai Yang Ada : <span><?= count($s) ?></span></li>
                        <li class="list-group-item">Kedai Kosong : <span><?= count($sk) ?></span></li>
                        <li class="list-group-item">Kedai Disewakan : <span><?= count($sr) ?></span></li>
                        <li class="list-group-item">Kedai Rosak : <span>
                                <!-- <?= count($sr) ?> -->0
                            </span></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col d-flex d-flex justify-content-start  flex-column align-items-center  " style="width: 100%;padding:30px;">
            <div class="">
                <canvas id="lol" width="600" height="600"></canvas>
                <canvas id="lol2" width="600" height="600" hidden></canvas>
            </div>
        </div>
    </div>
</div>

<?php
Page::append(
    <<<X
<script>
    function myFunction() {

        console.log(PORTAL)

        

        var x = document.getElementById("format").value;

        console.log(document.getElementById("kk"))

        if (x === "statistik tunggakan sewa") {
            document.getElementById("lol").hidden = false
            document.getElementById("lol2").hidden = true
            document.getElementById("kk").hidden = true
            document.getElementById("st").hidden = false
            /* document.getElementsByClassName("kk").hidden = true */
            $("kk").hide();
        } else if (x === "statistik kekosongan kedai") {
            document.getElementById("lol").hidden = true
            document.getElementById("st").hidden = true
            document.getElementById("lol2").hidden = false
            document.getElementById("kk").hidden = false
            /* document.getElementsByClassName("st").hidden = false */
            $("st").hide();
        }
    }
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


<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "Mei", "Jun", "Julai", "Ogos", "September", "October", "November", "Disember"],
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
X
);
