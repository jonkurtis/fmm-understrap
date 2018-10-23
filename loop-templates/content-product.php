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
	<div class="container p-0"><?php custom_breadcrumbs(); ?></div>
	<div class="position-relative mt-3 container">
		<div class="row mb-1">
			<div>
				<?php 
				the_title( '<h1 class="entry-title text-dark">', '</h1>' ); 
				?>
			</div>
		</div>
	</div>
	</header><!-- .entry-header -->
	<?php /* echo get_the_post_thumbnail( $post->ID, 'large' );  */ ?>
	<div class="entry-content wrapper container pt-2">
	<div>
				<img 
				src="<?php echo $image['url']; ?>" 
				alt="<?php echo $image['alt']; ?>"
				class="float-left mr-3"
				/>
			</div>
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
