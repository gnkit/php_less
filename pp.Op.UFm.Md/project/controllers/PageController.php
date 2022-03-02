<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Page; // подключаем нашу модель

class PageController extends Controller
{
	public function test() {
		$page = new Page; // создаем объект модели
	
		$data = $page->getById(3); // получим запись с id=3
		var_dump($data);
		
		$data = $page->getById(5); // получим запись с id=5
		var_dump($data);
		
		$data = $page->getByRange(2, 5); // записи с id от 2 до 5
		var_dump($data);
	}
}