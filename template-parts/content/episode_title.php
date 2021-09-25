<?php
/**
 * Template part for displaying a post's title
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<?php
if ( is_singular( get_post_type() ) ) {
	the_title( '<h1 class="entry-title episode-title entry-title-singular episode-title-singular">', '</h1>' );
} else {
	the_title( '<h2 class="entry-title episode-title">', '</h2>' );
}
