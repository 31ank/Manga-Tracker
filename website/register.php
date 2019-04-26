<?php
	require 'static.php';
?>
<html>
	<head>
		<title>MT - Register</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-with">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 500px), screen and (max-device-width: 400px)"  href="mobil.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<div class="menu">
			<?php echo($menu); ?>
		</div>
		<div class="content">
			<div class="item">
				<form action="register-script.php" method="post">
					<table>
						<tr>
							<td>Username:</td>
							<td><input type="text" name="username" size="20"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="password" size="20"></td>
						</tr>
						<tr>
							<td>E-Mail:</td>
							<td><input type="text" name="email" size="20"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input class="button" type="submit" name="Login" value="Register" style="width: auto;"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div class="foot">
			<p><?php echo($foot); ?></p>
		</div>
	</body>
</html>
