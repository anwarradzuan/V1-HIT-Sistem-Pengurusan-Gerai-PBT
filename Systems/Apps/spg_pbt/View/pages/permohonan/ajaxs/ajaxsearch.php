<?php

$word = $_POST["value"];

$data = DB::conn()->query("SELECT * FROM `shops` WHERE s_area LIKE '%".$word."%'")->results();

echo json_encode($data);