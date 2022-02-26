<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
</head>
<body>
<style>
	.active {
		color: red;
		font: bold;
	}
</style>
<?php

require_once 'Link.php' ;

$basePath = '/wp/pp.Op.Cl.Lnk/';
$i = 1;
while ($i <= 5) {
	echo (new Link())->setText("index $i")->setAttr('href', "$basePath$i.php")->show() . PHP_EOL;
    $i++;
}

?>
</body>
</html>

