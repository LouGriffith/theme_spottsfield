<div class="row film">

					
	<div class="entry-video firstImg span8 pull-right">

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
			<div class="span8">
				<?php the_post(); ?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<div class="entry-meta span4">
		<?php if ( has_post_thumbnail()) {$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
   					echo '<a class="fancybox" href="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >'; the_post_thumbnail('large', array('class' => 'featured')); echo '</a>'; } 
   				?>
	</div>
	<!-- /end entry-meta -->
</div>
<!-- /end row -->