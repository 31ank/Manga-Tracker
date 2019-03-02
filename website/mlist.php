<?php
    require("database-connect.php");
    require("manga.php");

    $mlist = '';

    $mangas = array();
	$stauts = array();
    $x = 0;
    
    $statement = $pdo->prepare("SELECT * FROM manga, usermanga, users WHERE users.UserEmail = '".$_SESSION['UserEMail']."' AND users.UserID = usermanga.UID AND usermanga.MID = manga.MID");
    $statement->execute();

    if(isset($_GET["ShowList"]))
    {
        $showlist = $_GET["ShowList"];
    } else {
        $showlist=0;
    }

    while($row = $statement->fetch()) {
		if($row["STATUS"]==$showlist){
            $mangas[$x] = new Manga($row["MName"], $row["OWN"], $row["CHA"], $row["VOL"], $row["MID"], $row["STATUS"]);
            $status[$x] = $row["STATUS"];
            $x++;
		}
	}

    if($_SESSION['UserView'] == 1){
        $mlist = "<table><tr><th>Name</th><th>Own</th><th>Chapters</th><th>Volumes</th><th></th></tr>";
    } else {
        $mlist = "<table><tr><th>Name</th><th>Own</th><th>Volumes</th><th></th></tr>";
    }

    for($i = 0; $i < $x; $i++){
        if($status[$i] == $showlist){
            if($_SESSION['UserView'] == 1){
                $mlist = $mlist . $mangas[$i]->get_withUV();
            } else {
                $mlist = $mlist . $mangas[$i]->get_withoutUV();
            }
        }
    }

    $mlist = $mlist . "</table>";

?>