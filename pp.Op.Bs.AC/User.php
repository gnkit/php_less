<?php

abstract class User
{
	private $name;
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}

	abstract public function increaseRevenue($value);
	abstract public function decreaseRevenue($value);
}


class Employee extends User
{
	private $salary;
	
	public function getSalary()
	{
		return $this->salary;
	}
	
	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
	
	public function increaseRevenue($value)
	{
		$this->salary = $this->salary + $value;
	}

	public function decreaseRevenue($value)
	{
		$this->salary = $this->salary - $value;
	}
}

class Student extends User
{
	private $scholarship;
	
	public function getScholarship()
	{
		return $this->scholarship;
	}
	
	public function setScholarship($scholarship)
	{
		$this->scholarship = $scholarship;
	}

	public function increaseRevenue($value)
	{
		$this->scholarship = $this->scholarship + $value;
	}

	public function decreaseRevenue($value)
	{
		$this->scholarship = $this->scholarship - $value;
	}
}

