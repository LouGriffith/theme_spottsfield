<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Spottsfield
 */

get_header(); ?>

<body>

<div id="page">

<?php get_template_part( 'sidebar', 'header' ); ?>
<?php get_template_part( 'sidebar', 'menubar' ); ?>
<?php get_template_part( 'sidebar', 'top' ); ?>

<?php get_template_part( 'sidebar', 'sectionHeader' ); ?>
	
	
	
	<div id="mainBackground">
		<div id="main" class="container">
		
		<ul id="filters">
		  <li><a href="#" data-filter="*">show all</a></li>
		  <li><a href="#" data-filter=".web-design">Web Design</a></li>
		  <li><a href="#" data-filter=".filmmaking">Filmmaking</a></li>
		</ul>
		
		<?php get_template_part( 'sidebar', 'asideleft' ); ?>
		
		<section id="primary">
		
		<?php get_sidebar('innertop'); ?>
		<?php get_sidebar('innerleft'); ?>
		
		<?php if ( have_posts() ) : ?>
			<div class="row item-grid">
				<?php 
				$args = array( 'post_type' => 'projects', 'posts_per_page' => 30 );  
				$loop = new WP_Query( $args );  
				while ( $loop->have_posts() ) : $loop->the_post();  
				    
				    get_template_part( 'content', 'projects' );
				     
				endwhile; 
				?>
			</div>
			
			
		<?php else : ?>
		
			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'spottsfield' ); ?></h1>
				</header><!-- .entry-header -->
	
				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'spottsfield' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->	
			
		<?php endif; ?>

		
		<?php get_sidebar('innerright'); ?>
		<?php get_sidebar('innerbottom'); ?>
		
		</section><!-- #primary -->
		
<?php get_template_part( 'sidebar', 'asideright' ); ?>

<?php get_footer(); ?>

</div>
<!-- /end page -->

<!-- JavaScript
	================================================== -->
	  	<!-- JavaScript at the bottom for fast page loading -->
	
	 	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	 	<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/jquery.min.js"><\/script>')</script>

		<!-- Call to Twitter Bootsrap -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/bootstrap.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/jquery.isotope.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/application.js"></script>

		
		<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);"> <!-- Mobile Safari URL shift -->
		<!-- /end scripts -->
		
	<!-- End Document
	================================================== -->	

</body>
<!-- /end body -->