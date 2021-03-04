<?php
	require "static.php";
	require "database-connect.php";

	$username=$_POST['username'];
	$pswunsafe=$_POST['password'];
	$email=$_POST['email'];

	$email = strtolower($email);

	//check if username or password is empty
	if ($username==""){
		header('Location: error/loginerror.php?error=3');
	}else if ($pswunsafe==""){
		header('Location: error/loginerror.php?error=4');
	}

	//hash password
	$password=password_hash($pswunsafe, PASSWORD_BCRYPT);

	//get all users with similar names
	$query = $pdo->prepare("select * from users where UserName LIKE '%$username%'  LIMIT 0 , 1 ");
	$query->execute();
	if($check = $query->fetch()){
		//check if an existing user has the same name
		if($check['UserName'] == $_POST['username']){
			header('Location: error/loginerror.php?error=2');
		}
	}
	
	//everything ok -> create user
	$statement = $pdo->prepare("INSERT INTO users (UserName, UserPSW, UserEmail) VALUES (?, ?, ?)");
	$statement->execute(array($_POST['username'], $password, $_POST['email']));

	$neue_id = $pdo->lastInsertId();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Welcome!</title>
		<meta name="viewport" content="width=device-with">

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 680px), screen and (max-device-width: 1080px)"  href="mobil.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<div class="menu">
			<?php echo($menu); ?>
		</div>
		<div class="content">
			<div class="item">
				<div id="text">New user with ID <?php echo($neue_id) ?> created. <a href="login.php">To login-site</a>
			</div>
		</div>
		<div class="foot">
			<p><?php echo($foot); ?></p>
		</div>
	</body>
</html>