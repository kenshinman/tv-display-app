<?php
include_once('connect.inc.php');

	class Slides{
		var $slide_title;
		var $slide_description;
		var $image_url;
		
	
	public function createSlide(){
		
		
			define('DIR_IMAGES', 'images/');
			define('DIR_SITE', '/projects/displayapp/');
			$host = $_SERVER['HTTP_HOST'];
			$image_path = 'http://'.$host.DIR_SITE.DIR_IMAGES;
		
			if(isset($_POST['submit'])){
				
					$slide_title = $_POST['slide_title'];
					$slide_description = $_POST['slide_description'];
					
					$image_name = $_FILES['slide_image']['name'];
					$image_type = $_FILES['slide_image']['type'];
					$image_size = $_FILES['slide_image']['size'];
					$image_tmp_name = $_FILES['slide_image']['tmp_name'];
				
					if($image_name=='' || $slide_title =='' || $slide_description == ''){
								echo "<script>alert('Please make Sure you fill every field ')</script>";
								
					}else{
							if($image_type =='image/png' || $image_type=='image/jpeg' || $image_type =='image/gif'){
										$move = move_uploaded_file($image_tmp_name, "../images/$image_name");
										$image_url = $image_path.$image_name;
										if($move){
													//insert into the database the slide details
										$sql ="INSERT INTO sliders(slide_title, slide_description, image_url) VALUES ('$slide_title', '$slide_description', '$image_url')";
										$run_sql = mysql_query($sql);
											if($run_sql){
													echo 'Slide Created successfully';
												}else{
														echo 'Something went wrong. Slide was not created';
												}
											}//end if($move)
							}else{
								echo 'You have uploaded the wrong format file. File must be an image';
							} //end if($image_type =='image/png' || $image_type=='image/jpeg' || $image_type =='image/gif')
					}
				}
		
			}
			
			public function getSlides(){
				$sql = 'SELECT * FROM sliders ORDER BY id DESC';
				$result = mysql_query($sql);
				$i = 1;
						while($row = mysql_fetch_assoc($result)){
								$slide_title = $row['slide_title'];
								$slide_description = $row['slide_description'];
								$image_url = $row['image_url'];
								
								echo '<li id="slide'.$i.'" class="slide"><img src="'.$image_url.'"/><div class="slide-text-box"><h2>'.$slide_title.'</h2><h3>'.$slide_description.'</h3></div></li>';
								$i++;
							}
				}
				
			public function getSlidesList(){
				$sql = 'SELECT * FROM sliders ORDER BY id ASC';
				$result = mysql_query($sql);
					$output = array();
						while($row = mysql_fetch_assoc($result)){
								$slide_id = $row['id'];
								$slide_title = $row['slide_title'];
								$slide_description = $row['slide_description'];
								$image_url = $row['image_url'];
								
								echo '<tr><td>'.$slide_id.'</td><td>'.$slide_title.'</td><td><img src="'.$image_url.'" width="200" height="auto"/></td></tr>';
								array_push($output, $slide_id);
								
							}//end of while	
					$outputSize = count($output);
					if($outputSize > 0){
						echo 'There are '.$outputSize.' slides available';
					}else{
						echo 'You have not created any slide yet';	
					}
					
					
				
			}
			
			public function deleteSlide(){
					if(isset($_POST['delete'])){
						$slide_id = $_POST['delete_id'];
						if(!empty($slide_id)){
								
								$sql = "DELETE FROM sliders where id = '$slide_id'";
								$result = mysql_query($sql);
									if($result){
										echo 'Slide successfully deleted';
									}else{
										echo 'Slide was not deleted';
									}
							}else{
								echo '<p style="color:red;">You need to enter a number</p>';	
							}
						}
			}//end of deleteSlide()
}

$slide = new Slides();
	
	class News{
		
		var $news_title;
		var $news_content;
		
		public function createNews(){
				if(isset($_POST['submit'])){
					$news_title = $_POST['news_title'];
					$news_content = $_POST['news_content'];

					if(empty($news_content) || empty($news_title)){
							echo 'All Fields are required';
						}else{
							$sql = "INSERT INTO scrolling_news (news_title, news_content) VALUES ('$news_title', '$news_content')";
							$run_sql = mysql_query($sql);
							
							if($run_sql){
								echo 'News Created Successfully';
							}else{
								echo 'Somethinf went wrong. News was not created';	
							}
						}
						
				}
			}
		
		public function getNews(){
				$sql = 'SELECT * FROM scrolling_news ORDER BY news_id DESC';
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
					$news_id = $row['news_id'];
					$news_title = $row['news_title'];
					$news_content = $row['news_content'];
					
					echo '<li class="scroller">'.$news_content.'</li>';
				}
			}//end of getNews Function
						
			/***********start edit****/
			
			public function getNewsList(){
				$sql = 'SELECT * FROM scrolling_news ORDER BY news_id DESC';
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
					$news_id = $row['news_id'];
					$news_title = $row['news_title'];
					$news_content = $row['news_content'];
					
					echo '<tr><td>'.$news_id.'</td><td>'.$news_title.'</td><td>'.$news_content.'</td></tr>';
				}
			}// end o f getEventsList
			
			
			
			public function deleteNews(){
					if(isset($_POST['delete'])){
						$event_id = $_POST['delete_id'];
						if(!empty($news_id)){
								
								$sql = "DELETE FROM scrolling_news where news_id = '$news_id'";
								$result = mysql_query($sql);
									if($result){
										echo '<br/>News successfully deleted';
									}else{
										echo '<br/>News was not deleted';
									}
							}else{
								echo '<p style="color:red;">You need to enter a number</p>';	
							}
						}
			}//end of deleteEvent()
			
			
			
			
			
			
			
			
			
			
			/**********end edit********/
		}//end of the News Class
	
	$news = new News();
	
	class Events{
			var $event_id;
			var $event_title;
			var $event_date;
			var $event_time;
			var $event_venue;
			
			public function createEvent(){
					
					if(isset($_POST['submit'])){
						$event_title = $_POST['event_title'];
						$event_date = $_POST['event_date'];
						$event_time = $_POST['event_time'];
						$event_venue = $_POST['event_venue'];
						
						if(empty($event_title) || empty($event_date) || empty($event_time) || empty($event_venue) ){
							echo 'All Fields are required';
						}else{
							$sql = "INSERT INTO events (event_title, event_date, event_time, event_venue) VALUES ('$event_title', '$event_date', '$event_time', '$event_venue')";
							$run_sql = mysql_query($sql);
							
							if($run_sql){
								echo 'Your Event was Created Successfully';
							}else{
								echo 'Something went wrong. News was not created';	
							}
						}
						
						}
					
				}//end of createEvents function
				
				
			public function getEvents(){
				$sql = 'SELECT * FROM events ORDER BY event_id DESC';
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
					$event_title = $row['event_title'];
					$event_date = $row['event_date'];
					$event_time = $row['event_time'];
					$event_venue = $row['event_venue'];
					
					echo '<li class="event-scroll"><h2>'.$event_title.'</h2><h3>Date:'.$event_date.'</h3><h3>Time: '.$event_time.'</h3><h3>Venue: '.$event_venue.'</h3></li>';
				}
			}// end of getEvents
		
			
			public function getEventsList(){
				$sql = 'SELECT * FROM events ORDER BY event_id DESC';
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
					$event_id = $row['event_id'];
					$event_title = $row['event_title'];
					$event_date = $row['event_date'];
					$event_time = $row['event_time'];
					$event_venue = $row['event_venue'];
					
					echo '<tr><td>'.$event_id.'</td><td>'.$event_title.'</td><td>'.$event_date.'</td></tr>';
				}
			}// end o f getEventsList
			
			
			
			public function deleteEvent(){
					if(isset($_POST['delete'])){
						$event_id = $_POST['delete_id'];
						if(!empty($event_id)){
								
								$sql = "DELETE FROM events where event_id = '$event_id'";
								$result = mysql_query($sql);
									if($result){
										echo '<br/>Event successfully deleted';
									}else{
										echo '<br/>Event was not deleted';
									}
							}else{
								echo '<p style="color:red;">You need to enter a number</p>';	
							}
						}
			}//end of deleteEvent()
			
	}//end of class Events
	
	$events = new Events();
?>