<?php
class Arr
{
	private $numbers = [];
	
	public function add($number)
	{
		$this->numbers[] = $number;

		return $this;
	}
	
	public function push($numbers)
	{
		$this->numbers = array_merge($this->numbers, $numbers);

		return $this;
	}
	
	public function getSum()
	{
		return array_sum($this->numbers);
	}
}

$arr = new Arr;

echo $arr->add(10)->add(11)->push([9])->getSum();