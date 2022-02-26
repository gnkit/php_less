<?php

require_once 'User.php'
require_once 'Student.php'
require_once 'Employee.php'


$student = new Student('john', 19, 2);

echo $student->getName(); 
echo $student->getAge(); 
echo $student->getCourse();

