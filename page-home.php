<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>


<div id="coverBackground">
	<div id="cover" class="container">
		<div class="row">
			<div class="span8">
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

			  	<div id="mainContent" class="span7">
					
					<h4>Latest Project</h4>

					<?php 
						$args = array( 'post_type' => 'project', 'posts_per_page' => 1, 'orderby' => 'date' );  
						$loop = new WP_Query( $args );  
						while ( $loop->have_posts() ) : $loop->the_post();  
						    
						    get_template_part( 'content', 'featured' );
						     
						endwhile; 
					?>

				</div>
				<!-- /end main content -->

			<aside class="span5">
				<div class="well wellWhite">
					<div class="louBox">
						<h4>Where am I?</h4>
						<p>I am the Web Designer at Methodist Le Bonheur Healthcare in soulful Memphis, TN</p> 
					</div>

					<div class="louContact">
						<h4>Get A Hold Of Me</h4>
						<ul class="contactList">
							<li><span class="label">Email:</span> <a href="mailto:griffithlou@gmail.com">griffithlou@gmail.com</li>
							<li><span class="label">Phone:</span> <a href="tel://1-901-214-5682"</a>901-214-LOU2</li>
						</ul>
					</div>
				</div>

				<div class="icons">
					<ul class="icons icons-social">
						<li class="icon"><a href="https://www.facebook.com/lgriffith" TARGET="_blank"><i class="icon-facebook icon-social">facebook</i></a></li>
						<li class="icon"><a href="https://twitter.com/lougriffith" TARGET="_blank"><i class="icon-twitter icon-social">twitter</i></a></li>
						<li class="icon"><a href="http://instagram.com/lougriffith" TARGET="_blank"><i class="icon-instagram icon-social">instagram</i></a></li>
						<li class="icon"><a href="http://www.linkedin.com/in/lougriffith" TARGET="_blank"><i class="icon-social icon-linkedin">linkedin</i></a></li>
						<li class="icon"><a href="http://www.behance.net/lougriffith" TARGET="_blank"><i class="icon-behance icon-social">behance</i></a></li>
						<li class="icon"><a href="https://vimeo.com/lougriffith" TARGET="_blank"><i class="icon-vimeo icon-social">vimeo</i></a></li>
					</ul>
				</div>
			</aside>

		</div>
	</div>
</div>

<?php get_footer(); ?>