<div class="row">
					
	<div class="entry-content span12">

	<?php // checks to see if any videos are associated, if not displays feature image
		$custom = get_post_custom($post->ID);
			$vimeo = $custom["vimeo"][0];
			$youtube = $custom["youtube"][0];
			if($vimeo != NULL):
				echo "<div class='video fitvid'><iframe src='http://player.vimeo.com/video/" . $vimeo . "?portrait=0' width='770' height='433' frameborder='0'></iframe></div><hr>";
			elseif($youtube != NULL): // Note the combination of the words.
				echo "<div class='video fitvid'><iframe title='YouTube video player' width='770' height='433' src='http://www.youtube.com/embed/" . $youtube . "' frameborder='0' allowfullscreen></iframe></div><hr>";
			else:
				// no image
			endif;
		?>

		<?php the_post(); ?>
		<?php the_content(); ?>
	</div>
	<!-- /end entry-content -->

</div>
<!-- /end row -->