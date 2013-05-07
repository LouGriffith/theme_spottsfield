<!doctype html>
<!-- Project Boot ~ LouGriffith.com -->

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
	
		<!-- Basic Page Needs
		================================================== -->
			<meta charset="utf-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<title>Lou Griffith | <?php wp_title(""); ?></title>
			<meta name="description" content="Creative Portfolio of Lou Griffith - Designer, Filmmaker, all around nice guy.">
			<meta name="keywords" content="HTML5, dotCMS, wordpress, joomla, web designer, filmmaker, print designer, UI designer">

		<!-- Mobile Specific Metas
		================================================== -->
		    <!-- Mobile viewport optimized: h5bp.com/viewport -->
			<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"  />
			<meta name="HandheldFriendly" content="True">
			<meta name="MobileOptimized" content="320">
			
			<!-- IE Fixes
		================================================== -->
			<!-- Based on Foundation & h5bp.com/d/head-Tips
		
			<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
			     chromium.org/developers/how-tos/chrome-frame-getting-started -->
			
			<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
		
			<!--[if lt IE 9]>
				<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css">
			<![endif]-->
		
			<!--[if (lt IE 9) & (!IEMobile)]>
				<script src="<?php bloginfo('template_url'); ?>/js/lib/selectivizr.min.js"></script>
			<![endif]-->
		
			<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			
			<!--[if lt IE 9]>
				<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css">
			<![endif]-->
			
			<!-- IE 9 Pin Site -->
			<meta name="application-name" content="Lou Griffith" />
			<meta name="msapplication-tooltip" content="Creative Portfolio of Lou Griffith - Designer, Filmmaker, all around nice guy." />
		    
		    <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
			<meta http-equiv="cleartype" content="on">
			
		
			<!-- Facebook Open Graph 
		================================================== -->
			<!-- Based on h5bp.com/d/head-Tips -->
			<meta property="og:title" content="Lou Griffith | <?php wp_title(""); ?>" />
			<meta property="og:description" content ="Creative Portfolio of Lou Griffith - Designer, Filmmaker, all around nice guy." />
			<meta property="og:url" conteont ="<?php echo home_url(); ?>" />
			<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/logo_LG-big" />
			
			<!-- CSS
		================================================== -->
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css">
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fancybox.css">
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/boot.css">
		
			<!-- Google Fonts-->
			<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
			
			<!-- Favicons
		================================================== -->
			<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
			
			<!-- Modernizr - www.modernizr.com/download/
		================================================== -->		
		  	<!-- Modernizr enables HTML5 elements & feature detects for optimal performance. -->
		  	
		  	<script src="<?php bloginfo('template_url'); ?>/js/lib/modernizr.min.js"></script>
			
		  	  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
		  	  
		  	  <?php wp_head(); ?>
	
	</head>
	
		<body data-spy="scroll" data-target=".sp-nav-box">

			<div id="headerBackground">
				<header class="container">
					<div class="row">
						<?php if ( is_active_sidebar( 'header-left' ) ) : ?>
							<div class="span5">
								<?php dynamic_sidebar( 'header-left' ); ?>
							</div>
							<!-- Logo -->
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'header-right' ) ) : ?>
							<div class="span7">
								<?php dynamic_sidebar( 'header-right' ); ?>
							</div>
							<!-- SearchForm -->
						<?php endif; ?>
					</div>
				</header>
			</div>
			<!-- /end headerBackground -->

	