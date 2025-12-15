		<?php do_action( 'fugu_elementor_after_main' ); ?>
		</main><!-- #main -->

	</div><!-- #content -->

	<footer id="site-footer" class="site-footer" role="contentinfo">
		<?php
		if ( function_exists( 'elementor_theme_do_location' ) ) {
			if ( elementor_theme_do_location( 'footer' ) ) {
				// Elementor rendered footer here.
			} else {
				?>
				<div class="footer-inner limit-wrapper">
					<div class="footer-widgets">
						<?php if ( is_active_sidebar( 'footer-widgets' ) ) : dynamic_sidebar( 'footer-widgets' ); endif; ?>
					</div>
					<div class="site-info">&copy; <?php echo date_i18n( 'Y' ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
				</div>
				<?php
			}
		} else {
			?>
			<div class="footer-inner limit-wrapper">
				<div class="footer-widgets">
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : dynamic_sidebar( 'footer-widgets' ); endif; ?>
				</div>
				<div class="site-info">&copy; <?php echo date_i18n( 'Y' ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
			</div>
			<?php
		}
		?>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
