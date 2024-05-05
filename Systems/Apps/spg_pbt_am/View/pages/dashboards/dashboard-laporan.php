<!-- Nav tabs -->
<div class="m-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a  class="nav-link active" data-toggle="tab" href="#home">Laporan Sewa Gerai</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" data-toggle="tab" href="#menu1">Laporan Tunggakan Sewa Gerai</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" data-toggle="tab" href="#menu2">Laporan Kekosongan</a>
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
                        <th>Nombor Lot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (shops::list() as $shop) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $shop->s_lotno ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Bil.</th>
                        <th>Nombor Lot</th>
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
                        <th>Nombor Lot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (shops::list() as $shop) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $shop->s_lotno ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Bil.</th>
                        <th>Nombor Lot</th>
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
                        <th>Kawasan</th>
                        <th>Nilai Sewaan</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (shops::getBy(['s_owner' => 0]) as $shop) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $shop->s_fileno ?></td>
                            <td><?= $shop->s_road ?>, <?= $shop->s_residential ?>, <?= $shop->s_area ?></td>
                            <td><?= $shop->s_price ?></td>
                            <td>View</td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Bil.</th>
                        <th>Nombor Fail</th>
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
$portal = PORTAL . "assets/js/bootstrap.bundle.min.js";
Page::append(<<<X

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="$portal"></script>


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
