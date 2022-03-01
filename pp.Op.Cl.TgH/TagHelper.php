<?php

class TagHelper
{
	public function open($name, $attrs = [])
	{
		$attrsStr = $this->getAttrsStr($attrs);
		return "<$name$attrsStr>";
	}
	
	public function close($name)
	{
		return "</$name>";
	}

	public function show($tag, $text)
	{

		return "<$tag>" . $text ."</$tag>";
	}
	
	private function getAttrsStr($attrs)
	{
		if (!empty($attrs)) {
			$result = '';
			
			foreach ($attrs as $name => $value) {
				if ($value === true) {
					$result .= " $name";
				} else {
					$result .= " $name=\"$value\"";
				}
			}
			
			return $result;
		} else {
			return '';
		}
	}

}


$th = new TagHelper();

echo $th->open('form', ['action' => 'test.php', 'method' => 
	'GET']); 
	echo $th->open('input', ['name' => 'year']);
	echo $th->open('input', ['type' => 'submit']);
echo $th->close('form');

$th2 = new TagHelper();

echo $th2->show('h1', 'Title text');