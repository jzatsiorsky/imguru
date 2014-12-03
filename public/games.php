<?php

    // configuration
    require("../includes/config.php"); 
    $rows = query("SELECT sport FROM games WHERE team1 = ? OR team2 = ?", $_SESSION["house"], $_SESSION["house"]);
    for($i = 0, $n = count($rows); $i < $n; $i++) 
    {
        $buffer[$i] = $rows[$i]["sport"]; 
    }
    $sports = array_unique($buffer);
    // render form
    render("games_form.php", ["title" => "Games", "sports" => $sports]);  
?>
