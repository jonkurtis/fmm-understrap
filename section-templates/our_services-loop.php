<?php
 
$args = array(
    // Arguments for your query.
    'post_type' => 'our_services'
);
 
// Custom query.
$query = new WP_Query( $args );

function get_all_them_cpt_posts_services($post_type){
    //$post_type = 'our_services';
    $count_posts = wp_count_posts( $post_type );

    $published_posts = $count_posts->publish;
    return $published_posts;
}

// Check that we have query results.
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
        $query->the_post();
 
        // Contents of the queried post results go here.
        ?> <div class="col-lg-<?php echo (12 / get_all_them_cpt_posts_services( 'our_services' ));?> col-md-6 col-sm-12 text-center">
                <div class="services-wrapper">
                    <a href="<?php the_permalink(); ?>" class="services-link" >
                        <div class="service-icon"> <?php the_post_thumbnail(); ?> </div>
                        <?php the_title(); ?> 
                        <p> <?php the_content(); ?> </p>
                    </a>
                </div>
            </div> <?php
    }
 
}

// Restore original post data.
wp_reset_postdata();
 
?>