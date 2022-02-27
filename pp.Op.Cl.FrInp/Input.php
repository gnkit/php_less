<?php

require_once 'Form.php';

class Input extends Tag
{
	public function __construct()
	{
		parent::__construct('input');
	}

	public function open()
	{
		$inputName = $this->getAttr('name');
		
		if ($inputName) {
			if (isset($_REQUEST[$inputName])) {
				$value = $_REQUEST[$inputName];
				$this->setAttr('value', $value);
			}
		}
		
		return parent::open();
	}
	
	public function __toString()
	{
		return $this->open();
	}

}

$form = (new Form)->setAttrs(['action' => '', 'method' => 'POST']);

echo $form->open();
	echo (new Input)->setAttr('name', 'number1')->setAttr('type', 'number');
	echo (new Input)->setAttr('name', 'number2')->setAttr('type', 'number');
	echo (new Input)->setAttr('name', 'number3')->setAttr('type', 'number');
	echo (new Input)->setAttr('name', 'number4')->setAttr('type', 'number');
	echo (new Input)->setAttr('name', 'number5')->setAttr('type', 'number');
	echo (new Input)->setAttr('type', 'submit');
echo $form->close();

var_dump(array_sum($_REQUEST));