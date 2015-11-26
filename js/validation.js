$(function(){
	$('.error').hide();
	$('.submit').click(function(){
		$('.error').hide();
		var name = $('input#name').val();
		if(name == 0){
			$('label#name_error').show();
			$('input#name').focus();
			return false;
		}
				var email = $('input#email').val();
		if(email == 0){
			$('label#email_error').show();
			$('input#email').focus();
			return false;
		}
				var message = $('textarea#message').val();
		if(message == 0){
			$('label#message_error').show();
			$('input#message').focus();
			return false;
		}
		
		
	
	/***************ajax*************/
	
	 var dataString = 'name='+ name + '&email=' + email + '&subject=' + subject + '&message=' + message;
  //alert (dataString);return false;
  $.ajax({
    type: "POST",
    url: "sendmail.php",
    data: dataString,
    success: function() {
      $('#contact_form').html("<div id='message'></div>");
      $('#message').html("<h2>Contact Form Submitted!</h2>")
      .append("<p>We will be in touch soon.</p>")
      .hide()
      .fadeIn(1500, function() {
        
		$('#message').append("<h5><a href = 'contact.html'>Click Here to register another Person</a></h5>");
      });
    }
  });
  return false;
	
	
	
	
	});

});