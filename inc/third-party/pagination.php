<?php

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
