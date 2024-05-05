<?php

$data = array();


$data['gerai'] = shops::list();
$data['user'] = users::list();



echo json_encode($data);
 