<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 14/02/2018
 * Time: 23:07
 */


class Database

{
	public $db;

	function __construct()
	{
		$this->dbConnect();
	}



	public function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}
}

$database = new Database();