<?php

class Tag
{
	private $name;
	private $attrs = [];
	private $text = '';
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}

	public function getText()
	{
		return $this->text;
	}

	public function setText($text)
	{
		$this->text = $text;

		return $this;
	}

	public function getAttrs()
	{
		return $this->attrs;
	}

	public function getAttr($name)
	{
		if (isset($this->attrs[$name])) {

			return $this->attrs[$name];

		} else {

			return null;
		}
	}

	public function build()
	{
		return $this->open() . $this->text . $this->close();
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

	public function addClass($className)
	{
		if (isset($this->attrs['class'])) {
			$classNames = explode(' ', $this->attrs['class']);
			
			if (!in_array($className, $classNames)) {
				$classNames[] = $className;
				$this->attrs['class'] = implode(' ', $classNames);
			}
		} else {
			$this->attrs['class'] = $className;
		}
		
		return $this;
	}

	public function removeClass($className)
	{
		if (isset($this->attrs['class'])) {
			$classNames = explode(' ', $this->attrs['class']);
			
			if (in_array($className, $classNames)) {
				$classNames = $this->removeElem($className, $classNames);
				$this->attrs['class'] = implode(' ', $classNames);
			}
		}
		
		return $this;
	}

	
	private function removeElem($elem, $arr)
	{
		$key = array_search($elem, $arr); // находим ключ элемента по его тексту
		array_splice($arr, $key, 1); // удаляем элемент
		
		return $arr; // возвращаем измененный массив
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


echo (new Tag('header'))->addClass('class', 'header')->setText('HEADER SITE')->build();