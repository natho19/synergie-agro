<?php get_header(); ?>

<?php if ($wp_query->found_posts > 0) : ?>
    <?php get_template_part('parts/breadcrumb'); ?>
<?php endif; ?>

<!-- Start Blog 
============================================= -->
<div class="blog-area blog-grid default-padding bg-gray">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="blog-item-box">
                <div class="row">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-xl-4 col-md-6 single-item">
                            <?php get_template_part('parts/content', 'post'); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php else : ?>
            <?php get_template_part('parts/content', 'none'); ?>
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