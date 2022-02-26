<?php

class Employee
{
	public $name;
	public $salary;

	public function __construct($name, $salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}
}


class Student
{
	public $name;
	public $scholarship;

	public function __construct($name, $scholarship)
	{
		$this->name = $name;
		$this->scholarship = $scholarship;
	}
}


$employee1 = new Employee('john', 1000);
$employee2 = new Employee('joe', 2000);
$employee3 = new Employee('eric', 3200);

$student1 = new Student('julia', 500);
$student2 = new Student('zhana', 340);
$student3 = new Student('curt', 390);

$arr = [ $employee1, $employee2, $employee3, $student1, $student2, $student3 ];

foreach ($arr as $elem) {
	if ($elem instanceof Employee) {
		echo $elem->name . PHP_EOL;
	}
}

foreach ($arr as $elem) {
	if ($elem instanceof Student) {
		echo $elem->name . PHP_EOL;
	}
}

$sumSalary = [];
$sumScholarship = [];

foreach ($arr as $elem) {

	if ($elem instanceof Employee) {
		$sumSalary[] = $elem->salary;
	}
	if ($elem instanceof Student) {
	 	$sumScholarship[] = $elem->scholarship;
	}

}

echo (array_sum($sumSalary)) . PHP_EOL;
echo (array_sum($sumScholarship));

