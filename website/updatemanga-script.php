<?php
    include("database-connect.php");
    session_start();
    if(isset($_POST["mid"])){
        if(isset($_POST["btn_inc_vol"])){
            $statement = $pdo->prepare("UPDATE usermanga SET VOL = VOL + 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_POST["mid"] . "'");
            $statement->execute();
        } else if(isset($_POST["btn_dec_vol"])) {
            $statement = $pdo->prepare("UPDATE usermanga SET VOL = VOL - 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_POST["mid"] . "'");
            $statement->execute();
        }

        if(isset($_POST["btn_inc_cha"])){
            $statement = $pdo->prepare("UPDATE usermanga SET CHA = CHA + 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_POST["mid"] . "'");
            $statement->execute();
        } else if(isset($_POST["btn_dec_cha"])) {
            $statement = $pdo->prepare("UPDATE usermanga SET CHA = CHA - 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_POST["mid"] . "'");
            $statement->execute();
        }

        if(isset($_POST["btn_inc_own"])){
            $statement = $pdo->prepare("UPDATE usermanga SET OWN = OWN + 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_POST["mid"] . "'");
            $statement->execute();
        } else if(isset($_POST["btn_dec_own"])) {
            $statement = $pdo->prepare("UPDATE usermanga SET OWN = OWN - 1 WHERE UID = '" . $_SESSION["UserID"] . "' AND MID = '" . $_POST["mid"] . "'");
            $statement->execute();
        }

        if(isset($_POST["btn_rem"])){
            $statement = $pdo->prepare("DELETE FROM usermanga WHERE MID = '" . $_POST["mid"] . "' AND UID = '" . $_SESSION["UserID"] . "'");
            $statement->execute();
        }
    }
    header('Location: profile.php');
?>