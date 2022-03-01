<?php

require_once 'Tag.php';
require_once 'Option.php';
require_once 'Form.php';
require_once 'Submit.php';
require_once 'Input.php';


class Select extends Tag
{

	public function __construct()
	{
		parent::__construct('select');
	}

	private $items = [];
	
	public function add(Option $option)
	{
		$this->items[] = $option;
		
		return $this;
	}
	
	public function show()
	{
		$result = $this->open();
		
		foreach ($this->items as $item) {
			$result .= $item;
		}
		
		$result .= $this->close();
		
		return $result;
	}


}

$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

echo $form->open();

echo (new Select)->setAttr('name', 'option')
	->add( (new Option())->setText('item1') )
	->add( (new Option())->setText('item2') )
	->add( (new Option())->setText('item3')->setSelected())
	->show();
echo new Submit;
echo $form->close();

var_dump($_REQUEST['option']);