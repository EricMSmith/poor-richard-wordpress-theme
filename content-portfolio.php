<?php
/**
 * @package Poor Richard
 */
?>

<?php /* Get all the portfolio items */ ?>
<?php query_posts( array ( 'category_name' => 'Portfolio', 'posts_per_page' => -1 ) ); ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'gallery-thumbnails' ); ?>

<?php endwhile; ?>

<?php /* Reset */ ?>
<?php wp_reset_query(); ?>
