<?php
get_header();

if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) {
    get_footer();
    return;
}

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content' );
    endwhile;
endif;

get_footer();
