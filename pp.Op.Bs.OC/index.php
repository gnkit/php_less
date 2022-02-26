<?php 


class User
{
	private $name;
	private $age;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age  = $age;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
}


function compare($obj1, $obj2)
{
	if ($obj1 == $obj2) {
		return true;
	} else {
		return false;
	}	
}

$user1 = new User('john', 30);
$user2 = new User('john', 30);

var_dump(compare($user1, $user2));

function compare($obj1, $obj2)
{
	if ($obj1 === $obj2) {
		return true;
	} else {
		return false;
	}	
}

$user1 = new User('john', 30);
$user2 = $user1;

var_dump(compare($user1, $user2));

function compare($obj1, $obj2)
{
	if ($obj1 === $obj2) {
		return 1;
	} elseif ($obj1 == $obj2) {
		return 0;
	} else {
		return -1;
	}
}

$user1 = new User('john', 30);
$user2 = $user1;

var_dump(compare($user1, $user2));