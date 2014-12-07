<?php

    require(__DIR__ . "/../includes/config.php");
	
	// if the user is not already attending, add them into the roster table for that game
	if ($_POST["attending"] == 0)
	{
		query("START TRANSACTION");
	    // pull out the user's email to insert into the table
	    $email = query("SELECT email FROM users WHERE userid = ?", $_SESSION["id"]);
	    // add user info into the roster
	    query("INSERT INTO rosters(house, email, name, gameid) VALUES(?, ?, ?, ?)", $_SESSION["house"], $email[0]["email"], $_SESSION["name"], $_POST["gameid"]);
		query("INSERT INTO mygames(userid, gameid) VALUES(?, ?)", $_SESSION["id"], $_POST["gameid"]);
		query("COMMIT");
	}
	elseif ($_POST["attending"] == 1)
	{
		query("START TRANSACTION");
	    	query("DELETE FROM rosters WHERE name = ? AND gameid = ?", $_SESSION["name"], $_POST["gameid"]);
		query("DELETE FROM mygames WHERE gameid = ? AND userid = ?", $_POST["gameid"], $_SESSION["id"]);
		query("COMMIT");
		
	}
?>
