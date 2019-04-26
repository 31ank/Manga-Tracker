<?php
    // if user is logged in -> show logout and profile page
    // else only show home and login page
    // if user is admin also show link to create a new entry
    session_start();
    if(!isset($_SESSION['UserName'])){
        $menu = '<a href="index.php" id="home">Home</a><a href="login.php" id="login">Login</a>';
    } else {
        $menu = '<a href="index.php" id="home">Home</a><a href="logout.php" id="login">Logout</a><a href="profile.php" id="profile">Profile</a><div style="position:absolute;right:0;top:10px;"><a href="index.php">MangaTracker</a></div>';
        if($_SESSION['UserAdmin'] == 1){
            $menu = $menu . '<a href="newmanga.php">New Manga</a>';   
        }
    }
    $foot = 'Site by <a href="https://twitter.com/31ankUser" target="_blank">31ank</a> | &copy 2019';
?>