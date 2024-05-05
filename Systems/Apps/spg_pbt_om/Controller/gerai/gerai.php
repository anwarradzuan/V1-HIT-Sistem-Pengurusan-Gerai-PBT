<?php

switch(input::post("action")){
	case "add":
		if(
			Input::post("group") > 0 && 
			!empty(Input::post("fileno")) && 
			!empty(Input::post("lot")) && 
			!empty(Input::post("road")) && 
			!empty(Input::post("postcode")) 
		){
			
			shops::insertInto([
				"s_group"		=> Input::post("group"),
				"s_fileno"		=> Input::post("fileno"),
				"s_lotno"		=> Input::post("lotno"),
				"s_hsd"			=> Input::post("hsd"),
				"s_ref1"		=> Input::post("ref1"),
				"s_ref2"		=> Input::post("ref2"),
				"s_price"		=> Input::post("price"),
				"s_status"		=> Input::post("status"),
				"s_lot"			=> Input::post("lot"),
				"s_level"		=> Input::post("level"),
				"s_block"		=> Input::post("block"),
				"s_road"		=> Input::post("road"),
				"s_residential"	=> Input::post("residential"),
				"s_postcode"	=> Input::post("postcode"),
				"s_area"		=> Input::post("area"),
				"s_state"		=> Input::post("state"),
				"s_latitude"	=> Input::post("lat"),
				"s_longitude"	=> Input::post("lng"),
				"s_key"			=> F::UniqKey("SHOP_")
			]);
			
			Alert::set("success", "Maklumat gerai telah disimpan.");
		}else{
			Alert::set("error", "Input Kawasan, No Fail & Alamat (No Lot, Jalan & Poskod) adalah wajib!");
		}
	break;
	
	case "edit":
		if(
			Input::post("group") > 0 && 
			!empty(Input::post("fileno")) && 
			!empty(Input::post("lot")) && 
			!empty(Input::post("road")) && 
			!empty(Input::post("postcode")) 
		){
			
			shops::updateBy(["s_id" => url::get(3)], [
				"s_group"		=> Input::post("group"),
				"s_fileno"		=> Input::post("fileno"),
				"s_lotno"		=> Input::post("lotno"),
				"s_hsd"			=> Input::post("hsd"),
				"s_ref1"		=> Input::post("ref1"),
				"s_ref2"		=> Input::post("ref2"),
				"s_price"		=> Input::post("price"),
				"s_status"		=> Input::post("status"),
				"s_lot"			=> Input::post("lot"),
				"s_level"		=> Input::post("level"),
				"s_block"		=> Input::post("block"),
				"s_road"		=> Input::post("road"),
				"s_residential"	=> Input::post("residential"),
				"s_postcode"	=> Input::post("postcode"),
				"s_area"		=> Input::post("area"),
				"s_state"		=> Input::post("state"),
				"s_latitude"	=> Input::post("lat"),
				"s_longitude"	=> Input::post("lng"),
			]);
			
			Alert::set("success", "Maklumat gerai telah disimpan.");
		}else{
			Alert::set("error", "Input Kawasan, No Fail & Alamat (No Lot, Jalan & Poskod) adalah wajib!");
		}
	break;
	
	case "delete":
		shops::deleteBy(["s_id" => url::get(3)]);
		
		Alert::set("success", "Maklumat gerai telah dipadam.", [
			"redirect"	=> PORTAL . "gerai/gerai/"
		]);
	break;
}

