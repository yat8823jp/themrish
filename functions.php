<?php
/**
 * theme init
 */
if ( ! isset( $content_width ) ) :
	$content_width = 960;
endif;

$theme         = wp_get_theme();
$theme_version = $theme -> get( 'Version' );
define( 'COMMON_PFIX', get_template_directory_uri() );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

/**
 * Title output
 */
function themrish_title( $title ) {
	if ( is_front_page() || is_home() ) { //トップページなら
		$title = get_bloginfo( 'name', 'display' );
	} elseif ( is_singular() ) { //シングルページなら
		$title = single_post_title( '', false );
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'themrish_title' );

function themrish_add_admin_init() {
	wp_enqueue_style( 'css/editor-style', get_template_directory_uri() . '/css/editor-style.css', false, false );
}
add_action( 'admin_init', 'themrish_add_admin_init' );

function readScript( $theme_version ) {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'css/style', COMMON_PFIX . '/css/style.css', array(), $theme_version );
	wp_enqueue_script( 'js/bundle.js', COMMON_PFIX . '/js/bundle.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'readScript' );
