<?php
    
    // configuration
    require("../includes/config.php");
    
    
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
		if (isset($_SESSION["captain"]))
		{
			if ($_SESSION["captain"] == 1)
			{
        		// render form
       	 		render("submit_result_form.php", ["title" => "Submit Result"]);
			}
			else
			{
				apologize("You don't have captain priveleges.");
			}
		}
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (($rows = query("SELECT * FROM games WHERE gameid = ?", $_POST["gameid"])) == false)
		{
			apologize("That Game ID does not exist");
		}
		// gameid is unique, so only one row will be returned
        $row = $rows[0];

		// differentiate between team 1 and team 2
		if ($row['team1'] == $_SESSION["house"])
		{
			$team1score = $_POST["housescore"];
			$team2score = $_POST["oppscore"];
		}
		else if ($row['team2'] == $_SESSION["house"])
		{
			$team1score = $_POST["oppscore"];
			$team2score = $_POST["housescore"];
		}
		else
		{
			apologize("Your house did not play in this game.");
		}


        // apologize if empty field
        if (empty($_POST["gameid"]) || empty($_POST["housescore"]) || empty($_POST["oppscore"]))
        {
            apologize("Make sure you fill in all fields.");
        }
        

	    // insert result into table
	    if (query("UPDATE games SET team1score = ?, team2score = ? WHERE gameid = ?", $team1score, $team2score, $_POST["gameid"]) === false)
		{
			apologize("Error submitting result.");
		}

		// return to home page
		else
		{
	    	redirect("/");
		}
	
	
	
		
     
        
    }
?>
