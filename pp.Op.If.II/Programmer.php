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

interface iProgrammer
{
	public function __construct($name, $salary); 
	public function getName();
	public function getSalary();
	public function getLangs();
	public function addLang($lang);
}


class Programmer extends Employee implements iProgrammer
{	
	private $langs = [];
	
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

	public function getLangs()
	{
		return $this->langs;
	}

	public function addLang($lang)
	{
		$this->langs = $lang;
	}

}

$programmer = new Programmer('john', 2500, ['php', 'js']);

echo $programmer->getName();
echo $programmer->getSalary();
var_dump($programmer->getLangs());
echo $programmer->addLang(['go', 'java']);
var_dump($programmer->getLangs());