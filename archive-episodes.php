<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;

global $wp_query;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-episodes' );

?>
	<main id="primary" class="site-main">
		<?php
		if ( have_posts() ) {
			wp_reset_postdata();

			get_template_part( 'template-parts/content/page_header' );

			$seasons = get_terms( 'seasons' );

			foreach ( $seasons as $season ) {
				?>
				<div class="season-outer">
					<div class="season_title-outer">
						<h2 class="season_title"><?php echo esc_html( $season->name ); ?></h2>
					</div>
					<?php

					$query    = array(
						'post_type'     => 'episodes',
						'post_per_page' => -1,
						'order'         => 'ASC',
						'orderby'       => 'meta_value_num',
						'meta_key'      => 'season_number_episode_number', // phpcs:ignore
						'tax_query'     => array( // phpcs:ignore
							'relation'  => 'AND',
							array(
								'taxonomy' => 'seasons',
								'terms'    => $season->term_id,
							),
						),
					);
					$episodes = new WP_Query( $query );

					while ( $episodes->have_posts() ) {
						$episodes->the_post();
						get_template_part( 'template-parts/content/episode', get_post_type() );
					}

					wp_reset_postdata();
					?>
				</div>
				<?php
			}
		} else {
			get_template_part( 'template-parts/content/error' );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
