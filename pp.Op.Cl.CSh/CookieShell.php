<?php

class CookieShell
{
	public function set($name, $value, $time)
	{
		setcookie($name, $value, time() + $time);
		$_COOKIE[$name] = $value;
	}
	
	public function get($name)
	{
		return $_COOKIE[$name];
	}
	
	public function del($name)
	{
		unset($_COOKIE[$name]);
	}
	
	public function exists($name)
	{
		return isset($_COOKIE[$name]);
	}

	public function counterUpdate()
	{
		if (!isset($_COOKIE['counter'])) {
			setcookie('counter', 1);
			$_COOKIE['counter'] = 1;
		} else {
			setcookie('counter', ++$_COOKIE['counter']);
		}
	
		echo $_COOKIE['counter'];
	}
}

(new CookieShell())->counterUpdate();

$csh = new CookieShell;
$csh->set('test', '123', 3600 * 24);
echo $csh->get('test');