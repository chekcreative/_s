<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="https://automattic.com/">Automattic</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php // add javascript ?>
<script src="<?php echo get_theme_file_uri('node_modules/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('node_modules/popper.js/dist/popper.min.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

<?php wp_footer(); ?>

</body>
</html>
