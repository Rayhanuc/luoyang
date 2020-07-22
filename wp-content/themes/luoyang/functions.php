<?php

use HasinHayder\WPHelper\Modules\NavMenu;
use HasinHayder\WPHelper\Modules\Metabox;
use HasinHayder\WPHelper\Modules\SinglePost;

require_once "inc/wphelper/vendor/autoload.php";
require_once get_theme_file_path( 'inc/customizer/kirki_installer.php' );
// require_once get_theme_file_path( 'inc/customizer/config.php' );

function lwhhb_theme_init() {
	load_theme_textdomain( 'lwhhb', get_template_directory().'/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-formats', array('gallery','video','audio') );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 133,
			'width'       => 443,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary', 'lwhhb' ),
			'top' => __( 'Top Menu', 'lwhhb' ),
			'footer-1' => __( 'Footer Menu 1', 'lwhhb' ),
			'footer-2' => __( 'Footer Menu 2', 'lwhhb' ),
			'footer-3' => __( 'Footer Menu 3', 'lwhhb' ),
		)
	);

	add_image_size('lwhh-featured-post',1220,664,true);
	add_image_size('lwhh-post-thumb',768,504,true);
}

add_action('after_setup_theme','lwhhb_theme_init');