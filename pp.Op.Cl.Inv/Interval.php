<?php

class Date
{
	private $date;

	public function __construct($date = null)
	{
		if (null == $date) {
			$this->date = date('Y-m-d');
		} else {
			$this->date = date('Y-m-d', strtotime($date));
		}

	}
	
	public function getDay()
	{
		return date('d', strtotime($this->date));
	}
	
	public function getMonth($lang = null)
	{
		if (null == $lang) {

			return date('F', strtotime($this->date));

		} else {
			setlocale(LC_ALL, "$lang.'_'.strtoupper($lang).UTF-8");

			return strftime('%B', strtotime($this->date));
		}

	}
	
	public function getYear()
	{
		return date('Y', strtotime($this->date));
	}
	
	public function getWeekDay($lang = null)
	{
		if (null == $lang) {

			return date('N', strtotime($this->date));
			
		} else {
			setlocale(LC_ALL, "$lang.'_'.strtoupper($lang).UTF-8");

			return strftime('%A', strtotime($this->date));
		}
	}
	
	public function addDay($value)
	{
		$newTime = mktime(0, 0, 0, date('m', strtotime($this->date)), date('d', strtotime($this->date)) + $value, date('Y', strtotime($this->date)));

		$this->date = date('Y-m-d', $newTime);

		return $this;

	}
	
	public function subDay($value)
	{
		$newTime = mktime(0, 0, 0, date('m', strtotime($this->date)), date('d', strtotime($this->date)) - $value, date('Y', strtotime($this->date)));

		$this->date = date('Y-m-d', $newTime);

		return $this;
	}
	
	public function addMonth($value)
	{
		$newTime = mktime(0, 0, 0, date('m', strtotime($this->date)) + $value, date('d', strtotime($this->date)), date('Y', strtotime($this->date)));
		
		$this->date = date('Y-m-d', $newTime);

		return $this;
	}
	
	public function subMonth($value)
	{
		$newTime = mktime(0, 0, 0, date('m', strtotime($this->date)) - $value, date('d', strtotime($this->date)), date('Y', strtotime($this->date)));
		
		$this->date = date('Y-m-d', $newTime);

		return $this;
	}
	
	public function addYear($value)
	{
		$newTime = mktime(0, 0, 0, date('m', strtotime($this->date)), date('d', strtotime($this->date)), date('Y', strtotime($this->date)) + $value);
		
		$this->date = date('Y-m-d', $newTime);

		return $this;
	}
	
	public function subYear($value)
	{
		$newTime = mktime(0, 0, 0, date('m', strtotime($this->date)), date('d', strtotime($this->date)), date('Y', strtotime($this->date)) - $value);
		
		$this->date = date('Y-m-d', $newTime);

		return $this;	
	}
	
	public function format($format)
	{
		return date($format, strtotime($this->date));
	}
	
	public function __toString()
	{
		return $this->date;
	}
}


class Interval
{
	private $interval;

	public function __construct(Date $date1, Date $date2)
	{
		$this->interval = date_diff(new DateTime($date1), new DateTime($date2));
	}
	
	public function toDays()
	{
		return $this->interval->days;
	}
	
	public function toMonths()
	{
		return $this->interval->m;
	}
	
	public function toYears()
	{
		return $this->interval->y;
	}
}	

$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');

$interval = new Interval($date1, $date2);

var_dump($interval);
echo $interval->toDays() . PHP_EOL;
echo $interval->toMonths() . PHP_EOL;
echo $interval->toYears();