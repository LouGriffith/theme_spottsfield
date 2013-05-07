!function ($) {

// cache container
var $container = $('.element-grid');
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

$('.element-grid').isotope({
  getSortData : {
    name : function ( $elem ) {
      return $elem.find('.name').text();
    },
    symbol : function ( $elem ) {
      return $elem.find('.symbol').text();
    },
    number : function ( $elem ) {
      return parseInt( $elem.find('.number').text(), 10 );
    },
    weight : function ( $elem ) {
      return parseFloat( $elem.find('.weight').text() );
    }
  }
});

$('#sort-by a').click(function(){
  // get href attribute, minus the '#'
  var sortName = $(this).attr('href').slice(1);
  $('.element-grid').isotope({ 
  	sortBy : sortName, 
  	itemSelector : '.element',
  	layoutMode : 'masonry',
  });
  return false;
});

}(window.jQuery)