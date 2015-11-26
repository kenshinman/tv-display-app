<?php
require('includes/classes.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Scrolling News</title>
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
    <h2>Create News</h2>
    <hr/>
		<form action="" method="post" enctype="multipart/form-data">
        	<div class="form-group">
				<label for="news_title">News Title</label>
				<input type="text" class="form-control" id="news_title" placeholder="News Title" name="news_title">
			</div>
           
        <div class="form-group">
        	<label for="news_content">News Content</label>
            <textarea id="news_content" name="news_content" class="form-control" rows="3" placeholder="News Content"></textarea>
		</div>

        <input type="submit" value="Create Slide" name="submit" class="btn btn-primary" />
        <?php $news->createNews()?>
        </form>
        
    </div>
</body>


</html>