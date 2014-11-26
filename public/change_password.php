<?php
    
    // configuration
    require("../includes/config.php");
    
    
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render form
        render("change_password_form.php", ["title" => "Change Password"]);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $rows = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
        
        // empty field
        if (empty($_POST["cur_password"]) || empty($_POST["new_password1"]) || empty($_POST["new_password2"]))
        {
            apologize("Make sure you fill in all fields.");
        }
        
        // correct current password, and new passwords match
        else if ($rows[0]["hash"] == crypt($_POST["cur_password"], $rows[0]["hash"]) && $_POST["new_password1"] == $_POST["new_password2"])
        {
            query("UPDATE users SET hash = ? WHERE id = ?", crypt($_POST["new_password1"]), $_SESSION["id"]);
            // log in
            redirect("/");
        }
        else
        {   
            apologize("Error resetting your password. Please try again.");
        }
        
    }
?>