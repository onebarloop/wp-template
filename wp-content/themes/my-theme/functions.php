<?php

// Load Composer autoloader
if (file_exists(plugin_dir_path(__FILE__) . 'vendor/autoload.php')) {
    require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
} else {
    wp_trigger_error('Advanced Multi Block Plugin: Composer autoload file not found. Please run `composer install`.', E_USER_ERROR);
    return;
}

// Load Classes
use Classes\Assets;
use Classes\Hello;

new Assets();
$helloMessage = Hello::sayHello();


// Disable Block Editor (Gutenberg) for all post types
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Load Theme Assets
/* add_action('wp_enqueue_scripts', 'load_assets'); */




/* function load_assets()
{
    $script_asset = include get_theme_file_path('public/js/bundle.asset.php');
    $style_asset  = include get_theme_file_path('public/css/main.asset.php');

    wp_enqueue_script(
        'my-theme',
        get_theme_file_uri('public/js/bundle.js'),
        $script_asset['dependencies'],
        $script_asset['version'],
        true
    );

    wp_enqueue_style(
        'my-theme',
        get_theme_file_uri('public/css/main.css'),
        $style_asset['dependencies'],
        $style_asset['version']
    );
} */
