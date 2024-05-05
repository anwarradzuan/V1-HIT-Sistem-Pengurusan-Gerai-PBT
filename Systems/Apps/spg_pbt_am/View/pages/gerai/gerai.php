<?php
new Controller(["gerai/gerai"]);
?>
<div class="row">
	<div class="col-md-12">
	<?php
		
		
		switch(url::get(2)){
			case "":
			case "list":
				Page::Load("pages/gerai/gerai/list");
			break;
			
			case "edit":
				Page::Load("pages/gerai/gerai/edit");
			break;
			
			case "view":
				Page::Load("pages/gerai/gerai/view");
			break;
			
			case "delete":
				Page::Load("pages/gerai/gerai/delete");
			break;
			
			case "add":
				Page::Load("pages/gerai/gerai/add");
			break;
		}
	?>
	</div>
</div>	