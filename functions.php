<?php
/**
 * TigeAD functions and definitions
 *
 * @package TigeAD
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function tigead_setup() {
	load_theme_textdomain( 'tigead', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'tigead' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'tigead_setup' );

function tigead_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tigead_content_width', 1024 );
}
add_action( 'after_setup_theme', 'tigead_content_width', 0 );


function tigead_scripts() {
	wp_enqueue_style( 'tigead-normalize', get_template_directory_uri(). '/css/normalize.css', array(), _S_VERSION );
	wp_enqueue_style( 'tigead-main', get_template_directory_uri(). '/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'tigead-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'tigead-navigation', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'tigead_scripts' );

add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('post'));
set_post_thumbnail_size(500, 400, true);

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Theme setting',
		'menu_title' => 'Theme setting',
		'menu_slug'  => 'theme_settings',
	));
}
