<?php
get_header();
?>


<main>
<?php
if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) {
    get_footer();
    return;
}

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h1 class="entry-title page">', '</h1>' );
        the_content();
    endwhile;
endif;
?>
	<div id="footer">
  <?php
get_footer();
?>
</div>
</main>
