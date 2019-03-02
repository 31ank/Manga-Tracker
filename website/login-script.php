<?php session_start();
//load database connection
include("database-connect.php");
$usermail=$_POST['uemail'];
$userpsw=$_POST['upsw'];
// MySQL data

if(isset($_SESSION["login"])){
	if($_SESSION["login"]<5){
		$query = $pdo->prepare("select * from users where UserEmail LIKE '%$usermail%' LIMIT 0 , 1 ");
		$query->execute();
	} else {
		header('Location: error/tomany.php');
	}
} else {
	$query = $pdo->prepare("select * from users where UserEmail LIKE '%$usermail%' LIMIT 0 , 1 ");
	$query->execute();	
}

if($check = $query->fetch()){
	if($check['UserEmail'] == $usermail && password_verify($userpsw, $check['UserPSW'])){
		$_SESSION['UserName']=$check['UserName'];
		$_SESSION['UserEMail']=$usermail;
		$_SESSION['UserID']=$check["UserID"];
		$_SESSION['UserAdmin']=$check['UserAdmin'];
		$_SESSION['UserMod'] = $check['UserMod'];
		$_SESSION['UserView'] = $check['UserView'];
		header('Location: index.php');
	}else{
		if(isset($_SESSION["login"])){
			$_SESSION["login"] = $_SESSION["login"] + 1;	
		} else {
			$_SESSION["login"] = 1;
		}
		header('Location: error/loginerror.php');
	}
} else {
	if(isset($_SESSION["login"])){
		$_SESSION["login"] = $_SESSION["login"] + 1;
	} else {
		$_SESSION["login"] = 1;
	}
	header('Location: error/fetcherror.php');
}
?>
