<?php

function sa_load_scripts() {
    // CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.min.css', [], null, 'all');

    // JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', ['jquery'], null, true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('progress-bar', get_template_directory_uri() . '/assets/js/progress-bar.min.js', [], null, true);
    wp_enqueue_script('circle-progress', get_template_directory_uri() . '/assets/js/circle-progress.min.js', ['jquery'], null, true);
    wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', ['jquery'], null, true);
    wp_enqueue_script('imagesloaded-pkgd', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', ['jquery'], null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', ['jquery'], null, true);
    wp_enqueue_script('count-to', get_template_directory_uri() . '/assets/js/count-to.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery-scrolla', get_template_directory_uri() . '/assets/js/jquery.scrolla.min.js', ['jquery'], null, true);
    wp_enqueue_script('ScrollOnReveal', get_template_directory_uri() . '/assets/js/ScrollOnReveal.min.js', ['jquery'], null, true);
    wp_enqueue_script('YTPlayer', get_template_directory_uri() . '/assets/js/YTPlayer.min.js', ['jquery'], null, true);
    wp_enqueue_script('validnavs', get_template_directory_uri() . '/assets/js/validnavs.min.js', ['jquery'], null, true);
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', [], null, true);
    wp_enqueue_script('ScrollTrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', [], null, true);
    wp_enqueue_script('SplitText', get_template_directory_uri() . '/assets/js/SplitText.min.js', [], null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'sa_load_scripts');
