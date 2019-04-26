<?php
    include("database-connect.php");
    session_start();
    //update mangas based on the button press
    if(isset($_GET["mid"])){
        if(isset($_GET["vol"])){
            if($_GET["vol"] == "1"){
                $statement = $pdo->prepare("UPDATE usermanga SET VOL = VOL + 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_GET["mid"] . "'");
                $statement->execute();
            } else {
                $statement = $pdo->prepare("UPDATE usermanga SET VOL = VOL - 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_GET["mid"] . "'");
                $statement->execute();
            }
        }

        if(isset($_GET["cha"])){
            if($_GET["cha"] == "1"){
                $statement = $pdo->prepare("UPDATE usermanga SET CHA = CHA + 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_GET["mid"] . "'");
                $statement->execute();
            } else {
                $statement = $pdo->prepare("UPDATE usermanga SET CHA = CHA - 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_GET["mid"] . "'");
                $statement->execute();
            }
        }

        if(isset($_GET["own"])){
            if($_GET["own"] == "1"){
                $statement = $pdo->prepare("UPDATE usermanga SET OWN = OWN + 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_GET["mid"] . "'");
                $statement->execute();
            } else {
                $statement = $pdo->prepare("UPDATE usermanga SET OWN = OWN - 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_GET["mid"] . "'");
                $statement->execute();
            }
        }

        if(isset($_GET["rem"])){
            $statement = $pdo->prepare("DELETE FROM usermanga WHERE MID = '" . $_GET["mid"] . "' AND UID = '" . $_SESSION["UserID"] . "'");
            $statement->execute();
        }
    }
    echo("finish");
?>