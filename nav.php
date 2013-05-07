			<div id="navBackground">
				<div class="navbar container">
					<div class="navbar-inner">
						<a class="brand" href="<?php echo home_url(); ?>">Lou Griffith</a>
						
					      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </a>

						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'nav-collapse collapse', 'menu_class' => 'nav pull-right', 'depth' => 1, ) ); ?>
						<?php dynamic_sidebar( 'nav-right' ); ?>
					</div>
				</div>
			</div>

			<!-- /end navBackground -->