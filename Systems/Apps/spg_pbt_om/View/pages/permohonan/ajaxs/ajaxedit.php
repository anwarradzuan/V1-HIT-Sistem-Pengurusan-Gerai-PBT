<?php
$id = $_POST["value"];
$as = $_POST["shop_picked"];
$status = (int)$_POST["status"];

$user = applications::getBy(["a_id" => $id]);

applications::updateBy(["a_id" => $id], [
    "a_name"    => Input::post("name"),
    "a_email"	=> Input::post("email"),
    "a_ic"		=> Input::post("ic"),
    "a_alamat"  => Input::post("alamat"),
    "a_phone"	=> Input::post("phone"),
    "a_shop"    => Input::post("shop_picked"),
    "a_time"    => F::GetTime(),
]); 

application_status::updateBy(["as_application" => $id], [
    "as_status"			=> $status,
]); 

echo json_encode($status);



 






