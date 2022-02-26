<?php


/* pp.Op.Bs.ROP */

class Employee
{
	private $name;
	private $surname;
	private $salary;

	public function __construct($name, $surname, $salary)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->salary = $salary;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}
	
	public function getSalary()
	{
		return $this->salary;
	}
	
	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
}

$employee = new Employee('eric', 'doe', 1000);


echo $employee->getName();
echo $employee->getSurname();
echo $employee->getSalary();

echo $employee->setSalary(2300);
echo $employee->getSalary();