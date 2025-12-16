<?php
get_header();

if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'archive' ) ) {
    get_footer();
    return;
}

if ( have_posts() ) :
    the_archive_title( '<h1 class="archive-title">', '</h1>' );
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content' );
    endwhile;

    the_posts_pagination();
else :
    echo '<p>' . esc_html__( 'No posts found.', 'fugu-elementor' ) . '</p>';
endif;

get_footer();
