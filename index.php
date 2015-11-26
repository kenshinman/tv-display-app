<?php
require('back-end/includes/classes.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Display App</title>
	<meta charset="utf-8" />
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<meta name="description" content="">
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	

<script src="js/my-display-app.js" type="text/javascript"></script>


</head>
<body>
		<div id="container" class="container">
    	<ul class="slides">
        	<?php $slide->getSlides();?>
        </ul>
        
        <div class="side-events">
        	<h1>UPCOMING EVENTS</h1><hr/>
            	
                    <ul class="events-scroll">
                    	<?php $events->getEvents();?>
                    </ul>
               
        </div>
        
        <div class="info-scroll">
        	<marquee direction="left">
            	<ul class="scrollers">
                <li class="scroller">news & updates >>></li>
                    <?php $news->getNews();?>
                </ul>
            </marquee>
        </div>
    </div>


</body>


</html>