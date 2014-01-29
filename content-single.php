<?php
/**
 * @package Poor Richard
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<menu class="post-meta">
	    <div class="post-meta-data"><i class="icon-datetime"></i>  <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </div>
	    <?php
				$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
				if ( $categories_list ) :
			?>

			<div class="post-meta-data"><i class="icon-tags"></i>
				<?php printf($categories_list); ?>
			</div>
			
			<?php endif; // End if $tags_list ?>
	    
		</menu>

		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="post-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'poor-richard' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'poor-richard' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-content -->
</article><!-- #post-## -->
