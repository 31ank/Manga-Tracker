<?php 
    session_start();
    session_destroy();
    require 'static.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>MT - Logout</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div class="menu">
            <?php echo($menu); ?>
        </div>
        <div class="content">
            <div class="item">
                You successfully logged out
            </div>
        </div>
        <div class="foot">
            <p><?php echo($foot); ?></p>
        </div>
    </body>
</html>