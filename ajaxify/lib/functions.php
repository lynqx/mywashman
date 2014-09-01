<?php 

class DatabaseConnection{
	function __construct(){
	
	}
	
	function start(){
		return new PDO('mysql:host=127.0.0.1:3306;dbname=lynqxc5_washman',"lynqxc5_toni","dj05imon");
	}
}


	$dbconn = new DatabaseConnection;
?>