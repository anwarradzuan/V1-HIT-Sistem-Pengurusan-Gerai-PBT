<?php
new Controller(["gerai/kawasan"]);
?>
<div class="row">
	<div class="col-md-12">
	<?php
		switch(url::get(2)){
			case "":
			case "list":
				Page::Load("pages/gerai/kawasan/list");
			break;
			
			case "edit":
				Page::Load("pages/gerai/kawasan/edit");
			break;
			
			case "view":
				Page::Load("pages/gerai/kawasan/view");
			break;
			
			case "delete":
				Page::Load("pages/gerai/kawasan/delete");
			break;
			
			case "add":
				Page::Load("pages/gerai/kawasan/add");
			break;
		}
	?>
	</div>
</div>	