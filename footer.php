<?php
/**
 * The footer template file
 *
 * @package Fugu
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <p>
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> 
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                </a>
            </p>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_id'        => 'footer-menu',
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
