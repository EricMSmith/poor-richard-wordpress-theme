<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Poor Richard
 */

get_header(); ?>
<body <?php body_class(); ?>>
	<?php while ( have_posts() ) : the_post(); ?>

	  <div id="main-content" role="main" class="pure-g-r">
	    <aside id="main-sidebar" class="pure-u-1-3" <?php if ( has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>style="background-image: url('<?php echo $image[0]; ?>')"<?php } ?>>
        <?php get_sidebar(); ?>
	    </aside>
	    <section id="main" class="pure-u-2-3">
        <?php get_template_part( 'content', 'single' ); ?>
        <?php get_template_part( 'share' ); ?>

					<?php poor_richard_post_nav(); ?>
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>
	<?php endwhile; // end of the loop. ?>
	    </section>
		</div>
<?php get_template_part( 'bottomer' ); ?>