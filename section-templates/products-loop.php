<?php
 
$args = array(
    // Arguments for your query.
    'post_type' => 'products',
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

function get_all_them_cpt_posts_products($query){
    //$post_type = 'products';
    $count_posts = $query->found_posts;

    return $count_posts;
}

// Check that we have query results.
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
        $query->the_post();
 
        // Contents of the queried post results go here.
        ?> <div class="col-lg-<?php echo (12 / get_all_them_cpt_posts_products($query));?> col-md-6 col-sm-12 text-center mb-4">
                <div class="card shadow d-flex h-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h4> <?php the_title(); ?></h4>
                        </div>
                    </div>
                    <div class="card-img-top"> <img src="<?php $image = get_field('product_image'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/> </div>
                    
                    <div class="card-body ">
                        <p class="card-text"> <?php echo get_field('product_summary'); ?> </p>                          
                    </div>
                    <div class="card-footer">
                            <a class="btn btn-outline-primary btn-lg" href="<?php the_permalink(); ?>">Learn More</a>
                    </div>
                </div>
            </div> <?php
    }
 
}

// Restore original post data.
wp_reset_postdata();
 
?>