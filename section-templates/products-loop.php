<?php
 
$args = array(
    // Arguments for your query.
    'post_type' => 'products',
);
 
// Custom query.
$query = new WP_Query( $args );

function get_all_them_cpt_posts_products($post_type){
    //$post_type = 'products';
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
        ?> <div class="col-lg-<?php echo (12 / get_all_them_cpt_posts_products( 'products' ));?> col-md-6 col-sm-12 text-center">
                <div class="card shadow">
                    <div class="card-img-top"> <?php the_post_thumbnail(); ?> </div>
                    <div class="card-body">
                        <div class="card-title"><h4> <?php the_title(); ?></h4></div>
                        <p class="card-text"> <?php echo get_field('product_summary'); ?> </p>
                        <a class="btn btn-outline-primary btn-lg" href="<?php the_permalink(); ?>">Learn More</a>     
                    </div>
                </div>
            </div> <?php
    }
 
}

// Restore original post data.
wp_reset_postdata();
 
?>