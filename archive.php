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
                                <!-- Single Item -->
                                <div class="gallery-item">
                                    <div class="gallery-style-one">
                                        <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="800x800">
                                        <div class="overlay">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
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