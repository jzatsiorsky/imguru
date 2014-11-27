<?php
    
    // configuration
    require("../includes/config.php");
    
    
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
	return false;
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		if (empty($_POST["messageid"]) == TRUE)
		{
			return false;
		}
		query("UPDATE huddle SET likes = (likes + 1) WHERE messageid = ?", $_POST["messageid"]); 
		return true;
	}
	
	

?>
