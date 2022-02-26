<?php

/* pp.Op.Bs.Cn*/

class Employee 
{
	public $name;
	public $age;
	public $salary;

	public function __construct($name, $age, $salary)
	{
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}
}

$employee = new Employee('eric', 25, 1000);
$employee2 = new Employee('kyle', 30, 2000);

echo $employee->salary + $employee2->salary;
