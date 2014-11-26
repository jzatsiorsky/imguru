<form id="form" action="huddle.php" method="post">
	<?php include 'navigation.php';?>
	<p>
		Welcome to The Huddle. Here, you can post to your house and fellow teammates. What are you waiting for?
	</p>
	<div class="form-group" style="clear:both;">
		<span>See posts for:</span>
		<select class="form-control" name="sport" id="threads">
			<option value = "" disabled selected> Select a thread</option>
			<option value = "general"> <?= htmlspecialchars($_SESSION["house"]) ?> - General</option>
			<option value = "football"> <?= htmlspecialchars($_SESSION["house"]) ?> - Flag football</option>
			<option value = "frisbee"> <?= htmlspecialchars($_SESSION["house"]) ?> - Ultimate frisbee</option>
			<option value = "tennis"> <?= htmlspecialchars($_SESSION["house"]) ?> - Tennis</option>
			<option value = "squash"> <?= htmlspecialchars($_SESSION["house"]) ?> - Squash</option>
			<option value = "basketball"> <?= htmlspecialchars($_SESSION["house"]) ?> - Basketball</option>
			<option value = "soccer"> <?= htmlspecialchars($_SESSION["house"]) ?> - Soccer</option>
		</select>
	</div>

	<div class = "divider">
		<div class="fixed">
			<!- Create a post>
			<h3>Create a post.</h3>
			<div class="chat">
				<fieldset>
					<div class="form-group">
					   <textarea class="form-control" rows="3" style="resize:none; width:85%;text-align:left;" name="message"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Create Post</button>
					</div>
				</fieldset>
			</div>
		</div>
		<div class="flexed">
			<!- View past posts>
			<h3>Past posts.</h3>
			<div id="past_posts">
				<h3>Select a thread!</h3>
			</div>
		</div>
	</div>

</form>
<script>
	document.getElementById("threads").onchange = function () {
		var select = document.getElementById("threads");
		var sport = select.options[select.selectedIndex].value; // contains sport value to search database with
		var parameters = {
        	sport: sport
    	};
		var messages = $.getJSON("search_sports.php", parameters)
		messages.done(function(data) {
			// no articles received
			if (data.length == 0)
			{
				document.getElementById('past_posts').innerHTML = "<h3>No posts made on this topic yet. Be the first!</h3>";
			}
			else
			{
				document.getElementById('past_posts').innerHTML = ""; // reset the HTML in the div
				// for loop through each message
				for (var i = 0, length = data.length; i < length; i++)
				{
					document.getElementById('past_posts').innerHTML += "<div class='post'><p class='postp'>" + data[i].name + " said: </p><p class = 'post_message'>" + data[i].message + "</p><p class='postp'>" + data[i].date_time + "</p></div>";
				}
			}
		});
	};

</script>







