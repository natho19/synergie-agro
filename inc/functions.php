<?php
// Images location
define('SA_IMG_URL', get_template_directory_uri() . '/assets/img/', false);

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Remove p tags to wpcf7
add_filter('wpcf7_autop_or_not', '__return_false');

// Add theme support
function sa_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Custom traduction
    pll_register_string('custom_translate', 'Téléphone');
    pll_register_string('custom_translate', 'Titre Boîte Postale');
    pll_register_string('custom_translate', 'Contenu Boîte Postale');
    pll_register_string('custom_translate', 'Titre Siège Administratif');
    pll_register_string('custom_translate', 'Contenu Siège Administratif');
    pll_register_string('custom_translate', 'Titre Siège Technique');
    pll_register_string('custom_translate', 'Contenu Siège Technique');
    pll_register_string('custom_translate', 'Projets');
    pll_register_string('custom_translate', 'Besoin d\'aide');
    pll_register_string('custom_translate', 'Contenu Besoin d\'aide');
    pll_register_string('custom_translate', 'Nous suivre');
    pll_register_string('custom_translate', 'Titre 404');
    pll_register_string('custom_translate', 'Description 404');
    pll_register_string('custom_translate', 'Oups !');
    pll_register_string('custom_translate', 'Titre aucun contenu');
    pll_register_string('custom_translate', 'Description aucun contenu');
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
            ob_start();
            echo pll_e('Projets');
            $page_title = ob_get_clean();
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

// Social sharing
// function sa_social_sharing($content)
// {
//     global $post;

//     if (is_single()) {
//         // Get site name
//         $site_title = get_bloginfo('name');

//         // Get current page URL 
//         $URL = urlencode(get_permalink());

//         // Get current page title
//         $title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

//         // Construct sharing URL without using any script
//         $twitterURL = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $URL . '&amp;via=' . $site_title;
//         $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $URL;
//         $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $URL . '&amp;title=' . $title;
//         // $newlinkedInURL = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $URL;

//         // Add sharing button at the end of post/page content
//         $content .= '<div class="post-tags share">';
//         $content .= '<div class="social">';
//         $content .= '<h4>Partager sur :</h4>';
//         $content .= '<ul>';

//         // Facebook
//         $content .= '<li><a class="facebook" href="' . $facebookURL . '" target="_blank"><i class="fab fa-facebook-f"></i></a></li>';
//         // Twitter
//         $content .= '<li><a class="twitter" href="' . $twitterURL . '" target="_blank"><i class="fab fa-twitter"></i></a></li>';
//         // LinkedIn
//         $content .= '<li><a class="linkedin" href="' . $linkedInURL . '" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>';

//         $content .= '</ul>';
//         $content .= '</div>';
//         $content .= '</div>';

//         return $content;
//     } else {
//         // if not a post/page then don't include sharing button
//         return $content;
//     }
// };
// add_filter('the_content', 'sa_social_sharing');

// Link format number
function linkNumber($tel)
{
    $linkedNumber = str_replace([' ', '+', '-'], '', $tel);
    return $linkedNumber;
}
