<?php
require('includes/classes.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display App</title>
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
		<div class="row">
            <ul>
                <li class="col-md-4 home-btn"><a href="createslide.php"><span class="glyphicon glyphicon-plus"></span> Add Slide</a></li>
                <li class="col-md-4 home-btn"><a href="deleteslide.php"><span class="glyphicon glyphicon-minus"></span> Delete Slide</a></li>
                <li class="col-md-4 home-btn"><a href="createnews.php"><span class="glyphicon glyphicon-plus"></span> Add News</a></li>
            </ul>
        </div>
        <div class="row">
	       	<ul>
                <li class="col-md-4 home-btn"><a href="deletenews.php"><span class="glyphicon glyphicon-minus"></span> Delete News</a></li>
                <li class="col-md-4 home-btn"><a href="createevent.php"><span class="glyphicon glyphicon-plus"></span> Add Event</a></li>
                <li class="col-md-4 home-btn"><a href="deleteevent.php"><span class="glyphicon glyphicon-minus"></span>Delete Event</a></li>
    	    </ul>
        </div>
    </div>
</body>


</html>