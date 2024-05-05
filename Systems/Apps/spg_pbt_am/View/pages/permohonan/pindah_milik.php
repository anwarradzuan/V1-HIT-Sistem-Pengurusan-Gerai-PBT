<?php
new Controller(['pindah_milik']);
Controller::alert();
?>
<div class="row">
    <div class="col-md-12">
        <?php
        switch (url::get(2)) {
            case "":
            case "list":
                Page::Load("pages/permohonan/pindah_milik/list");
                break;
            case "edit":
                Page::Load("pages/permohonan/pindah_milik/edit");
                break;
            case "view":
                Page::Load("pages/permohonan/pindah_milik/view");
                break;
            case "delete":
                Page::Load("pages/permohonan/pindah_milik/delete");
                break;

            case "add":
                Page::Load("pages/permohonan/pindah_milik/add");
                break;
        }
        ?>
    </div>
</div>