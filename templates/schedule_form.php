<?php include 'navigation.php';?>
<head>
    <script src="/js/jquery-2.1.1.js"></script> 
    <script src="/js/moment.js"></script> 
    <script src="/js/combodate.js"></script>
    <script src="/js/scripts.js"></script> 

	<!-- http://keith-wood.name/datepick.HTML -->
	<link rel="stylesheet" type="text/css" href="css/jquery.datepick.css"> 
	<script type="text/javascript" src="js/date/jquery.plugin.js"></script> 
	<script type="text/javascript" src="js/date/jquery.datepick.js"></script>
	<script>
		$(function() {
			$('#popupDatepicker').datepick();
		});
	</script>

	<!-- http://timepicker.co/ -->
	<link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css"> 
	<script type="text/javascript" src="js/jquery.timepicker.js"></script>
	
	<script>
	$(document).ready(function(){
		$('input.timepicker').timepicker({minHour: 10, defaultTime: "6:00 p", maxHour: 22, dynamic: false});
	});
	</script>

</head>
<h1 style="margin:0 0 20px 0;"> Schedule a new game for <?=$_SESSION["house"]?> </h1>
<form action="schedule_game.php" method="post">
    <div class = "boxed">
        <fieldset>
            <div class = "form-group" style="clear:both;">
                <select class = "form-control" name = "sport">
                <option value = "">Select sport</option>
                <option value = "A-League Basketball">A-League Basketball</option>
                <option value = "B-League Basketball">B-League Basketball</option>
                <option value = "C-League Basketball">C-League Basketball</option>
                <option value = "Men's A Crew">Men's A Crew</option>
                <option value = "Men's B Crew">Men's B Crew</option>
                <option value = "Women's A Crew">Women's A Crew</option>
                <option value = "Women's B Crew">Women's B Crew</option>
                <option value = "Flag Football">Flag Football</option>
                <option value = "Ice Hockey">Ice Hockey</option>
                <option value = "Soccer">Soccer</option>
                <option value = "Softball">Softball</option>
                <option value = "Tennis">Tennis</option>
                <option value = "A-League Volleyball">A-League Volleyball</option>
                <option value = "B-League Volleyball">B-League Volleyball</option>
                <option value = "Special Event">Special Event</option>
                </select>
            </div>
            <div class= "form-group" style="clear:both;">
				<select class="form-control" name="opponent">
				<option value = "">Select Your Opponent </option>
				<option value = "Adams">Adams </option>
				<option value = "Cabot">Cabot </option>
				<option value = "Currier">Currier </option>
				<option value = "Dudley">Dudley </option>
				<option value = "Dunster">Dunster </option>
				<option value = "Eliot">Eliot </option>
				<option value = "Kirkland">Kirkland </option>
				<option value = "Leverett">Leverett </option>
				<option value = "Lowell">Lowell </option>
				<option value = "Mather">Mather </option>
				<option value = "Pforzheimer">Pforzheimer </option>
				<option value = "Quincy">Quincy </option>
				<option value = "Winthrop">Winthrop </option>
				</select>
			</div>
            <div class = "form-group">
				<label class="input" for="popupDatepicker">Date: </label>
				<input class="form-control" type="text" id="popupDatepicker" class="is-pickdate" name="date" autocomplete="off">
			</div>
           <div class="form-group">
				<label class="input" for="time">Time: </label>
				<input class="timepicker form-control" id="time" name="time" autocomplete="off">
			</div>
            <div class="form-group" style="clear:both;">
				<select class="form-control" name="location">
				<option value = "">Select Location </option>
				<option value = "MAC">Malkin Athletic Center </option>
				<option value = "QRAC">QRAC </option>
				<option value = "Stadium">Stadium</option>
				<option value = "Hemenway">Hemenway</option>
				</select>
			</div>
			<div class="form-group">
			<input class="form-control" name="location_details" placeholder="Location Details (e.g. Court Number)" type="text">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default">Insert game into the schedule</button>
			</div>
        </fieldset>
    </div>
</form>