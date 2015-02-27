$(function() {
    var $container = $('.portfolio-items');
    // init
    $container.isotope({
      // options
      itemSelector: '.portfolio-item',

      masonry: {
        columnWidth: 40,
        isFitWidth: true
        },
      animationOptions: {
        duration: 250,
        easing: 'easeInOutSine',
        queue: false
      }
    });
    
    // filter items on button clicks
    $('.portfolio-filter-list li a').on('click', function() {
        $('.portfolio-filter-list').find('a').removeClass('active');
       var filterValue = $(this).attr('data-filter');
       $container.isotope({filter: filterValue});
       $(this).addClass('active');
       return false;
    });
});