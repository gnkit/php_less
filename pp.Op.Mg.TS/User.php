<?php


class User
{
	private $name;
	private $surname;
	private $patronymic;

	public function __construct($name, $surname, $patronymic)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->patronymic = $patronymic;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}

	public function getPatronymic()
	{
		return $this->patronymic;
	}

	public function __toString()
	{
		return $this->name . ' ' . $this->surname . ' ' . $this->patronymic;
	}
}

$user = new User('john', 'doe', 'doon');

echo $user;