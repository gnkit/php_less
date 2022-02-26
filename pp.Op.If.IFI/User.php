<?php 

interface iUser
{
	public function getName();
	public function setName();
	public function getAge();
	public function setAge();
}


interface iEmployee extends iUser
{
	public function getSalary();
	public function setSalary();
}


class Employee implements iEmployee
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
		$this->age = $age;
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

