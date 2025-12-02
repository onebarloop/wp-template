<?php

if (! defined('ABSPATH')) {
    exit;
}

// Load Composer autoloader
if (file_exists(plugin_dir_path(__FILE__) . 'vendor/autoload.php')) {
    require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
} else {
    wp_trigger_error('Advanced Multi Block Plugin: Composer autoload file not found. Please run `composer install`.', E_USER_ERROR);
    return;
}

// Load Classes
use Classes\Hello;

$initClasses = [
    \Classes\Filter::class,
    \Classes\Assets::class,
];

foreach ($initClasses as $class) {
    new $class();
}
$helloMessage = Hello::sayHello();
