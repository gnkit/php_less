<?php

class HtmlList extends Tag
{
	private $items = [];
	
	public function addItem(ListItem $li)
	{
		$this->items[] = $li;
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


$list = new HtmlList('ul');

echo $list->setAttr('class', 'eee')
	->addItem((new ListItem())->setText('item1')->setAttr('class', 'first'))
	->addItem((new ListItem())->setText('item2'))
	->addItem((new ListItem())->setText('item3')->setAttr('class', 'third'));


class Ul extends HtmlList
{
	public function __construct()
	{
		parent::__construct('ul');
	}
}

class Ol extends HtmlList
{
	public function __construct()
	{
		parent::__construct('ul');
	}	
}

$ul = new Ul;
$ol = new Ol;

echo $ul->addItem((new ListItem())->setText('item1'))
	->addItem((new ListItem())->setText('item2'))
	->addItem((new ListItem())->setText('item3'));

echo $ol->addItem((new ListItem())->setText('item1'))
	->addItem((new ListItem())->setText('item2'))
	->addItem((new ListItem())->setText('item3'));