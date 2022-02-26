<?php

trait TestTrait
{
	public function method1()
	{
		return 1;
	}
	
	abstract public function method2();
}


class Test
{
	use TestTrait;
	
	// public function method2()
	// {
	// 	return 2;
	// }
}

new Test;

// Fatal error</b>:  Class Test contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Test::method2)