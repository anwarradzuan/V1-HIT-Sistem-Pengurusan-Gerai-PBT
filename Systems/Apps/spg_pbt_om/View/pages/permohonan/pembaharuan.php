<?php
new Controller(["pembaharuan"]);
Controller::alert();
?>
<div class="row">
	<div class="col-md-12">
	<?php
		switch(url::get(2)){
			case "":
			case "list":
				Page::Load("pages/permohonan/pembaharuan/list");
			break;
			
			case "view":
                Page::Load("pages/permohonan/pembaharuan/view");
			break;
			
			case "edit":
				Page::Load("pages/permohonan/pembaharuan/edit");
			break;
			
			case "add":
				Page::Load("pages/permohonan/pembaharuan/add");
			break;
			
			case "delete":
				Page::Load("pages/permohonan/pembaharuan/delete");
			break;
		}
	?>
	</div>
</div>	