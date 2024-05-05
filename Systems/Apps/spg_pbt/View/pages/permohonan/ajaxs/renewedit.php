<?php
$id 		= $_POST["id"];
$status 	= (int)$_POST["status"];
$c 			= contracts::getBy(["c_id" => $id);
$cs			= contracts_status::getBy(["cs_contracts" => $id);


if($status == 1)
{
	print "success";
}
else
{
	if($cs)
	{
		contracts_status::insertInto([
				"cs_contracts"		=> $c[0]->c_id,
				"cs_status"         => Input::post("status"),
				"cs_description"    => Input::post("description"),
				"cs_date"           => date("Y-m-d h:m:s"),
				"cs_time"           => F::GetTime(),
				"cs_user"           => $c[0]->c_tenant,
		]);

		Alert::set(
			"success",
			"Maklumat status permohonan berjaya diubah.",
			[
				"redirect"    => PORTAL . "permohonan/pembaharuan/edit/" . url::get(3)
			]
		);
	}
	else{
		Alert::set(
			"error",
			"Maklumat status tidak dijumpai.",
			[
				"redirect"    => PORTAL . "permohonan/pembaharuan/edit/" . url::get(3)
			]
		);
	}
		
}
// contracts_status::insertInto([
	// "cs_contracts"		=>	$id,
	// "cs_status"			=>	$status,
	// "cs_user"			=>	$contract->c_tenant,
	// "cs_date"			=>	date("Y-m-d h:m:s"),
	// "cs_time"			=>	F::GetTime(),
	// "cs_description"	=>	$cs->cs_description,	
// ]); 





 






