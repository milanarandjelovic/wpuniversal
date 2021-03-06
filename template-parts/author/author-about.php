<?php
/**
 * Template for display author information.
 *
 * @package    Universal
 * @subpackage Templates
 * @since      1.0.0
 * @author     Milan Arandjelovic
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<section class="universal__about-author">

	<div class="universal__about-author-title">
		<h3>
			<?php
			ob_start(); // Turn on output buffering.
			the_author_posts_link();
			$author_post_link = ob_get_clean(); // Get current buffer contents and delete output buffer.
			$title            = sprintf(
				/* translators: 1: author name. */
				esc_attr__( 'About the Author: %s', 'universal' ),
				$author_post_link
			);

			echo $title; // WPCS: XSS ok.
			?>
		</h3>
	</div><!-- /.about-author-title -->

	<div class="universal__about-author-content">

		<div class="universal__about-author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'email' ), '72' ); ?>
		</div> <!-- /.about-author-avatar -->

		<div class="universal__about-author-description">
			<?php echo get_the_author_meta( 'description' ); // WPCS: XSS ok. ?>
		</div> <!-- /.about-author-content -->

	</div> <!-- /.about-author-content -->

</section> <!-- /.universal__about-author -->
