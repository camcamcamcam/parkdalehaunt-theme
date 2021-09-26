<?php
/**
 * Template part for displaying the page content when a 404 error has occurred
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section class="error">
	<?php get_template_part( 'template-parts/content/page_header' ); ?>

	<div class="page-content">
		<div class="error-message-outer">
			<div class="error-message-fun">
				<p>
					<em><?php esc_html_e( '[SFX: error beep. Static building up]', 'wp-rig' ); ?></em>
				</p>
				<p>
					<?php esc_html_e( 'why are you here', 'wp-rig' ); ?>
				</p>
				<p>
					<?php esc_html_e( 'this is not for you', 'wp-rig' ); ?>
				</p>
				<p>
					<?php esc_html_e( 'remain and burn', 'wp-rig' ); ?>
				</p>
				<p>
					<?php esc_html_e( 'or turn back', 'wp-rig' ); ?>
				</p>
			</div>
			<div class="error-message">
				<h2>ERROR 404</h2>
			</div>
		</div>
		<div class="error-back">
			<cite hidden> Naw. You best bring them back where from you got them.</cite>
			<?php if ( wp_get_referer() ) : ?>
				<a href="<?php echo esc_url( wp_get_referer() ); ?>" >< Back you go</a>
			<?php else : ?>
				<a href="javascript:window.history.back();" >< Back you go</a>
			<?php endif; ?>
			<cite hidden> to waits for a woman of less discriminating tastes.</cite>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >< Return home</a>
		</div>

	</div><!-- .page-content -->
</section><!-- .error -->
