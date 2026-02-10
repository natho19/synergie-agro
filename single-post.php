<?php global $sa_options; ?>

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
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="thumb">
                                <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                                <div class="date">
                                    <strong><?= get_the_date('d'); ?></strong>
                                    <span><?= get_the_date('M, Y') ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                        <?php $content = get_post()->post_content; if (!empty($content)) : ?>
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
                                    <?php if (!empty($sa_options['youtube'])) : ?>
                                        <li class="youtube"><a href="<?= esc_url($sa_options['youtube']); ?>"><i class="fab fa-youtube"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($sa_options['tiktok'])) : ?>
                                        <li class="tiktok"><a href="<?= esc_url($sa_options['tiktok']); ?>"><i class="fab fa-tiktok"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($sa_options['facebook'])) : ?>
                                        <li class="facebook"><a href="<?= esc_url($sa_options['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($sa_options['linkedin'])) : ?>
                                        <li class="linkedin"><a href="<?= esc_url($sa_options['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                    <?php endif; ?>
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