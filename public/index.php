<?php

    // configuration
    require("../includes/config.php"); 
    	

	query("START TRANSACTION");

	// numerically indexed array of my games
	$rows = query("SELECT * FROM games INNER JOIN mygames ON games.gameid=mygames.gameid WHERE mygames.userid = ?", $_SESSION["id"]);

	// numerically indexed array of recent results for ticker
	$results = query("SELECT * FROM games WHERE result = TRUE LIMIT 8");

	query("COMMIT");

    // render home page
    render("portfolio.php", ["title" => "Home", "rows" => $rows, "results" => $results]);

?>
