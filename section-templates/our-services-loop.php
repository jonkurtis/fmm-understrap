<?php
 
$args = array(
    // Arguments for your query.
    'post_type' => 'services',
    'tax_query' => array(
        array (
            'taxonomy' => 'geotarget',
            'field' => 'name',
            'terms' => 'Main',
        )
    ),
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
        ?> <div class="col-lg-<?php echo (12 / get_all_them_cpt_posts_services( 'services' ));?> col-md-6 col-sm-12 text-center">
                <div class="services-wrapper">
                    <a href="<?php the_permalink(); ?>" class="services-link" >
                        <div class="service-icon"> <img src="<?php $image = get_field('service_icon'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> </div>
                        <?php the_title(); ?> 
                    </a>
                        <p> <?php echo get_field('service_description'); ?> </p>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div> <?php
    }
 
}

// Restore original post data.
wp_reset_postdata();
 
?>