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

	<script>
		(function(i,s,o,g,r,a,m){
		i['GoogleAnalyticsObject']=r;
		i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},
		i[r].l=1*new Date();
		a=s.createElement(o),m=s.getElementsByTagName(o)[0];
		a.async=1;
		a.src=g;
		m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-134641192-2', 'auto');
		ga('send', 'pageview');
	</script>
</head>

<body <?php body_class(); ?>>
	<div class="header-wrapper">
		<header>
			<div class="wrapper">
			<a class="logo" href="http://<?php bloginfo('site_url') ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/pp_logo.svg">
<!--
				<span class="border-top"></span>
				<h1> 
					prime<span> painters </span>
					<span class="tagline">quality at a reasonable price</span>
				</h1>
-->
			</a>
			
			<div class="nav">
				<div class="number">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<a href="tel:7708271115" class="phone"></a>
				</div>
				<?php wp_nav_menu(array(
					'menu' => 'primary',
					'menu_class' => '',
					'container' => '',
				)); ?>
				<div class="contact-us">
					<a href="#pp-contact-form" class="contact">request a quote</a>
				</div>
			</div>
			
			<a class="nav-toggle"><i class="fa fa-bars"></i></a>
			</div>
		</header>
	</div>
