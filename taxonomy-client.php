<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>
<?php $terms = get_the_terms($post->id, 'client'); ?>
<div id="sectionHeaderBackground">
	<div id="sectionHeader" class="container">
		<h1 class="pull-left">
			<?php wp_title(""); ?>
		</h1>

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
			<div class="row">
			<div class="span4">
				 <?php echo term_description( '', get_query_var( 'taxonomy' ) ); ?>
			</div>

			<div class="span8">
			<?php if ( have_posts() ) : ?>
				<div class="row item-grid">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'projects' );?>

					<?php endwhile; else: ?>

						<p>Sorry, no posts matched your criteria.</p>

					<!-- REALLY stop The Loop. -->
					<?php endif; ?>
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
			</div>
			</div>
		</section>

	</div>
</div>
<!-- /end mainBackground -->

<?php get_footer(); ?>
