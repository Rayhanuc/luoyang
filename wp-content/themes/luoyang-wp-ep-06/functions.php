<?php 
require_once "inc/wphelper/vendor/autoload.php";

function lwhhl_theme_init() {
    load_theme_textdomain( 'lwhhb', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'post-formats', array( 'video' ) );
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
            'primary'  => __( 'Primary', 'lwhhb' ),
        )
    );

    add_image_size('luoyang-portfolio',800,9999);

}
add_action( 'after_setup_theme', 'lwhhl_theme_init' );

function lwhhl_scripts(){
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Heebo:wght@300;400&family=Playfair+Display:wght@400;500;700&display=swap');
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('fontawesome-css', get_theme_file_uri('assets/vendor/fontawesome/css/all.min.css'));
    wp_enqueue_style('luoyang-custom-icon', get_theme_file_uri('assets/vendor/custom-icon/style.css'));
    wp_enqueue_style('owlcarousel-css', get_theme_file_uri('assets/vendor/owl/assets/owl.carousel.min.css'));
    wp_enqueue_style('owlcarousel-assets-css', get_theme_file_uri('assets/vendor/owl/assets/owl.theme.default.min.css'));
    wp_enqueue_style('magnific-css', get_theme_file_uri('assets/vendor/magnific-popup/magnific-popup.css'));
    wp_enqueue_style('luoyang-css', get_theme_file_uri('assets/css/main.css'));
    wp_enqueue_style('luoyang-main-css', get_stylesheet_uri());

    wp_enqueue_script('imagesloaded-js', get_theme_file_uri('assets/vendor/imagesloaded.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('isotope-js', get_theme_file_uri('assets/vendor/jquery.isotope.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('popper-js', get_theme_file_uri('assets/vendor/popper.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('wow-js', get_theme_file_uri('assets/vendor/wow.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('owlcarousel-js', get_theme_file_uri('assets/vendor/owl/owl.carousel.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('magnific-js', get_theme_file_uri('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('luoyang-js', get_theme_file_uri('assets/js/scripts.js'), ['jquery','wow-js'], time(), true);
}
add_action('wp_enqueue_scripts','lwhhl_scripts');

function lwhhl_content($content){
    $content = str_replace('<p',"<p class='text-muted mb-4 font-size-20' ",$content);
    return $content;
}
add_filter('the_content','lwhhl_content');