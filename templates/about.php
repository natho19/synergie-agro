<?php /* Template Name: A propos */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start About 
============================================= -->
<div class="about-style-one-area default-padding overflow-hidden">
    <div class="container">
        <div class="row align-center">
            <div class="col-xl-6 col-lg-5">
                <div class="about-style-one-thumb">
                    <?php $about_image = get_field('about_image'); ?>
                    <img src="<?= esc_url($about_image ? $about_image['url'] : SA_IMG_URL . 'placeholders/800x1000.png'); ?>" alt="<?= esc_attr($about_image ? $about_image['alt'] : '800x1000'); ?>">
                    <div class="animation-shape">
                        <img src="<?= SA_IMG_URL . 'sources/illustration-1.png'; ?>" alt="Illustration">
                    </div>
                </div>
            </div>
            <?php if (get_field('about_content')) : ?>
                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <?php the_field('about_content'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Choose Us 
============================================= -->
<?php if (get_field('display_video')) : ?>
    <div class="choose-us-style-three-area default-padding bg-theme-secondary text-light">
        <div class="illustration-bottom">
            <img src="<?= SA_IMG_URL . 'sources/illustration-17.png'; ?>" alt="Illustration">
        </div>
        <?php $video_background = get_field('video_background'); ?>
        <div class="shape" style="background-image: url(<?= esc_url($video_background ? $video_background : SA_IMG_URL . 'placeholders/800x800.png'); ?>);">
            <?php if (get_field('video_url')) : ?>
                <a href="<?= esc_attr(get_field('video_url')); ?>" class="popup-youtube video-play-button">
                    <i class="fas fa-play"></i>
                    <div class="effect"></div>
                </a>
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 pl-60 pl-md-15 pl-xs-15">
                    <?php if (get_field('video_title')) : ?>
                        <h2 class="title"><?php the_field('video_title'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_field('video_description')) : ?>
                        <p><?php the_field('video_description'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('video_bullet_points')) : ?>
                        <div class="list-grid">
                            <?php the_field('video_bullet_points'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('video_youtube_channel_url')) : ?>
                        <div class="mt-50">
                            <a class="btn btn-theme btn-md radius animation" href="<?= esc_attr(get_field('video_youtube_channel_url')); ?>"><i class="fab fa-youtube"></i> <?= pll_e('Notre chaîne YouTube') ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End Choose Us -->

<!-- Start Brand
============================================= -->
<?php if (have_rows('partners')) : ?>
    <div class="brand-style-two-area text-center bg-gray default-padding">
        <div class="container">
            <div class="brand-style-two">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand5col swiper">
                            <div class="swiper-wrapper">
                                <!-- Single Item -->
                                <?php while (have_rows('partners')) : the_row(); ?>
                                    <?php $logo = get_sub_field('logo');
                                    if ($logo) : ?>
                                        <div class="swiper-slide">
                                            <a href="<?= esc_attr(get_sub_field('url')); ?>" target="_blank"><img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>"></a>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Brand -->
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End Brand -->

<?php get_footer(); ?>