<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>

<div class="banner"></div>
<div class="content-wrapper">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="single-post">
			<div class="post-header">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('featured-rect');
				} ?>
			</div>
			<h1 class="single-post-title"><?php the_title(); ?></h1>
			<div class="single-post-content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php get_footer();
