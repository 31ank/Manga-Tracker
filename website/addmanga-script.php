<?php
    include('database-connect.php');
    session_start();
    $statement = $pdo->prepare("INSERT INTO usermanga (UID, MID) VALUES (?, ?)");
    $statement->execute(array($_SESSION["UserID"], $_POST['MID']));
    header('Location: profile.php');
?>