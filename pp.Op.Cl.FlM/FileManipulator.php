<?php

class FileManipulator
{
	public function create($filePath)
	{
		file_put_contents($filePath, '',  FILE_APPEND | LOCK_EX);
	}
	
	public function delete($filePath)
	{
		unlink($filePath);
	}
	
	public function copy($filePath, $copyPath)
	{
		copy($filePath, $copyPath);
	}
	
	public function rename($filePath, $newName)
	{
		rename($filePath, $newName);
	}
	
	public function replace($filePath, $newPath)
	{
		if (is_uploaded_file($filePath)) {
			move_uploaded_file($filePath, $newPath);
		} else {
			$this->copy($newPath);
		}
	}
	
	public function weight($filePath)
	{
		return filesize($filePath);
	}
}

$file = new FileManipulator();

$file->create('test.txt');
$file->copy('test.txt', 'newtest.txt');
$file->copy('test.txt', 'renametest.txt');
$file->copy('test.txt', 'replacetest.txt');
echo $file->weight('test.txt');
$file->delete('test.txt');