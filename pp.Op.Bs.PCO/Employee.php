<?php

class Employee extends User
{
	private $salary;

	public function __construct($name, $surname, $birthday, $salary)
	{
		parent::__construct($name, $surname, $birthday);
		$this->salary = $salary;
	}

	public function getSalary()
	{
		return $this->salary;
	}
}

$user = new Employee('john', 'doe', '1990-02-01', 2000);

echo $user->getName();
echo $user->getSurname();
echo $user->getBirthday();
echo $user->getAge();
echo $user->getSalary();