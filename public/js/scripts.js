
// show posts based on selection from dropdown menu
document.getElementById("threads").onchange = function () {
	create.disabled = false; // enable the submit button
	msg.disabled = false; // enable the text area
	var select = document.getElementById("threads");
	var sport = select.options[select.selectedIndex].value; // contains sport value to search database with
	var parameters = {
	sport: sport
};
	var messages = $.getJSON("search_sports.php", parameters)
	messages.done(function(data) {
		var length = data.length;
		// no articles received
		if (length == 0)
		{
			document.getElementById('past_posts').innerHTML = "<h3>No posts made on this topic yet. Be the first!</h3>";
		}
		else
		{
			document.getElementById('past_posts').innerHTML = ""; // reset the HTML in the div
			// for loop through each message
			for (var i = length-1; i >= 0; i--)
			{
				document.getElementById('past_posts').innerHTML += "<div class='post'><p class='postp'>" + data[i].name + " said: <span class='like_num'>" + data[i].likes + " points</span> <button type='button' class='btn btn-default like' aria-label='Left Align' value=" + data[i].messageid + "><span class='glyphicon glyphicon-thumbs-up'></span> +1</button></p><p class = 'post_message'>" + data[i].message + "</p><p class='postp'>" + data[i].date_time + "</p></div>";
			}
		}
	});
};

// do the following when the form is submitted
function createPost() {
	var	sport = document.getElementById("threads").value;
	var message = document.getElementById("msg").value;
	if (message == "")
		return false;
	$.ajax({
		type: "POST",
		url: "huddle.php/",
		data: {  message: message, sport: sport }
	})
	.done(function() {
	// now get the data to display it
		var parameters = {
	    	sport: sport
		};
		var messages = $.getJSON("search_sports.php", parameters)
		messages.done(function(data) {
			var length = data.length;
			// add message to html if there are already messages there
			document.getElementById('past_posts').innerHTML = ""; // reset the HTML in the div
			// for loop through each message
			for (var i = length-1; i >= 0; i--)
			{
				document.getElementById('past_posts').innerHTML += "<div class='post'><p class='postp'>" + data[i].name + " said: <span class='like_num'>" + data[i].likes + " points</span><button type='button' class='btn btn-default like' aria-label='Left Align' value=" + data[i].messageid + "><span class='glyphicon glyphicon-thumbs-up'></span> +1</button></p><p class = 'post_message'>" + data[i].message + "</p><p class='postp'>" + data[i].date_time + "</p></div>";
			}
		document.getElementById("msg").value = ""; // reset the text field
		});
	});
};

$(document).on('click', "button.like", function() {
	var messageid = $(this).attr('value'); // get the messageid from the clicked button
	// add a like to the database with given messageid
	$.ajax({
		type: "POST",
		url: "add_like.php/",
		data: {  messageid: messageid }
	})
	.done(function() {
		// get the total number of likes
		var	sport = document.getElementById("threads").value;
		var parameters = {
	    	sport: sport
		};
		var messages = $.getJSON("search_sports.php", parameters)
		messages.done(function(data) {
			var length = data.length;
			document.getElementById('past_posts').innerHTML = ""; // reset posts
			for (var i = length-1; i >= 0; i--)
			{
				document.getElementById('past_posts').innerHTML += "<div class='post'><p class='postp'>" + data[i].name + " said: <span class='like_num'>" + data[i].likes + " points</span><button type='button' class='btn btn-default like' aria-label='Left Align' value=" + data[i].messageid + "><span class='glyphicon glyphicon-thumbs-up'></span> +1</button></p><p class = 'post_message'>" + data[i].message + "</p><p class='postp'>" + data[i].date_time + "</p></div>";
			}
		});

	});
});



