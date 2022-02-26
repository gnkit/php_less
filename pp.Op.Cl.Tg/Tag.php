<?php

class Tag
{
	private $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function open()
	{
		$name = $this->name;

		return "<$name>";
	}
	
	public function close()
	{
		$name = $this->name;

		return "</$name>";
	}
}

$tag = new Tag('div');

echo $tag->open() . 'text' . $tag->close();

$tag2 = new Tag('img');

echo $tag2->open();

$tag3 = new Tag('header');

echo $tag3->open() . 'header сайта' . $tag3->close();