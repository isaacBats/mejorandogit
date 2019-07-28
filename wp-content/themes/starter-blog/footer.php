<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterBlog
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="site-info">
						<?php echo wp_kses_post(get_theme_mod( 'footer_text', sprintf('<a href="%1$s">%2$s</a>', esc_url(__('//wordpress.org/', 'starter-blog')), __('Proudly powered by WordPress', 'starter-blog')) )); ?>
						<?php if(get_theme_mod( 'footer_love', 1)): ?>
							<span class="sep"> | </span>
							<?php printf( __( 'StarterBlog theme by %1$s', 'starter-blog' ), '<a href="'.esc_url("//murshidalam.com/").'" rel="follow" target="_blank">Fahim Murshed</a>' ); ?>
						<?php endif; ?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
