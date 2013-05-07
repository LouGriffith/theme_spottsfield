<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>

<div id="sectionHeaderBackground">
	<div id="sectionHeader" class="container">
		<div class="row">
			<div class='span12'>
				<h1><?php wp_title(""); ?></h1>
			</div>
		</div>
	</div>
</div>
<!-- /end SectionHeader -->

	<div id="mainBackground" class="resume">
		
		<div id="main" class="container">
		
			<div class="row">
<!--			<div class="span2 resume-menu">
				<ul class="nav nav-list sp-sidenav">
					<li><a href="#introduction">Introduction</a></li>
					<li><a href="#experience">Experience</a></li>
					<li><a href="#education">Education</a></li>
					<li><a href="#organizations">Organizations</a></li>
					<li><a href="#awards">Awards</a></li>
					<li><a href="#skills">Skills</a></li>
				</ul>
			</div>-->
			
			<div class="span12" data-spy="scroll" data-target="#resume-menu">
								

				<section id="experience">
					<div class="row">
						<div class="span3 section-title">
							<h2>Experience</h2>
						</div>
						<!-- /end section name -->	

						<div class="span9 hidden-phone">
							&nbsp;
						</div>			
						
						</div>

						<div class="row">

						<div class="span3 hidden-phone">
							&nbsp;
						</div>

						<div class="span9 section-content">
						
						
						<?php
							
							// http://wordpress.org/support/topic/list-posts-by-taxonomy-tag
							$post_type = 'resume';
							$tax = 'organization';
							$tax_terms = get_terms($tax,'hide_empty=0');
							
							if ($tax_terms) {
							  foreach ($tax_terms  as $tax_term) {
							    $args=array(
							      'post_type' => $post_type,
							      "$tax" => $tax_term->slug,
							      'post_status' => 'publish',
							      'section' => 'experience',
							      'posts_per_page' => -1,
							      'caller_get_posts'=> 1
							    );
							
							    $my_query = null;
							    $my_query = new WP_Query($args);
							    if( $my_query->have_posts() ) { ?>

							    	<header class="row">
							    		<div class="span4">
							    			<h4 class="tax_term-heading" id="<?php echo $tax_term->slug; ?>">
							    				<?php echo $tax_term->name; ?>
							    			</h4>
							    		</div>

							    		<div class="span5">
							    			
										 </div>
							    	</header>

							    	<div class="company-info row">
							    		<div class="span8">
											<?php echo $tax_term->description;?>

							    		</div>
									</div>
									<!-- /end company desc -->

							    <?php } ?>

				

							    <?php 
								    $project_args=array(
								    	'post_type' => 'project',
								    	"$tax" => $tax_term->slug,
								    	'post_status' => 'publish',
								    	'post_per_page' => -1,
								    	'caller_get_posts' => 1
							    ); ?>

							    <?php
							    $project_query = null;
							    $project_query = new WP_Query($project_args);
							    if( $my_query->have_posts() ) {
							      echo '<h5 class="widget-title">Featured Projects</h5>';
							      echo '<div class="project-group">';
//							      echo get_option('taxonomy_' . $term_id . '["option_key_here"]');
							      while ($project_query->have_posts()) : $project_query->the_post(); ?>
							        <div class="row project-row">
							        	<div class="span8 resume-position">
							        		<p class="pull-right clientName">
							        			<em>for</em>
							        			<?php $terms = get_the_terms ($post->id, 'client'); ?>
							        			<?php 
							        				$skills_links = wp_list_pluck($terms, 'name'); 
							        				$skills_yo = join(", ", $skills_links);
							        			?>
												<span><?php echo $skills_yo; ?></span>
							        		<p>

							        		<a href="<?php the_permalink() ?>">
							        			<h5><?php the_title(); ?></h5> 
							        		</a>
							        	</div>
							        </div>
							        <!-- /end project row -->

							        
							        <?php
							      endwhile;
							      echo "</div>";
							      echo "<!-- /end project-group -->";
							      // echo "<p><a href=\"#top\">Back to top</a></p>";
							    }
							    
							    
							    wp_reset_query();
							  }
							  
							}
						?>
						</div>
					</div>
					<!-- /end row -->
				</section>
				<!-- /end experience section -->
				
				<hr>
				
				<section id="organizations">
					<div class="row">
						<div class="span3 section-title">
							<h2>Organizations</h2>
						</div>
						<!-- /end section name -->				
						
						<div class="span9 hidden-phone">
							&nbsp;
						</div>
					</div>
					<div class="row">

						<div class="span3 hidden-phone">
							&nbsp;
						</div>

						<div class="span9 section-content">
						<?php
							
							// http://wordpress.org/support/topic/list-posts-by-taxonomy-tag
							$post_type = 'resume';
							$tax = 'organization';
							$tax_terms = get_terms($tax,'hide_empty=0');
							
							if ($tax_terms) {
							  foreach ($tax_terms  as $tax_term) {
							    $args=array(
							      'post_type' => $post_type,
							      "$tax" => $tax_term->slug,
							      'post_status' => 'publish',
							      'section' => 'organizations',
							      'posts_per_page' => -1,
							      'caller_get_posts'=> 1
							    );
							
							    $my_query = null;
							    $my_query = new WP_Query($args);
							    if( $my_query->have_posts() ) { ?>
							      
							      <header>
							      	<h4 class="tax_term-heading" id="<?php echo $tax_term->slug ?>"> 
							      		<?php echo $tax_term->name  ?>
							      	</h4>
							      </header>
							     
							    <?php } ?>

							    <?php 
							    $project_args=array(
							    	'post_type' => 'project',
							    	"$tax" => $tax_term->slug,
							    	'post_status' => 'publish',
							    	'post_per_page' => -1,
							    	'caller_get_posts' => 1
							    );							    
							    
							    $project_query = null;
							    $project_query = new WP_Query($project_args);
							    if( $my_query->have_posts() ) {
							      echo '<h5 class="widget-title">Featured Projects</h5>';
							      echo '<div class="project-group">';
//							      echo get_option('taxonomy_' . $term_id . '["option_key_here"]');
							      while ($project_query->have_posts()) : $project_query->the_post(); ?>
							       
							       <div class="row project-row">
							       	<div class="span8 resume-position">
							       		<p class="pull-right project-role">
							       			<em>as</em> <?php $key="Role"; echo get_post_meta($post->ID, $key, true); ?>
							       		</p>

							       		<a href="<?php the_permalink() ?>">
							       			<h5><?php the_title(); ?> </h5> 
							       		</a>
							       	</div>
							       </div>
							       <!-- /end project-row -->
							       
							        <?php
							      endwhile;
							      echo "</div>";
							      echo "<!-- /end org -->";
							      // echo "<p><a href=\"#top\">Back to top</a></p>";
							    }
							    
							    
							    wp_reset_query();
							  }
							  
							  
							}
						?>
						</div>
					</div>
					<!-- /end row -->
				</section>
				<!-- /end organization section -->
				
				<hr>
				
				<section id="education">
					<div class="row">
						<div class="span3 section-title">
							<h2>Education</h2>
						</div>

						<div class="span9 hidden-phone">
							&nbsp;
						</div>
					</div>
					<div class="row">

						<div class="span3 hidden-phone">
							&nbsp;
						</div>
						<!-- /end section name -->
						<div class="span9 section-content">
						<?php
							
							// http://wordpress.org/support/topic/list-posts-by-taxonomy-tag
							$post_type = 'resume';
							$tax = 'organization';
							$tax_terms = get_terms($tax,'hide_empty=0');
							
							if ($tax_terms) {
							  foreach ($tax_terms  as $tax_term) {
							    $args=array(
							      'post_type' => $post_type,
							      "$tax" => $tax_term->slug,
							      'post_status' => 'publish',
							      'section' => 'education',
							      'posts_per_page' => -1,
							      'caller_get_posts'=> 1
							    );
							
							    $my_query = null;
							    $my_query = new WP_Query($args);
							    if( $my_query->have_posts() ) {
							      echo "<header><h4 class=\"tax_term-heading\" id=\"".$tax_term->slug."\"> $tax_term->name </h4></header>";
							      echo $tax_term->description;
							      echo get_option('taxonomy_' . $term_id . '["location"]');
							      while ($my_query->have_posts()) : $my_query->the_post(); ?>
							        <div class="row">
								        <div class="span9">
								        	<?php the_content(); ?>
								        </div>
							        </div>
							        <?php
							      endwhile;
								  // echo "<p><a href=\"#top\">Back to top</a></p>";
							    }
							    
							    wp_reset_query();
							  }
							}
							
						?>
						</div>
					</div>
					<!-- /end row -->
				</section>
				<!-- /end education section -->
				
				<hr>
				
				<section id="skills">
					<div class="row">
						<div class="span3 section-title">
							<h2>Skills</h2>
						</div>

						<div class="span9 hidden-phone">
							&nbsp;
						</div>
					</div>

					<div class="row">

						<div class="span3 hidden-phone">
							&nbsp;
						</div>

						<div class="span9 section-content">
							<?php
								
								//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
								
								$post_type 	  = 'project';
								$taxonomy     = 'skill';
								$orderby      = 'count';
								$order        = 'desc';
								$show_count   = 0;      // 1 for yes, 0 for no
								$pad_counts   = 0;      // 1 for yes, 0 for no
								$hierarchical = 1;      // 1 for yes, 0 for no
								$title        = '';
								$empty        = 0;
								
								$args = array(
								  'post_type'    => $post_type,
								  'taxonomy'     => $taxonomy,
								  'orderby'      => $orderby,
								  'order'        => $order,
								  'show_count'   => $show_count,
								  'pad_counts'   => $pad_counts,
								  'hierarchical' => $hierarchical,
								  'title_li'     => $title,
								  'hide_empty'   => $empty
								);
							?>
								
							<ul>
								<?php wp_list_categories( $args ); ?>
							</ul>
						</div>
				</section>
				<!-- /end education section -->
				
			</div>
			</div>
			<!-- end row -->
		
		</div>
		<!-- /end main -->
		
	</div>
	<!-- /mainBackground -->

<?php get_footer(); ?>
