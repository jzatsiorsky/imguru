<?php

    require(__DIR__ . "/../includes/config.php");
	
	if (empty($_GET["sport"]) == TRUE)
	{
		return false;   
	}
    // numerically indexed array of messages matching sport and/or date
    $games = [];
    if ($_GET["sport"] == "all")
    {
        $games = query("SELECT * FROM games WHERE result = 0 AND (team1 = ? OR team2 = ?) AND date >= CURDATE() ORDER BY date, time ASC", $_SESSION["house"], $_SESSION["house"]);
    }
    else
    {
        $games = query("SELECT * FROM games WHERE result = 0 AND sport = ? AND (team1 = ? OR team2 = ?) AND date >= CURDATE() ORDER BY date, time ASC", $_GET["sport"], $_SESSION["house"], $_SESSION["house"]);
    }
    if(!empty($games))
    {
        for ($i = 0, $n = count($games); $i < $n; $i++)
        {
            $date = date_create($games[$i]["date"]);
            $datepretty = date_format($date, 'F d, Y');
            $games[$i]["date"] = $datepretty;
            $time = date_create($games[$i]["time"]);
            $timepretty = date_format($time, 'g:i A');
            $games[$i]["time"] = $timepretty;
        }
    }
    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($games, JSON_PRETTY_PRINT));

?>
