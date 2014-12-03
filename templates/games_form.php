<head>
    <script src="/js/scripts.js"></script>
</head>
<form action="games.php" method="get">
	<?php include 'navigation.php';?>
	<h3>
	Welcome to the games page, where you can find all of <?= htmlspecialchars($_SESSION["house"]) ?>'s 
	upcoming IM events!
	</h3>
    <div class="form-group">
        <select class="form-control" name="sport" id="sport">
            <option value = "" disabled selected> Select a sport</option>
            <?php
                foreach($sports as $sport)
                {
                    print("<option value = '{$sport}'>{$sport}</option>");
                }
            ?>
        </select>
    </div>
    <div id = "upcoming_games">
    </div>
</form>
<script>
    document.getElementById("sport").onchange = function () {
	    var select = document.getElementById("sport");
	    var sport = select.options[select.selectedIndex].value; // contains sport value to search database with
	    var parameters = {
	        house: '<?php echo $_SESSION["house"]; ?>',
        	sport: sport
    	};
    	var loc = document.getElementById("upcoming_games");
    	gamestable(loc, parameters);
    };
</script>
