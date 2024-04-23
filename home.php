<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start Blog 
============================================= -->
<div class="blog-area blog-grid default-padding">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="blog-item-box">
                <div class="row">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('parts/content', 'post'); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Pagination -->
        <?php if (function_exists('sa_pagination')) : ?>
            <?php sa_pagination(); ?>
        <?php endif; ?>
        <!-- End Pagination -->
    </div>
</div>
<!-- End Blog -->

<?php get_footer(); ?>