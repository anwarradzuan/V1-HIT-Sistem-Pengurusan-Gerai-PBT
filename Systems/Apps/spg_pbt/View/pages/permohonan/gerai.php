<?php
new Controller(["permohonan"]);
Controller::alert();
?>
<div class="row">
    <div class="col-md-12">
        <?php
        switch (url::get(2)) {
            case "":
            case "list":
                Page::Load("pages/permohonan/gerai/list");
                break;

            case "edit":
                Page::Load("pages/permohonan/gerai/edit");
                break;
            case "view":
                Page::Load("pages/permohonan/gerai/view");
                break;
            case "delete":
                Page::Load("pages/permohonan/gerai/delete");
                break;

            case "add":
                Page::Load("pages/permohonan/gerai/add");
                break;
        }
        ?>
    </div>
</div>