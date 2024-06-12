<?php /* Template Name: Domaines d'intervention */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start Services 
============================================= -->
<?php if (have_rows('domains')) : ?>
    <div class="services-style-one-area bg-gray default-padding">
        <div class="shape-right-top" style="background-image: url(<?= SA_IMG_URL . 'shapes/9.png'; ?>);"></div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <?php while (have_rows('domains')) : the_row(); ?>
                    <?php get_template_part('parts/content', 'domain'); ?>
                <?php endwhile; ?>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End Services -->

<?php get_footer(); ?>