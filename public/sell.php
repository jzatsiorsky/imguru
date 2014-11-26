<?php
    
    // configuration
    require("../includes/config.php");
    
    
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $rows = query("SELECT * FROM Portfolio WHERE id = ?", $_SESSION["id"]);
        // render form
        render("sell_form.php", ["title" => "Sell", "rows" => $rows]);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
         // make sure the POST entries are not empty
         if (empty($_POST["shares"]) || empty($_POST["symbol"]))
         {
            apologize("Please make sure to fill in all fields.");
         }
         
         $stock = lookup($_POST["symbol"]);
         $portfolio = query("SELECT * FROM Portfolio WHERE id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
         $shares_owned = $portfolio[0]["shares"];
         $symbol_case = $portfolio[0]["symbol"];
         
         // if sell the same # of shares currently owned, then delete row from table
         if ($_POST["shares"] == $shares_owned)
         {
            query("DELETE FROM Portfolio WHERE id = ? AND symbol = ?", $_SESSION["id"], $symbol_case);
         }
         
         // make sure # of shares is an integer 1 or greater
         else if (preg_match("/^\d+$/", $_POST["shares"]) == false || $_POST["shares"] == 0)
         {
            apologize("You can only sell an integer number of shares (1 or greater).");
         }
         // if sell more than the # of shares currently owned, then error
         else if ($_POST["shares"] > $shares_owned)
         {
             apologize("You can't sell more shares than you currently own!");
         }
         
         // if sell between 1 and number of shares owned - 1
         else if ($_POST["shares"] < $shares_owned - 1 && $_POST["shares"] > 0)
         {
            query("UPDATE Portfolio SET  shares = ? WHERE  id = ? AND symbol =  ?", $shares_owned - $_POST["shares"], $_SESSION["id"], $symbol_case);
         }

         
         // change the cash amount by current_price * shares_sold
         
         $cash_increase = $stock["price"] * $_POST["shares"];
         $cash = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
         query("UPDATE users SET cash = ? WHERE id = ?", $cash[0]["cash"] + $cash_increase, $_SESSION["id"]);
         
         // add row to history table
         
         query("INSERT INTO history (transaction, symbol, shares, price, id) VALUES('SELL', ?, ?, ?, ?)", $_POST["symbol"], $_POST["shares"], $stock["price"], $_SESSION["id"]);
        
         // return to the portfolio
         redirect("/");

    }
?>
