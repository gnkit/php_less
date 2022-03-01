<?php

spl_autoload_register();

use Core\User;
use Core\Admin\Controller;
use Project\User\Data;

$user = new User();
$adminCtrl = new Controller();
$userData = new Data();


var_dump($user);
var_dump($adminCtrl);
var_dump($userData);