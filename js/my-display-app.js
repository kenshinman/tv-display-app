// JavaScript Document
$(document).ready(function(){
		var firstSlide = $('li.slide:first-child');
		firstSlide.addClass('currentSlide');
					
		var changeSlide = function(){
			var currentSlide = $('.slide.currentSlide');
			var nextSlide = currentSlide.next();
			var firstSlide = $('li.slide:first-child');
			var lastSlide = $('li.slide:last-child');
		
				if(currentSlide.is(lastSlide)){
					nextSlide = firstSlide;
				}
			
				currentSlide.fadeOut(1000).removeClass('currentSlide');
				nextSlide.fadeIn(2000).addClass('currentSlide');
				
			};

		setInterval(changeSlide, 15000);
		
	});
	
$(document).ready(function(){
		var firstEvent = $('li.event-scroll:first-child');
		firstEvent.addClass('currentSlide');
					
		var changeEvent = function(){
			var currentEvent = $('.event-scroll.currentSlide');
			var nextEvent = currentEvent.next();
			var firstEvent = $('li.event-scroll:first-child');
			var lastEvent = $('li.event-scroll:last-child');
		
				if(currentEvent.is(lastEvent)){
					nextEvent = firstEvent;
				}
			
				currentEvent.fadeOut(500).removeClass('currentSlide');
				nextEvent.fadeIn(1000).addClass('currentSlide');
						
			};

		setInterval(changeEvent, 20000);
		
	});