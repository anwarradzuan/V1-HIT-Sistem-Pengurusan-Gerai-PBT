<div class="row">
    <div class="col-md-12">
        <?php
        // Controller::alert();

        switch (url::get(1)) {
            case "":
                if (Session::get("user")->u_role == 3) {
                    Page::Load("pages/ahlimajlis/dokumen");
                } else if (Session::get("user")->u_role == 4) {
                    Page::Load("pages/orangawam/dokumen");
                }

                break;
        }
        ?>
    </div>
</div>