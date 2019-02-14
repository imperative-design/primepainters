<?php
/**
 * Template Name: Home Tpl
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	

<?php 
while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; get_footer();
