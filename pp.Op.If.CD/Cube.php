<?php

interface iCube
{
	public function __construct($a);
	public function getVolume(); 
	public function getSurfaceArea();
}


class Cube implements iCube
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

	public function getSurfaceArea()
	{
		return pow($this->a, 2) * 6;
	}
}

$cube = new Cube(2);
echo $cube->getVolume() . PHP_EOL;
echo $cube->getSurfaceArea();

