<?php

require_once 'Arr.php';

$arr = new Arr();
$arr->add(3);
$arr->add(2);
$arr->add(2);

echo $arr->getAvgMeanSum();