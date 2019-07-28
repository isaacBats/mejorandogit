<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterBlog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starter-blog' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-3">
					<ul class="social-header clearfix">
						<?php if( get_theme_mod( 'social_facebook' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_facebook' ) ); ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_twitter' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_twitter' ) ); ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_instagram' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_instagram' ) ); ?>" class="instagram"><i class="fa fa-instagram"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_github' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_github' ) ); ?>" class="github"><i class="fa fa-github"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_youtube' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_youtube' ) ); ?>" class="youtube"><i class="fa fa-youtube"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="site-branding text-center">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						<?php
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
						?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-3 menu-col">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" data-toggle="dropdown" aria-controls="header-menu" aria-expanded="false">
							<span class="sr-only"><?php esc_html_e( 'Menu', 'starter-blog' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php wp_nav_menu( array( 
							'theme_location' 	=> 'headermenu', 
							'menu_id' 			=> 'header-menu', 
							'depth'				=> 3, // 1 = with dropdowns, 0 = no dropdowns.
							'fallback_cb'       => false,
							'container_class' 	=> 'primary-menu' 
							) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->