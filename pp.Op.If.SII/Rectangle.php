<?php

interface iTetragon
{
	public function getA();
	public function getB();
	public function getC();
	public function getD();
}

interface iFigure
{
	public function getSquare();
	public function getPerimeter();
}


class Rectangle implements iTetragon, iFigure
{
	private $a;
	private $b;

	public function __construct($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
	}

	public function getA()
	{
		return $this->a;
	}
	
	public function getB()
	{
		return $this->a;
	}
	
	public function getC()
	{
		return $this->b;
	}
	
	public function getD()
	{
		return $this->b;
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

interface iCircle
{
	public function getRaduis();
	public function getDiameter();
}


class Disk implements iCircle, iFigure
{
	private $radius;

	public function __construct($radius)
	{
		return $this->radius = $radius;
	}

	public function getRaduis()
	{
		return $this->radius;
	}

	public function getDiameter()
	{
		return 2 * $this->radius;
	}

	public function getSquare()
	{
		return 3.14 * pow($this->radius, 2);
	}

	public function getPerimeter()
	{
		return 2 * 3.14 * $this->radius;
	}
}