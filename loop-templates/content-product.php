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
	} 
	$image = get_field('product_image');
	?>
	<div class="container"><?php custom_breadcrumbs(); ?></div>
	<div class="position-relative mt-5 container">
		<div class="row mb-3 mb-md-1">
			<div class="ml-auto col-md-7 col-sm-12">
				<?php 
				the_title( '<h1 class="entry-title text-dark">', '</h1>' ); 
				?>
			</div>
		</div>
			<div class="row">
			<div class="col-md-5 col-sm-12 text-center mb-4" >
				<img 
				src="<?php echo $image['url']; ?>" 
				alt="<?php echo $image['alt']; ?>" 
				class="border border-white" 
				/>
			</div>
			<div class="col-md-7 col-sm-12">
			This is the product description.
			</div>
		</div>
	</div>
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
