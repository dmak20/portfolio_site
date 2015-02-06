$(function() {
      var $document = $(document)
      
var waypoint = new Waypoint({
  element: document.getElementById('basic-waypoint'),
  handler: function() {
        $('.basic-waypoint').addClass('animated fadeIn');
  },
  offset: 30
})

$('.basic-waypoint').waypoint(function(direction) {
  
//  $('.basic-waypoint').addClass('animated fadeInLeft');
});

});