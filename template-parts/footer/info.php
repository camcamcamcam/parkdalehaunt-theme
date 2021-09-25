<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<img width="120" height="89" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/parkdale-haunt-wordmark-bw.png' ); ?>">
	<?php
	/* translators: Theme name. */
	printf( esc_html__( '© 2020–%s Alex Nursall and Emily Kellogg.', 'wp-rig' ), esc_html( gmdate( 'Y' ) ) );

	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}
	?>
</div><!-- .site-info -->
