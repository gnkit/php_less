<?php

class Tag
{
	private $name;
	private $attrs = [];
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function open()
	{
		$name = $this->name;
		$attrsStr = $this->getAttrsStr($this->attrs);
		
		return "<$name$attrsStr>";
	}
	
	public function close()
	{
		$name = $this->name;
		return "</$name>";
	}

	public function setAttr($name, $value = true)
	{
		$this->attrs[$name] = $value;

		return $this;
	}

	public function removeAttr($name)
	{
		unset($this->attrs[$name]);

		return $this;
		
	}

	public function setAttrs($attrs)
	{
		foreach($attrs as $name => $value) {
			$this->setAttr($name, $value);
		}

		return $this;
	}
	
	private function getAttrsStr($attrs)
	{
		if (!empty($attrs)) {
			$result = '';
			
			foreach ($attrs as $name => $value) {
				if (true === $value) {
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


echo (new Tag('input'))->setAttr('name', 'name1')->open();
echo (new Tag('input'))->setAttr('name', 'name2')->open();