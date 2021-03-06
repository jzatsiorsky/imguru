<?php

    // configuration
    require("../includes/config.php"); 
    if (($rows = query("SELECT sport FROM games WHERE (team1 = ? OR team2 = ?) AND result = 0 AND date >= CURDATE()", $_SESSION["house"], $_SESSION["house"])) == false)
		apologize("Your house has no upcoming games!");
	else
	{
		for($i = 0, $n = count($rows); $i < $n; $i++) 
		{
		    $buffer[$i] = $rows[$i]["sport"]; 
		}
		$sports = array_unique($buffer);
		// alphabetize array
		sort($sports);
		// render form
		render("games_form.php", ["title" => "Games", "sports" => $sports]);  
	}
?>
