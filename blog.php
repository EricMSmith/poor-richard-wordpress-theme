<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Poor Richard
 * Template Name: Blog 
 */

get_header(); ?>
<body <?php body_class(); ?>>
	
	  <div id="main-content" role="main" class="pure-g-r">
	    <aside id="main-sidebar" class="pure-u-1-3">
	        <?php get_sidebar(); ?>
	    </aside>
	    <section id="main" class="pure-u-2-3">

	        <?php
							$temp = $wp_query; $wp_query= null;
							$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
							while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php poor_richard_paging_nav(); ?>

						<?php// wp_reset_postdata(); ?>

	    </section>
		</div>

		<?php get_template_part( 'bottomer' ); ?>