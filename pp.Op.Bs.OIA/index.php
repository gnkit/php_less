<?php
require_once 'City.php';


$city = new City('moscow', 1404000);
$city2 = new City('new york', 1325000);
$city3 = new City('tokyo', 1860040);
$city4 = new City('paris', 1206430);
$city5 = new City('munchen', 1386000);

$cities = [$city, $city2, $city3, $city4, $city5];

foreach ($cities as $city) {
	echo $city->name . ': ' . $city->population;
}
