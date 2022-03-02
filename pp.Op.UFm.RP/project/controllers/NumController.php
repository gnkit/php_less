<?php

namespace Project\Controllers;

use \Core\Controller;

class NumController extends Controller
{
	public function num($params)
	{	
		$this->title = 'Num!';

		echo $params['n1'] + $params['n2'] + $params['n3'];

	}

}