<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';


$employee = new Employee;
$employee->setSalary(1000);
$employee->setName('john');
$employee->setAge(25);

echo $employee->getSalary();
echo $employee->getName();
echo $employee->getAge();

$student = new Student;	
$student->setCourse(3);
$student->setName('john');
$student->setAge(25);

echo $student->getCourse();
echo $student->getName();
echo $student->getAge();