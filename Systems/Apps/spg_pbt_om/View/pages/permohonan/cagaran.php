<?php
new Controller(['cagaran']);
Controller::alert();
?>
<div class="row">
    <div class="col-md-12">
        <?php
        switch (url::get(2)) {
            case "":
            case "list":
                Page::Load("pages/permohonan/cagaran/list");
                break;

            case "edit":
                Page::Load("pages/permohonan/cagaran/edit");
                break;
            case "view":
                Page::Load("pages/permohonan/cagaran/view");
                break;
            case "delete":
                Page::Load("pages/permohonan/cagaran/delete");
                break;

            case "add":
                Page::Load("pages/permohonan/cagaran/add");
                break;
        }
        ?>
    </div>
</div>