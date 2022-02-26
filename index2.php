<?php

/* pp.Op.Bs.MTh */

class User 
{
	public $name;
	public $age;
		
	public function isAgeCorrect($age)
	{
		return $age >= 18 and $age <= 60 ?? false;
	}
		
	
	public function setAge($age)
	{
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}	

	public function addAge($year)
	{
		$newAge = $this->age + $year;
		if ($this->isAgeCorrect($newAge)) {
			$this->age = $newAge;
		}
	}

	public function subAge($year)
	{
		$newAge = $this->age - $year;
		if ($this->isAgeCorrect($newAge)) {
			$this->age = $newAge;
		}
	}
}

$user = new User;

$user->setAge(42);
echo $user->age;

$user->setAge(12);
echo $user->age;

$user->subAge(2);
echo $user->age;