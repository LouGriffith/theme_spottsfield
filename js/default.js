!function($) {

// load up fancy box
$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        helpers : {
            title : null            
        }   
    });

$(".fancybox-insta")
    .attr('rel', 'gallery')
    .fancybox({
        helpers : {
        	title: {
	            type: 'inside'
	        }
        }   
    });

}(window.jQuery)