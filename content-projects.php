<?php $dsh_featured_value = get_post_meta($post->ID, 'dsh_featured', true); ?>

<div class="item item-<?php the_ID(); ?> <?php if($dsh_featured_value != '') {echo "featured";}  ?> <?php $terms = get_the_terms( $post->ID , 'project-type' );
if($terms) {
	foreach( $terms as $term ) {
		echo $term->slug;
		echo " ";
	}
}
?>span4">

	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="thumbnail">
		<?php echo get_the_post_thumbnail( $post_id, "project-thumb"); ?> 		
		
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
