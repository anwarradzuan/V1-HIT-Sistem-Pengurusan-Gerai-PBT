<?php
new Controller(["gerai/kawasan/view/aduan"]);
?>
<div class="row">
	<div class="col-md-12">
	<?php
		Controller::alert();
		
		switch(url::get(4)){
			case "aduan":
			case "list":
				Page::Load("pages/gerai/kawasan/view/aduan/list");
			break;
		}
	?>
	</div>
</div>	