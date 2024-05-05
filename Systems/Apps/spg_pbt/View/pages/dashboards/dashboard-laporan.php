<?php

	
?>

<!-- Nav tabs -->
<div class="m-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Laporan Sewa Gerai</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Laporan Tunggakan Sewa Gerai</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Laporan Kekosongan</a>
        </li>
    </ul>


    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <h4>Laporan Sewa Gerai</h4>
            <table id="report1" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Bil.</th>
                        <th>No. Pendaftaran</th>
                        <th>Nama Pemilik</th>
                        <th>No. Telefon</th>
                        <th>Jumlah Sewaan</th>
                        <th>Status Sewaan</th>
                        <th>Status Pemilikan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (rentals::list() as $rental) {
						$s = shops::getBy(["s_id" => $rental->r_shop]);
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $s[0]->s_refno ?></td>
                            <td><?= $rental->r_name ?></td>
                            <td><?= $rental->r_phone ?></td>
                            <td>RM <?= $rental->r_amount ?></td>
                            <td><?= $rental->r_status ?></td>
                            <td><?= $rental->r_tenant ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Bil.</th>
                        <th>No. Pendaftaran</th>
                        <th>Nama Pemilik</th>
                        <th>No. Telefon</th>
                        <th>Jumlah Sewaan</th>
                        <th>Status Sewaan</th>
                        <th>Status Pemilikan</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="tab-pane fade" id="menu1">
            <h4>Laporan Sewa Gerai</h4>
            <table id="report2" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Bil.</th>
                        <th>No. Pendaftaran</th>
                        <th>Nama Pemilik</th>
                        <th>No. Telefon</th>
                        <th>Alamat Gerai</th>
                        <th>Jumlah Sewaan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
					
                    foreach (rentals::getBy(['r_status' => 0]) as $rental) {
						$ss = shops::getBy(["s_id" => $rental->r_shop]);

                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $ss[0]->s_refno ?></td>
                            <td><?= $rental->r_name ?></td>
                            <td><?= $rental->r_phone ?></td>
                            <td><?= $rental->r_address ?></td>
                            <td>RM <?= $rental->r_amount ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Bil.</th>
                        <th>No. Pendaftaran</th>
                        <th>Nama Pemilik</th>
                        <th>No. Telefon</th>
                        <th>Nama Kedai</th>
                        <th>Jumlah Sewaan</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="tab-pane fade" id="menu2">
            <h4 class="mt-2">Laporan Kekosongan</h4>
            <table id="report3" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Bil.</th>
                        <th>Nombor Fail</th>
						<th>Alamat Gerai</th>
                        <th>Kawasan</th>
                        <th>Nilai Sewaan</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (shops::getBy(['s_owner' => 0]) as $shop) {
						$sg = shop_group::getBy(["sg_id" => $shop->s_group]);
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $shop->s_fileno ?></td>
							<td>
								<?= $shop->s_lot ?> <?= $shop->s_level ?  " - Tingkat " . $shop->s_level : "" ?> <?= $shop->s_block ? "Blok " . $shop->s_block : "" ?>,
							<?= $shop->s_road ? $shop->s_road . "," : "" ?>
							<?= $shop->s_residential ? $shop->s_residential . "," : "" ?>
							<?= $shop->s_postcode ? $shop->s_postcode : "" ?> <?= $shop->s_area ? $shop->s_area : "" ?>,
							<?= $shop->s_state ? $shop->s_state : "" ?>
							</td>
                            <td><?= $sg[0]->sg_name ?></td>
                            <td><?= $shop->s_price ?></td>
                            <td>View</td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Bil.</th>
                        <th>Nombor Fail</th>
						<th>Alamat Gerai</th>
                        <th>Kawasan</th>
                        <th>Nilai Sewaan</th>
                        <th>Tindakan</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>



<?php
$bootstrap = PORTAL . "assets/js/bootstrap.bundle.min.js";
$jqueryDataTables = PORTAL . "assets/js/jquery.dataTables.min.js";
$dataTablesButton = PORTAL . "assets/js/dataTables.buttons.min.js";
$jsZip = PORTAL . "assets/js/jszip.min.js";
$pdfMake = PORTAL . "assets/js/pdfmake.min.js";
$vfsFont = PORTAL . "assets/js/vfs_fonts.js";
$buttonHtml = PORTAL . "assets/js/buttons.html5.min.js";
$buttonPrint = PORTAL . "assets/js/buttons.print.min.js";
Page::append(
    <<<X

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="$bootstrap"></script>
<script src="$jqueryDataTables"></script>
<script src="$dataTablesButton"></script>
<script src="$jsZip"></script>
<script src="$pdfMake"></script>
<script src="$vfsFont"></script>
<script src="$buttonHtml"></script>
<script src="$buttonPrint"></script>


<script>
    $(document).ready(function () {
        $('#report1').DataTable(
            {
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            }
        );
    });
</script>

<script>
    $(document).ready(function () {
        $('#report2').DataTable(
            {
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            }
        );
    });
</script>

<script>
    $(document).ready(function () {
        $('#report3').DataTable(
            {
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            }
        );
    });
</script>
X
);
