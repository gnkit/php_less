<?php

trait Trait1
{
	private function method()
	{
		return 1;
	}
}

trait Trait2
{
	private function method()
	{
		return 2;
	}
}

trait Trait3
{
	private function method()
	{
		return 3;
	}
}


class Test
{
	use Trait1, Trait2, Trait3
	{
		Trait1::method insteadof Trait2;
		Trait1::method as method1;
		Trait2::method as method2;
		Trait2::method insteadof Trait3;
		Trait3::method as method3;
	}
	
	public function getSum()
	{
		return (new self)->method1() + (new self)->method2() + (new self)->method3();
	}
}

echo (new Test())->getSum();