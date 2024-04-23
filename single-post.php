<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start Blog
============================================= -->
<div class="blog-area single full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                    <div class="blog-style-two item">
                        <div class="thumb">
                            <a href="#"><img src="<?= SA_IMG_URL . '900x600.png'; ?>" alt="Thumb"></a>
                            <div class="date"><strong><?= get_the_date('d'); ?></strong> <span><?= get_the_date('M, Y') ?></span></div>
                        </div>
                        <?php $content = get_post()->post_content;
                        if (!empty($content)) : ?>
                            <div class="info">
                                <?php the_content(); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Start Post Pagination -->
                    <?php if (function_exists('sa_posts_nav')) : ?>
                        <?php sa_posts_nav(); ?>
                    <?php endif; ?>
                    <!-- End Post Pagination -->
                </div>

                <!-- Start Sidebar -->
                <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-100 mt-xs-50">
                    <aside>
                        <div class="sidebar-item social-sidebar">
                            <h4 class="title">Nous suivre</h4>
                            <div class="sidebar-info">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<?php get_footer(); ?>