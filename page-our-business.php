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
					<h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
					<p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
					<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
				</div>
			</div>

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

        

                <h3>Trading and Distribution</h3>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src='http://via.placeholder.com/350x250'/>
                        </div>
                        <div class="col">
                            <img src='http://via.placeholder.com/350x250'/>
                        </div>
                        <div class="col">
                            <img src='http://via.placeholder.com/350x250'/>
                        </div>
                        <div class="col">
                            <img src='http://via.placeholder.com/350x250'/>
                        </div>
                        <div class="col">
                            <img src='http://via.placeholder.com/350x250'/>
                        </div>
                        <div class="col">
                            <img src='http://via.placeholder.com/350x250'/>
                        </div>
                    </div>
                </div>

<h3>Logistics</h3>

            <div class="blog-post">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				
			</div>

      </div>
      <!-- Grid row -->
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
