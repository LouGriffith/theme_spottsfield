
<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Spottsfield
 * @since Spottsfield 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2>Content Resume</h2>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->
		
		<div class="entry-meta">
			<?php spottsfield_posted_on(); ?>
			<?php edit_post_link( __( 'Edit', 'spottsfield' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'spottsfield' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	
		<footer class="entry-meta">
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->

