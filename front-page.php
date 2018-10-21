<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * This is only a test.
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() || is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>



<div class="wrapper" id="index-wrapper">
	<div id="hero-slider" class="carousel slide" data-ride="carousel" data-interval="5000">
		<div class="position-absolute d-flex h-100 align-items-center w-100" style="z-index: 4;">
			<div class="container py-5 text-center hero-content text-white">
				<h2 class="display-4 hero-heading">Eco Construction Group</h2>
				<p class="hero-subheading"> Central Florida's premiere custom builder of energy efficient and eco-friendly construction.</p>
				<br>
				<div class="hero-buttons">
					<a class="btn btn-primary btn-lg" href="/gallery">View Gallery</a>
					<a class="btn btn-success btn-lg" href="#" target="_blank" role="button">Get A Free Quote</a>
				</div>
			</div>
		</div>
		<ol class="carousel-indicators" style="z-index: 5;">
			<li data-target="#hero-slider" data-slide-to="0" class="active"></li>
			<li data-target="#hero-slider" data-slide-to="1"></li>
			<li data-target="#hero-slider" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<div class="hero-overlay"></div>
			<img class="d-block carousel-img" src="/wp-content/uploads/2018/09/hero-1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
			<div class="hero-overlay"></div>
			<img class="d-block carousel-img" src="/wp-content/uploads/2018/09/hero-1.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			<div class="hero-overlay"></div>
			<img class="d-block carousel-img" src="/wp-content/uploads/2018/09/hero-1.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#hero-slider" role="button" data-slide="prev" style="z-index:6">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#hero-slider" role="button" data-slide="next" style="z-index:6">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	

	<section id="main-callout" class="bg-success">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 text-light"><h5 class="text-bottom">Lake County Custom Home Builders Since 2008.</h5></div>
				<div class="col-lg-3"><a id="contact-cta" class="btn btn-outline-light" href="#contact-section">Contact Us</a></div>
			</div>
		</div>
	</section>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'loop-templates/content', get_post_format() );
						?>

						<section class="main-content-section">
						<div aria-hidden="true" class="big-text big-text-left text-light">Design Build</div>
							<div class="container">
							<div class="row"  >
								<h2 class="section-heading text-center">Design-Build</h2>
							</div>
								<div class="row"  >
									<h4 class="section-sub-heading text-center">Who We Are</h4>
								</div> 
							<hr class="section-heading-separator">
								<div class="row">
									<div class="col-lg-2 main-thumb"> <?php the_post_thumbnail(); ?></div>
									<div class="col-lg-10 m-auto" > <?php echo get_the_content(); ?> </div>
								</div>
							</div>
						
					</section>

					<?php endwhile; ?>

				<?php else : ?>
				
					 <?php the_content(); ?> </div>

				<?php endif; ?>

				
			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Sections -->
		<div id="main-sections" class="container-fluid">
			<div class="row">
			<section id="our-services-section" class="col-md-12 text-light">
				<div aria-hidden="true" class="big-text big-text-right">Our Services</div>
				<div class="container"  >
					<div class="row"  ><h2 class="section-heading text-center">Our Services</h2></div>
					<div class="row"  ><h4 class="section-sub-heading text-center">What We Do</h4></div> 
					<hr class="section-heading-separator">
					<div class="row" ><?php get_template_part( 'section-templates/our-services-loop' ); ?></div>
				</div>
			</section>
			<section id="products-section" class="col-md-12">
				<div class="container"  >
					<div class="row"  ><h2 class="section-heading text-center">Our Products</h2></div>
					<div class="row"  ><h4 class="section-sub-heading text-center">What We Offer</h4></div> 
					<hr class="section-heading-separator"> 
					<div class="row" ><?php get_template_part( 'section-templates/products-loop' ); ?></div>
				</div>
			</section>
			<section id="team-section" class="col-md-12">
				<div aria-hidden="true" class="big-text big-text-left">Meet Our Team</div>
				<div class="container" >
					<div class="row" ><h2 class="section-heading text-center">Meet Our Team</h2></div>
					<div class="row"  ><h4 class="section-sub-heading text-center">The People That Make It All Happen</h4></div> 
					<hr class="section-heading-separator">
					<div class="row" id="team-row" ><?php get_template_part( 'section-templates/teamprofiles-loop' ); ?></div>
				</div>
			</section>
<?php /* Commenting out section until they have testimonials
			<section id="testimonials-section" class="col-md-12">
				<div class="container"  >
					<div class="row" ><h2 class="section-heading text-center">Testimonials</h2></div>
					<div class="row"  ><h4 class="section-sub-heading text-center">What Our Clients Say About Us</h4></div> 
					<hr class="section-heading-separator">
					<div class="row"><?php get_template_part( 'section-templates/testimonials-loop' ); ?></div>
				</div>
			</section>
			<section id="features-callout-section" class="col-md-12">
				<?php get_template_part( 'section-templates/features-callout' ); ?>
			</section>
*/
?>
			<section id="service-map-section" class="col-md-12">
			<div class="map-wrapper">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167638.13377337917!2d-81.65429098816242!3d28.79693917964429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7cdb1f93ee6ebd2c!2sEco+Construction+Group+LLC!5e0!3m2!1sen!2sus!4v1528071661353" width="100%" height="566" frameborder="0" style="border:0;" allowfullscreen></iframe>
			</div>
			</section>
			<section id="contact-section" class="col-md-12">
				<div class="container"  >
					<div class="row" ><h2 class="section-heading text-center">Contact Us</h2></div>
					<div class="row"  ><h4 class="section-sub-heading text-center">Let's Get Your Project Started</h4></div> 
					<hr class="section-heading-separator">
					<div class="row"><?php echo do_shortcode("[ninja_form id=2]"); ?></div>
				</div>
			</section>
			</div>
		</div>
		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
		


	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
