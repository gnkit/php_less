<?php

class City
{
	public $name;
	public $foundation;
	public $population;

	function __construct($name, $foundation, $population)
	{
		$this->name = $name;
		$this->foundation = $foundation;
		$this->population = $population;
	}
}

$city = new City('moscow', 821, 15005480);

$props = ['name', 'foundation', 'population'];

foreach ($props as $prop) {
	echo $city->$prop;
}


class User
{
	public $surname;
	public $name;
	public $patronymic;
	
	public function __construct($surname, $name, $patronymic)
	{
		$this->surname = $surname;
		$this->name = $name;
		$this->patronymic = $patronymic; 
	}
}

$props = ['surname', 'name', 'patronymic'];

$user = new User('Иванов', 'Иван', 'Иванович');
echo $user->{$props[0]};
echo $user->{$props[1]};
echo $user->{$props[2]};