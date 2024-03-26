<?php

function synergieagro_load_scripts() {
    // CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], null, 'all');

}
add_action('wp_enqueue_scripts', 'synergieagro_load_scripts');