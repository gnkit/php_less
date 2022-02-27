<?php

class Textarea extends Tag
{
	public function __construct()
	{
		parent::__construct('textarea');
	}

	public function open()
	{
		$textareaName = $this->getAttr('name');
		
		if ($textareaName) {
			if (isset($_REQUEST[$textareaName])) {
				$value = $_REQUEST[$textareaName];
				$this->setText($value);
			}
		}
		
		return parent::open();
	}

}

$form = (new Form)->setAttrs(['action' => '', 'method' => 
	'GET']); 

echo $form->open();
	echo (new Input)->setAttr('name', 'user');
	echo (new Textarea)->setAttr('name', 'message')->show();
	echo new Submit;
echo $form->close();

