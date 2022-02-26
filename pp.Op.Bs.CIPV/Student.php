<?php

class Student
{
	private $name;
	private $course;
	
	public function __construct($name)
	{
		$this->name = $name;
		$this->course = 1;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getCourse()
	{
		return $this->course;
	}
	
	public function transferToNextCourse()
	{
		if ($this->course < 5) {
			return $this->course++;
		} else {
			return $this->course;
		}
		
	}
}

$student = new Student('john');
echo $student->getCourse();

$student->transferToNextCourse();
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();