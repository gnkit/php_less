<?php

class User
{
	private $name;
	private $surname;
	private $birthday;
	private $age;
	
	public function __construct($name, $surname, $birthday)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->birthday = date($birthday);
		$this->age = $this->calculateAge($birthday);
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getSurname()
	{
		return $this->surname;
	}

	public function getBirthday()
	{
		return $this->birthday;
	}

	public function getAge()
	{
		return $this->age;
	}

	private function calculateAge($birthday)
	{
		$time = new DateTime($birthday);
		$age = $time->diff(new DateTime(date('Y-m-d')));

		return $age->format('%Y');
	}
}

$user = new User('john', 'doe', '1990-02-01');

echo $user->getName();
echo $user->getSurname();
echo $user->getBirthday();
echo $user->getAge();