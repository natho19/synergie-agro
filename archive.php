<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start Gallery 
============================================= -->
<div class="gallery-style-two-area default-padding">
    <div class="container">
        <div class="row mb-40">
            <?php if (have_posts()) : ?>
                <div class="col-md-12 gallery-content">
                    <div class="magnific-mix-gallery gallery-masonary">
                        <div id="gallery-masonary" class="gallery-items colums-3">
                            <?php while (have_posts()) : the_post(); ?>
                                <?php get_template_part('parts/content', 'projet'); ?>
                            <?php endwhile; ?>
                        </div>
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
</div>
<!-- End Gallery -->

<?php get_footer(); ?>