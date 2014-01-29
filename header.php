<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Poor Richard
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?// Document Settings ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">

  <?// Page Meta ?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>      
  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?// WordPress: Alternate, Stylesheet, Blog settings, Manifest   ?>
	<?php wp_head(); ?> 
	

	<?// Favicon ?>

</head>


