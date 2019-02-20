<?php
/**
 * Template Name: Blog Tpl
 */

get_header();
?>

<div class="banner"></div>
<div class="content-wrapper">
    <div class="posts">
        <?php
            $queryArgs = array(
                'posts_per_page' => -1
            ); 
            $query = new WP_Query($queryArgs);
            if($query->have_posts() ) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="post">
                <a href="<?php the_permalink(); ?>">
                    <h1><?php the_title(); ?></h1>
                </a>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; endif; ?> 
    </div>
</div>

<?php get_footer(); ?>
	

