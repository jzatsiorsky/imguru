<?php
    
    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $rows = query("SELECT * FROM huddle WHERE house = ?", $_SESSION["house"]);

        // render form
        render("results_form.php", ["title" => "Results"]);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		if (empty($_POST["sport"]) == TRUE)
		{
			return false;
		}
	}
	
	

?>
