<?php

namespace Project\Controllers;

use \Core\Controller;

class UserController extends Controller
{
	private $users;

	public function __construct()
	{
		$this->users = [
			1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
			2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
			3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
			4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
			5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
		];
	}

	public function show($params)
	{	
		$this->title = 'user';
		$id = $params['id'];

		echo $id . '. ';

		foreach ($this->users[$id] as $key => $value) {
			echo $key . ': ' . $value . ', ';
		}
	}

	public function info($params)
	{
		$this->title = 'info user';

		foreach ($this->users[$params['id']] as $key => $value) {
			if ($key == $params['key']) {
				echo $key . ': ' .$value . '<br>';	
			}
		}
	}

	public function all()
	{
		$this->title = 'all users';

		foreach ($this->users as $user => $value) {
				echo $user . '. ' ;
			foreach ($value as $key => $value) {
				echo $key . ': ' .$value . ', ';
			}
			echo '<br>';
		}
	}

	public function first($params)
	{
		$this->title = 'N users';

		$i = 1;
		while ($i <= $params['n']) {
			echo $i .'. ';
			foreach ($this->users[$i] as $key => $value) {
				echo $key . ': ' . $value . ', ';
			}
			echo '<br>';
		$i++;
		}	
	}

}