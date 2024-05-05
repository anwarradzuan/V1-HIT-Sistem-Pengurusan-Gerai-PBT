<?php


if(
	file_exists($_FILES["upload"]["tmp_name"]) && is_uploaded_file($_FILES["upload"]["tmp_name"])
){
	$name = $_FILES["upload"]["name"];
	$tmp = $_FILES["upload"]["tmp_name"];
	$filename = F::UniqKey() . F::URLSlugEncode($name);
	$ext = pathinfo($filename)["extension"];
	
	//php-gd
	$x = F::UploadImage($tmp, ASSET . "images/profile/" . $filename, $ext);
	
	//$x = move_uploaded_file($tmp, ASSET . "images/profile/" . $filename);
	
	if($x){
		users::updateBy(["u_id" => $_SESSION["user_id"]], [
			"u_picture"	=> $filename
		]);
		
		echo "success";
		
	}else{
		echo "error";
	}
}


