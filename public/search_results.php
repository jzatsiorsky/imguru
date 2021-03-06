<?php

    require(__DIR__ . "/../includes/config.php");

	if ($_GET["sport"] == "all")
	{
		if ($_GET["check"] == "true")
			$results = query("SELECT * FROM games WHERE result = 1 AND (team1 = ? OR team2 = ?) ORDER BY date ASC", $_SESSION["house"], $_SESSION["house"]);
		else
			$results = query("SELECT * FROM games WHERE result = 1 ORDER BY date ASC");
	}
	else
	{
		if ($_GET["check"] == "true")
			$results = query("SELECT * FROM games WHERE (team1 = ? OR team2 = ?) AND sport = ? AND result = 1 ORDER BY date ASC", $_SESSION["house"], $_SESSION["house"], $_GET["sport"]);
		else
			$results = query("SELECT * FROM games WHERE sport = ? AND result = 1 ORDER BY date ASC", $_GET["sport"]);
	}
	
	// pretty-print the dates for the user
	for ($i = 0, $length = count($results); $i < $length; $i++)
	{
		$results[$i]["date"] = date_format(date_create($results[$i]["date"]), "m/d");
	}
	
    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($results, JSON_PRETTY_PRINT));

?>
