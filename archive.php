<?php
/**
 * The template for displaying Archive pages.
 *
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

		<?php if ( have_posts() ) : ?>

			<header class="post-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'poor-richard' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'poor-richard' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'poor-richard' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'poor-richard' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'poor-richard' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'poor-richard' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'poor-richard' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'poor-richard');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'poor-richard');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'poor-richard' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'poor-richard' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'poor-richard' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'poor-richard' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'poor-richard' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'poor-richard' );

						else :
							_e( 'Archives', 'poor-richard' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php if ( is_category() && single_cat_title("", false) == "Portfolio" ) : ?>
				
				<div id="masonry-container" class="gallery">
					

						<?php get_template_part( 'content', 'portfolio' ); ?>


				</div>
			<?php else : ?>

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

				<?php poor_richard_paging_nav(); ?>

			<?php endif; ?>			

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	  </section>
	</div>

<?php get_template_part( 'bottomer' ); ?>
