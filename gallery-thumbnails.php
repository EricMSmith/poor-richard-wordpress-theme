				<div class="masonry-item gallery-thumbnail">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );		 ?>			
					<a href="<?php echo $image[0]; ?>" title="<?php the_title_attribute(); ?>" class="gallery-popup">
		   			<?php the_post_thumbnail( 'large' ); ?>
		   		</a>
		   		<figcaption class="hidden"><?php the_title_attribute(); ?><span class="sep"> | </span><a href="<?php the_permalink(); ?>" class="gallery-caption-link">original post</a></figcaption>	
		 		</div><!-- .masonry-item -->