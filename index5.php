<?php

/* pp.Op.Bs.GS */

class Employee 
{
	private $name;
	private $age;
	private $salary;

	public function __construct($name, $age, $salary)
	{
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}

	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age;
	}
	
	public function setAge($age)
	{
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		} else {
			return $this->age;
		}
	}

	public function getSalary()
	{
		return $this->salary . '$';
	}
	
	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	private function isAgeCorrect($age)
	{
		return $age >= 1 and $age <= 100;
	}
}

$employee = new Employee('eric', 25, 1000);
$employee2 = new Employee('kyle', 30, 2000);

echo $employee->getSalary();
echo $employee2->getSalary();
