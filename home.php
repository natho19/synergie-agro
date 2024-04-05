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
                        <!-- Single Item -->
                        <div class="col-xl-4 col-md-6 single-item">
                            <div class="blog-style-one">
                                <div class="thumb">
                                    <a href="<?php the_permalink(); ?>"><img src="<?= SA_IMG_URL . '900x600.png'; ?>" alt="900x600"></a>
                                    <div class="date"><strong><?= get_the_date('d'); ?></strong> <span><?= get_the_date('M, Y') ?></span></div>
                                </div>
                                <div class="info">
                                    <h3 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Pagination -->
        <div class="row">
            <div class="col-md-12 pagi-area text-center">
                <nav aria-label="navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="blog-3-colum.html"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="blog-3-colum.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="blog-3-colum.html">2</a></li>
                        <li class="page-item"><a class="page-link" href="blog-3-colum.html">3</a></li>
                        <li class="page-item"><a class="page-link" href="blog-3-colum.html"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Pagination -->
    </div>
</div>
<!-- End Blog -->

<?php get_footer(); ?>