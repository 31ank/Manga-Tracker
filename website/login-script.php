<?php 
	//if someone enters 5 times wrong
	//user/password -> block
	if(isset($_SESSION["login"])){
		if($_SESSION["login"] > 5){
			header("Location: error/loginerror.php?error=6");
		}
	}

	//create new session
	session_start();
	require 'database-connect.php';

	$usermail=$_POST['uemail'];
	$userpsw=$_POST['upsw'];
	//get all users with similar name
	$query = $pdo->prepare("select * from users where UserEmail LIKE '%$usermail%' LIMIT 0 , 1 ");
	$query->execute();

	if($check = $query->fetch()){
		//if usermail and password are similar -> fill session
		if($check['UserEmail'] == $usermail && password_verify($userpsw, $check['UserPSW'])){
			$_SESSION['UserName']=$check['UserName'];
			$_SESSION['UserEMail']=$usermail;
			$_SESSION['UserID']=$check["UserID"];
			$_SESSION['UserAdmin']=$check['UserAdmin'];
			header('Location: index.php');
		//else increase login - fail - counter
		}else{
			if(isset($_SESSION["login"])){
				$_SESSION["login"] = $_SESSION["login"] + 1;	
			} else {
				$_SESSION["login"] = 1;
			}
			header('Location: error/loginerror.php?error=1');
		}
	}
?>