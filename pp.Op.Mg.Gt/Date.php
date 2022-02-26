<?php


class Date
{
	public $year;
	public $month;
	public $day;

	public function __construct($year, $month, $day)
	{
		$this->year = $year;
		$this->month = $month;
		$this->day = $day;
	}

	public function __get($property)
	{
		$time = mktime(0,0,0,$this->month, $this->day, $this->year);

		if ($property == 'weekDay') {
			return date('l', $time);
		}
	}

}

$day = new Date(2022, 02, 24);

echo $day->weekDay;