<?php

trait Helper
{
	private $name;
	private $age;
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
}


class Country
{
	use Helper;

	private $population;
	
	public function __construct($name, $age, $population)
	{
		$this->name = $name;
		$this->age = $age;
		$this->population = $population;
	}

	public function getPopulation()
	{
		return $this->population;
	}
}

$country = new Country('Kazakhstan', 30, 19000000);

echo $country->getName() . PHP_EOL;
echo $country->getAge() . PHP_EOL;
echo $country->getPopulation();