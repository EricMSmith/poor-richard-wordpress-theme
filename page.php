<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
        <?php get_template_part( 'content', 'page' ); ?>
        <?php get_template_part( 'share' ); ?>
	<?php endwhile; // end of the loop. ?>
	    </section>
		</div>
<?php get_template_part( 'bottomer' ); ?>
