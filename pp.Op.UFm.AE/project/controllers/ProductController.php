<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Product;

class ProductController extends Controller
{
	public function one($params)
	{
		$product = (new Product) -> getById($params['id']);
		
		$this->title = $product['name'];

		return $this->render('product/one', [
			'price' => $product['price'],
			'quantity' => $product['quantity'],
			'description' => $product['description'],
			'h1' => $this->title,
		]);
	}
	
	public function all()
	{
		$this->title = 'Список всех товаров';
		
		$products = (new Product) -> getAll();
		
		return $this->render('product/all', [
			'products' => $products,
			'h1' => $this->title,
		]);
	}
}