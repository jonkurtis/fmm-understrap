<?php
 
$args = array(
    // Arguments for your query.
    'post_type' => 'team'
);
 
// Custom query.
$query = new WP_Query( $args );

function get_all_them_cpt_posts($post_type){
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
        ?> <div class="col-lg-<?php echo (12 / get_all_them_cpt_posts( 'team' ));?> col-md-6 col-sm-12 text-center" >
                <div class="team-photo" > <img src="<?php echo get_field( 'team_photo' ); ?>" alt="">  </div>
                <h4> <?php the_title(); ?> </h4>
                <p> <?php echo get_field('team_position'); ?> </p>
            </div> <?php
    }
 
}

// Restore original post data.
wp_reset_postdata();
 
?>