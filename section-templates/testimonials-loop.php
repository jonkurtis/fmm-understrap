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
        ?> <div class="row">
                <h4 class="testimonial-heading"> <?php the_title(); ?> </h4>
                <div class="testimonial-content"> <?php the_content(); ?> </div> 
            </div> 
        <?php

    }
 
}

// Restore original post data.
wp_reset_postdata();
 
?>