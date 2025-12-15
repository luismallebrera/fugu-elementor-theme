<?php
/**
 * The template for displaying singular posts
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
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    
                    <div class="entry-meta">
                        <span class="posted-on">
                            <?php echo esc_html( get_the_date() ); ?>
                        </span>
                        <span class="byline">
                            <?php
                            /* translators: %s: post author */
                            printf( esc_html__( 'by %s', 'fugu' ), '<span class="author">' . esc_html( get_the_author() ) . '</span>' );
                            ?>
                        </span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fugu' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

                <?php if ( get_the_tags() ) : ?>
                    <footer class="entry-footer">
                        <?php the_tags( '<span class="tags-links">' . esc_html__( 'Tags: ', 'fugu' ), ', ', '</span>' ); ?>
                    </footer>
                <?php endif; ?>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile;
        ?>

    </main>
</div>

<?php
get_footer();
