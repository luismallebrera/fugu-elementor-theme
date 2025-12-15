<?php
/**
 * The main template file
 *
 * @package Fugu
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                        endif;
                        ?>
                    </header>

                    <div class="entry-content">
                        <?php
                        if ( is_singular() ) :
                            the_content();
                        else :
                            the_excerpt();
                        endif;
                        ?>
                    </div>
                </article>
                <?php
            endwhile;

            the_posts_navigation();
        else :
            ?>
            <p><?php esc_html_e( 'No content found', 'fugu' ); ?></p>
            <?php
        endif;
        ?>

    </main>
</div>

<?php
get_footer();
