<?php
    require("database-connect.php");
    require("manga.php");

    $mlist = '';

    $mangas = array();
	$stauts = array();
    $x = 0;
    
    // Get all manga user connections
    $statement = $pdo->prepare("SELECT * FROM manga, usermanga, users WHERE users.UserEmail = '".$_SESSION['UserEMail']."' AND users.UserID = usermanga.UID AND usermanga.MID = manga.MID");
    $statement->execute();

    // Create new manga items
    while($row = $statement->fetch()) {
        $mangas[$x] = new Manga($row["MName"], $row["OWN"], $row["CHA"], $row["VOL"], $row["MID"],$row["VIEW"], $row["STATUS"]);
        $x++;
	}

    // Fill variable with table header
    $mlist = "<table><tr><th>Name</th><th>Own</th><th>Chapters</th><th>Volumes</th><th></th></tr>";

    // And with all manga items
    for($i = 0; $i < $x; $i++){
        $mlist = $mlist . $mangas[$i]->get_entry();
    }

    //Close table
    $mlist = $mlist . "</table>";
?>