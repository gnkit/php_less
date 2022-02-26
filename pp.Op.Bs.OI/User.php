<?php

class User
{
	public $name;
	public $surname;

	function __construct($name, $surname)
	{
		$this->name = $name;
		$this->surname = $surname;
	}
}


class Employee extends User
{
	public $salary;
	
	function __construct($name, $surname, $salary)
	{
		parent::__construct($name, $surname);
		$this->salary = $salary;
	}
}


class City
{
	public $name;
	public $population;

	function __construct($name, $population)
	{
		$this->name = $name;
		$this->population = $population;
	}
}

$user1 = new User('john', 'doe');
$user2 = new User('johanna', 'duck');
$user3 = new User('shine', 'sun');

$employee1 = new Employee('daisy', 'done', 1000);
$employee2 = new Employee('may', 'sean', 2000);
$employee3 = new Employee('rock', 'rocky', 1500);

$city1 = new City('moscow', 14500000);
$city2 = new City('tokyo', 18000000);
$city3 = new City('seoul', 12000000);

$arr = [$user1, $city1, $employee2, $city2, $user2, $employee3, $user3, $employee1, $city3];

foreach ($arr as $elem) {
	if ($elem instanceof User) {
		echo $elem->name . PHP_EOL;
	}
}

foreach ($arr as $elem) {
	if (!$elem instanceof User) {
		echo $elem->name . PHP_EOL;
	}
}

foreach ($arr as $elem) {
	if (get_class($elem) == 'User') {
		echo $elem->name . PHP_EOL;
	}
}