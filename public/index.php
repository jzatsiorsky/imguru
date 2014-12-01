<?php

    // configuration
    require("../includes/config.php"); 
    

	$rows = query("SELECT * FROM games INNER JOIN mygames ON games.gameid=mygames.gameid WHERE mygames.userid = ?", $_SESSION["id"]);

    // render home page
    render("portfolio.php", ["title" => "Home", "rows" => $rows]);

?>
