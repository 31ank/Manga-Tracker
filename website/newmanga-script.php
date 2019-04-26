<?php
    include("database-connect.php");
    //create new query to insert a new manga
    $statement = $pdo->prepare("INSERT INTO manga (MName, MCha, MVol, MImg) VALUES (?, ?, ?, ?)");
    $statement->execute(array($_POST["MName"], $_POST["MCha"], $_POST["MVol"], $_POST["MImg"]));
    echo('Insertet new Manga ' . $_POST["MName"] . ' -> to <a href="index.php">Index page</a>');
?>