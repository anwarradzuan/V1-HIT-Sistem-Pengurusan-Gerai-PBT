<?php
  $getvid = tutorial_video::getBy(["tv_id" => url::get(1)]);    
?>

<div class="row d-flex flex-column justify-content-center align-items-center align-content-center" style="margin-left: 0; margin-right: 0; margin-top: 0px;">
<h1><?php echo $getvid[0]->tv_title ?></h1>
  <video width="800" height="500" controls autoplay>
    <source src="<?= PORTAL ?>assets/vids/<?= $getvid[0]->tv_desc ?>" type="video/mp4">
  </video>
</div>

