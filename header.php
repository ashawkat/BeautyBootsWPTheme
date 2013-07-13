<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link&limit=12'); ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span4">
				<a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt=""></a>
			</div>
			<div class="span4 offset3">
				<h3>Know Our Offer! Call Us:</h3>
				<h5>+88 016 7162 0320</h5>
			</div>
		</div>
		<div class="row">
			<div class="navbar">
			    <div class="navbar-inner">
			        <?php
						if (function_exists('wp_nav_menu')) {
							wp_nav_menu(array('theme_location' => 'wpj-main-menu', 'menu_id' => 'nav', 'fallback_cb' => 'wpj_default_menu'));
						}
						else {
							wpj_default_menu();
						}
					?>
				</div>
			</div>
		</div>