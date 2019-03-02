<?php
    require 'static.php';
    include('database-connect.php');
    $mname = $_GET["MNameSearch"];
    if(is_null($mname) || $mname == ""){
        header('Location: index.php');
    }
    $statement = $pdo->prepare("SELECT * FROM manga WHERE MName LIKE '" . $mname . "%'");
    $statement->execute();

    $x=0;
    $name = array();
    $vol = array();
    $cha = array();
    $img = array();
    $id = array();

    while($check = $statement->fetch()){
        $name[$x] = $check["MName"];
        $vol[$x] = $check["MVol"];
        $cha[$x] = $check["MCha"];
        $img[$x] = $check["MImg"];
        $id[$x] = $check["MID"];
        $x++;
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Search</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div class="menu">
            <?php echo($menu); ?>
        </div>
        <div class="content">
            <?php for($i = 0; $i < $x; $i++){?>
            <div class="item">
                <p>Name: <?php echo($name[$i]);?></p>
                <p>Volumes: <?php echo($vol[$i]);?></p>
                <p>Chapters: <?php echo($cha[$i]);?></p>
                <p>Image: <?php echo($img[$i]);?></p>
                <?php if(isset($_SESSION["UserName"])){?>
                <form action="addmanga-script.php" method="post">
                    <input type="hidden" value="<?php echo($id[$i]);?>" name="MID">
                    <input class="button" type="submit" value="Add" style="width:auto;">
                </form>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <div class="foot">
            <p><?php echo($foot); ?></p>
        </div>
    </body>
</html>