<!- Include navigation bar>
<?php include 'navigation.php';?>
<h1 style="margin:0 0 20px 0;"> Home </h1>

<!- Print out the ten most recent game results for the scores ticker>
<h4>Recent results from around the league.</h4>
<div class="ticker_container" id="ticker">
	<!- For loop to print out most recent results first >
	<?php for ($length = count($results), $i = $length - 1; $i >= 0; $i--): ?>
	<?php
		if ((int) $results[$i]["team1score"] > (int) $results[$i]["team2score"])
		{
			$team1 = "<b>" . $results[$i]["team1"] . "</b>";
			$team2 = $results[$i]["team2"];
			$score1 = "<b>" . $results[$i]["team1score"] . "</b>";
			$score2 = $results[$i]["team2score"];
		}
		// team 2 beat team 1
		else if((int) $results[$i]["team1score"] < (int) $results[$i]["team2score"])
		{
			$team1 = $results[$i]["team1"];
			$team2 = "<b>" . $results[$i]["team2"] . "</b>";
			$score1 = $results[$i]["team1score"];
			$score2 = "<b>" . $results[$i]["team2score"] . "</b>";
		}
		// in case of tie
		else
		{
			$team1 = $results[$i]["team1"];
			$team2 = $results[$i]["team2"];
			$score1 = $results[$i]["team1score"];
			$score2 = $results[$i]["team2score"];
		}
	?>
			
	<div class="ticker">
		<p class="ticker_sport"> <?= $results[$i]["sport"] ?></p>
		<hr class="ticker_break">
		<p class="ticker_team">  <?= $team1 ?><span class="ticker_score"> <?= $score1 ?></span></p>
		<p class="ticker_team"> <?= $team2 ?><span class="ticker_score"> <?= $score2 ?></span></p>
	</div>

	<?php endfor ?>

</div>

<br>

<div>
	<h4>My upcoming games</h4>
</div>

<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Sport</th>
                <th>Opponent</th>
                <th>Time</th>
                <th>Location</th>
				<th>More info</th>
            </tr>
        </thead>
        
		
		<?php if (empty($rows)): ?>
				</table>
				<h3>You haven't signed up for any games yet. <a href="/games.php" class="link">Click here</a> to get started! </h3>		
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
		        <td><?= date_format(date_create($row["date"]), "m/d") ?></td>
		        <td><?= $row["sport"] ?></td>
		        <td><?= $opponent ?></td>
		        <td><?= date_format(date_create($row["time"]), "g:i a") ?></td>
		        <td><?= $row["location"] ?></td>
			<td><a href="/game_page.php?gameid=<?= $row["gameid"] ?>">Game page</a></td>
		    </tr>

		    <?php endforeach ?>
	
    		</table>
		<?php endif ?>
</div>



