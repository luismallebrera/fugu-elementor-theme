<?php
get_header();

if ( function_exists( 'elementor_theme_do_location' ) ) {
    if ( is_singular() && elementor_theme_do_location( 'single' ) ) {
        get_footer();
        return;
    }
    if ( ( is_archive() || is_home() || is_search() ) && elementor_theme_do_location( 'archive' ) ) {
        get_footer();
        return;
    }
}

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content' );
    endwhile;

    the_posts_pagination();
else :
    echo '<p>' . esc_html__( 'No posts found.', 'fugu-elementor' ) . '</p>';
endif;

get_footer();
