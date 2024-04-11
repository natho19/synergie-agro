<?php
// Images location
define('SA_IMG_URL', get_template_directory_uri() . '/assets/img/', false);

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Add theme support
function sa_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sa_setup');

// Remove post type support
function sa_remove_post_type_support()
{
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'thumbnail');
}
add_action('init', 'sa_remove_post_type_support');

// Get page title
function sa_get_page_title()
{
    $bool = true;
    $page_title = "";

    switch ($bool) {
        case is_404():
            $page_title = "404";
            break;
        case is_home():
            $page_title = get_queried_object()->post_title;
            break;
        case is_tax():
            $page_title = get_queried_object()->name;
            break;
        case is_post_type_archive():
            $page_title = post_type_archive_title('', false);
            break;
        default:
            $page_title = get_the_title();
    }
    return $page_title;
}
