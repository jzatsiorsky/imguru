<?php include 'navigation.php';?>
<head>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="/js/scripts.js"></script>
</head>
<div>
	<div class = "shieldmiddle">
	<h2><i>vs.</i></h2>
	</div>
    <figure class = "shieldleft">
        <img src = "img/<?php print(htmlspecialchars(strtolower($gameinfo['team1']))); ?>_shield.jpg" alt = "team 1 logo" height = "240" width = "180">
        <figcaption><h1><?php print($gameinfo['team1']); ?> </h1></figcaption>
    </figure>
    <figure class = "shieldright">
        <img src = "img/<?php print(htmlspecialchars(strtolower($gameinfo['team2']))); ?>_shield.jpg" alt = "team 2 logo" height = "240" width = "180">
        <figcaption><h1><?php print($gameinfo['team2']); ?></h1></figcaption>
    </figure>
</div>
<div class = "gameleft">
	        <table class = "table table-striped">
		    <tr>
		        <td><strong>Sport</strong></td>
		        <td><?php print($gameinfo["sport"]);?></td>
		    </tr>
		    <tr>
		        <td><strong>Date</strong></td>
		        <td><?php print($gameinfo["date"]);?></td>
		    </tr>
		    <tr>
		        <td><strong>Time</strong></td>
		        <td><?php print($gameinfo["time"]);?></td>
		    </tr>
		    <tr>
		        <td id = "location"><strong>Location</strong></td>
		        <td><?php print($gameinfo["location"]);?></td>
		    </tr>
		    <tr>
		        <td><strong>Game ID Number</strong></td>
		        <td id = "gameid" value = "<?php print($gameinfo['gameid']);?>"><?php print($gameinfo["gameid"]);?></td>
		    </tr>
		    </table>
		    <div id = "roster">
		    </div>
		    <button id = "roster_update">Button</button>
</div>
<div class = "gameright">
    <div id = "map-canvas">
    </div>
    <div id = "location-details">
        <table class = "table table-striped">
        <caption><h3><?php print($location["fullname"]); ?></h3></caption>
        <tr><td><strong>Street Address</strong></td>
        <td><?php print($location["address"]); ?></td></tr>
        <tr><td><strong>Latitude</strong></td>
        <td id = "latitude"><?php print($location["latitude"]); ?></td></tr>
        <tr><td><strong>Longitude</strong></td>
        <td id = "longitude"><?php print($location["longitude"]); ?></td></tr>
        </table>
    </div>
</div>
<script>
   $(document).ready( function () {
        var loc = document.getElementById('map-canvas');
        var mapinfo = {
            lat: <?php echo $location['latitude']; ?>,
            long: <?php echo $location['longitude']; ?>
            }
        addgooglemap(loc, mapinfo);
        // roster table
        var roster = document.getElementById('roster');
        var parameters = {
            gameid: <?php echo $gameinfo["gameid"]; ?>,
            house : '<?php echo $_SESSION["house"]; ?>',
            attending : <?php echo $attending; ?>
            };
        loadroster(roster, parameters);
        document.getElementById("roster_update").addEventListener("click", function() {
            rosterupdate(parameters);
            if (parameters.attending == 0)
            {
            	parameters.attending = 1;
            }
            else
            {
            	parameters.attending = 0;
            }
            loadroster(roster, parameters);
        });
	    });
</script>
