<?php

/*
Plugin Name: Luoyang Theme Companion
Plugin URI: https://
Description: Luoyang Theme Companion
Version: 1.0
Author: Rayhan Uddin Chowdhury
Author URI: https://
License: GPLv2 or later
Text Domain: luoyang-companion
Domain Path: /languages/
*/

require_once "widgets/search-widget.php";
require_once "widgets/category-widget.php";

function luoyang_load_textdomain(){
    load_plugin_textdomain('luoyang-companion', false, dirname(__FILE__)."/languages");
}
add_action('plugins_loaded','luoyang_load_textdomain');

function luoyang_plugin_init(){
    add_image_size('luoyang-sidebar-thumbnail',180,150,true);
}
add_action('init','luoyang_plugin_init');

