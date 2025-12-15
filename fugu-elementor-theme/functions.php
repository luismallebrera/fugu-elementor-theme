<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue styles & scripts
 */
function fugu_elementor_enqueue() {
    wp_enqueue_style( 'fugu-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'fugu_elementor_enqueue' );

/**
 * Theme setup
 */
function fugu_elementor_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'fugu-elementor' ),
    ) );
}
add_action( 'after_setup_theme', 'fugu_elementor_setup' );

/**
 * Register widget areas
 */
function fugu_elementor_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widgets', 'fugu-elementor' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Widgets in the footer area', 'fugu-elementor' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'fugu_elementor_widgets_init' );

/**
 * Register Elementor theme locations for Elementor Pro Theme Builder support
 */
function fugu_elementor_register_elementor_locations( $manager ) {
    if ( ! class_exists( '\\Elementor\\Theme\\Manager' ) ) {
        return;
    }
    $manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'fugu_elementor_register_elementor_locations' );

/**
 * Safe fallback for content width
 */
if ( ! isset( $content_width ) ) {
    $content_width = 1200;
}
