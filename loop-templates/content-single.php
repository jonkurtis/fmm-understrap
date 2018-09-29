<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		

<?php
/* Do not show post meta
		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div> <!--.entry-meta -->
*/
?>
	

	<?php if ( has_post_thumbnail() ) {
	
	// Get the post thumbnail URL
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	} else {
		
		// Get the default featured image in theme options
		$feat_image = get_field('default_featured_image', 'option');
	} ?>

	<section class="jumbotron row" style="background-image: linear-gradient(rgba(20,20,20, .5), rgba(20,20,20, .5)), url(<?php echo $feat_image; ?>);">
	
	<?php the_title( '<h1 class="entry-title text-light hero-heading m-auto">', '</h1>' ); ?>

	</section>
	</header><!-- .entry-header -->
	<?php /* echo get_the_post_thumbnail( $post->ID, 'large' );  */ ?>
	<div class="entry-content wrapper container">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
