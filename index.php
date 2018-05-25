<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Weext_Corp
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="first-slide" src="<?php echo get_template_directory_uri() . '/build/'; ?>images/banner1.jpg" alt="First slide">
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
				<img class="second-slide" src="<?php echo get_template_directory_uri() . '/build/'; ?>images/banner2.jpg" alt="Second slide">
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
				<img class="third-slide" src="<?php echo get_template_directory_uri() . '/build/'; ?>images/banner1.jpg" alt="Third slide">
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

			<div class="container">
				<div class="card-deck mb-3 text-center">
					<div class="card mb-4 box-shadow">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Trucking</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
						<li>10 users included</li>
						<li>2 GB of storage</li>
						<li>Email support</li>
						<li>Help center access</li>
						</ul>
						<a href="#!" class="btn btn-outline-primary waves-effect">Read more</a>
					</div>
					</div>
					<div class="card mb-4 box-shadow">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Furniture</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
						<li>20 users included</li>
						<li>10 GB of storage</li>
						<li>Priority email support</li>
						<li>Help center access</li>
						</ul>
						<a href="#!" class="btn btn-outline-primary waves-effect">Read more</a>
					</div>
					</div>
					<div class="card mb-4 box-shadow">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Other Services</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
						<li>30 users included</li>
						<li>15 GB of storage</li>
						<li>Phone and email support</li>
						<li>Help center access</li>
						</ul>
						<a href="#!" class="btn btn-outline-primary waves-effect">Read more</a>
					</div>
					</div>
				</div>
			</div>

			<header class="header" id="header1">
			<div class="center">
				<div class="caption">
				<h2 class="title display-3">Header title</h2>
				<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti iusto!</p>
				<button class="action btn btn-primary">click me</button>	
				<button class="action btn btn-Light">click me</button>	
				</div>	
			</div>
			<!-- scroll-down -->
				<i class="scroll fa fa-angle-double-down"></i>
			</header>

			<div class="container mt-4">
				<!-- Grid row -->
				<div class="row">
							
					<!-- Grid column -->
					<div class="col-md-6 mb-4">

						<!--Card-->
						<div class="card">
							
							<!--Card image-->
							<div class="view overlay hm-white-slight">
								<img src="https://mdbootstrap.com/img/Photos/Others/butterflies.jpg" class="img-fluid" alt="photo">
								<a href="#!">
									<div class="mask"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body">
								<!--Title-->
								<h4 class="card-title">Butterflies are awesome creatures!</h4>
								<!--Text-->
								<p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores est quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								<a href="#!" class="btn btn-outline-primary waves-effect">Read more</a>
							</div>

						</div>
						<!--/.Card-->
										
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-6 mb-4">

						<!--Card-->
						<div class="card">
							
							<!--Card image-->
							<div class="view overlay hm-white-slight">
								<img src="https://mdbootstrap.com/img/Photos/Others/portrait.jpg" class="img-fluid" alt="photo">
								<a href="#!">
									<div class="mask"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body">
								<!--Title-->
								<h4 class="card-title">The eye is the mirror of the soul</h4>
								<!--Text-->
								<p class="card-text">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
								<a href="#!" class="btn btn-outline-warning waves-effect">Read more</a>
							</div>

						</div>
						<!--/.Card-->
										
					</div>
					<!-- Grid column -->

				</div>
				<!-- Grid row -->
				</div>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
