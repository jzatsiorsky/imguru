<!- Include navigation bar>
<?php include 'navigation.php';?>
<h1 style="margin:0 0 20px 0;"> Submit a Result. </h1>
<form action="submit_result.php" method="post">
    <fieldset>
	<div class="boxed">
		    <div class="form-group">
			<p class="result_score"> Game ID: </p>
			<input type="number" name="gameid" min="0" max="100000" autocomplete="off">
		    </div>
		    <div class="form-group">
			<p class="result_score"><?= htmlspecialchars($_SESSION["house"]) ?> Score: </p>
			<input type="number" name="housescore" min="0" max="100" autocomplete="off">
		    </div>
		    <div class ="form-group">
			<p class="result_score"> Opponent Score: </p>
			<input type="number" name="oppscore" min="0" max="100" autocomplete="off">
		    </div>
		    <div class="form-group">
		        <button type="submit" class="btn btn-default">Submit Result</button>
		    </div>
		</div>
    </fieldset>
</form>
<div>
    or <a href="index.php">go back</a> 
</div>
