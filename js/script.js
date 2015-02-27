$(document).ready(function(){
  
  $('.demo').WMGridfolio();
  $('.demo').WMGridfolio({
    selectors : {
      item            : 'wmg-item',
      thumbnail       : 'wmg-thumbnail',
      details         : 'wmg-details',
      close           : 'wmg-close',
      arrow           : 'wmg-arrow'
    },
    thumbnail : {
      columns : 6,
      minSize : 100,
      margin   : 5
    },
    details : {
      minHeight : 400,
      speed  : 350,
      full_w : false
    },
    config : {
      open          : 'open',
      openToTop     : true,
      hasImg        : true
    },
    callbacks : {
      CB_LoadGrid     : false,
      CB_ResizeGrid   : false,
      CB_OpenDetail   : false,
      CB_CloseDetail  : false,
      CB_CloseAll     : false
    }
  });


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
                
    var isPortfolio = false;
    
    $('.portfolio-link').click( function(e) {

      e.preventDefault();
      //console.log("clicked on a portfolio item");
      // if the portfolio has been clicked lets set to true
      isPortfolio = true;
      
      // lets get the item number and unhide the portfolio-detail div
      var id = $(this).attr('data-projectid');
      //console.log(id);
      
      
      $.ajax({
        type: "GET",
        url: "portfolio.php",
        data: "project="+id,
        success: function(msg) {
          $.each(msg, function(i, item) {
            console.log(item);
            console.log(item['title']);
            $('.portfolio-title').html(item['title']);
            $('.portfolio-description').html(item['description']);
            if (item['image'] != undefined) {
              $('.portfolio-images').append('<img src="img/portfolio/'+item['image']+'" title="'+item['caption']+'" style="display:inline; margin:5px;"/>');
            }
          })
          /*console.log(msg[0]);
          $('.portfolio-title').html();
          $('.portfolio-description').html(msg);*/
        }
      });
      
      $('.portfolio-filter-list').fadeOut(500);
      $('.portfolio-items').fadeOut(500, function() {
        $('.portfolio-detail').fadeIn(500);
        
      });
    });
    
    $('.close-details').click(function(e) {
      e.preventDefault();
      isPortfolio = false;
      $('.portfolio-detail').fadeOut(500, function() {
        $('.portfolio-detail img').remove();
        $('.portfolio-items').fadeIn(500);
        $('.portfolio-filter-list').fadeIn(500);
      });
    });
    
    function showItems() {
      //code
    }
                
    // animate scroll to hash
    $("a[href^='#']").on('click', function(e) {
      var hash = this.hash;
      if (hash != "#_") {
        //console.log('scrolling to '+ hash);
        // animate scroll
        $('html,body').animate({
          'scrollTop': $(hash).offset().top - 48
        }, 1000);
      }
      });

    
    $(window).scroll(function() {
      var windscroll = $(window).scrollTop();
      var sections = $("section");
      sections.each(function(i) {
        if ($(this).position().top - 50 <= windscroll) {
          if ($(this).attr('id') != 'case-study-1') {
            $('.nav-menu ul li a.active').removeClass('active');
            $('.nav-menu ul li a').eq(i).addClass('active');
          }
          
          if ($(this).attr('id') === 'skills') {
            $('.skill-list').animate({
              'opacity':1
            }, 1000);
            $(function() {
              $('.skillChart').easyPieChart({
                barColor: '#1284d3', /* rgba(0,150,250, .75);',*/
                trackColor: '#fff',
                trackWidth: '10',
                scaleColor: false,
                lineCap: 'round',
                lineWidth: 10,
                size: '80',
                easing: 'easeOutBounce',
                onStep: function(from, to, percent) {
                  $(this.el).find('.percent').text(Math.round(percent));
                  }
                  });
              });                        
            }
            
          }
/*                      if ($(this).attr('id') === 'case-study-1') {
            $('.case-study-1').animate({
              'height':'500px'
            }, 1000);
          } else {
            $('.case-study-1').animate({
              'height':'125px'
            }, 1000);
          }*/
          //console.log($(this).attr('id'));
      });
    });
    
  /*  $(window).resize(function() {
      var display = $(".portfolio").css("display"); //Get current display style
      $(".portfolio").css({display:"inline-block", width:""});
      
      //Calculate width
      var contentWidth = $('.portfolio').width();
      
      //Return display style, set new width
      $('.portfolio').css({width: contentWidth, display: display});
    });*/
    
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

