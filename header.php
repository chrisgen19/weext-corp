<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Weext_Corp
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
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 fixed-top bg-white border-bottom box-shadow">
			<h5 class="my-0 mr-md-auto font-weight-normal">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" >
					<img src="<?php echo get_template_directory_uri(); ?>/build/images/weext_logo-240x66.png" >
				</a>
			</h5>
			<nav id="site-navigation"  class="main-navigation my-2 my-md-0 mr-md-3">

				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
				
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
