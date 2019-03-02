<?php
    session_start();
    if(!isset($_SESSION['UserName'])){
        $menu = '<a href="index.php">Home</a><a href="login.php">Login</a><a href="profile.php">Profile</a>';
    } else {
        $menu = '<a href="index.php">Home</a><a href="logout.php">Logout</a><a href="profile.php">Profile</a>';
        if($_SESSION['UserAdmin'] == 1 || $_SESSION['UserMod'] == 1){
            $menu = $menu . '<a href="newmanga.php">New Manga</a><a href="newnews.php">New News</a>';   
        }
    }
    $foot = 'Site by <a href="https://twitter.com/31ankUser">31ank</a><br><a href="imprint.php">Imprint</a> &copy 2019';
?>