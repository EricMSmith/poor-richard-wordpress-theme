<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Poor Richard
 */
?>
<section class="sidebar-data-holder">
    <div class="spinner" role="spinner"><div class="spinner-icon"></div></div>
    <nav class="main-nav">
      <button class="nav-control"><i class="icon-hamburguer"></i></button>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    <div class="logo">
    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </div>
    <div class="author">
        <figure class="author-avatar"><img class="avatar-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/author.jpg" alt=""></figure>
        <header class="author-name">Eric M. Smith</header>
        <p class="author-bio">Cincinnati, OH, USA</p>
    </div>

    <menu class="social-media-share">
        <a href="#" class="icon-facebook" rel="external" title="My Facebook"></a>
        <a href="#" class="icon-twitter" rel="external" title="My Twitter"></a>
        <a href="#" class="icon-googleplus" rel="external" title="My Google+"></a>
        <a href="#" class="icon-flickr" rel="external" title="My Flickr"></a>
        <a href="#" class="icon-linkedin" rel="external" title="My LinkedIn"></a>
        <a href="#" class="icon-pinterest" rel="external" title="My Pinterest"></a>
        <a href="#" class="icon-github" rel="external" title="My GitHub"></a>
        <a href="#" class="icon-youtube" rel="external" title="My YouTube"></a>
    </menu> 
    
    <?php get_footer(); ?>
</section>