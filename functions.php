<?php
/**
 * Fugu Theme Functions
 *
 * @package Fugu
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Theme setup
 */
function fugu_theme_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'fugu' ),
        'footer'  => __( 'Footer Menu', 'fugu' ),
    ) );
}
add_action( 'after_setup_theme', 'fugu_theme_setup' );

/**
 * Enqueue theme styles and scripts
 */
function fugu_enqueue_scripts() {
    wp_enqueue_style( 'fugu-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'fugu_enqueue_scripts' );

/**
 * Register Elementor locations
 * Provides full Elementor Theme Builder support
 */
function fugu_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'fugu_register_elementor_locations' );

/**
 * Theme support for Elementor
 */
function fugu_elementor_support() {
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'fugu_elementor_support' );
