<?php
/**
 * Template part for displaying a post's summary
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="entry-summary episode-summary">
	<?php echo wp_kses_post( $post->episode_summary ); ?>
</div><!-- .entry-summary -->
