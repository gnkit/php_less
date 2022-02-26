<?php

class UsersCollection
{
	private $employees = [];
	private $students = [];
	
	public function add($user)
	{
		if ($user instanceof Employee) { 
			$this->employees[] = $user; 
		}
		
		if ($user instanceof Student) { 
			$this->students[] = $user; 
		}
	}
	
	public function getTotalSalary() 
	{
		$sum = 0;
		
		foreach ($this->employees as $employee) { 
			$sum += $employee->getSalary(); 
		}
		
		return $sum;
	}
	
	public function getTotalScholarship() 
	{
		$sum = 0;
		
		foreach ($this->students as $student) { 
			$sum += $student->getScholarship(); 
		}
		
		return $sum;
	}
	
	public function getTotalPayment() 
	{
		return $this->getTotalScholarship() + $this->getTotalSalary(); 
	}
}	



$usersCollection = new UsersCollection; 

$usersCollection->add(new Student('kyle', 100)); 
$usersCollection->add(new Student('luis', 200)); 

$usersCollection->add(new Employee('john', 300)); 
$usersCollection->add(new Employee('eric', 400)); 

echo $usersCollection->getTotalScholarship(); 
echo $usersCollection->getTotalSalary(); 
echo $usersCollection->getTotalPayment(); 