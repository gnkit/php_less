<?php

/* pp.Op.Bs.AMPP */

class User 
{
	public $name;
	public $age;
	
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

	private function isAgeCorrect($age)
	{
		return $age >= 18 and $age <= 60 ?? false;
	}
}

$user = new User;

$user->setAge(42);
echo $user->age;

$user->setAge(12);
echo $user->age;

$user->subAge(2);
echo $user->age;

$user->isAgeCorrect(23);


class Student
{
	public $name;
	public $course = 1;

	public function transferToNextCourse()
	{
		if ($this->isCourseCorrect()) {
			return $this->course++;
		} else {
			return false;
		}
	}

	private function isCourseCorrect()
	{
		return $this->course <= 5 ?? false;
	}
}

$student = new Student;
echo $student->transferToNextCourse();
echo $student->transferToNextCourse();
echo $student->transferToNextCourse();
echo $student->transferToNextCourse();
echo $student->transferToNextCourse() . 'error';
