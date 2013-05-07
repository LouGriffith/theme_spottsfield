!function($) {

$(".item-grid").isotope( 'reLayout' )

$('.item-grid').imagesLoaded(function(){
  $('.item-grid').isotope({
    // options
    itemSelector : '.item',
    layoutMode : 'masonry'
  });
});

// cache container
var $container = $('.item-grid');
// initialize isotope
$container.isotope({
  // options...
});

// filter items when filter link is clicked
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
});

// set selected menu items
   var $optionSets = $('.option-set'),
       $optionLinks = $optionSets.find('a');
 
       $optionLinks.click(function(){
          var $this = $(this);
	  // don't proceed if already selected
	  if ( $this.hasClass('selected') ) {
	      return false;
	  }
   var $optionSet = $this.parents('.option-set');
   $optionSet.find('.selected').removeClass('selected');
   $this.addClass('selected'); 
});

// load up fancy box
$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        helpers : {
            title : null            
        }   
    });

}(window.jQuery)