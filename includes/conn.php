<?php

Class Database{
 
	private $server = "mysql:host=localhost;dbname=ecomm";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 	/* Heroku remote server */
	$i++;
	$cfg["Servers"][$i]["host"] = "us-cdbr-east-05.cleardb.net"; //provide hostname
	$cfg["Servers"][$i]["user"] = "b96b9d7eb836f5"; //user name for your remote server
	$cfg["Servers"][$i]["password"] = "9f1221d9"; //password
	$cfg["Servers"][$i]["auth_type"] = "config"; // keep it as config
$pdo = new Database();
 
?>
