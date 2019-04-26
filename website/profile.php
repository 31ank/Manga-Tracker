<?php
    session_start();
    require 'static.php';
    require 'mlist.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>MT - Profile</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/updatemanga.js" defer></script>
        <script
			  src="https://code.jquery.com/jquery-3.4.0.min.js"
			  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
			  crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div class="menu">
            <?php echo($menu); ?>
        </div>
        <div class="content">
            <div class="item">
                <?php echo($mlist);?>
            </div>
        </div>
        <div class="foot">
            <p><?php echo($foot); ?></p>
        </div>
        <script>
        document.getElementById("profile").style.backgroundColor = "#000a12";
    </script>
    </body>
</html>