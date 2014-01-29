<?php
/**
 * @package Poor Richard
 */
?>

<?php /* Get all the portfolio items */ ?>
<?php query_posts( array ( 'category_name' => 'Portfolio', 'posts_per_page' => -1 ) ); ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

				<div class="masonry-item gallery-thumbnail">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );		 ?>			
					<a href="<?php echo $image[0]; ?>" title="<?php the_title_attribute(); ?>" class="gallery-popup">
		   			<?php the_post_thumbnail( 'large' ); ?>
		   		</a>
		   		<figcaption class="hidden"><?php the_title_attribute(); ?><span class="sep"> | </span><a href="<?php the_permalink(); ?>" class="gallery-caption-link">original post</a></figcaption>	
		 		</div><!-- .masonry-item -->

<?php endwhile; ?>

<?php /* Reset */ ?>
<?php wp_reset_query(); ?>
