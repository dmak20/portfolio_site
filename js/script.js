$(document).ready(function(){
		
                // Update main navigation
                $('.nav li a').click(function(e) {
                  
                  e.preventDefault();
                  
                  // clear all active items
                  $('.nav li').find('a').removeClass('active');
                  
                  // add active item back
                  var $this = $(this);
                  if (!$this.hasClass('active')) {
                    $this.addClass('active');
                  }               
                  
                });
                
                // animate scroll to hash
                $(".nav li a[href^='#']").on('click', function(e) {
                  var hash = this.hash;
                  console.log('scrolling to '+ hash);
                  // animate scroll
                  $(document.body).animate({
                    'scrollTop': $(hash).offset().top
                  }, 300, function(){
                    
                    window.location.hash = hash;                 
                  });
 
                  
                });
                
                $(window).scroll(function() {
                  var windscroll = $(window).scrollTop();
                  var sections = $("section");
                  sections.each(function(i) {
                    console.log('each section: ' + $(this).attr("id"));
                    console.log(i);
                    if ($(this).position().top <= windscroll) {
                      $('.nav-menu ul li a.active').removeClass('active');
                      $('.nav-menu ul li a').eq(i).addClass('active');
                    }
                  });
                });
                
                // Send email
                $('#send_message').click(function(e){
			e.preventDefault();
			var error = false;
			var topic = $('#topic').val();
			var name = $('#name').val();
			var email = $('#email').val();
			var subject = $('#subject').val();
			var message = $('#message').val();
			/*if(topic.length == 0){
				var error = true;
				$('#topic_error').fadeIn(500);
			} else {
				$('#topic_error').fadeOut(500);
			}*/
			if(name.length == 0){
				var error = true;
				$('#name_error').fadeIn(500);
			} else {
				$('#name_error').fadeOut(500);
			}
			if(email.length == 0 || email.indexOf('@') == '-1'){
				var error = true;
				$('#email_error').fadeIn(500);
			} else {
				$('#email_error').fadeOut(500);
			}
			if(subject.length == 0){
				var error = true;
				$('#subject_error').fadeIn(500);
			} else {
				$('#subject_error').fadeOut(500);
			}
			if(message.length == 0){
				var error = true;
				$('#message_error').fadeIn(500);
			} else {
				$('#message_error').fadeOut(500);
			} if(error == false){
				$('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });
				$.post("send_email.php", $("#contact_form").serialize(),function(result){
					if(result == 'sent'){
						$('#cf_submit_p').remove();
						$('#mail_success').fadeIn(500);
					} else {
						$('#mail_fail').fadeIn(500);
						$('#send_message').removeAttr('disabled').attr('value', 'Send Message');
					}
				});
			}
		});
                
                
	});