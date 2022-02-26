<?php
setlocale(LC_ALL, 'russian');
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

$date = new Date('2025-12-31');


echo $date->getYear();
echo $date->getMonth();
echo $date->getDay();
echo $date->getWeekDay();
echo $date->format('Y/m/d');

echo $date->getWeekDay();
echo $date->getWeekDay('ru');
echo $date->getWeekDay('en');
echo (new Date('2025-12-31'))->addYear(1);
echo (new Date('2025-12-31'))->addDay(1);
echo (new Date('2025-12-31'))->subDay(3)->addYear(1);