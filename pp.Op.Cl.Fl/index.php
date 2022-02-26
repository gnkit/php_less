<?php

require_once 'File.php';

$file = new File('test.txt');

echo  $file->getPath() . PHP_EOL;
echo  $file->getDir() . PHP_EOL;
echo  $file->getName() . PHP_EOL;
echo  $file->getExt() . PHP_EOL;
echo  $file->getSize() . PHP_EOL;
echo  $file->getText() . PHP_EOL;
echo  $file->setText('new text') . PHP_EOL;
echo  $file->appendText(' append text') . PHP_EOL;
echo  $file->copy('/copy/copy.text') . PHP_EOL;
echo  $file->delete() . PHP_EOL;
echo  $file->rename('newTest.txt') . PHP_EOL;
echo  $file->replace('replaceTest.txt') . PHP_EOL;


