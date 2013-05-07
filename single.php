<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>

<div id="sectionHeaderBackground">
	

	<div id="sectionHeader" class="container">
		<div class="categoryListing">
			<?php
				$categories = get_the_category();
				$separator = ' ';
				$output = '';
				if($categories){
					foreach($categories as $category) {
						$output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
					}
				echo trim($output, $separator);
				}
			?>
		</div>
		<!-- /end category listing -->

		<h1><?php wp_title(""); ?></h1>
	</div>
</div>
<!-- /end SectionHeader -->

<div id="mainBackground">
	<div id="main" class="container">
		<div class="row">
			<div class="span8">
			<?php the_post(); ?>
	
				<article id="post-<?php the_ID(); ?>">

					<?php // checks to see if any videos are associated, if not displays feature image
						$custom = get_post_custom($post->ID);
							$vimeo = $custom["vimeo"][0];
							$youtube = $custom["youtube"][0];
							if($vimeo != NULL):
							    echo "<div class='video fitvid'><iframe src='http://player.vimeo.com/video/" . $vimeo . "?portrait=0' width='770' height='433' frameborder='0'></iframe></div>";
							elseif($youtube != NULL): // Note the combination of the words.
							    echo "<div class='video fitvid'><iframe title='YouTube video player' width='770' height='433' src='http://www.youtube.com/embed/" . $youtube . "' frameborder='0' allowfullscreen></iframe></div>";
							elseif ( has_post_thumbnail() ):
							    the_post_thumbnail('blog-feature');
							else:
							endif;
					?>

					<hr>

					<div class="row">
						<div class="span7 offset1">
							<div class="postDate">
								<small><?php the_time('F jS, Y') ?></small>
							</div>

							<div class="content">
								<?php the_content('%link'); ?>
							</div>
							<hr>
							<div class="postTags">
								<span class="tagLabel">Tags</span>
								<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
							</div>
						</div>
					</div>
				</article>

				<div class="postNav">
					<ul class="pager hidden-phone">
					  <li class="previous">
 							<?php previous_post_link('%link'); ?> 
					  </li>
					  <li class="next">
 							<?php next_post_link('%link'); ?> 
					  </li>
					</ul>
				</div>
			</div>

			<div class="row">
				
			<?php if ( is_active_sidebar( 'single-sidebar' ) ) : ?>
				<div class="span4">
					<?php dynamic_sidebar( 'single-sidebar' ); ?>
				</div>
				<!-- Logo -->
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>