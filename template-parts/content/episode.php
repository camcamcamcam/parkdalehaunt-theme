<?php
/**
 * Template part for displaying a post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry', 'episode' ) ); ?>>
	<div class="episode-inner">
		<header class="episode-header">
			<h2 class="entry-title episode-title"><?php echo esc_html( $post->season_number_episode_number ); ?>: <?php the_title(); ?></h2>
			<div class="episode-meta">
				<div class="episode-links">
					<a class="episode-link apple-podcasts" target="_blank" rel="noopener noreferer" href="<?php echo esc_url( $post->episode_links_apple_podcasts ); ?>">
						<img width="30" height="30" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apple-btn-small.svg' ); ?>" class="apple-podcasts-logo" alt="Apple Podcasts">
					</a>
					<a class="episode-link spotify" target="_blank" rel="noopener noreferer" href="<?php echo esc_url( $post->episode_links_spotify ); ?>">
						<img width="30" height="30" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/spotify-btn-small.svg' ); ?>" class="spotify-podcasts-logo" alt="Spotify">
					</a>
					<a class="episode-link google-podcasts" target="_blank" rel="noopener noreferer" href="<?php echo esc_url( $post->episode_links_google_podcasts ); ?>">
						<img width="30" height="30" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/google-btn-small.svg' ); ?>" class="google-podcasts-logo" alt="Google Podcasts">
					</a>
					<a class="episode-link amazon-music" target="_blank" rel="noopener noreferer" href="<?php echo esc_url( $post->episode_links_amazon_music ); ?>">
						<img width="30" height="30" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/amazon-btn-small.svg' ); ?>" class="amazon-music-logo" alt="Amazon Music">
					</a>
				</div>
				<?php if ( ! is_single() ) : ?>
					<div class="episode-transcript-link">
						<a href=" <?php echo esc_url( get_permalink() ); ?>" rel="bookmark">Read the transcript</a>
					</div>
				<?php endif; ?>
			</div><!-- .episode-meta -->
		</header><!-- .episode-header -->
		<div class="entry-content episode-content">
			<div class="episode-summary">
				<?php echo wp_kses_post( $post->episode_summary ); ?>
			</div><!-- .episode-summary -->
			<footer class="episode-footer">
				<div class="episode-content-warning">
					<strong>CONTENT WARNINGS:</strong> <?php echo wp_kses_post( $post->content_warnings ); ?>
				</div><!-- .episode-content-warning -->
			</footer><!-- .episode-footer -->
		</div><!-- .episode-content -->
	</div><!-- .episode-inner -->
</article><!-- #post-<?php the_ID(); ?> -->
