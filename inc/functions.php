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

// Posts nav
function sa_posts_nav()
{
    $next_post = get_next_post();
    $prev_post = get_previous_post();

    if ($next_post || $prev_post) : ?>
        <div class="post-pagi-area">
            <?php if (!empty($prev_post)) : ?>
                <div class="post-previous">
                    <a href="<?= get_permalink($prev_post); ?>">
                        <div class="icon"><i class="fas fa-angle-double-left"></i></div>
                        <div class="nav-title">
                            Précédent <h5><?= get_the_title($prev_post); ?></h5>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
            <?php if (!empty($next_post)) : ?>
                <div class="post-next">
                    <a href="<?= get_permalink($next_post); ?>">
                        <div class="nav-title">
                            Suivant <h5><?= get_the_title($next_post); ?></h5>
                        </div>
                        <div class="icon"><i class="fas fa-angle-double-right"></i></div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
<?php endif;
}

// Pagination
function sa_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;
    global $paged;

    if (empty($paged)) $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) $pages = 1;
    }

    if (1 != $pages) {
        echo '<div class="row">';
        echo '<div class="col-md-12 pagi-area text-center">';
        echo '<nav aria-label="navigation">';
        echo '<ul class="pagination">';

        if ($paged > 1) echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged - 1) . '"><i class="fas fa-angle-double-left"></i></a></li>';

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i)
                    ? '<li class="page-item active"><a class="page-link" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>'
                    : '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
            }
        }

        if ($paged < $pages) echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged + 1) . '"><i class="fas fa-angle-double-right"></i></a></li>';

        echo '</ul>';
        echo '</nav>';
        echo '</div>';
        echo '</div>';
    }
}
