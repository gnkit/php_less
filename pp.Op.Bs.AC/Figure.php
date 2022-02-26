<?php

abstract class Figure
{
	abstract public function getSquare();
	abstract public function getPerimeter();
	public function getSquarePerimeterSum()
	{
		return $this->getSquare() + $this->getPerimeter();
	}
}


class Rectangle extends Figure
{
	private $a;
	private $b;

	function __construct($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
	}

	public function getSquare()
	{
		return $this->a * $this->b;
	}

	public function getPerimeter()
	{
		return 2 * ($this->a + $this->b);
	}
}

$rectangle = new Rectangle(3, 2);

echo $rectangle->getSquare() . PHP_EOL;
echo $rectangle->getPerimeter() . PHP_EOL;
echo $rectangle->getSquarePerimeterSum();