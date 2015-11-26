<?php
require('includes/classes.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete News | Slider List</title>
	<meta charset="utf-8" />
	<link href="../css/bootstrap.css" rel="stylesheet"/>
	<link href="../css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/backend-style.css" rel="stylesheet"/>
	<meta name="../description" content="">
	<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
<script>
	$(document).ready(function(){
			$('.deleter').click(function(){
					var slideId = $('#delete_id').val();
					if(slideId == ''){
						alert ('Please enter the id number of the News you want to delete');
						return false;
					}else{
						var r = confirm('Are you sure you want to delete the News with id #'+slideId+'?');	
						if(r == false){
							return false;
						}else{
							return true;		
						}
					}
				})
				
		});
</script>	

</head>
<body>
	 <?php include('includes/nav.php');?>
	<div class="container">
    <div class="delete-form">
    	<form method="post" action="deletenews.php">
        <h2>Delete News</h2>
         <hr/>
        	<label for="delete_id">Enter the Id of the News you wish to delete</label>
        	<input type="number" id="delete_id" name="delete_id" placeholder="Enter News Id..."/>
            <input type="submit" name="delete" value="Delete News" class="btn btn-danger deleter" />
            <?php $news->deleteNews(); ?>
        </form>
    </div>
		<table class="table table-striped">
        		<tr class="caps">
                	<td style="padding:5px;">Event id</td>
                    <td>Event Title</td>
                    <td>Event Date</td>
                </tr>
                
                	<?php $news->getNewsList(); ?>
               
        </table>
        
    </div>
</body>


</html>