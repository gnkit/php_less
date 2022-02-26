<?php

class ArraySumHelper
{
	/*
		Находит сумму первых
		степеней элементов массива:
	*/
	public function getAvg1($arr)
	{
		return $this->getSum($arr, 1);
	}
	
	/*
		Находит сумму вторых степеней
		элементов массива и извлекает
		из нее квадратный корень:
	*/
	public function getAvg2($arr)
	{
		return sqrt($this->getSum($arr, 2));
	}
	
	/*
		Находит сумму третьих степеней
		элементов массива и извлекает
		из нее кубический корень:
	*/
	public function getAvg3($arr)
	{
		return pow($this->getSum($arr, 3),1/3);
	}
	
	/*
		Находит сумму четвертых степеней
		элементов массива и извлекает
		из нее корень четвертой степени:
	*/
	public function getAvg4($arr)
	{
		return pow($this->getSum($arr, 4),1/4);
	}
	
	/*
		Вспомогательный метод, который параметром
		принимает массив и степень и возвращает
		сумму степеней элементов массива:
	*/
	private function getSum($arr, $power)
	{
		$sum = 0;

		foreach($arr as $elem) {
			$sum += $this->calcSqrt($elem, $power);
		}

		return $sum;
	}
	
	/*
		Вспомогательный метод, который параметром
		принимает целое число и степень и возвращает
		корень заданной степени из числа:
	*/
	private function calcSqrt($num, $power)
	{
		return pow($num, 1/$power);
	}
}

$arr = new ArraySumHelper;


echo $arr->getAvg1([1, 2, 3]) . PHP_EOL;
echo $arr->getAvg2([1, 2, 3]) . PHP_EOL;
echo $arr->getAvg3([1, 2, 3]) . PHP_EOL;
echo $arr->getAvg4([1, 2, 3]) . PHP_EOL;


