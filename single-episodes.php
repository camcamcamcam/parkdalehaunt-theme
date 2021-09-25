<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-episodes' );

?>
	<main id="primary" class="site-main">
		<?php get_template_part( 'template-parts/content/page_header' ); ?>

		<div class="back_to_epsiodes-outer">
			<a class="back_to_epsiodes" href="<?php echo esc_url( get_post_type_archive_link( get_post_type() ) ); ?>" rel="bookmark">< Back to Episodes</a>
		</div>

		<?php
		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/episode', get_post_type() );
			?>
			<div class="epsiode-content-outer">
				<div class="epsiode-content">
					<div class="epsiode-script">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
