<?php

interface iFile
{
	public function __construct($filePath);
	public function getPath();
	public function getDir();
	public function getName();
	public function getExt();
	public function getSize();
	public function getText();
	public function setText($text);
	public function appendText($text);
	public function copy($copyPath);
	public function delete();
	public function rename($newName);
	public function replace($newPath);
}


class File implements iFile
{
	private $path;

	public function __construct($path)
	{
		$this->path = __DIR__ . '/' . $path;
	}

	public function getPath()
	{
		return $this->path;
	}

	public function getDir()
	{
		return dirname($this->path);
	}

	public function getName()
	{
		return basename($this->path);
	}

	public function getExt()
	{
		return pathinfo($this->path, PATHINFO_EXTENSION);
	}

	public function getSize()
	{
		return filesize($this->path);
	}

	public function getText()
	{
		return file_get_contents($this->path);
	}

	public function setText($text)
	{
		file_put_contents($this->path, $text);
	}

	public function appendText($text)
	{
		file_put_contents($this->path, $text, FILE_APPEND | LOCK_EX);
	}

	public function copy($copyPath)
	{
		copy($this->path, __DIR__ . '/' . $copyPath);
	}

	public function delete()
	{
		unlink($this->path);
	}

	public function rename($newName)
	{
		rename($this->path, $newName);
	}

	public function replace($newPath)
	{
		if (is_uploaded_file($this->path)) {
			move_uploaded_file($this->path, $newPath);
		} else {
			$this->copy($newPath);
		}
	}

}
