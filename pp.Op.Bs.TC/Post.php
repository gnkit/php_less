<?php


class Post
{
	private $name;
	private $salary;

	function __construct($name, $salary)
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

$programmer = new Post('programmer', 2000);
$manager = new Post('manager', 1500);
$driver = new Post('driver', 1000);


class Employee
{
	private $name;
	private $surname;
	public $post;
	
	function __construct($name = 'name', $surname = 'surname', Post $post)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->post = $post;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getSurname()
	{
		return $this->surname;
	}

	public function setSurname($surname)
	{
		$this->surname = $surname;
	}

	public function changePost(Post $post)
	{
		$this->post = $post;
	}
}

$programmer2 = new Employee('john', 'doe', $programmer);

$programmer2->changePost($manager);

echo 'Имя: ' . $programmer2->getName() . PHP_EOL .
	'Фамилия: ' . $programmer2->getSurname() . PHP_EOL . 
	'Должность: ' . $programmer2->post->getName() . PHP_EOL .
	'Зарплата: ' . $programmer2->post->getSalary();