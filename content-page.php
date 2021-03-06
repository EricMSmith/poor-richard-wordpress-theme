<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Poor Richard
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="post-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->
</article><!-- #post-## -->
