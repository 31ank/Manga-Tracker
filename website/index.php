<?php
    include("database-connect.php");
    require 'static.php';
    $statement = $pdo->prepare("SELECT * FROM news ORDER BY id DESC LIMIT 5");
    $statement->execute();

    $x=0;
    $content = array();
    $author = array();

    if($check = $statement->fetch()){
        $content[$x] = $check["Content"];
        $author[$x] = $check["Author"];
        $x++;
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>MangaTracker</title>
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
                <p>Search</p>
                <form action="search.php" method="GET">
                    <input type="text" name="MNameSearch">
                    <input class="button" type="submit" value="Search" style="width:auto;">
                </form>
            </div>
            <?php foreach($content as $news){ ?>
                <div class="item">
                    <p><?php echo($news); ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="foot">
            <p><?php echo($foot); ?></p>
        </div>
    </body>
</html>