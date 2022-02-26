<?php

class Driver extends Employee
{
	private $drivingExperience;
	private $categories = [];
	
	public function getdrivingExperience()
	{
		return $this->drivingExperience;
	}
	
	public function setdrivingExperience($years)
	{
		$this->drivingExperience = $years;
	}

	public function getCategor()
	{
		return $this->category;
	}
	
	public function setCategory($category = [])
	{
		$this->categories = $category;
	}

}