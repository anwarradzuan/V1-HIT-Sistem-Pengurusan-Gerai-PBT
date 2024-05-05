<?php
new Controller(["gerai/gerai/view/utiliti"]);
?>
<div class="row">
	<div class="col-md-12">
	<?php
		Controller::alert();
		
		switch(url::get(4)){
			case "utiliti":
			case "list":
				Page::Load("pages/gerai/gerai/view/utiliti/list");
			break;
		}
	?>
	</div>
</div>	