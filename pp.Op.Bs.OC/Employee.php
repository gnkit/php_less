<?php

class Employee
{
	private $name;
	private $salary;
	
	public function __construct($name, $salary) 
	{
		$this->name = $name;
		$this->salary = $salary;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getSalary()
	{
		return $this->salary;
	}
}


class EmployeesCollection
{
	private $employees = [];
	
	public function add($newEmployee)
	{
		if (!in_array($newEmployee, $this->employees,true)) {
			$this->employees[] = $newEmployee;
		}
	}
	
	public function get()
	{
		return $this->employees;
	}
}


$employeesCollection = new EmployeesCollection;
	
$employee = new Employee('john', 100);
$employee2 = new Employee('doe', 144);

$employeesCollection->add($employee);
$employeesCollection->add($employee2);
$employeesCollection->add($employee);

var_dump($employeesCollection->get());