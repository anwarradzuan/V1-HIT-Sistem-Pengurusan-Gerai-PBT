<?php
 
$id = input::post('id');

$c = contracts::getBy(['c_id' => $id]);
$c = $c[0];

$u = users::getBy(["u_id" => $c->c_tenant]);
$u = $u[0];

$s = shops::getBy(["s_id" => $c->c_shop]);
$s = $s[0];

$data = [];

$data['contract'] = $c;
$data['user'] = $u;
$data['shop'] = $s;

echo json_encode($data);
