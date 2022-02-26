<?php

class Arr
{
	private $nums = [];
	private $sumHelper;
	private $avgHelper;
	
	public function __construct()
	{
		$this->sumHelper = new SumHelper;
		$this->avgHelper = new AvgHelper;
	}
	
	public function getSum23()
	{
		$nums = $this->nums;
		
		return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums); 
	}
	
	public function add($number)
	{
		$this->nums[] = $number;
	}

	public function getAvgMeanSum()
	{
		$middleASum = $this->avgHelper->getAvg($this->nums);

		$middleSumSq = $this->sumHelper->getSum2($this->nums);

		return $middleASum + $middleSumSq;

	}
}