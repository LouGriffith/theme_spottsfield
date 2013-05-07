<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>

<div id="sectionHeaderBackground">
	 <?php single_cat_title(); ?> 

	<div id="sectionHeader" class="container">
		<div class="row">
			<div id="sectionHeader-left" class="span6">
				<div class="client"><?php echo get_the_term_list ( $post->ID, 'client', '', ', ','' );?></div>
				<h1><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );?></h1>
			</div>
			<div id="sectionHeader-right" class="span6 hidden-phone">
				<nav id="nav-single" class="pull-right">
					<span class="nav-next"><?php next_post_link( '%link', __( '<span class="btn"><span class="meta-nav">&larr;</span> Recent</span>', 'spottsfield' ) ); ?></span>
					<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="btn">Past <span class="meta-nav">&rarr;</span></span>', 'spottsfield' ) ); ?></span>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- /end SectionHeader -->

<div id="mainBackground" class="<?php echo  $post_slug=$post->post_name;?>">
	<div id="main" class="container">
		<div class="row">
			<div id="mainContent" class="span12">

				<?php if(has_term( 'film', 'project-type', $post->ID ) ) : ?>
					<?php get_template_part( 'content-film'); ?>
				<?php elseif(has_term( 'web', 'project-type', $post->ID ) ) : ?>
					<?php get_template_part( 'content-web'); ?>
				<?php else : ?>
					<?php get_template_part( 'content-project'); ?>
				<?php endif; ?>

			</div>
			<!-- /end main content -->
		</div>
	</div>
</div>

<?php get_footer(); ?>