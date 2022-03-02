<?php
	use \Core\Route;
	
	return [
		new Route('/product/:n', 'product', 'show'),
		new Route('/products/all', 'product', 'all'),
	];
	
