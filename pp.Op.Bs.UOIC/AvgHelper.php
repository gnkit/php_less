<?php


class AvgHelper
{
	public function getAvg($arr = [])
	{
		return (array_sum($arr))/(count($arr));
	}

	public function getMeanSquare($arr = [])
	{
		return sqrt(array_sum(pow($arr, 2))/count($arr));
	}
}