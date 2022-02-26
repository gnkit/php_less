<?php

class Num
{
	public static $num1;
	public static $num2;
}

Num::$num1 = 2;
Num::$num2 = 3;

echo Num::$num1 + Num::$num2;

class Num1
{
	private static $num1 = 2;
	private static $num2 = 3;

	public static function getSum()
	{
		return self::$num1 + self::$num2;
	}

	public static function geometry($radius)
	{
		return (4/3)* 3.14 * (pow($radius, 3));
	}
}


echo Num1::getSum();
echo Num1::geometry(10);
