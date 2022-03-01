<?php

require_once 'Tag.php';

class Option extends Tag
{
	public function __construct()
	{
		parent::__construct('option');
	}

	public function setSelected()
	{
		return $this->setAttr('selected');
	}

	public function show()
	{
		$name = $this->getAttr('name');
		
		if ($name) {
			if (isset($_REQUEST[$name])) {
				$this->setSelected();
			}
		}
		
		return parent::show();
	}

}