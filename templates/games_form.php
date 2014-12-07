<form action="games.php" method="get">
	<?php include 'navigation.php';?>
	<h3>
	Welcome to the games page, where you can find all of <?= htmlspecialchars($_SESSION["house"]) ?>'s 
	upcoming IM events!
	</h3>
    <div class="form-group">
        <select class="form-control" name="sport" id="sport">
            <option value = "all">All sports</option>
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
    $(document).ready( function() {
        var parameters = {
            sport: "all",
            house: '<?php echo $_SESSION["house"]; ?>'
        }
        gamestable(document.getElementById("upcoming_games"), parameters);
        });
    document.getElementById("sport").onchange = function () {
        var select = document.getElementById("sport");
        var sport = select.options[select.selectedIndex].value;
        var parameters = {
            sport: sport,
            house: '<?php echo $_SESSION["house"]; ?>'
        }
    	gamestable(document.getElementById("upcoming_games"), parameters);
        }   
</script>
