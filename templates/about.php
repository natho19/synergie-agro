<?php /* Template Name: A propos */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start About -->
<div class="about-style-one-area default-padding overflow-hidden">
    <div class="container">
        <div class="row align-center">
            <?php $about_image = get_field('about_image'); if ($about_image) : ?>
                <div class="col-xl-6 col-lg-5">
                    <div class="about-style-one-thumb">
                        <img src="<?= esc_url($about_image['url']); ?>" alt="<?= esc_attr($about_image['alt']); ?>">
                    </div>
                </div>
            <?php endif; ?>
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
        <?php if (get_field('video_background')) : ?>
            <div class="shape" style="background-image: url(<?= esc_url(get_field('video_background')); ?>);">
                <?php if (get_field('video_url')) : ?>
                    <a href="<?= esc_attr(get_field('video_url')); ?>" class="popup-youtube video-play-button">
                        <i class="fas fa-play"></i>
                        <div class="effect"></div>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 pl-60 pl-md-15 pl-xs-15">
                    <?php if (get_field('video_title')) : ?>
                        <h2 class="title"><?php the_field('video_title'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_field('video_description')) : ?>
                        <p><?php the_field('video_description'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End Choose Us -->

<!-- Start Product Speciality 
============================================= -->
<div class="product-speciality-arae default-padding bg-cover" style="background-image: url(<?= esc_url(get_field('partnerships_background')); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-8">
                <div class="product-speciality-info">
                    <?php if (get_field('partnerships_title')) : ?>
                        <h2><?php the_field('partnerships_title'); ?></h2>
                    <?php endif; ?>
                    <?php the_field('partnerships_description'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Speciality -->

<?php get_footer(); ?>