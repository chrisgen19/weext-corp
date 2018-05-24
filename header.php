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

	
	<header>
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

	<main role="main">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img class="first-slide" src="images/banner1.jpg" alt="First slide">
			<div class="container">
				<div class="carousel-caption text-left">
				<h1>Example headline.</h1>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.
					Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p>
					<a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
				</p>
				</div>
			</div>
			</div>
			<div class="carousel-item">
			<img class="second-slide" src="images/banner2.jpg" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
				<h1>Another example headline.</h1>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.
					Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p>
					<a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
				</p>
				</div>
			</div>
			</div>
			<div class="carousel-item">
			<img class="third-slide" src="images/banner1.jpg" alt="Third slide">
			<div class="container">
				<div class="carousel-caption text-right">
				<h1>One more for good measure.</h1>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.
					Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p>
					<a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
				</p>
				</div>
			</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'weext-corp' ); ?></a>

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
