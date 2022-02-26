<?php


class Product
{
	private $name;
	private $price;

}

$product1 = new Product;
$product2 = $product1;

if ($product1 === $product2) {
	echo 'true';
} else {

	echo 'false';
}


