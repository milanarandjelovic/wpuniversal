<?php
/**
 * Template for header top bar.
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

$universal_data = get_option( 'universal_data' );
$show_top_bar   = $universal_data['universal__opt-header-top-bar'];
?>

<?php if ( '1' === $show_top_bar ) : ?>
	<div id="universal__header-top-bar">
		<div class="container">

			<?php if ( '1' === $universal_data['universal__opt-header-top-bar-phone'] ) : ?>
				<div class="universal__header-top-bar-item header-top-bar-item__phone">
					<?php echo esc_html( $universal_data['universal__opt-header-top-bar-phone-number'] ); ?>
				</div> <!-- /.header-top-bar_item__phone -->
			<?php endif; ?>

			<?php if ( '1' === $universal_data['universal__opt-header-top-bar-email'] ) : ?>
				<div class="universal__header-top-bar-item header-top-bar-item__email">
					<a href="mailto:<?php echo esc_attr( $universal_data['universal__opt-header-top-bar-email-address'] ); ?>">
						<?php echo esc_html( $universal_data['universal__opt-header-top-bar-email-address'] ); ?>
					</a>
				</div> <!-- /.header-top-bar_item__email -->
			<?php endif; ?>

			<?php if ( '1' === $universal_data['universal__opt-header-top-bar-custom-text-switch'] ) : ?>
				<div class="universal__header-top-bar-item header-top-bar_item-custom-text">
					<?php echo esc_html( $universal_data['universal__opt-header-top-bar-custom-text'] ); ?>
				</div> <!-- /.header-top-bar_item__custom-text -->
			<?php endif; ?>

		</div> <!-- /.container -->
	</div> <!-- /#universal__header-top-bar -->
<?php endif; // header-top-bar. ?>
