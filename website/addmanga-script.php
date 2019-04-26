<?php
    // add new connection between user and manga
    include('database-connect.php');
    session_start();
    $view = 0;
    // based on the button click, show own and volumes or chapters and volumes
    if(!isset($_POST["btnOnline"])){
        $view=1;
    }
    $statement = $pdo->prepare("INSERT INTO usermanga (UID, MID, VIEW) VALUES (?, ?, ?)");
    $statement->execute(array($_SESSION["UserID"], $_POST['MID'], $view));
    header('Location: profile.php');
?>