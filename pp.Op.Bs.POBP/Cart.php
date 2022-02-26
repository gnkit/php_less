<?php

class Cart
{
	private $products = [];

	public function add($product)
	{
		$this->products[] = $product;
	}

	public function remove($productName)
	{
		foreach ($this->products as $key => $value) {
			if ($value->name == $productName) {
				unset($this->products[$key]);
			}
		}
	}

	public function getTotalCost()
	{
		$sum = 0;

		foreach ($this->products as $product) {
			$sum += $product->getCost();
		}
		return $sum;
	}

	public function getTotalQuantity()
	{
		return count($this->products);
	}

	public function getAvgPrice()
	{
		return $this->getTotalCost() / $this->getTotalQuantity();
	}
}

$cart = new Cart;
$cart->add(new Product('phone', 200, 10));
$cart->add(new Product('tv', 2000, 2));
$cart->add(new Product('ps4', 1000, 5));

$cart->remove('phone');

$cart->add(new Product('pen', 10, 1000));

echo $cart->getAvgPrice();