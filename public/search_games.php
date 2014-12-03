<?php

    require(__DIR__ . "/../includes/config.php");
	
	if (empty($_GET["sport"]) == TRUE)
	{
		return false;   
	}
    // numerically indexed array of messages matching sport and/or date
    $games = [];

    $games = query("SELECT * FROM games WHERE sport = ? AND (team1 = ? OR team2 = ?)", $_GET["sport"], $_GET["house"], $_GET["house"]);
    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($games, JSON_PRETTY_PRINT));

?>
