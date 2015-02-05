$(function() {
    var $container = $('#container');
    // init
    $container.isotope({
      // options
      itemSelector: '.item',
      layoutMode: 'fitRows'
    });
    
    // filter items on button clicks
    $('#filters').on('click', 'button', function() {
       var filterValue = $(this).attr('data-filter');
       $container.isotope({filter: filterValue});
    });
});