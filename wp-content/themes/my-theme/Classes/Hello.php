<?php

namespace Classes;

if (!defined('ABSPATH')) {
    exit;
}

class Hello
{
    private function __construct()
    {
    }
    private static string $message = 'Hello, World!';

    public static function sayHello()
    {
        return self::$message;
    }
}
