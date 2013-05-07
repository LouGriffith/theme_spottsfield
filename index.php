<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>

<div id="sectionHeaderBackground">
	<div id="sectionHeader" class="container">
		<div class="row">
		<div class="span5">
			<h1><?php wp_title(""); ?></h1>
		</div>

		<div class="span7">
			<div class="pull-right"><?php get_search_form( $echo ); ?></div>
		</div>
	</div>
	</div>
</div>
<!-- /end SectionHeader -->

<div id="mainBackground">
	<div id="main" class="container blog">
		<div class="row">
			<div class="span8">
				<section>
				 <!-- Start the Loop. -->
				 <?php $i = 1; ?>

				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				 <!-- Test if the current post is in category 3. -->
				 <!-- If it is, the div box is given the CSS class "post-cat-three". -->
				 <!-- Otherwise, the div box is given the CSS class "post". -->

				 <?php if ( in_category('3') ) { ?>
				           <div class="post-cat-three">
				 <?php } else { ?>
				           <div class="post">
				 <?php } ?>

				 <!-- Display the Post Thumbnail -->
				 <?php // check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('blog-feature-thumb'); ?>
					</a>
				 <?php } ?>

				 <div class="postHeader">
				 	<!-- Display a comma separated list of the Post's Categories. -->
				 	<p class="postMeta"><?php the_category(', '); ?></p>

				 	<!-- Display the Title as a link to the Post's permalink. -->
				 	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				 </div>

				 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
				 <div class="postDate">
				 	<small><?php the_time('F jS, Y') ?></small>
				 </div>

				 <!-- Display the Post's content in a div box. -->
				 <div class="postEntry">
				   <?php the_excerpt(); ?>
				 </div>

				 </div> <!-- closes the first div box -->

				 <!-- Stop The Loop (but note the "else:" - see next line). -->
				 <?php endwhile; else: ?>


				 <!-- The very first "if" tested to see if there were any Posts to -->
				 <!-- display.  This "else" part tells what do if there weren't any. -->
				 <p>Sorry, no posts matched your criteria.</p>


				 <!-- REALLY stop The Loop. -->
				 <?php endif; ?>

				</section>

				<?php global $wp_query;  
				$total_pages = $wp_query->max_num_pages;  
				  
				if ($total_pages > 1){  
				  
				  $current_page = max(1, get_query_var('paged'));  
				    
				  echo '<div class="pagination pagination-centered">';  
				    
				  echo paginate_links(array(  
				      'base' => get_pagenum_link(1) . '%_%',  
				      'format' => '/page/%#%',  
				      'current' => $current_page,  
				      'total' => $total_pages,  
				      'prev_text' => 'Prev',  
				      'next_text' => 'Next' ,
				      'type' => 'list',
				    ));  
				  
				  echo '</div>';  
				    
				}  ?>
			</div>
			<!-- /end blogroll -->

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
				<div class="span4">
					<?php dynamic_sidebar( 'blog-sidebar' ); ?>
				</div>
				<!-- Logo -->
			<?php endif; ?>

			
		</div>

	</div>
</div>
<!-- /end mainBackground -->

<?php get_footer(); ?>