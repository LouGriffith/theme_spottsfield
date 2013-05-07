<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>


<div id="coverBackground">
	<div id="cover" class="container">
		<div class="row">
			<div class="span7">
			<?php 
				$d1 = new DateTime(date("Y-m-d"));
				$d2 = new DateTime('2000-06-09');

				$diff = $d2->diff($d1);
			?>
			<div class="hero-unit">
				<h2>I'm a Creative Designer specializing in digital media with over <?php echo $diff->y; ?> years of experience.</h2>
			</div>
			<!-- /end hero-unit -->
			</div>
		</div>
	</div>
	<!-- Cover -->
</div>

<div id="mainBackground">
	<div id="main" class="container">
		<div class="row">
			  	<div id="mainContent" class="span7 offset1">
					<?php the_post(); ?>
					<?php the_content(); ?>
				</div>
				<!-- /end main content -->

			<aside class="span4 featuredProject">
				<h4>Featured Project</h4>

				<?php 
					$args = array( 'post_type' => 'project', 'posts_per_page' => 1, 'orderby' => 'rand' );  
					$loop = new WP_Query( $args );  
					while ( $loop->have_posts() ) : $loop->the_post();  
					    
					    get_template_part( 'content', 'featured' );
					     
					endwhile; 
				?>
			</aside>

		</div>
	</div>
</div>

<?php get_footer(); ?>