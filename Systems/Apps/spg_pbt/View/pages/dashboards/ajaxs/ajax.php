<?php

$data = array();
$year = date("Y");

$unpaid = rentals::getBy(["r_status" =>  0]);
$paid = rentals::getBy(["r_status" =>  1]);
$sk = shops::getBy(["s_status" => 0]);
$ske = shops::getBy(["s_status" => 1]);

$cryear =  rentals::getBy(["r_year" =>  $year]);
$pastyear =  rentals::getBy(["r_year" =>  $year - 1]);
 

$data['un'] = $unpaid;
$data['p'] = $paid;
$data['psk'] = $sk;
$data['pske'] = $ske;
$data['cryear'] = $cryear;
$data['pastyear'] = $pastyear;
 
 
echo json_encode($data);
