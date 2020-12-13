<?php

require_once 'inc/bulma-navwalker.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', rand() );
}

if (!function_exists('setup_theme')) {
	function setup_theme () {

		load_theme_textdomain( 'kalina', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 60,
				'width'       => 260,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		register_nav_menus(
			array(
				'top-header-menu' => esc_html__( 'Primary', 'kalina' ),
				'footer-bottom' => esc_html__( 'Footer', 'kalina' ),
			)
		);
	}
}

add_action( 'after_setup_theme', 'setup_theme' );


function kalina_scripts() {
	wp_enqueue_style('main-style', get_template_directory_uri(). '/css/main.css', [], _S_VERSION, 'all' );
	wp_enqueue_script('main-script',get_template_directory_uri(). '/lib/main.js', ['jquery'], _S_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'kalina_scripts' );

add_action( 'kalina_show_logo_action', 'kalina_show_logo', 10 );
if ( ! function_exists( 'kalina_show_logo' ) ) {
	function kalina_show_logo() {
		$attachment_id = get_theme_mod( 'custom_logo' );
		$logo          = wp_get_attachment_image_src( $attachment_id, 'full' );
		$alt           = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
		print_r( '<img src="' . $logo[0] . '" alt="' . $alt . '"/>' );
	}
}

add_action( 'kalina_show_color_logo_action', 'kalina_show_color_logo', 10);

if (!function_exists('kalina_show_color_logo')) {
	function kalina_show_color_logo() {
		$color_logo_url = get_theme_mod( 'color_logo' );
		print_r( '<img src="' . $color_logo_url . '" alt=""/>' );
	}
}

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function kalina_custom_footer_logo($wp_customize) {

	$wp_customize->add_setting('color_logo', array(
		'transport'         => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'color_logo', [
			'label'             => __('Color logo', 'kalina'),
			'section'           => 'title_tagline',
			'settings'          => 'color_logo',
		])
	);
}

add_action('customize_register', 'kalina_custom_footer_logo');