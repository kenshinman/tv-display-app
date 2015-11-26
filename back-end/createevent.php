<?php
require('includes/classes.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Events</title>
	<meta charset="utf-8" />
	<link href="../css/bootstrap.css" rel="stylesheet"/>
	<link href="../css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/backend-style.css" rel="stylesheet"/>
	<meta name="../description" content="">
	<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
	

</head>
<body>
 <?php include('includes/nav.php');?>
	<div class="container">
    <h2>Create Event</h2>
    <hr/>
		<form action="" method="post" enctype="multipart/form-data">
        	<div class="form-group">
				<label for="event_title">Event Title</label>
				<input type="text" class="form-control" id="event_title" placeholder="Event Title" name="event_title">
			</div>
           <div class="form-group">
				<label for="event_date">Event Date</label>
				<input type="text" class="form-control" id="event_date" placeholder="Event Date" name="event_date">
                <span class="small">"DD-MM-YYYY" E.g. "31-12-2014"</span>
			</div>
            <div class="form-group">
				<label for="event_time">Event Time</label>
				<input type="text" class="form-control" id="event_time" placeholder="Event Time" name="event_time">
                 <span class="small"> E.g. "10:00AM"</span>
			</div>
        <div class="form-group">
        	<label for="event_venue">Event Venue</label>
            <textarea id="event_venue" name="event_venue" class="form-control" rows="3" placeholder="Event Venue"></textarea>
		</div>

        <input type="submit" value="Create Slide" name="submit" class="btn btn-primary" />
       <?php $events->createEvent();?>
        </form>
        
    </div>
</body>


</html>