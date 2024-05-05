<?php
new Controller(["sewaan/sewaan"]);
Controller::alert();
?>
<div class="row">
	<div class="col-md-12">
	<?php
		
		switch(url::get(2)){
			case "":
			case "list":
				Page::Load("pages/sewaan/sewaan/list");
			break;
			
			case "edit":
				Page::Load("pages/sewaan/sewaan/edit");
			break;
			case "view":
                Page::Load("pages/sewaan/sewaan/view");
			break;
			case "delete":
				Page::Load("pages/sewaan/sewaan/delete");
			break;
			
			case "add":
				Page::Load("pages/sewaan/sewaan/add");
			break;
		}
	?>
	</div>
</div>	