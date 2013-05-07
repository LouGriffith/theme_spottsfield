<div class="item item-<?php the_ID(); ?> <?php $terms = get_the_terms( $post->ID , 'skill' );
if($terms) {
	foreach( $terms as $term ) {
		echo $term->slug;
		echo " ";
	}
}
?>">

	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="thumbnail">
		<?php echo get_the_post_thumbnail( $post_id, "blog-feature"); ?> 		
		
		<div class="caption">
			<h4 class="item-title"><?php the_title(); ?></h4>
			<div class="item-client">
				<?php
					$terms_as_text = strip_tags( get_the_term_list( $post->ID, 'client', '', ', ', '' ) );
					echo $terms_as_text;
				?>
				<span class="project-year badge pull-right"><?php the_date('Y'); ?></span>
			</div>
		</div>
	</a>
</div>