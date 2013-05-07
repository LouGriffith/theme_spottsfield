<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>

<div id="sectionHeaderBackground">
	<div id="sectionHeader" class="container">
		<h1 class="pull-left">Featured Work</h1>

		<?php
			//list terms in a given taxonomy
			$taxonomy = 'project-type';
			$tax_terms = get_terms($taxonomy);
		?>

		<ul id="filters" class="option-set nav nav-pills pull-right">
			<li><a href="#" data-filter="*" class="selected">Show All</a></li>
			<?php
				foreach ($tax_terms as $tax_term) {
				echo '<li>' . '<a href="#" data-filter=".' .$tax_term->slug .'"title="' .sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
				}
			?>
		</ul>
	</div>
</div>
<!-- /end SectionHeader -->

<div id="mainBackground">
	<div id="main" class="container">

		<section id="primary">
			<?php if ( have_posts() ) : ?>
				<div class="row item-grid">
					<?php 
					$args = array( 'post_type' => 'project', 'posts_per_page' => 30 );  
					$loop = new WP_Query( $args );  
					while ( $loop->have_posts() ) : $loop->the_post();  
					    $dsh_featured_value = get_post_meta($post->ID, 'dsh_featured', true);

					    if ($dsh_featured_value != '')
					    {
					    	get_template_part( 'content', 'projects' );
					    } 
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

		</section>

	</div>
</div>
<!-- /end mainBackground -->

<?php get_footer(); ?>
