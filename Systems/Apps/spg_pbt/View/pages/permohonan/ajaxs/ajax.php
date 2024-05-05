<?php

$ic = ($_POST["value"]);

$user = users::getBy(["u_ic" => $ic]);

/* $name = $user[1]; */

/* print_r($user[0]->u_name); */

echo json_encode($user[0]);

/* $array = json_decode(json_encode($user[0]), true);

print_r($array); */
