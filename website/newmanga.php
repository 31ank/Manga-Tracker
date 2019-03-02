<?php
    require 'static.php';
    session_start();
    if($_SESSION['UserAdmin'] == 1){
?>
<!DOCTYPE HTML>
<html>
    <head>
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
                <p>Add new manga to database</p>
                <form action="newmanga-script.php" method="POST">
                    <p>Name:</p>
                    <input type="text" name="MName">
                    <p>Chapters:</p>
                    <input type="text" name="MCha" value="0">
                    <p>Volumes:</p>
                    <input type="text" name="MVol" value="0">
                    <p>Image - URL:</p>
                    <input type="text" name="MImg" value="">
                    <input class="button" type="submit" value="Submit" style="width: auto;">
                </form>
            </div>
        </div>
        <div class="foot">
            <p><?php echo($foot); ?></p>
        </div>
    </body>
</html>
<?php
    }
?>