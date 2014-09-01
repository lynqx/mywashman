<?php 
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
//require_once("lib/prompter.php");

if (isset($_POST['action'])){
	$action = $_POST['action'];
}else if(isset($_GET['action'])){
	$action = $_GET['action'];
}

switch($action){
	case "subscribe":
		require_once("subscribe.php");
		$name = $_REQUEST['name'];
		$mobile = $_REQUEST['mobile'];
		$email = $_REQUEST['email'];
		$packagetype = $_REQUEST['packagetype'];
		$password = $_REQUEST['password'];
		$newuser = new subscribe;
		$createnewuser = $newuser -> createAccount($name,$mobile,$email,$packagetype,$password);
		if ($createnewuser === true) {
			$message = array('message' => "Account created successfully");
		print json_encode($message);
		}else if($createnewuser === false){
			$message = "Error creating account";
			exit($message);
			//prompter("failed");
		}
	break;

}

?> 