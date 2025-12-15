</main><!-- #site-content -->

<footer id="site-footer" role="contentinfo">
<?php
if ( function_exists( 'elementor_theme_do_location' ) ) {
    if ( elementor_theme_do_location( 'footer' ) ) {
        // Elementor rendered footer here.
    } else {
        ?>
        <div class="footer-widgets">
            <?php if ( is_active_sidebar( 'footer-widgets' ) ) : dynamic_sidebar( 'footer-widgets' ); endif; ?>
        </div>
        <div class="site-info">&copy; <?php echo date_i18n( 'Y' ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
        <?php
    }
} else {
    ?>
    <div class="footer-widgets">
        <?php if ( is_active_sidebar( 'footer-widgets' ) ) : dynamic_sidebar( 'footer-widgets' ); endif; ?>
    </div>
    <div class="site-info">&copy; <?php echo date_i18n( 'Y' ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
    <?php
}
?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
