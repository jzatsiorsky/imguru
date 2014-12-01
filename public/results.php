<?php
    
    // configuration
    require("../includes/config.php");

	$rows = query("SELECT * FROM huddle WHERE house = ?", $_SESSION["house"]);

	// render form
	render("results_form.php", ["title" => "Results"]);
  

?>
