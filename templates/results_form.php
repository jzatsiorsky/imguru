<?php include 'navigation.php';?>
<h1 style="margin:0 0 20px 0;"> Results </h1>
<form>
	<div class="form-group" style="clear:both;">
		<span>See results for:</span>
		<select class="form-control" name="sport" id="threads">
			<option value = "all">All sports</option>
			<?php
		        foreach($rows as $row)
		        {
		            print("<option value = '{$row}'>{$row}</option>");
		        }
            ?>
		</select>
	</div>
	<div class="checkbox">
		<label><input type="checkbox" name="house_only" id="checkbox">Show <?= htmlspecialchars($_SESSION["house"]) ?> results only</label>
	</div>
	

</form>

<div id="results">
</div>

<script>

	// on the page's load, show the general chat
	$( document ).ready(function() {
		var check = $('#checkbox').is(':checked');
		var parameters = {
        	sport: "all",
			check: check
    		};
		var messages = $.getJSON("search_results.php", parameters)
		messages.done(function(data) {
			var length = data.length;
			// no articles received
			if (length == 0)
			{
				document.getElementById('results').innerHTML = "<h3>No results posted yet.</h3>";
			}
			else
			{
			document.getElementById('results').innerHTML = ""; // reset HTML
			var HTML = "<table class='table table-bordered'><thead><tr><th>Date</th><th>Sport</th><th>Teams</th><th>Scores</th></tr></thead><tbody>"; // start table
			// for loop through each message
			for (var i = length-1; i >= 0; i--)
			{
				// add a new row for each game
				HTML += "<tr class='result_row'><td class='result_item' rowspan='2'>" + data[i].date + "</td><td class='result_item' rowspan='2'>" + data[i].sport + "</td><td class='result_item'>" + data[i].team1 + "</td><td class='result_item'>" + data[i].team1score + "</td></tr><tr><td class='result_item'>" + data[i].team2 + "</td><td class='result_item'>" + data[i].team2score + "</td></tr>";
			}
			document.getElementById('results').innerHTML += HTML + "</tbody></table>";
			}
		});
	});

	// show posts based on selection from dropdown menu
	document.getElementById("threads").onchange = function () {
		var select = document.getElementById("threads");
		var sport = select.options[select.selectedIndex].value; // contains sport value to search database with
		var check = $('#checkbox').is(':checked');
		var parameters = {
        	sport: sport,
			check: check
    	};
		var results = $.getJSON("search_results.php", parameters)
		results.done(function(data) {
			var length = data.length;
			// no articles received
			if (length == 0)
			{
				document.getElementById('results').innerHTML = "<h3>No results posted yet.</h3>";
			}
			else
			{
				document.getElementById('results').innerHTML = ""; // reset HTML
				var HTML = "<table class='table table-bordered'><thead><tr><th>Date</th><th>Sport</th><th>Teams</th><th>Scores</th></tr></thead><tbody>"; // start table
				// for loop through each message
				for (var i = length-1; i >= 0; i--)
				{
					// add a new row for each game
					HTML += "<tr class='result_row'><td class='result_item' rowspan='2'>" + data[i].date + "</td><td class='result_item' rowspan='2'>" + data[i].sport + "</td><td class='result_item'>" + data[i].team1 + "</td><td class='result_item'>" + data[i].team1score + "</td></tr><tr><td class='result_item'>" + data[i].team2 + "</td><td class='result_item'>" + data[i].team2score + "</td></tr>";
				}
			document.getElementById('results').innerHTML += HTML + "</tbody></table>";
			}
		});
	};
	
	// only show Cabot results if the checkbox is checked
	document.getElementById("checkbox").onclick = function () {
		var select = document.getElementById("threads");
		var sport = select.options[select.selectedIndex].value; // contains sport value to search database with
		var check = $('#checkbox').is(':checked');
		var parameters = {
        	sport: sport,
			check: check
    	};
		var results = $.getJSON("search_results.php", parameters)
		results.done(function(data) {
			var length = data.length;
			// no articles received
			if (length == 0)
			{
				document.getElementById('results').innerHTML = "<h3>No results posted yet.</h3>";
			}
			else
			{
				document.getElementById('results').innerHTML = ""; // reset HTML
				var HTML = "<table class='table table-bordered'><thead><tr><th>Date</th><th>Sport</th><th>Teams</th><th>Scores</th></tr></thead><tbody>"; // start table
				// for loop through each message
				for (var i = length-1; i >= 0; i--)
				{
					// add a new row for each game
					HTML += "<tr class='result_row'><td class='result_item' rowspan='2'>" + data[i].date + "</td><td class='result_item' rowspan='2'>" + data[i].sport + "</td><td class='result_item'>" + data[i].team1 + "</td><td class='result_item'>" + data[i].team1score + "</td></tr><tr><td class='result_item'>" + data[i].team2 + "</td><td class='result_item'>" + data[i].team2score + "</td></tr>";
				}
			document.getElementById('results').innerHTML += HTML + "</tbody></table>";
			}
		});
	};
	
</script>







