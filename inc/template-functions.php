<?php
/**
 * Top Idées Cadeaux template functions.
 *
 * @package tic
 */

/**
 * Display the theme credit
 *
 * @since  1.0.0
 * @return void
 */
function tic_credit() {
	?>
	<div class="site-info">
		<?php
		echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) . '.' ) );
		if ( apply_filters( 'storefront_credit_link', true ) ) {
			?>
			<br />
			<?php
			if ( apply_filters( 'storefront_privacy_policy_link', true ) && function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
		}
		?>
	</div><!-- .site-info -->
	<?php
}
