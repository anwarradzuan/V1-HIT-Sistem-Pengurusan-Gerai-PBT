<?php

$c_id		=	input::post('c_id');
$c_tenant	=	input::post('c_tenant');
$c_shop		=	input::post('c_shop');
$c_status 	=	input::post('c_status');
$c_updateBy =	Session::get('user')->u_id;
$order 		=	contracts::list(["order" => "c_id DESC"]);


if (empty($c_id)) 
{
	Alert::set("error", "Data Tidak Lengkap");
} 
else 
{
	$cont = contracts::getBy(["c_id" => $c_id]);
	$cont = $cont[0];
	
	$ccc = current($order);
	$main = $ccc->c_id + 1;
	
	$c = contracts::insertInto([
		'c_shop'		 =>		$c_shop,
		'c_tenant'		 => 	$c_tenant,
		'c_pic'			 =>		$cont->c_pic,
		'c_council'		 =>		$cont->c_council,
		'c_period' 		 => 	$cont->c_period,
		'c_price'	     => 	$cont->c_price,
		'c_deposit'		 => 	$cont->c_deposit,
		'c_shopType'	 => 	$cont->c_shopType,
		'c_key'			 => 	F::UniqKey("CONTRACT_"),
		'c_refer'		 => 	$cont->c_refer,
		'c_fail'		 => 	$cont->c_fail,
		'c_main'	 	 => 	$cont->c_id,
		'c_after'		 => 	$main,
		'c_updateBy' 	 => 	$c_updateBy,
		'c_dateStart' 	 => 	$cont->c_dateStart,
		'c_dateEnd'		 => 	$cont->c_dateEnd,
		
	]);

	if ($c) {
			
		$cs = contracts_status::insertInto([
			'cs_contracts'	 => 	$c_id,
			'cs_status'		 => 	$c_status,
			'cs_user' 		 =>		$c_tenant,
			'cs_date'  		 => 	date('Y-m-d h:m:s'),
			'cs_time'		 => 	F::GetTime(),
			'cs_description' => 	'Permohonan baru',
		]);
	
	} 
	else 
	{
		Alert::set("success", "Gagal menyimpan data permohonan.");
	}

	Alert::set(
		"success",
		"Maklumat permohonan kontrak telah disimpan."
	);
}