<?php

class connection{
	private $servername;
	private $username;
	private $password;
	private $dbname;
	function __construct(){
		$this->servername = 'localhost';
		$this->username = 'wiwdlzms';
		$this->password = '43YsP6gp0a';
		$this->dbname = 'wiwdlzms_php25buoi5';
		#$this->username = 'root';
		#$this->password = '';
		#$this->dbname = 'mywebsite';
	}
      public function connect(){

		$conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
mysqli_set_charset($conn, 'UTF8');
	    if ($conn->connect_error) {
			echo "failed to connect".$conn->connect_error;
			exit();
	    }
	    return $conn;
	}


}



  ?>