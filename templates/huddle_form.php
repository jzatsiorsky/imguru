<form>
	<?php include 'navigation.php';?>
	<p>
		Welcome to The Huddle. Here, you can post to your house and fellow teammates. What are you waiting for?
	</p>
	<div class="form-group" style="clear:both;">
		<span>See posts for:</span>
		<select class="form-control" name="sport" id="thr class='post_break'eads">
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
					   <textarea class="form-control" rows="3" style="resize:none; width:85%;text-align:left;" name="message" id="msg"></textarea>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-default" id="create" onclick="createPost();">Create Post</button>
					</div>
				</fieldset>
			</div>
		</div>
		<div class="flexed">
			<!- View past posts>
			<h3>Past posts.</h3>
			<div id="past_posts">
			</div>
		</div>
	</div>

</form>

<! Javascript >

<script src="/js/huddle_form.js"></script>








