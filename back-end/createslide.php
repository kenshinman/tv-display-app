<?php
require('includes/classes.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Slides</title>
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
		<form action="" method="post" enctype="multipart/form-data">
        <h2> Create Slides</h2> <hr/>
        	<div class="form-group">
				<label for="slide_title">Slide Title</label>
				<input type="text" class="form-control" id="slide_title" placeholder="Slide Title" name="slide_title">
			</div>
            <div class="form-group">
				<label for="slide_image">Select Slider Image</label>
			    <input type="file" id="slide_image" name="slide_image"/>
			</div>
        <div class="form-group">
        	<label for="slide_description">Slide Description</label>
            <textarea id="slide_description" name="slide_description" class="form-control" rows="3" placeholder="Slide Description"></textarea>
		</div>

        <input type="submit" value="Create Slide" name="submit" class="btn btn-primary" />
        <?php $slide->createSlide();?>
        </form>
        
    </div>
</body>


</html>