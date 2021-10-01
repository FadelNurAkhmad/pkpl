<?php

class Connect{

	private $servername;
	private $username;
	private $password;
	private $dbname;

	public function dbConn(){
		$this->servername = 'localhost';
		$this->username = 'root';
		$this->password = '';
		$this->dbname = 'authentication';

		$connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		return $connection;
	}

	

}