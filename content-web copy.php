<div class="row">
	<div class="entry-meta span4">
		<div class="except"><?php the_excerpt(); ?></div>
		
		<div class="client">Client: <?php echo get_the_term_list ( $post->ID, 'client', '', ', ','' );?></div>
		<div class="project-type">Project Type: <?php echo get_the_term_list ( $post->ID, 'project-type', '', ', ','' );?></div>
		<div class="skill">Skill Type: <?php echo get_the_term_list ( $post->ID, 'skill', '', ', ','' );?></div>
		
		<?php 
			$custom = get_post_custom($post->ID);
			$cms = $custom["cms"][0];

			if($cms != NULL):
				echo '<div class="cms">CMS Used: '. $cms .'</div>';
			else:
				echo '';
			endif;
		?>
					
		<?php edit_post_link( __( 'Edit', 'spottsfield' ), '<span class="btn edit-link">', '</span>' ); ?>
		<hr>

		<nav id="nav-single">
			<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="btn"><span class="meta-nav">&larr;</span> Previous</span>', 'spottsfield' ) ); ?></span>
			<span class="nav-next"><?php next_post_link( '%link', __( '<span class="btn">Next <span class="meta-nav">&rarr;</span></span>', 'spottsfield' ) ); ?></span>
		</nav>
		<!-- /end #nav-single -->
				
	</div>
	<!-- /end entry-meta -->
					
	<div class="entry-content span8">
		<?php the_post(); ?>
		<?php the_content(); ?>
	</div>
</div>
<!-- /end row -->