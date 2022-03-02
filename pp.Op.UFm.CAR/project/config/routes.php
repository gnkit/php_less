<?php
	use \Core\Route;
	
	return [
		new Route('/hello', 'hello', 'index'),
		new Route('/test1', 'test', 'act1'),
		new Route('/test2', 'test', 'act2'),
		new Route('/test3', 'test', 'act3'),
	];
	
