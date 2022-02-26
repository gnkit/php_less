<?php

trait Trait1
{
	private function method1()
	{
		return 1;
	}
}

trait Trait2
{
	private function method2()
	{
		return 2;
	}
}

trait Trait3
{
	private function method3()
	{
		return 3;
	}
}


class Test
{
	use Trait1, Trait2, Trait3;
	
	public function getSum()
	{
		return (new self)->method1() + (new self)->method2() + (new self)->method3();
	}
}

echo (new Test())->getSum();