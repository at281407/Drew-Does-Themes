<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drew_Does_Themes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="header-logo">
            <?php echo the_custom_logo(); ?>
        </div>
        <div class="navigation">
			<a href="http://google.com">Blog</a>
			<a href="http://google.com">About</a>
			<a href="http://google.com">Contact</a>
		</div>
        <div class="meet-me"></div>
        <div class="social-media"></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
