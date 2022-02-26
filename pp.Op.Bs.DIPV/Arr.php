<?php

class Arr
{
	private $numbers = [];
	
	public function add($num = [])
	{
		$this->numbers[] = $num;
	}
	
	public function getAvg()
	{
		return array_sum($this->numbers[0])/count($this->numbers[0]);
	}
}

$arr = new Arr;
$arr->add([1, 2, 3, 4, 5, 6, 7, 8, 9]);

echo $arr->getAvg();