<?php
require('includes/classes.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Slide | Slider List</title>
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
						alert ('Please enter the id number of the Event you want to delete');
						return false;
					}else{
						var r = confirm('Are you sure you want to delete the Event with id #'+slideId+'?');	
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
    	<form method="post" action="deleteslide.php">
        <h2>Delete Event</h2>
         <hr/>
        	<label for="delete_id">Enter the Id of the Event you wish to delete</label>
        	<input type="number" id="delete_id" name="delete_id" placeholder="Enter Event Id..."/>
            <input type="submit" name="delete" value="Delete Slide" class="btn btn-danger deleter" />
            <?php $events->deleteEvent(); ?>
        </form>
    </div>
		<table class="table table-striped">
        		<tr class="caps">
                	<td style="padding:5px;">Event id</td>
                    <td>Event Title</td>
                    <td>Event Date</td>
                </tr>
                
                	<?php $events->getEventsList(); ?>
               
        </table>
        
    </div>
</body>


</html>