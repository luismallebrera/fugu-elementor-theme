<?php
get_header();

if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( '404' ) ) {
    get_footer();
    return;
}
?>

<main class="site-main">
    <h1><?php esc_html_e( 'Page not found', 'fugu-elementor' ); ?></h1>
    <p><?php esc_html_e( 'Sorry, but the page you were trying to view does not exist.', 'fugu-elementor' ); ?></p>
</main>

<?php get_footer(); ?>
