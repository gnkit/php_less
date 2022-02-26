<?php

/* pp.Op.Bs.Pr */

class Employee {
	public $name;
	public $age;
	public $salary;
}

$employee = new Employee;
$employee->name = 'john';
$employee->age = 25;
$employee->salary = 1000;

$employee2 = new Employee;
$employee2->name = 'eric';
$employee2->age = 26;
$employee2->salary = 2000;

echo $employee->salary + $employee2->salary;
echo $employee->age + $employee2->age;



/* pp.Op.Bs.Mt */

class User
{
	
	function show()
	{
		return 'show';
	}
}

class User
{
	
	function show($arg)
	{
		return $arg;
	}
}



/* pp.Op.Bs.PTh */

class Employee {
	public $name;
	public $age;
	public $salary;

	public function getName()
	{
		return $this->name;
	}

	public function getSalary()
	{
		return $this->salary;
	}

	public function checkAge($age)
	{
		if($age >= 18) {
			return true
		} else {
			return false;
		}
	}
}


$employee = new Employee;
$employee->name = 'john';
$employee->age = 30;
$employee->salary = 15000;
$employee->getSalary();

$employee2 = new Employee;
$employee2->name = 'doe';
$employee2->age = 22;
$employee2->salary = 12000;

$sumSalary = $employee->getSalary() + $employee2->getSalary();


class User {
	public $name;
	public $age;

	public function setAge($age)
	{
		return $this->age = $age;
	}
}

$user = new User;
$user->name = 'john';
$user->age = 25;
$userAge = $user->setAge(30);

echo $userAge;

class User {
	public $name;
	public $age;

	public function setAge($age)
	{
		if ($age >= 18) {
			return $this->age = $age;
		} else {
			return $this->age;
		}
	}
}


class Employee
{
	public $name;
	public $salary;

	function doubleSalary()
	{
		return $this->salary * 2;
	}
}


class Rectangle
{
	public $width;
	public $height;

	public function getSquare()
	{
		return $this->width * $this->height;
	}

	public function getPerimeter()
	{
		return ($this->width + $this->height) * 2;
	}
}
