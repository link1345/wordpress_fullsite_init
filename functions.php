<?php
/**
 * Functions and definitions(機能と定義)
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package my-test-blcoks
 * @since 0.1
 */

if ( ! function_exists( 'my_themes_blocks_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
     * (テーマのデフォルトを設定し、さまざまな WordPress 機能のサポートを登録します。)
	 */
	function my_themes_blocks_setup() {
        
        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		add_theme_support( 'wp-block-styles' );

	    add_theme_support( 'editor-styles' );

		add_editor_style(
			array(
				'./assets/css/blocks.css',
				'./assets/css/style-shared.css',
			)
		);

		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'my_themes_blocks_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 0.1
 *
 * @return void
 */
function my_themes_blocks_enqueue_styles() {
	wp_enqueue_style( 'my_themes-blocks-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'my_themes-blocks-style-shared', get_template_directory_uri() . '/assets/css/style-shared.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'my_themes-blocks-blocks', get_template_directory_uri() . '/assets/css/blocks.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'my_themes_blocks_enqueue_styles' );

/**
 * Enqueue block editor script.
 *
 * @since 0.1
 *
 * @return void
 */
function my_themes_blocks_block_editor_script() {

	wp_enqueue_script( 'my_themes-blocks-unregister-block-style', get_theme_file_uri( '/assets/js/unregister-block-style.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'enqueue_block_editor_assets', 'my_themes_blocks_block_editor_script' );

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

// Block Styles.
require get_template_directory() . '/block-styles.php';

