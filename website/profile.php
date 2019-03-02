<?php
session_start();
require 'static.php';
require 'mlist.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Profile</title>
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
                <form action="profile.php" method="GET">
                    <select name="ShowList" class="select">
                        <option value="0">Reading</option>
                        <option value="1">Dropped</option>
                        <option value="2">Plan to read</option>
                        <option value="3">Finished</option>
                    </select>
                    <input class="button" type="submit" name="ShLi" value="Show list" style="width: auto;">
                </form>
            </div>
            <div class="item">
                <?php echo($mlist);?>
            </div>
        </div>
        <div class="foot">
            <p><?php echo($foot); ?></p>
        </div>
    </body>
</html>