<! Adapted from getbootstrap.com>
<div style="text-align:right;">
	<h5 id="welcome">Welcome, <?= htmlspecialchars($_SESSION["name"]) ?>!</h5>
</div>


<!-- From the bootstrap documentation -->
<div class="round">
	<section class="color-3">
		<nav class="cl-effect-8">
			<a href="/">Home</a>
			<a href="games.php">Games</a>
		<?php if ($_SESSION["captain"] == 1): ?>
			<a href="schedule_game.php">Schedule Game</a>
		<?php endif ?>
			<a href="/results.php">Results</a>
		<?php if ($_SESSION["captain"] == 1): ?>
			<a href="submit_result.php">Submit Result</a>
		<?php endif ?>
			<a href="standings.php">Straus Cup Standings</a>
			<a href="huddle.php">The Huddle</a>
			<a href="manage_account.php">Manage Account</a>
			<a href="logout.php">Log out</a>
		</nav>
	</section>
</div>
<br>

