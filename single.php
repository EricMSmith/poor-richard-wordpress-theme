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
          <section class="share">
            <h4>Share this post</h4>
              <menu class="social-media-share">
        				<a class="icon-twitter" href="http://twitter.com/share?text=<?php echo get_the_title() ?> @glimbit&url=<?php echo get_permalink(); ?>"
                	onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
                	<span class="hidden">Twitter</span>
              	</a>
              	<a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"
                	onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
                	<span class="hidden">Facebook</span>
            		</a>
        				<a class="icon-googleplus" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>"
               		onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
                	<span class="hidden">Google+</span>
            		</a>
        			</menu>
          </section>
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