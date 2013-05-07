<?php 


	// include Portfolio Posttypes
	include_once(ABSPATH . 'wp-content/themes/posttypes.php');

	add_filter( 'use_default_gallery_style', '__return_false' );

	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 175, 175 ); // default Post Thumbnail dimensions   
	}

	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
		// add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
		// add_image_size( 'homepage-feature', 342, 220, true ); //(cropped)
		add_image_size( 'project-thumb', 370, 9999 ); //blog featured image
		add_image_size( 'blog-feature-thumb', 770, 300, true ); //blog featured image
		add_image_size( 'blog-feature', 770, 350, true ); //blog featured image
	}

	// Register Custom Gallery
	require_once('wp_bootstrap_gallery.php');

	// ADD MENUS
	function register_my_menus() {
	  register_nav_menus(
	    array( 
	    	'header-menu' => __( 'Header Menu' ), 
	    	'footer-menu' => __( 'Footer Menu' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );
	
	// REMOVE EXTRANEOUS CLASSES FROM WORDPRESS MENUS
	function custom_wp_nav_menu($var) {
		return is_array($var) ? array_intersect($var, array(
			// List of useful classes to keep
			'current-menu-item',
			'current_page_item',
			'current_page_parent',
			'current_page_ancestor', 
			)
		) : '';}
	add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
	add_filter('page_css_class', 'custom_wp_nav_menu');

	// REPLACE "current_page_" WITH CLASS "active"
	function current_to_active($text){
		$replace = array(
			// List of classes to replace with "active"
			'current-menu-item' => 'active',
			'current_page_item' => 'active',
			'current_page_parent' => 'active',
			'current_page_ancestor' => 'active',
		);
		$text = str_replace(array_keys($replace), $replace, $text);
			return $text;
		}
	add_filter ('wp_nav_menu','current_to_active');

	// Add Sidebars
	register_sidebar(array(
	  'name' => __( 'Header-Left' ),
	  'id' => 'header-left',
	  'description' => __( 'Your logo goes here' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s header-left">',
	  'after_widget'   => "</div>",
	));

	register_sidebar(array(
	  'name' => __( 'Header-Right' ),
	  'id' => 'header-right',
	  'description' => __( 'Search bar goes here' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'   => "</div>",
	));

	register_sidebar(array(
	  'name' => __( 'Nav-Left' ),
	  'id' => 'nav-left',
	  'description' => __( 'Search bar goes here' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s pull-left">',
	  'after_widget'   => "</div>",
	));

	register_sidebar(array(
	  'name' => __( 'Nav-Right' ),
	  'id' => 'nav-right',
	  'description' => __( 'Search bar goes here' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s pull-right">',
	  'after_widget'   => "</div>",
	));

	register_sidebar(array(
	  'name' => __( 'Cover' ),
	  'id' => 'cover',
	  'description' => __( 'Here widgets are the cover for the content.' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'   => "</div>",
	  'before_title'  => '<h3 class="widgettitle hidden">',
	  'after_title'   => '</h3>',
	));

	register_sidebar(array(
	  'name' => __( 'Homepage Aside' ),
	  'id' => 'home-aside',
	  'description' => __( 'Here widgets are the right of the homepage.' ),
	));

	register_sidebar(array(
	  'name' => __( 'Blog Sidebar' ),
	  'id' => 'blog-sidebar',
	  'description' => __( 'Here widgets are the right of the blog.' ),
	));

	register_sidebar(array(
	  'name' => __( 'Single Sidebar' ),
	  'id' => 'single-sidebar',
	  'description' => __( 'Here widgets are the right of the blog.' ),
	));

	register_sidebar(array(
	  'name' => __( 'Footer-Left' ),
	  'id' => 'footer-left',
	  'description' => __( 'Here widgets are the left.' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s pull-left">',
	  'after_widget'   => "</div>",
	));

	register_sidebar(array(
	  'name' => __( 'Footer-Right' ),
	  'id' => 'footer-right',
	  'description' => __( 'Here widgets are the right.' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s pull-right">',
	  'after_widget'   => "</div>",
	));
?>
