<?php

    require(__DIR__ . "/../includes/config.php");
	
	if (empty($_GET["gameid"]) == TRUE || empty($_GET["house"]) == TRUE)
	{
		return false;   
	}
    // numerically indexed array of players matching gameid and house
    $roster = [];

    $roster = query("SELECT name, email FROM rosters WHERE gameid = ? AND house = ?", $_GET["gameid"], $_GET["house"]);
    
    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($roster, JSON_PRETTY_PRINT));

?>
