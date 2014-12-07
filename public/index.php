<?php

    // configuration
    require("../includes/config.php"); 
    	

	query("START TRANSACTION");

	// numerically indexed array of my games, ordered by date (only show games in the future)
	$rows = query("SELECT * FROM games INNER JOIN mygames ON games.gameid=mygames.gameid WHERE mygames.userid = ? AND games.result = 0 AND games.date >= CURDATE() ORDER BY date, time ASC", $_SESSION["id"]);

	

	// numerically indexed array of recent results for ticker
	$results = query("SELECT * FROM games WHERE result = TRUE ORDER BY date DESC LIMIT 8");

	query("COMMIT");

    // render home page
    render("portfolio.php", ["title" => "Home", "rows" => $rows, "results" => $results]);

?>
