<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>

<div id="sectionHeaderBackground">
	 <?php single_cat_title(); ?> 

	<div id="sectionHeader" class="container">
		<h1><a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );?></a></h1>
	</div>
</div>
<!-- /end SectionHeader -->

<div id="mainBackground">
	<div id="main" class="container">
		<div class="row">
			<?php
			  	if($post->post_parent)
			  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			  	else
			  	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
			  	if ($children) { ?>
			  	<aside class="span3">
				  <ul class="nav nav-tabs nav-stacked">
				  	<?php echo $children; ?>
				  </ul>
			  	</aside>
			  	<!-- /end asideRight -->

			  	<div id="mainContent" class="span9">
					<?php the_post(); ?>
					<h2><?php the_title(); ?></h2>

					<?php the_content(); ?>
				</div>
				<!-- /end main content -->

			  <?php } 
			  	else { ?>

			  	<div id="mainContent" class="span12">
					<?php the_post(); ?>
					<?php the_content(); ?>
				</div>
				<!-- /end main content -->
			  <?php } ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>