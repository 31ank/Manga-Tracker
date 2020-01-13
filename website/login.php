<?php
    require 'static.php';
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>MT - Login</title>
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
                        <div class="header">
                            Login
                        </div>
                        <form action="login-script.php" method="post">
                            <input type="text" name="uemail" placeholder="E-Mail"><br>
                            <input type="password" name="upsw" placeholder="Password"><br>
                            <input class="button" type="submit" name="Login" value="Login" style="width:100%;margin:0px;margin-top:5px;margin-bottom:5px;">
                        </form>
                        <!-- <a href="register.php">Create new account</a> -->
                    </div>
				</table>
			</div>
        </div>
        <div class="foot">
            <p><?php echo($foot); ?></p>
        </div>
        <script>
            document.getElementById("login").style.backgroundColor = "#000a12";
        </script>
    </body>
</html>