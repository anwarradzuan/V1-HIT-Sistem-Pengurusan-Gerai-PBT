<?php


$id = $_POST["id"];

$data = array();

$data['status'] = contracts_status::getBy(["cs_contracts" => $id]);


echo json_encode($data);