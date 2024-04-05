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

                    <!-- Post Tags Share -->
                    <div class="post-tags share">
                        <div class="social">
                            <h4>Partager sur :</h4>
                            <ul>
                                <li>
                                    <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul><!-- End Social Share -->
                        </div>
                    </div>
                    <!-- Post Tags Share -->

                    <!-- Start Post Pagination -->
                    <div class="post-pagi-area">
                        <div class="post-previous">
                            <a href="#">
                                <div class="icon"><i class="fas fa-angle-double-left"></i></div>
                                <div class="nav-title">Précédent <h5>Lorem ipsum dolor</h5>
                                </div>
                            </a>
                        </div>
                        <div class="post-next">
                            <a href="#">
                                <div class="nav-title">Suivant <h5>Lorem ipsum dolor</h5>
                                </div>
                                <div class="icon"><i class="fas fa-angle-double-right"></i></div>
                            </a>
                        </div>
                    </div>
                    <!-- End Post Pagination -->
                </div>

                <!-- Start Sidebar -->
                <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-100 mt-xs-50">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" placeholder="Rechercher..." name="text" class="form-control">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <h4 class="title">Derniers articles</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">12 Fev, 2020</span>
                                        </div>
                                        <a href="#">Lorem ipsum dolor</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">05 Jul, 2022</span>
                                        </div>
                                        <a href="#">Lorem ipsum dolor</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">29 Sept, 2020</span>
                                        </div>
                                        <a href="#">Lorem ipsum dolor</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
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