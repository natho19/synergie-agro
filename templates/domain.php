<?php /* Template Name: Domaines d'intervention */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start Services 
============================================= -->
<?php if (have_rows('domains')) : ?>
    <div class="services-style-one-area bg-gray default-padding">
        <div class="shape-right-top" style="background-image: url(<?= SA_IMG_URL . 'shape-9.png'; ?>);"></div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <?php while (have_rows('domains')) : the_row(); ?>
                    <div class="col-lg-4 col-md-6 service-one-single">
                        <div class="service-style-one-item text-center">
                            <div class="thumb">
                                <?php $domain_image = get_sub_field('image'); ?>
                                <img src="<?= esc_url($domain_image ? $domain_image['url'] : SA_IMG_URL . '900x600.png'); ?>" alt="<?= esc_attr($domain_image ? $domain_image['alt'] : '900x600'); ?>">
                            </div>

                            <?php if (get_sub_field('description')) : ?>
                                <div class="info">
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if (get_sub_field('link')) : ?>
                                <a href="<?= esc_url(get_sub_field('link')); ?>" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End Services -->

<?php get_footer(); ?>