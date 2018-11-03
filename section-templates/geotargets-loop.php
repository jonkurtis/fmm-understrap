<?php
/*
 * Loop through Categories and Display Posts within
 */
$post_type = array('services', 'products', 'post');
 
// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'post_type' => 'services' ) );

foreach( $taxonomies as $taxonomy ) :

    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms(array(
        'taxonomy'=> $taxonomy,
        'hide_empty' => false,
        'orderby' => 'name',
        'order'   => 'DESC',
        ) 
    );
    $terms = array_filter( $terms, function( $term ) {
        return in_array( $term->name, array('Main',) ) ? false : true;
    } );
    
    foreach( $terms as $term ) : ?>
 
        <div class="p-3 col-md-3 col-sm-12">
        <div class="row col-md-12">
            <h3 ><?php echo $term->name; ?></h3>
        </div>
 
        <?php
        $args = array(
                'post_type' => $post_type,
                'posts_per_page' => -1,  //show all posts
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'name',
                        'terms' => $term->name,
                    ),
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'name',
                        'terms'    => $term->name,
                    ),
                )
 
            );
        $posts = new WP_Query($args);
 
        if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>
 
            <div class="row"> 
                    <div class="col-md-12">
                    <a href="<?php echo get_permalink(); ?>" title="Read more about <?php echo get_the_title(); ?>"><?php  echo get_the_title(); ?></a>
                    </div> 
            </div>
 
        <?php endwhile; endif; ?>
        </div>
 
    <?php endforeach;
 
endforeach; ?>
<?php
// Restore original post data.
wp_reset_postdata();
 
?>