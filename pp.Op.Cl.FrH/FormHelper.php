<?php

require_once 'TagHelper.php';


class FormHelper extends TagHelper
{
	public function openForm($attrs = [])
	{
		return $this->open('form', $attrs);
	}
	
	public function closeForm()
	{
		return $this->close('form');
	}
	
	public function input($attrs = [])
	{
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			
			if (isset($_REQUEST[$name])) {
				$attrs['value'] = $_REQUEST[$name];
			}
		}
		
		return $this->open('input', $attrs);
	}
	
	public function password($attrs = [])
	{
		$attrs['type'] = 'password';
		return $this->input($attrs);
	}
	
	public function hidden($attrs = [])
	{
		$attrs['type'] = 'hidden';
		return $this->open('input', $attrs);
	}
	
	public function submit($attrs = [])
	{
		$attrs['type'] = 'submit';
		return $this->open('input', $attrs);
	}
	
	public function checkbox($attrs = [])
	{
		$attrs['type'] = 'checkbox';
		$attrs['value'] = 1;
		
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			
			if (isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
				$attrs['checked'] = true;
			}
			
			$hidden = $this->hidden(['name' => $name, 'value' => 
				'0']); 
		} else {
			$hidden = '';
		}
		
		return $hidden . $this->open('input', $attrs);
	}

	public function textarea($attrs = [])
	{
		$text = '';
		$attrs['type'] = 'textarea';
		
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			
			if (isset($_REQUEST[$name])) {
				$text = $_REQUEST[$name] ?? '';
			}	
		}
		
		return $this->open('textarea', $attrs) . $text . $this->close('textarea') ;
	}

	public function select($attrsSelect = [], $attrsOption = [])
	{
		$selected = ['selected' => true];
		$options = '';

		foreach ($attrsOption as $option) {

			$value = $option['attrs']['value'];
			$name = $attrsSelect['name'];
			$reqValue = $_REQUEST[$name];

			if ($name) {
				if (isset($_REQUEST[$name]) && ($reqValue == $value)) {

					$options .= $this->option($option['text'], $option['attrs'] = $selected);

				} else {

					$options .= $this->option($option['text'], $option['attrs']);

				}
			}
		}


		return $this->open('select', $attrsSelect)
		. $options
		. $this->close('select');
	}

	public function option($text, $attrs = [])
	{
		return $this->open('option', $attrs) . $text . $this->close('option');
	}

}

$fh = new FormHelper();

echo $fh->openForm(['action' => '', 'method' => 'GET']);
	echo $fh->input(['name' => 'username', 'type' => 'text']);
	echo $fh->input(['name' => 'password', 'type' => 'password']);
	echo $fh->checkbox(['name' => 'check']);
	echo $fh->textarea(['name' => 'textarea']);
	echo $fh->select(
		['name' => 'list', 'class' => 'eee'],
		[
			['text' => 'item1', 'attrs' => ['value' => '1']],
			['text' => 'item2', 'attrs' => ['value' => '2']], 
			['text' => 'item3', 'attrs' => ['value' => '3', 'class' 
				=> 'last']], 
		],	
	);
	echo $fh->submit();
echo $fh->closeForm();

