<?php

if (!defined('ABSPATH')) {
    exit();
}

// Load Composer autoloader
if (file_exists(plugin_dir_path(__FILE__) . 'vendor/autoload.php')) {
    require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
} else {
    wp_trigger_error(
        'Advanced Multi Block Plugin: Composer autoload file not found. Please run `composer install`.',
        E_USER_ERROR,
    );
    return;
}

// Enable Whoops for nice error pages
if (defined('WP_DEBUG') && WP_DEBUG) {
    $whoops = new \Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
    $whoops->register();
}

// Load Classes
$helloMessage = \Classes\Hello::sayHello();
$initClasses = [\Classes\Filter::class, \Classes\Assets::class];

foreach ($initClasses as $class) {
    new $class();
}
