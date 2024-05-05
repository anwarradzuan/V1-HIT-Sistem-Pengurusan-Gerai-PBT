<?php


$id = $_POST["id"];

$data = array();

$data['status'] = application_status::getBy(["as_application" => $id]);


echo json_encode($data);