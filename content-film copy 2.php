<div class="row">
	<div class="entry-meta span4">
		<div class="except"><?php the_excerpt(); ?></div>
		
		<div class="client">Client: <?php echo get_the_term_list ( $post->ID, 'client', '', ', ','' );?></div>
		<div class="project-type">Project Type: <?php echo get_the_term_list ( $post->ID, 'project-type', '', ', ','' );?></div>
		<div class="slill">Skill Type: <?php echo get_the_term_list ( $post->ID, 'skill', '', ', ','' );?></div>
					
		<?php edit_post_link( __( 'Edit', 'spottsfield' ), '<span class="btn edit-link">', '</span>' ); ?>
		<hr>

		<nav id="nav-single">
			<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="btn"><span class="meta-nav">&larr;</span> Previous</span>', 'spottsfield' ) ); ?></span>
			<span class="nav-next"><?php next_post_link( '%link', __( '<span class="btn">Next <span class="meta-nav">&rarr;</span></span>', 'spottsfield' ) ); ?></span>
		</nav>
		<!-- /end #nav-single -->
				
	</div>
	<!-- /end entry-meta -->
					
	<div class="entry-video span8">

	<?php // checks to see if any videos are associated, if not displays feature image
		$custom = get_post_custom($post->ID);
			$vimeo = $custom["vimeo"][0];
			$youtube = $custom["youtube"][0];
			if($vimeo != NULL):
				echo "<div class='video fitvid'><iframe src='http://player.vimeo.com/video/" . $vimeo . "?portrait=0' width='770' height='433' frameborder='0'></iframe></div>";
			elseif($youtube != NULL): // Note the combination of the words.
				echo "<div class='video fitvid'><iframe title='YouTube video player' width='770' height='433' src='http://www.youtube.com/embed/" . $youtube . "' frameborder='0' allowfullscreen></iframe></div>";
			else:
				// no video
			endif;
	?>

	<hr>

		<div class="entry-content row">

			<div class="span5 pull-right">
				<?php the_post(); ?>
				<?php the_content(); ?>
			</div>

			<div class="span3">
				<?php the_post_thumbnail('large'); ?>
			</div>
		</div>
	</div>
</div>
<!-- /end row -->