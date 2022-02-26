<?php

interface Figure3d
{
	public function getVolume();
	public function getSurfaceSquare();
}


interface iFigure
{
	public function getSquare();
	public function getPerimeter(); 
}


class Cube implements Figure3d
{
	private $a;

	public function __construct($a)
	{
		$this->a = $a;
	}

	public function getVolume()
	{
		return pow($this->a, 3);
	}

	public function getSurfaceSquare()
	{
		return 6 * pow($this->a, 2);
	}
}

class Quadrate implements iFigure
{
	private $a;

	public function __construct($a)
	{
		$this->a = $a;
	}

	public function getSquare()
	{
		return $this->a * $this->a;
	}

	public function getPerimeter()
	{
		return 4 * $this->a;
	}
}


class Rectangle implements iFigure
{
	private $a;
	private $b;

	public function __construct($a, $b)
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

$cube = new Cube(2);
echo $cube->getVolume() . PHP_EOL;
echo $cube->getSurfaceSquare() . PHP_EOL;

$cube2 = new Cube(3);
echo $cube2->getVolume() . PHP_EOL;
echo $cube2->getSurfaceSquare() . PHP_EOL;

$rectangle = new Rectangle(2, 4);
echo $rectangle->getSquare() . PHP_EOL;
echo $rectangle->getPerimeter() . PHP_EOL;

$rectangle2 = new Rectangle(4, 3);
echo $rectangle2->getSquare() . PHP_EOL;
echo $rectangle2->getPerimeter() . PHP_EOL;

$quadrate = new Quadrate(2);
echo $quadrate->getSquare() . PHP_EOL;
echo $quadrate->getPerimeter() . PHP_EOL;

$quadrate2 = new Quadrate(5);
echo $quadrate2->getSquare() . PHP_EOL;
echo $quadrate2->getPerimeter() . PHP_EOL;

$arr = [$cube, $cube2, $rectangle2, $rectangle, $quadrate2, $quadrate];

foreach ($arr as $elem) {
	if ($elem instanceof iFigure) {
		echo 'array-elem: ' . $elem->getSquare() . PHP_EOL;
	}
}

foreach ($arr as $elem) {
	if ($elem instanceof iFigure) {
		echo 'iFigure: ' . $elem->getSquare() . PHP_EOL;
	} else {
		echo 'Figure3d: ' . $elem->getSurfaceSquare() . PHP_EOL;
	}
}