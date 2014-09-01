<?php 
require_once("lib/functions.php");

class subscribe{
	function createAccount($name,$mobile,$email,$packagetype,$password){
	$dbconn = new DatabaseConnection;
	$connect = $dbconn->start();
	if(!($connect)){
		print json_encode("connection failed");
	}

		$query = ("
		           INSERT INTO authentication (username, mobile, email, safety, salt, joined) 
		           VALUES ('{$name}', '{$mobile}', '{$email}', MD5(CONCAT('{$password}',MD5(NOW()))),MD5(NOW()), NOW());
		          ");
		                      
          $res = $connect->query($query); // to perform query 
          $lastid = $connect->lastInsertId();
          $query2 =   ("
		           INSERT INTO subscriptions
		           (customer_id,plan,subscription_date,expiry_date,joined)
		           VALUES('{$lastid}','{$packagetype}',NOW(),DATE_ADD(NOW(),INTERVAL 1 MONTH),NOW());
		          "); 
          if(!$res){
          	// print json_encode("1st query failed".$name."->".$mobile."->".$email."->".$password);
          	return false;
			header('HTTP/1.1 401 Unauthorized');
			exit;
          }else{
		  	// print json_encode("1st query passed");
		  	$res2 = $connect->query($query2);
		  	if($res2){
		  		// print json_encode("2nd query passed");
		  		return true;
		  	}
		  }
			
	}
}

 ?> 