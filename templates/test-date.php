<?php include 'navigation.php';?>
<head>
    <script src="/js/jquery-2.1.1.js"></script> 
    <script src="/js/moment.js"></script> 
    <script src="/js/combodate.js"></script>
    <script src="/js/scripts.js"></script> 
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
            <div class = "form-group">Date: 
            <input type="text" id="date" data-format="DD-MM-YYYY" data-template="D MMM YYYY" name="date" value="01-01-2014">
                <script>
                // code taken from http://vitalets.github.io/combodate/
                    $(document).ready(function(){
                    $('#date').combodate({
                        minyear: 2014,
                        maxyear: 2017
                    });    
                    });
                </script>
            <div class = "form-group">Time:
            <input type="text" id="time" data-format="HH:mm" data-template="HH : mm" name="time">
                <script> 
                // code taken from http://vitalets.github.io/combodate/
                    $(document).ready(function(){
                        $('#time').combodate({
                            firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
                            minuteStep: 5
                        });  
                    });
                </script>
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

			<p>Date: <input type="text" id="popupDatepicker" class="is-pickdate"></p>


		
        </fieldset>
    </div>
</form>

