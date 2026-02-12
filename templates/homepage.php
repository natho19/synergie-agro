<?php /* Template Name: Accueil */ ?>

<?php get_header(); ?>

<!-- Start Slide Area 
============================================= -->
<?php if (have_rows('slides')) : ?>
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Single Item -->
                <?php while (have_rows('slides')) : the_row(); ?>
                    <div class="swiper-slide banner-style-one">
                        <div class="banner-thumb bg-cover shadow dark" style="background: url(<?= esc_url(get_sub_field('background')); ?>);"></div>

                        <div class="shape">
                            <img src="<?= SA_IMG_URL . 'shapes/2.png'; ?>" alt="Shape">
                        </div>

                        <div class="container">
                            <div class="row align-center">
                                <div class="col-xl-10">
                                    <div class="content">
                                        <div class="info">
                                            <?php if (get_sub_field('title')) : ?>
                                                <h2><?php the_sub_field('title'); ?></h2>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('description')) : ?>
                                                <p><?php the_sub_field('description'); ?></p>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('link')) : ?>
                                                <div class="button">
                                                    <a class="btn btn-theme btn-md radius animation" href="<?= esc_url(get_sub_field('link')['url']); ?>"><?= esc_html(get_sub_field('link')['title']); ?></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- End Single Item -->
            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
<?php endif; ?>
<!-- End Slide -->

<!-- Start About 
============================================= -->
<?php if (have_rows('features')) : ?>
    <div class="about-style-one-area default-padding overflow-hidden">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="about-style-one-thumb">
                        <?php $features_image = get_field('features_image'); ?>
                        <img src="<?= esc_url($features_image['url']); ?>" alt="<?= esc_attr($features_image['alt']); ?>">
                        <div class="animation-shape">
                            <img src="<?= SA_IMG_URL . 'sources/illustration-1.png'; ?>" alt="Illustration">
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-style-one-info">
                        <ul class="top-feature">
                            <?php while (have_rows('features')) : the_row(); ?>
                                <li>
                                    <?php $illustration = get_sub_field('illustration'); if ($illustration) : ?>
                                        <div class="icon">
                                            <img src="<?= esc_url($illustration['url']); ?>" alt="<?= esc_attr($illustration['alt']); ?>">
                                        </div>
                                    <?php endif; ?>

                                    <div class="info">
                                        <?php if (get_sub_field('title')) : ?>
                                            <h4><?php the_sub_field('title'); ?></h4>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('description')) : ?>
                                            <p><?php the_sub_field('description'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End About -->

<!-- Start Services 
============================================= -->
<?php if (have_rows('domains')) : ?>
    <div class="services-style-one-area bg-gray default-padding">
        <div class="shape-right-top" style="background-image: url(<?= SA_IMG_URL . 'shapes/9.png'; ?>);"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <?php if (get_field('domains_title')) : ?>
                            <h2 class="title"><?php the_field('domains_title'); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Item -->
                <?php while (have_rows('domains')) : the_row(); ?>
                    <?php get_template_part('parts/content', 'domain'); ?>
                <?php endwhile; ?>
                <!-- End Single Item -->
            </div>

            <?php if (get_field('domains_link')) : ?>
                <div class="row">
                    <div class="text-center mt-40">
                        <a class="btn btn-theme btn-md radius animation" href="<?= esc_url(get_field('domains_link')['url']); ?>"><?= esc_html(get_field('domains_link')['title']); ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<!-- End Services -->

<!-- Start Gallery 
============================================= -->
<?php if (have_rows('realizations')) : ?>
    <div class="gallery-style-one-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <?php if (get_field('realizations_title')) : ?>
                            <h2 class="title"><?php the_field('realizations_title'); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fill">
            <div class="row">
                <div class="gallery-style-one-carousel swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <?php while (have_rows('realizations')) : the_row();
                            $post = get_sub_field('realization');
                            if ($post) : ?>
                                <div class="swiper-slide">
                                    <?php get_template_part('parts/content', 'realization'); ?>
                                </div>
                            <?php endif;
                            wp_reset_postdata();
                        endwhile; ?>
                        <!-- End Single Item -->
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <?php if (get_field('realizations_link')) : ?>
                <div class="row">
                    <div class="text-center mt-40">
                        <a class="btn btn-theme btn-md radius animation" href="<?= esc_url(get_field('realizations_link')['url']); ?>"><?= esc_html(get_field('realizations_link')['title']); ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<!-- End Gallery  -->

<?php get_footer(); ?>