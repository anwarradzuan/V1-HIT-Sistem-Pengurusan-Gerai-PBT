 <div class="row">
     <div class="col-md-12">
         <?php
            // Controller::alert();

            switch (url::get(1)) {
                case "":
                case "list":
                    Page::Load("pages/ahlimajlis/dashboard");
                    break;
            }
            ?>
     </div>
 </div>