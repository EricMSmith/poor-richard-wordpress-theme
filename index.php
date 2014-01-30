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
 */

get_header(); ?>
<body <?php body_class(); ?>>
	
	  <div id="main-content" role="main" class="pure-g-r">
	    <aside id="main-sidebar" class="pure-u-1-3">
	        <?php get_sidebar(); ?>
	    </aside>
	    <section id="main" class="pure-u-2-3">

	    	<header class="page-header"><h1 class="page-title">Samples from my <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/Portfolio">Portfolio</a></h1></header>
	    	
	    	<div class="pure-g-r gallery">
	    	<?php query_posts(array(
					'showposts' => 5,
					'orderby' => 'rand',
					'category_name' => 'Portfolio'
					));?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="pure-u-1-5 gallery-image-container">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );		 ?>			
						<div class="gallery-thumbnail">
							<a href="<?php echo $image[0]; ?>" title="<?php the_title_attribute(); ?>" class="gallery-popup">
				   			<?php the_post_thumbnail( 'large' ); ?>
				   		</a>
				   		<figcaption class="hidden"><?php the_title_attribute(); ?><span class="sep"> | </span><a href="<?php the_permalink(); ?>" class="gallery-caption-link">original post</a></figcaption>	
			 			</div>
			 		</div>

				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
				</div> <!-- /.gallery -->

	    	<header class="page-header"><h1 class="page-title">Recent <a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog">Blog</a> Posts</h1></header>

	        <?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php// poor_richard_paging_nav(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
	    </section>
		</div>

		<?php get_template_part( 'bottomer' ); ?>