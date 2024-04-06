<?php
// Images location
define('SA_IMG_URL', get_template_directory_uri() . '/assets/img/', false);

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Theme support
function sa_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sa_setup');

function sa_get_page_title()
{
    $page_title = "";
    if (is_404()) {
        $page_title = "404";
    } elseif (is_home()) {
        $page_title = get_queried_object()->post_title;
    } elseif (is_tax()) {
        $page_title = get_queried_object()->name;
    } elseif (is_post_type_archive()) {
        $page_title = post_type_archive_title('', false);
    } else {
        $page_title = get_the_title();
    }
    return $page_title;
}
