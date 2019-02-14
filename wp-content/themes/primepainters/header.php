<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	
	<?php wp_head(); ?>
	
	<!-- <script src="https://use.fontawesome.com/8e07ad6cf8.js" type="text/javascript"> -->
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/node_modules/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/node_modules/slick-carousel/slick/slick-theme.css">
</head>

<body <?php body_class(); ?>>
	<div class="header-wrapper">
		<header>
			<div class="wrapper">
			<a class="logo" href="http://<?php bloginfo('site_url') ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png">
				<span class="border-top"></span>
				<h1> 
					prime<span> painters </span>
					<span class="tagline">quality at a reasonable price</span>
				</h1>
			</a>
			<?php wp_nav_menu(array(
				'menu' => 'primary',
				'menu_class' => 'nav',
				'container' => ''
			)); ?>
			<!-- <ul class="nav">
				<li><a href="/about">about us</a></li>
				<li><a href="/services">services</a></li>
				<li><a href="/our_work">our work</a></li>
				<li><a href="/contact">contact us</a></li>
			</ul> -->
			<a class="nav-toggle"><i class="fa fa-bars"></i></a>
			</div>
		</header>
	</div>
