<?php

class Validator
{
	public function isEmail($str)
	{
		return filter_var($str, FILTER_VALIDATE_EMAIL) ? true : false;
	}
	
	public function isDomain($str)
	{
		return filter_var($str, FILTER_VALIDATE_DOMAIN) ? true : false;
	}
	
	public function inRange($num, $from, $to)
	{
		$is = filter_var($num, FILTER_VALIDATE_INT, 
			['options' => 
				['min_range' => $from,
            	'max_range' => $to]]);

		return $is ? true : false;
	}
	
	public function inLength($str, $from, $to)
	{
		$strLength = strlen($str);

		return ($from <= $strLength) && ($strLength <= $to);
	}
}

$vl = new Validator();

var_dump($vl->isEmail('test@com.io'));
var_dump($vl->isDomain('testter.com'));
var_dump($vl->inRange(2, 2, 10));
var_dump($vl->inLength('test', 1, 200));