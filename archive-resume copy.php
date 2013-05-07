<?php get_header(); ?>
<?php get_template_part( 'nav' );           // Navigation bar (nav.php) ?>

<div id="sectionHeaderBackground">
	<div id="sectionHeader" class="container">
		<h1><?php wp_title(""); ?></h1>
	</div>
</div>
<!-- /end SectionHeader -->

<div id="mainBackground resume">
	<div id="main" class="container">
		<div class="row">
			<div class="span12" data-spy="scroll" data-target="#resume-menu">
				<section id="introduction">
					<div class="row">

						<div class="span12 section-content">
							<?php
								$args=array(
								  'section' => 'introduction',
								  'post_type' => 'resume',
								  'posts_per_page' => 10,
								  'caller_get_posts'=> 1
								);
								$my_query = null;
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
								  while ($my_query->have_posts()) : $my_query->the_post(); ?>
								    <p><?php the_content(); ?></p>
								    <?php
								  endwhile;
								}
								wp_reset_query();  // Restore global post data stomped by the_post().
							?>

						</div>
					</div>
				</section>
				<!-- /end introduction -->
				<hr>
				<section id="experience">
					<div class="row">
						<div class="span3 section-title">
							<h2>Experience</h2>
						</div>

						<div class="span8 section-content">
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
							    if( $my_query->have_posts() ) {
							      echo "<header class=\"org\"><h3 class=\"orgTitle\" id=\"".$tax_term->slug."\"> $tax_term->name </h3></header>";
							      echo "<div class=\"orgDesc\">$tax_term->description </div>";
							      if (isset($term_meta['location'])){
							      	echo $term_meta['location'];
							      }
							    }
							    
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
							      echo '<div class="orgProjects">';
//							      echo get_option('taxonomy_' . $term_id . '["option_key_here"]');
							      while ($project_query->have_posts()) : $project_query->the_post(); ?>
							        
							      	<div class="projectBox">
										<div class="projectRow row">
											<div class="span1 projectYear"><?php the_date('Y'); ?></div>
											<div class="span5 projectName"><a href="#<?php the_ID(); ?>" data-toggle="collapse" data-target=".exp-<?php the_ID(); ?>"><h4><i class="icon-plus-sign"></i> <?php the_title(); ?></h4></a></div>
											<div class="span3 projectClient hidden-phone"><?php echo get_the_term_list ( $post->ID, 'client', '', ', ','' );?></div>
										</div>
										
										<div class="projectInfo row exp-<?php the_ID(); ?> collapse">
											<div class="span1 projectMonth"><?php the_time('M'); ?></div>
											<div class="span5 projectDesc"><?php the_excerpt(); ?></div>
											<div class="span3 projectLink"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">View Project <i class="icon-share"></i></a></div>		
										</div>
									</div>
									<!-- /end projectBox -->
							     
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

				</section>
				<!-- /end experience -->
				<hr>
				<section id="organizations">
					<div class="row">
						<div class="span3 section-title">
							<h2>Organizations</h2>
						</div>


						<div class="span8 section-content">
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
							    if( $my_query->have_posts() ) {
							      echo "<header class=\"org\"><h3 class=\"orgTitle\" id=\"".$tax_term->slug."\"> $tax_term->name </h3></header>";
							      echo "<div class=\"orgDesc\">$tax_term->description </div>";
							      if (isset($term_meta['location'])){
							      	echo $term_meta['location'];
							      }
							    }
							    
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
							      echo '<div class="orgProjects">';
//							      echo get_option('taxonomy_' . $term_id . '["option_key_here"]');
							      while ($project_query->have_posts()) : $project_query->the_post(); ?>
							       
							   		<div class="projectBox">
										<div class="projectRow row">
											<div class="span1 projectYear"><?php the_date('Y'); ?></div>
											<div class="span6 projectName"><a href="#<?php the_ID(); ?>" data-toggle="collapse" data-target=".org-<?php the_ID(); ?>"><h4><i class="icon-plus-sign"></i> <?php the_title(); ?></h4></a></div>
											<div class="span2 projectRole hidden-phone"><?php $key="Role"; echo get_post_meta($post->ID, $key, true); ?></div>
										</div>
										
										<div class="projectInfo row org-<?php the_ID(); ?> collapse">
											<div class="span1 projectMonth"><?php the_time('M'); ?></div>
											<div class="span6 projectDesc"><?php the_excerpt(); ?></div>
											<div class="span2 projectLink"><a href="<?php the_permalink() ?>">View Project <i class="icon-share"></i></i></a></div>		
										</div>
									</div>
									<!-- /end projectBox -->
							       
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
				</section>
				<!-- /end organizations -->
				<hr>
				<section id="education">
					<div class="row">
						<div class="span3 section-title">
							<h2>Education</h2>
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
							      'section' => 'education',
							      'posts_per_page' => -1,
							      'caller_get_posts'=> 1,
							    );
							
							    $my_query = null;
							    $my_query = new WP_Query($args);
							    if( $my_query->have_posts() ) {
							      echo "<header><h3 class=\"tax_term-heading\" id=\"".$tax_term->slug."\"> $tax_term->name </h3></header>";
							      echo $tax_term->description;
							      echo get_option('taxonomy_' . $term_id . '["location"]');
							      while ($my_query->have_posts()) : $my_query->the_post(); ?>
							        
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
				</section>
				<!-- /end education -->
				<hr>
				<section id="skills">
					<div class="row">
						<div class="span3 section-title">
							<h2>Skills</h2>
						</div>

						<div class="span8 section-content">
						<?php
										
								//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
										
								$post_type 	  = 'project';
								$taxonomy     = 'skill';
								$orderby      = 'name';
								$show_count   = 0;      // 1 for yes, 0 for no
								$pad_counts   = 0;      // 1 for yes, 0 for no
								$hierarchical = 1;      // 1 for yes, 0 for no
								$title        = '';
								$empty        = 0;
										
								$args = array(
								  'post_type'    => $post_type,
								  'taxonomy'     => $taxonomy,
								  'orderby'      => $orderby,
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
					</div>
				</section>
				<!-- /end skills -->
			</div>
		</div>
		<!-- /end resume -->
	</div>
</div>
<!-- /end mainBackground -->

<?php get_footer(); ?>
