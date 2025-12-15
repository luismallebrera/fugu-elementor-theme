<?php
/**
 * The template for displaying 404 pages (not found)
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

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fugu' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Try searching or go back to the homepage.', 'fugu' ); ?></p>

                <?php get_search_form(); ?>

                <p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php esc_html_e( 'Return to homepage', 'fugu' ); ?>
                    </a>
                </p>
            </div>
        </section>

    </main>
</div>

<?php
get_footer();
