<?php

namespace Classes;

if (! defined('ABSPATH')) {
    exit;
}

class Filter
{
    public function __construct()
    {
        add_filter('use_block_editor_for_post', '__return_false', 10);
        add_filter('use_block_editor_for_post_type', '__return_false', 10);
    }
}
