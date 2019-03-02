<?php
    include("database-connect.php");
    $statement = $pdo->prepare("INSERT INTO news (Content, Author) VALUES (?, ?)");
    $statement->execute(array($_POST["Content"], $_POST["Author"]));
    echo('Insertet new news ' . $_POST["Content"] . '-> to <a href="index.php">Index page</a>');
?>