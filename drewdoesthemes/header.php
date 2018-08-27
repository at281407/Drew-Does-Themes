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
		<div class="header-logo header-mod">
			<svg viewBox="0 0 100 100" style="border: 0px solid black;">
				<svg viewBox="-10 0 120 120" >
					<circle cx="50" cy="50" r="50" fill="#1F4C80" />
					<text class="innerLet" x="18" y="76" fill="#A1C1D4" style="font-family: 'Roboto', sans-serif;font-size: 5.5em;">D</text>
					<text class="innerLet" x="24" y="82" fill="#A1C1D4" style="font-family: 'Roboto', sans-serif;font-size: 5.5em;">D</text>
					<text class="innerLet" x="30" y="88" fill="#A1C1D4" style="font-family: 'Roboto', sans-serif;font-size: 5.5em;">D</text>
				</svg>
				<svg viewBox="0 0 100 100">
					<text class="logoText" width="100%" class="logoText" x="8" y="95" fill="#05274C" style="font-family: 'Roboto', sans-serif;font-size: 0.75em;">Drew/Does/Dev</text>
				</svg>
			</svg>
        </div>
        <nav class="navigation header-mod">
			<?php if( have_rows('navigation', 'option') ): 
			    while( have_rows('navigation', 'option') ) : the_row(); ?> 
				    <a href="<?php the_sub_field('nav_link_url'); ?>"><?php the_sub_field('nav_link_name'); ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
        </nav>
        <div class="meet-me header-mod">
			<img class="meet-me__photo" src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/08/inThePark.jpg" />
			<q class="meet-me__quote"><?php the_field('quote', 'option'); ?></q>
		</div>
        <div class="social-media header-mod">
		    <?php if( have_rows('social_links', 'option') ): 
			    while( have_rows('social_links', 'option') ) : the_row(); ?>
					<a class="social-link" target="_blank" href="<?php the_sub_field('link_url'); ?>" style="background-color: <?php the_sub_field('link_color');?>"><?php the_sub_field('link_icon'); ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
