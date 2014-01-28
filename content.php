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
				$tags_list = get_the_tag_list( '', ', ', ' ' );
				if ( $tags_list ) :
			?>

			<div class="post-meta-data"><i class="icon-tags"></i>
				<?php printf($tags_list); ?>
			</div>
			
			<?php endif; // End if $tags_list ?>
	    
		</menu>

		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="post-content">
	<?php if ( has_post_thumbnail()) : ?>
	   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
	   <?php the_post_thumbnail( 'homepage-thumb' ); ?>
	   </a>
	 <?php endif; ?>
		<?php the_excerpt(); ?> 
		<a href="<?php the_permalink(); ?>" class="button button-default button-keep-reading" title="See &quot;<?php the_title(); ?>&quot;">See more &rarr;</a>
	</div><!-- .post-content -->
</article><!-- #post-## -->
