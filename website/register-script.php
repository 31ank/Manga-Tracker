<html>
	<head>
		<meta charset="UTF-8">
		<title>Welcome!</title>
		<meta name="viewport" content="width=device-with">

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 680px), screen and (max-device-width: 1080px)"  href="mobil.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
<?php
	include("static.php");
	$username;$password;$captcha;
	if(isset($_POST['username'])){
		$username=$_POST['username'];
	}if(isset($_POST['password'])){
		$password=$_POST['password'];
			}
			if(isset($_POST['g-recaptcha-response'])){
		$captcha=$_POST['g-recaptcha-response'];
	}
	if(!$captcha){
		echo '<h2>Please check the the captcha form.</h2>';
		exit;
	}
	$secretKey = "[SecretKey]";
	$ip = $_SERVER['REMOTE_ADDR'];
	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);
	if(intval($responseKeys["success"]) !== 1) {
		header('Location: error/usererror.php?error=');
	} else {
		include("database-connect.php");
		$username=$_POST['username'];
		$pswunsafe=$_POST['password'];
		$valid = "0";
		$password=password_hash($pswunsafe, PASSWORD_BCRYPT);
		$email=$_POST['email'];
		$captchatext=$_POST['captchatext'];
		$_SESSION['username']=$username;
		$_SESSION['email']=$email;
		$query = $pdo->prepare("select * from users where UserName LIKE '%$username%'  LIMIT 0 , 1 ");
		$query->execute();
		$invchar=";";
		if($check = $query->fetch()){
		if($check['UserName'] == $_POST['username']){
			header('Location: error/usererror.php?error=');
		}else if ($_POST['username']==""){
			header('Location: error/usererror.php?error=');
		}else if ($_POST['password']==""){
			header('Location: error/usererror.php?error=');
		}else if (strpos($check['UserName'],$invchar)!==false){
			header('Location: error/usererror.php?error=');
		}else{
			header('Location: error/usererror.php?error=');
		}
		} else {
			if($captchacode == $_POST['captchatext'])
			{
				$statement = $pdo->prepare("INSERT INTO users (UserName, UserPSW, UserEmail) VALUES (?, ?, ?)");
				$statement->execute(array($_POST['username'], $password, $_POST['email']));

				$neue_id = $pdo->lastInsertId();
				?>
				<body>
					<div class="menu">
						<?php echo($menu); ?>
					</div>
					<div class="content">
						<div class="item">
							<div id="text">New user with ID <?=$neue_id ?> createt. <a href="login.php">To login-site</a>
						</div>
					</div>
					<div class="foot">
						<p><?php echo($foot); ?></p>
					</div>
				</body>
			<?php
			}else{
				echo $captchacode;
			}
		}
	}

?>
