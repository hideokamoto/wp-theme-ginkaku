<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ginkaku
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

<?php if ( get_header_image() ) : ?>
	<style>
	.site-header{
		background-image:url(<?php header_image(); ?>);
		background-repeat:no-repeat;
		background-size: cover;
		padding: 0 0 250px;
	}
	.site-navbar-row{
		padding-top: 5px;
		background-color: #333;
	}
	</style>
<?php endif;?>

</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ginkaku' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-navbar-row">
			<div class="site-navbar container">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'ginkaku' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content container">
