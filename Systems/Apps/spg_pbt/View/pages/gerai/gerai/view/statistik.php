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
        width: 60%;
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

<!--  -->

<div class="mb-2 container-fluid bg-white shadow">
    <div class="row" style="height: 800px; width:100%;padding:20px;">
        <div class="col-4 d-flex justify-content-start flex-column mt-5 align-items-center">
            <div class="select mb-3" style="width: 100%;">
                <select name="format" id="format" onclick="myFunction()">
                    <option selected value="statistik tunggakan sewa">Statistik Tunggakan Sewa</option>
                </select>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Data-1</li>
                        <li class="list-group-item">Data-2</li>
                        <li class="list-group-item">Data-3</li>
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

<div class="mb-2 container-fluid ">
    <div class="row">
        <div class="col card m-2 ">
            <div class="card-body ">
                <h3 class="flex-h1 pt-4 pr-4 pl-4">Senarai Penyewa Gerai</h3>


                <div class="card mb-4 border-0 .d-flex">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemilik</th>
                                    <th>Nama Syarikat</th>
                                    <th>Tahun Menyewa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>HIT</td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>HIT</td>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>HIT</td>
                                    <td>2019</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>HIT</td>
                                    <td>2015</td>
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
</div>







<?php 
Page::append(<<<X
<script>
    function myFunction() {

        var x = document.getElementById("format").value;
       

        if (x === "statistik kekosongan kedai") {
            document.getElementById("lol").hidden = true
            document.getElementById("lol2").hidden = false
        } else if (x === "statistik tunggakan sewa") {
            document.getElementById("lol").hidden = false
            document.getElementById("lol2").hidden = true
        }
    }
</script>



<script>
    const labels = [
        'January',
        'February',
        'March',

    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: ['rgb(255, 99, 132)', 'red', 'black'],
            borderColor: 'rgb(255, 99, 132)',
            data: [10, 5, 2, ],
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
        'iddin ',
        'iddin',
        'iddin',

    ];

    const dataa = {
        labels: labelss,
        datasets: [{
            label: 'My second dataset',
            backgroundColor: ['rgb(255, 99, 132)', 'black', 'black'],
            borderColor: 'rgb(255, 99, 132)',
            data: [10, 5, 2, ],
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
    const labelpie = [
        'Gerai Berpenyewa',
        'Gerai Yang Masih Kosong',
    ];

    const datapie = {
        labels: labelpie,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: ['rgb(255, 99, 132)', 'green', 'green'],
            borderColor: 'rgb(255, 99, 132)',
            data: [10, 5],
        }]
    };

    const config3 = {
        type: 'pie',
        data: datapie,
        options: {
            responsive: false,
        }
    };
</script>

<script>
    const piechatlol = new Chart(
        document.getElementById('pie-stat'),
        config3
    );
</script>

X
);






 