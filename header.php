<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TigeAD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if (is_front_page()) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/lib/slick/slick.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/lib/slick/slick-theme.css" />
	<?php } ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="mobile_menu">
			</div>
			<div class="header-logo">
				<a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/img/svg/Logo.svg" alt="ThinkAd">
					<div class="logo-text">ThinkAd</div>
					<div class="break"></div>
					<div class="logo_sub">We are from Ukraine</div>
				</a>
			</div>
			<div class="header-nav">
				<nav class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
				<div class="mobile_menu_block">
					<a href="#" class="btn-small">Try Free for 30 Days</a>
					<div class="social_icon">
						<a href="#">
							<div class="social-media-icons">
								<div class="linkedin"></div>
							</div>
						</a>
						<a href="#">
							<div class="social-media-icons">
								<div class="instagram"></div>
							</div>
						</a>
						<a href="#">
							<div class="social-media-icons">
								<div class="youtube"></div>
							</div>
						</a>
						<a href="#">
							<div class="social-media-icons">
								<div class="facebook"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="header-panel">
				<a href="#" class="btn-small">Try Free for 30 Days</a>
				<div class="login"><a href="/login">Log in <span class="i-sign"></span></a></div>
			</div>
		</header>