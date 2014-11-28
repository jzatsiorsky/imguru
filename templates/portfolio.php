<!- Include navigation bar>
<?php include 'navigation.php';?>

<!- When the document loads, pull out the ten most recent game results for the scores ticker>

<div class="ticker_container" id="ticker">
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




