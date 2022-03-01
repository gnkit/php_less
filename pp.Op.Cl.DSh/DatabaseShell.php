<?php

class DatabaseShell
{
	private $dbh;
	
	public function __construct($host, $user, $password, $database)
	{
		try {
			$this->dbh = new PDO('mysql:host='. $host .';dbname='. $database, $user, $password);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo 'Ошибка: ' . $e->getMessage();
		}
	}
	
	public function save($table, $data)
	{
		$fields = [];
		$binds = [];
		$parametres = [];

		foreach ($data as $key => $value) {
			$fields[] = $key;
			$binds[] = ':' . $key;
			$params[':' . $key] = $value;
		}

		$sql = 'INSERT INTO ' . $table . '(' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';
		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);
	}
	
	public function del($table, $id)
	{
		$sql = 'DELETE FROM ' . $table . ' WHERE id = :id';

		$params = [':id' => $id];

		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);

	}
	
	public function delAll($table, $ids)
	{
		foreach ($ids as $id) {
			$this->del($table, $id);
		}
	}
	
	public function get($table, $id)
	{
		$sql = ('SELECT * FROM ' . $table . ' WHERE id = :id');
		$params = [':id' => $id];
		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);

		return $sth->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getAll($table, $ids)
	{
		$all = [];

		foreach ($ids as $id) {
			$all[] = $this->get($table, $id);
		}

		return $all;
	}
	
	public function selectAll($table, $condition)
	{
		$sql = ('SELECT * FROM ' . $table . ' ' . $condition);
		
		$sth = $this->dbh->query($sql);

		return $sth->fetchAll(PDO::FETCH_ASSOC);
	}
}


$db = new DatabaseShell('localhost', 'root', '', 'test');
$db->save('users', ['name' => 'user1', 'age' => '23']);
$db->del('users', 3);
$db->delAll('users', [1, 2, 3, 5]);
var_dump($user = $db->get('users', 9));
var_dump($users = $db->getAll('users', [16, 13, 12, 15]));
var_dump($users = $db->selectAll('users', 'where id <= 7'));