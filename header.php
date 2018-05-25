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
		<h5 class="my-0 mr-md-auto font-weight-normal"><img src="<?php echo get_template_directory_uri(); ?>/build/images/weext_logo-240x66.png" ></h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="#">Home</a>
			<a class="p-2 text-dark" href="#">Our Business</a>
			<a class="p-2 text-dark" href="#">Partners</a>
			<a class="p-2 text-dark" href="#">Our People</a>
			<a class="p-2 text-dark" href="#">Work with us</a>
			<a class="p-2 text-dark" href="#">Our Affiliates</a>
			<a class="p-2 text-dark" href="#">Contact Us</a>
		</nav>
		</div>
	</header>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$weext_corp_description = get_bloginfo( 'description', 'display' );
			if ( $weext_corp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $weext_corp_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'weext-corp' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
