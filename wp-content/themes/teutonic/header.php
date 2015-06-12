<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/custom-styles.css' media='all' />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href='http://fonts.googleapis.com/css?family=UnifrakturCook:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700|UnifrakturMaguntia' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/custom-styles.css' media='all' />
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <script src="//use.typekit.net/usi2udo.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>


<style>

body {
	background-image: url("<?php echo get_template_directory_uri(); ?>/img/bg.jpg") !important;
}




</style>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo-for-web.jpg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

	<nav class="main-nav">
		<?php wp_nav_menu(); ?>
	</nav>


</header>
			<!-- /header -->
