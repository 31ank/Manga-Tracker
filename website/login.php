<?php
require 'static.php';
session_start();
if(isset($_SESSION["login"])){
    if($_SESSION["login"] > 5){
        header('Location: error/tomany.php');
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div class="menu">
            <?php echo($menu); ?>
        </div>
        <div class="content">
            <div class="login">
                <table>
                    <div class="item">
                        <form action="login-script.php" method="post">
                            <p>E-Mail:</p>
                            <input type="text" name="uemail">
                            <p>Password:</p>
                            <input type="password" name="upsw"><br>
                            <input class="button" type="submit" name="Login" value="Login" style="width:100%;margin:0px;margin-top:5px;margin-bottom:5px;">
                        </form>
                    </div>
				</table>
			</div>
        </div>
        <div class="foot">
            <p><?php echo($foot); ?></p>
        </div>
    </body>
</html>