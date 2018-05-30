<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Weext_Corp
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Contact Us</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                </div>
            </div>

            <div class="container">
                <section id="contact">
                        <div class="container">
                            <h3 class="text-center text-uppercase">contact us</h3>
                            <p class="text-center w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales. Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam.</p>
                            <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">call us</h4>
                                    <p>+8801683615582,+8801750603409</p>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">office loaction</h4>
                                    <address>Suite 02, Level 12, Sahera Tropical Center </address>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">office loaction</h4>
                                    <address>Suite 02, Level 12, Sahera Tropical Center </address>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">email</h4>
                                    <p>http://al.a.noman1416@gmail.com</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>

                    <div class="row">
                        <div class="col-sm-4">
                            <h3>Drop me a line!</h3>
                            <hr>
                            <address>
                            <strong>Email:</strong> <a href="mailto:#"> name@domain.com</a><br><br>
                            <strong>Phone:</strong> (555)123-4567
                            </address>
                        </div>
                                
                            <div class="col-sm-8 contact-form">
                                <form id="contact" method="post" class="form" role="form">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                                        </div>
                                        <div class="col-xs-6 col-md-6 form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                    <br />
                                    <div class="row">
                                    <div class="col-xs-12 col-md-12 form-group">
                                    <button class="btn btn-primary pull-right" type="submit">Submit</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>

		<?php
        /*
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

        endwhile; // End of the loop.
        */
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
