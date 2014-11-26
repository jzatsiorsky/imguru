<?php

    // configuration
    require("../includes/config.php"); 
    
    // get rows
    $user = query("SELECT * FROM users WHERE userid = ?", $_SESSION["id"]);

    // render home page
    render("portfolio.php", ["title" => "Home", "name" => $user[0]["name"], "house" => $user[0]["house"]]);

?>
