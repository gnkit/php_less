<?php


class User
{

}

$user = new User;

echo get_class($user);

class Test1
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

class Test2
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

$test1 = new Test1('john');
$test2 = new Test1('max');
$test3 = new Test2('don');
$test4 = new Test2('son');
$test5 = new Test2('kane');

$arr = [ $test5, $test4, $test2, $test3, $test1 ];

foreach ($arr as $elem) {
	echo $elem->name . ' - ' . get_class($elem) . PHP_EOL;
}


class Test
{
	public function method1()
	{
		return '1';
	}

	public function method2()
	{
		return '2';	
	}

	public function method3()
	{
		return '3';
	}
}

var_dump(get_class_methods(new Test));

$test = new Test;
$arrMethods = get_class_methods($test);

foreach ($arrMethods as $method) {
	echo $test->$method();
}


class Test
{
	public $prop1;
	public $prop2;
	private $prop3;
	private $prop4;
	

	public function __construct()
	{
		get_class_vars(__CLASS__);		
	}
}


var_dump(get_class_vars(get_class(new Test())));
var_dump(new Test());




class Test
{
	public $prop1;
	public $prop2;
	private $prop3;
	private $prop4;
}


$test = new Test();
var_dump(get_object_vars($test));




class Test1
{

}

class Test2
{
	
}

var_dump(class_exists(new Test1));
var_dump(class_exists(new Test2));



class Test
{
	public function method1()
	{
		echo 1;
	}
}

$test = new Test;
$test->method1();
$test->method2(); // Fatal error undefined method


class Test
{
	public $prop1;
}

$test = new Test;

var_dump(property_exists($test, 'prop1'));
var_dump(property_exists($test, 'prop2'));



$arr = ['prop1', 'prop2', 'prop3', 'prop4', 'prop5' ];

class Test
{
	public $prop1;
	public $prop3;
}

$test = new Test;


foreach ($arr as $prop) {
	if (property_exists($test, $prop)) {
		echo $prop;
	}
}


class ParentClass
{

}

class ChildClass extends ParentClass
{

}

var_dump(get_parent_class(new ChildClass));




class GrandParentClass
{

}

class ParentClass extends GrandParentClass
{

}

class ChildClass extends ParentClass
{

}

var_dump(is_subclass_of(new ChildClass, 'GrandParentClass'));
var_dump(is_subclass_of(new ParentClass, 'GrandParentClass'));
var_dump(is_subclass_of(new ChildClass, 'ParentClass'));



class ParentClass
{

}

class ChildClass extends ParentClass
{

}

$obj = new ChildClass;
var_dump(is_a($obj, 'ParentClass'));

print_r(get_declared_classes());