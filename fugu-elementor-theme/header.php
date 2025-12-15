<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" role="banner">
<?php
if ( function_exists( 'elementor_theme_do_location' ) ) {
    if ( elementor_theme_do_location( 'header' ) ) {
        // Elementor header rendered inside the wrapper.
    } else {
        ?>
        <div class="site-branding">
            <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></div>
        </div>

        <nav id="site-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-menu' ) ); ?>
        </nav>
        <?php
    }
} else {
    ?>
    <div class="site-branding">
        <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
        <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></div>
    </div>

    <nav id="site-navigation" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-menu' ) ); ?>
    </nav>
    <?php
}
?>
</header>

<main id="site-content" role="main">
