<?php

$data = array();

$data['contracts'] = contracts::list();

echo json_encode($data);


