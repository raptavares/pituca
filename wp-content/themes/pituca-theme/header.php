<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pituca\'s_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="top-bar"></div>

	<!-- START MAIN CONTAINER -->
	<div class="main-container">

		<header id="masthead" class="site-header" role="banner">
			<div class="logo-menu">
				<div class="logo">
					<a class="logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>"></a>
				</div>
				<div class="menu-contact">
						<div class="contact">
							<div class="phone">(11) 4506-9199</div>
							<div class="search-container">
								<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
								    <label>
								        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
								        <input type="search" class="search-field"
								            placeholder="<?php echo esc_attr_x( 'busca', 'placeholder' ) ?>"
								            value="<?php echo get_search_query() ?>" name="s"
								            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
								    </label>
								    <input class="search-button" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/icon_search.png" />
								</form>
							</div>
						</div>
						<div class="menu-container">
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pituca-theme' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
							</nav><!-- #site-navigation -->
						</div>		
				</div>	
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
