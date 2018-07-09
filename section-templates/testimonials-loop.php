<?php
 
$args = array(
    // Arguments for your query.
    'post_type' => 'testimonials'
);
 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
        $query->the_post();
 
        // Contents of the queried post results go here.
        ?>  <div class="col-lg-<?php echo (12 / get_all_them_cpt_posts_services( 'testimonials' ));?> col-md-6 col-sm-12 text-center">
                <div class="testimonial-wrapper">
                    <div class="testimonial-content"> <?php the_content(); ?> </div> 
                    <div class="quote-separator"><i class="fa fa-quote-left fa-3x"></i></div>
                    <h4 class="testimonial-heading">  <?php the_title(); ?> </h4>
                </div>
               
                
            </div> 
        <?php

    }
 
}

// Restore original post data.
wp_reset_postdata();
 
?>