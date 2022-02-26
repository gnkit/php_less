<?php

class User
{
	private $name;
	private $age;
	

	public function __set($property, $value)
	{
		if ($property == 'name' && $value != '') {
			$this->name = $value;
		}

		if ($property == 'age' && ($value >= 0 and $value <= 70 )) {
			$this->age = $value;
		}
	}

	public function __get($property)
	{
		return $this->$property;
	}
}


$user = new User();
$user->name = 'john';
$user->age = 42;

echo $user->name . PHP_EOL;
echo $user->age;

