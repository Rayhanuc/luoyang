<?php
require_once "inc/wphelper/vendor/autoload.php";
require_once "inc/customizer/kirki_installer.php";
require_once "inc/customizer/config.php";

use HasinHayder\WPHelper\Modules\SinglePost;

function lwhhl_theme_init() {
	load_theme_textdomain( 'lwhhl', get_template_directory().'/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-formats', array('video') );
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
			'primary' => __( 'Primary', 'lwhhl' ),			
			'footer' => __( 'Footer', 'lwhhl' ),			
		)
	);

	add_image_size('luoyang-portfolio',800,9999);
	add_image_size('luoyang-team',800,800, true);
}

add_action('after_setup_theme','lwhhl_theme_init');

function lwhhl_scripts(){
    wp_enqueue_style('luoyang-google-fonts','//fonts.googleapis.com/css2?family=Heebo:wght@300;400&family=Playfair+Display:wght@400;500;700&display=swap');
    wp_enqueue_style('bootstrap-css',get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('fontawesome-css',get_theme_file_uri('assets/vendor/fontawesome/css/all.min.css'));
    wp_enqueue_style('luoyang-custom-icon',get_theme_file_uri('assets/vendor/custom-icon/style.css'));
    wp_enqueue_style('magnific-css',get_theme_file_uri('assets/vendor/magnific-popup/magnific-popup.css'));
    wp_enqueue_style('owlcarousel-css',get_theme_file_uri('assets/vendor/owl/assets/owl.carousel.min.css'));
    wp_enqueue_style('owlcarousel-assets-css',get_theme_file_uri('assets/vendor/owl/assets/owl.theme.default.min.css'));
    wp_enqueue_style('luoyang-css',get_theme_file_uri('assets/css/main.css'));
    wp_enqueue_style('luoyang-main-css',get_stylesheet_uri());


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



function lwhhl_paginate_links($mid_size=3) {
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	$links = paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type' => 'array',
		'prev_nex' => true,
		'prev_text' => '<i class="fa fa-angle-double-left"></i> newer posts',
		'next_text' => 'older posts <i class="fa fa-angle-double-right"></i>',
		'mid_size' => $mid_size

	));

	if ($links) {
		foreach ($links as $link) {
			if (strpos($link, "current") !== false) {
				echo "<i class='page-item disabled active'><a class='page-link' href='#'>".$link."</a></i>";
			}else {
				$link = str_replace('page-numbers','page-link',$link);
				echo '<li class="page-item">'.$link."</li>\n";
			}
		}
	}

}

add_filter('get_the_excerpt', function($excerpt){
    return wp_trim_words($excerpt, 30, null);
});


function lwhhl_display_categories(){
    $categories = SinglePost::get_categories(null,0,WPHELPER_TAXONOMY_LIST_LINK);
    echo join('',$categories);
}
function lwhhl_display_tags(){
    $tags = join('',SinglePost::get_tags(null,WPHELPER_TAXONOMY_LINK));
    $tags = str_replace('<a','<a class="badge badge-pill badge-dark"', $tags);
    echo $tags;
}