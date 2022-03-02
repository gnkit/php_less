<?php

namespace Project\Controllers;

use Core\Controller;

class PageController extends Controller
{
	public function act()
	{
		$this->title = 'Page Act';

		// return $this->render('page/act', [
		// 	'var1' => 'eee',
		// 	'var2' => 'bbb',
		// 	'var3' => 'kkk',
		// ]);

		return $this->render('page/act', [
			'header' => 'список юзеров',
			'users'  => ['user1', 'user2', 'user3'],
		]);
	}
}