<?php

    require(__DIR__ . "/../includes/config.php");
	
	if (empty($_GET["sport"]) == TRUE)
	{
		return false;   
	}

    // numerically indexed array of messages matching sport
    $results = [];
	
	if ($_GET["sport"] == "all")
	{
		if ($_GET["check"] == "true")
			$results = query("SELECT * FROM games WHERE team1 = ? OR team2 = ?", $_SESSION["house"], $_SESSION["house"]);
		else
			$results = query("SELECT * FROM games");
	}
	else
		if ($_GET["check"] == "true")
			$results = query("SELECT * FROM games WHERE (team1 = ? OR team2 = ?) AND sport = ?", $_SESSION["house"], $_SESSION["house"], $_GET["sport"]);
		else
			$results = query("SELECT * FROM games WHERE sport = ?", $_GET["sport"]);


    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($results, JSON_PRETTY_PRINT));

?>
