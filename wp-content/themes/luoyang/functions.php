<?php

// use HasinHayder\WPHelper\Modules\NavMenu;
// use HasinHayder\WPHelper\Modules\Metabox;
// use HasinHayder\WPHelper\Modules\SinglePost;

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

function lwhhl_scripts(){
    wp_enqueue_style('luoyang-google-fonts','//fonts.googleapis.com/css2?family=Heebo:wght@300;400&family=Playfair+Display:wght@400;500;700&display=swap');
    wp_enqueue_style('bootstrap-css',get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('fontawesome-css',get_theme_file_uri('assets/vendor/fontawesome/css/all.min.css'));
    wp_enqueue_style('luoyang-custom-icon',get_theme_file_uri('assets/vendor/custom-icon/style.css'));
    wp_enqueue_style('magnific-css',get_theme_file_uri('assets/vendor/magnific-popup/magnific-popup.css'));
    wp_enqueue_style('owlcarousel-css',get_theme_file_uri('assets/vendor/owl/assets/owl.carousel.min.css'));
    wp_enqueue_style('owlcarousel-assets-css',get_theme_file_uri('assets/vendor/owl/assets/owl.theme.default.min.css'));
    wp_enqueue_style('luoyang-css',get_theme_file_uri('assets/css/main.css'));
    wp_enqueue_style('luoyang-css',get_stylesheet());


    wp_enqueue_script('imagesloaded-js', get_theme_file_uri('assets/vendor/imagesloaded.js'), array('jquery'), time(), true);
    wp_enqueue_script('isotope-js', get_theme_file_uri('assets/vendor/jquery.isotope.js'), array('jquery'), time(), true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.min.js'), array('jquery'), time(), true);
    wp_enqueue_script('popper-js', get_theme_file_uri('assets/vendor/popper.min.js'), array('jquery'), time(), true);
    wp_enqueue_script('wow-js', get_theme_file_uri('assets/vendor/wow.min.js'), array('jquery'), time(), true);
    wp_enqueue_script('owlcarousel-js', get_theme_file_uri('assets/vendor/owl/owl.carousel.min.js'), array('jquery'), time(), true);
    wp_enqueue_script('magnific-js', get_theme_file_uri('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'), array('jquery'), time(), true);
    wp_enqueue_script('luoyang-js', get_theme_file_uri('assets/js/scripts.js'), array('jquery','wow-js'), time(), true);
}
add_action('wp_enqueue_scripts','lwhhl_scripts');


function lwhhl_content($content){
    $content = str_replace('<p',"<p class='text-muted mb-4 font-size-20' ",$content);
    return $content;
}
add_filter('the_content','lwhhl_content');