<?php

$id = $_POST["id"];

$data = array();

$data['gerai'] = shops::list();
$data['pilihan_gerai'] = applications::getBy(["a_id" => $id]);


echo json_encode($data);

/* $data['gerai'] = shops::list();
$data['user'] = users::list(); */