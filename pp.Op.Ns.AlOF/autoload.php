<?php

spl_autoload_register(function($class) {
	$root = __DIR__;
	$ds = DIRECTORY_SEPARATOR;
	
	$filename = $root . $ds . str_replace('\\', $ds, $class) 
		. '.php';
		
	require($filename);
});