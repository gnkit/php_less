<?php

require_once 'core/Controller.php';
require_once 'project/Controller.php';
require_once 'modules/cart/Cart.php';
require_once 'modules/shop/cart/Cart.php';


$core = new \Core\Controller;
$project = new \Project\Controller;
$cart = new \Modules\Cart\Cart;
$cartShop = new \Modules\Shop\Cart\Cart;

var_dump($core);
var_dump($project);
var_dump($cart);
var_dump($cartShop);