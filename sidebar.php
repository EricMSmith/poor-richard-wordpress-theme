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
        <header class="author-name">Cincinnati, OH, USA</header>
    </div>

    <menu class="social-media-share">
        <a href="mailto:eric@ericmsmith.com" class="icon-mail" rel="external" title="Email me"></a>
        <a href="https://twitter.com/glimbit" class="icon-twitter" rel="external" title="My Twitter"></a>
        <a href="https://www.facebook.com/pages/Eric-M-Smith-Artist/21617466325" class="icon-facebook" rel="external" title="My Facebook"></a>
        <a href="https://plus.google.com/+Ericmsmith" class="icon-googleplus" rel="external" title="My Google+"></a>
        <a href="http://glimbit.tumblr.com/" class="icon-tumblr" rel="external" title="My Tumblr"></a>
        <a href="http://www.linkedin.com/in/ems3k/" class="icon-linkedin" rel="external" title="My LinkedIn"></a>
        <a href="http://www.pinterest.com/glimbit/glimbit-art/" class="icon-pinterest" rel="external" title="My Pinterest"></a>
        <a href="http://www.youtube.com/user/glimbit/videos" class="icon-youtube" rel="external" title="My YouTube"></a>
        <a href="https://github.com/EricMSmith" class="icon-github" rel="external" title="My GitHub"></a>
    </menu> 
    
    <?php get_footer(); ?>
</section>