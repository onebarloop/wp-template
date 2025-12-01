<?php

namespace Classes;

if (! defined('ABSPATH')) {
    exit;
}

class Assets
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_frontend_assets']);
    }

    public function enqueue_frontend_assets()
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
    }
}
