<!- Include navigation bar>
<?php include 'navigation.php';?>

<!- When the document loads, pull out the ten most recent game results for the scores ticker>
<h4>Recent results from around the league.</h4>
<div class="ticker_container" id="ticker">
</div>
<br>

<div>
	<h1>My games</h1>
</div>

<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Sport</th>
                <th>Opponent</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
            </tr>
        </thead>
        
		
		<?php if (empty($rows)): ?>
				</table>
				<h3>You haven't signed up for any games yet. Click the Games tab above to get started! </h3>		
		<?php else: ?>
		
		    <?php foreach ($rows as $row): ?>

			<!- determine the opponent >
			<?php
				if ($row["team1"] == $_SESSION["house"])
					$opponent = $row["team2"];
				else
					$opponent = $row["team1"];
			?>

		    <tr>
		        <td><?= $row["sport"] ?></td>
		        <td><?= $opponent ?></td>
		        <td><?= $row["date"] ?></td>
		        <td><?= $row["time"] ?></td>
		        <td><?= $row["location"] ?></td>
		    </tr>

		    <?php endforeach ?>
	
    		</table>
		<?php endif ?>
</div>



















<script>
$( document ).ready(function() {
    var parameters = {
	};
	var messages = $.getJSON("ticker_lookup.php", parameters)
	messages.done(function(data) {
		var length = data.length;
		document.getElementById('ticker').innerHTML = ""; // reset the HTML in the div
		// for loop through each result (more recent results first)
		for (var i = length-1; i >= 0; i--)
		{
			// team 1 beat team 2
			if (+data[i].team1score > +data[i].team2score)
			{
				var team1 = "<b>" + data[i].team1 + "</b>";
				var team2 = data[i].team2;
				var score1 = "<b>" + data[i].team1score + "</b>";
				var score2 = data[i].team2score;
			}
			// team 2 beat team 1
			else if(+data[i].team2score > +data[i].team1score)
			{
				var team1 = data[i].team1;
				var team2 = "<b>" + data[i].team2 + "</b>";
				var score1 = data[i].team1score;
				var score2 = "<b>" + data[i].team2score + "</b>";
			}
			// in case of tie
			else
			{
				var team1 = data[i].team1;
				var team2 = data[i].team2;
				var score1 = data[i].team1score;
				var score2 = data[i].team2score;
			}

			document.getElementById('ticker').innerHTML += 
				"<div class='ticker'>" 
					+ "<p class='ticker_sport'>" + data[i].sport.toUpperCase() + "</p>"
					+ "<hr class='ticker_break'>"
					+ "<p class='ticker_team'>" + team1 + "<span class='ticker_score'>" + score1 + "</span></p>"
					+ "<p class='ticker_team'>" + team2 + "<span class='ticker_score'>" + score2 + "</span></p>"
				+ "</div>";
		}
	});
});
</script>




