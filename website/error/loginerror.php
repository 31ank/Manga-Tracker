<?php
    //page to show login errors
    if(!isset($_GET["error"])){
        header("location: ../index.php");
    }
    $code = $_GET["error"];
    if($code == 1){
        echo("Username/Password wrong");
    } else if($code == 2){
        echo("Username already exists");
    } else if($code == 3){
        echo("No empty username allowed");
    } else if($code == 5){
        echo("No empty password allowed");
    } else if($code == 6){
        echo("To many logins");
    } else {
        echo("?");
    }
?>