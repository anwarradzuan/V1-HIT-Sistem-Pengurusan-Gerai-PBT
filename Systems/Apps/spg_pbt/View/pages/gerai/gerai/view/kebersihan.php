<?php
new Controller(["gerai/gerai/view/kebersihan"]);
?>
<div class="row">
	<div class="col-md-12">
	<?php
		Controller::alert();
		
		switch(url::get(4)){
			case "kebersihan":
			case "list":
				Page::Load("pages/gerai/gerai/view/kebersihan/list");
			break;

			case "view":
				Page::Load("pages/gerai/gerai/view/kebersihan/view");
			break;
			
			case "edit":
				Page::Load("pages/gerai/gerai/view/kebersihan/edit");
			break;
			
			case "delete":
				Page::Load("pages/gerai/gerai/view/kebersihan/delete");
			break;
			
			case "add":
				Page::Load("pages/gerai/gerai/view/kebersihan/add");
			break;
		}
	?>
	</div>
</div>	