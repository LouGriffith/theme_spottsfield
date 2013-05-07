		

		<div id="footerBackground">
			<footer class="container">
				<hr>

				<div class="row footer-bottom">
					<div class="span6">
						<p><small>&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?> / All Rights Reserved</small></p>
					</div>

					<div class="span6">
						<p class="pull-right"><small>Powered by Wordpress / Built using Bootstrap</small></p>
					</div>
				</div>
				<!-- /end footer-bottom -->
			</footer>
		</div>
		
		<?php wp_footer(); ?>

		<!-- JavaScript
		================================================== -->
		  	<!-- JavaScript at the bottom for fast page loading -->
		
		 	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		 	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.min.js"><\/script>')</script>
	
			<!-- Call to Twitter Bootsrap -->
			<script src="<?php bloginfo('template_url'); ?>/js/lib/bootstrap.min.js"></script>

			<!-- Call to FancyBox -->
			<script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.fancybox.min.js"></script>

			
			<?php if (is_post_type_archive('project') or is_tax( 'client' )) { ?>
				<!-- Call to Other Plugins -->
				<script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.isotope.min.js"></script>
			
				<!-- Call to Custom JS -->
				<script src="<?php bloginfo('template_url'); ?>/js/application.js"></script>
			<?php } else { ?>
				<!-- Default JS -->
				<script src="<?php bloginfo('template_url'); ?>/js/default.js"></script>
			<?php } ?>
			
			<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);"> <!-- Mobile Safari URL shift -->
			<!-- /end scripts -->

		<!-- Analytics
		================================================== -->	
			<!-- Google Analytics -->
			<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5102404-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		
		<!-- End Document
		================================================== -->	
		
	</body>
	<!-- /end body -->
	
</html>
<!-- /end html -->
