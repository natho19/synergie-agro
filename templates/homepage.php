<?php /* Template Name: Accueil */ ?>

<?php get_header(); ?>

<!-- Start Slide Area 
============================================= -->
<?php if (have_rows('slides')) : ?>
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Single Item -->
                <?php while (have_rows('slides')) : the_row(); ?>
                    <div class="swiper-slide banner-style-one">
                        <div class="banner-thumb bg-cover shadow dark" style="background: url(<?= esc_url(get_sub_field('background') ? get_sub_field('background') : SA_IMG_URL . '1900x1200.png'); ?>);"></div>

                        <div class="shape">
                            <img src="<?= SA_IMG_URL . 'shape-2.png'; ?>" alt="Shape">
                        </div>

                        <div class="container">
                            <div class="row align-center">
                                <div class="col-xl-10">
                                    <div class="content">
                                        <div class="info">
                                            <?php if (get_sub_field('title')) : ?>
                                                <h2><?php the_sub_field('title'); ?></h2>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('description')) : ?>
                                                <p><?php the_sub_field('description'); ?></p>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('link')) : ?>
                                                <div class="button">
                                                    <a class="btn btn-theme btn-md radius animation" href="<?= esc_url(get_sub_field('link')['url']); ?>"><?= esc_html(get_sub_field('link')['title']); ?></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- End Single Item -->
            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
<?php endif; ?>
<!-- End Slide -->

<!-- Start About 
============================================= -->
<?php if (have_rows('features')) : ?>
    <div class="about-style-one-area default-padding overflow-hidden">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="about-style-one-thumb">
                        <?php $features_image = get_field('features_image'); ?>
                        <img src="<?= esc_url($features_image ? $features_image['url'] : SA_IMG_URL . '800x1000.png'); ?>" alt="<?= esc_attr($features_image ? $features_image['alt'] : '800x1000'); ?>">
                        <div class="animation-shape">
                            <img src="<?= SA_IMG_URL . 'illustration-1.png'; ?>" alt="Illustration">
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-style-one-info">
                        <ul class="top-feature">
                            <?php while (have_rows('features')) : the_row(); ?>
                                <li>
                                    <?php $illustration = get_sub_field('illustration');
                                    if ($illustration) : ?>
                                        <div class="icon">
                                            <img src="<?= esc_url($illustration['url']); ?>" alt="<?= esc_attr($illustration['alt']); ?>">
                                        </div>
                                    <?php endif; ?>

                                    <div class="info">
                                        <?php if (get_sub_field('title')) : ?>
                                            <h4><?php the_sub_field('title'); ?></h4>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('description')) : ?>
                                            <p><?php the_sub_field('description'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End About -->

<!-- Start Choose Us 
============================================= -->
<div class="choose-us-style-two-area overflow-hidden default-padding">
    <div class="container">
        <div class="row">
            <?php $partnerships = get_field('partnerships');
            if ($partnerships) : ?>
                <div class="col-xl-6 col-lg-6 pr-100 pr-md-15 pr-xs-15 pb-md-60 pb-xs-60">
                    <?php if ($partnerships['title']) : ?>
                        <h2 class="title text-white"><?= $partnerships['title']; ?></h2>
                    <?php endif; ?>
                    <?= $partnerships['content']; ?>
                </div>
            <?php endif; ?>

            <?php $stats = get_field('stats');
            if ($stats) : ?>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="choose-us-style-two-content">
                        <?php if ($stats['subtitle']) : ?>
                            <h4 class="sub-title"><?= $stats['subtitle']; ?></h4>
                        <?php endif; ?>

                        <?php if ($stats['title']) : ?>
                            <h2 class="title"><?= $stats['title']; ?></h2>
                        <?php endif; ?>

                        <?php $indicators = $stats['indicators'];
                        if ($indicators) : ?>
                            <div class="choose-us-style-two-info">
                                <?php foreach ($indicators as $indicator) : ?>
                                    <div class="fun-fact">
                                        <?php if ($indicator['digit']) : ?>
                                            <div class="counter">
                                                <div class="timer" data-to="<?= $indicator['digit']; ?>" data-speed="2000"><?= $indicator['digit']; ?></div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($indicator['label']) : ?>
                                            <span class="medium"><?= $indicator['label']; ?></span>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- End Choose Us -->

<!-- Start Services 
============================================= -->
<?php if (have_rows('domains')) : ?>
    <div class="services-style-one-area bg-gray default-padding">
        <div class="shape-right-top" style="background-image: url(<?= SA_IMG_URL . 'shape-9.png'; ?>);"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <?php if (get_field('domains_subtitle')) : ?>
                            <h5 class="sub-title"><?php the_field('domains_subtitle'); ?></h5>
                        <?php endif; ?>
                        <?php if (get_field('domains_title')) : ?>
                            <h2 class="title"><?php the_field('domains_title'); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

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

            <?php if (get_field('domains_link')) : ?>
                <div class="row">
                    <div class="text-center mt-40">
                        <a class="btn btn-theme btn-md radius animation" href="<?= esc_url(get_field('domains_link')['url']); ?>"><?= esc_html(get_field('domains_link')['title']); ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<!-- End Services -->

<!-- Start Gallery 
============================================= -->
<div class="gallery-style-one-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="site-heading text-center">
                    <h5 class="sub-title">Projets</h5>
                    <h2 class="title">Explorer nos projets</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fill">
        <div class="row">
            <div class="gallery-style-one-carousel swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="800x800">
                            <div class="overlay">
                                <h4><a href="http://localhost:81/synergie-agro/projets/site-de-production-de-cereales-et-tubercules/">Site de production de céréales et tubercules</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="800x800">
                            <div class="overlay">
                                <h4><a href="http://localhost:81/synergie-agro/projets/magasin-de-stockage/">Magasin de stockage</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="800x800">
                            <div class="overlay">
                                <h4><a href="http://localhost:81/synergie-agro/projets/complexe-forage-chateau-deau-systeme-dirrigation/">Complexe forage, château d’eau, système d’irrigation</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="800x800">
                            <div class="overlay">
                                <h4><a href="http://localhost:81/synergie-agro/projets/bassins-irrigues-de-cultures-maraichers/">Bassins irrigués de cultures maraichers</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="800x800">
                            <div class="overlay">
                                <h4><a href="http://localhost:81/synergie-agro/projets/bassins-irrigues-de-production-de-pepinieres-multi-varietes/">Bassins irrigués de production de pépinières multi variétés</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="800x800">
                            <div class="overlay">
                                <h4><a href="http://localhost:81/synergie-agro/projets/aires-de-sechage/">Aires de séchage</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

            </div>
        </div>

        <div class="row">
            <div class="text-center mt-40">
                <a class="btn btn-theme btn-md radius animation" href="http://localhost:81/synergie-agro/projets/">Tous les projets</a>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery  -->

<!-- Start Product Speciality 
============================================= -->
<?php if (get_field('products_badge')) : ?>
    <div class="product-speciality-arae bg-cover" style="background-image: url(<?= SA_IMG_URL . 'banner-1.jpg'; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8">
                    <div class="product-speciality-info default-padding-bottom">
                        <?php if (get_field('products_badge')) : ?>
                            <div class="product-badge">
                                <h1><?php the_field('products_badge'); ?></h1>
                            </div>
                        <?php endif; ?>

                        <?php if (get_field('products_title')) : ?>
                            <h2><?php the_field('products_title'); ?></h2>
                        <?php endif; ?>

                        <?php if (get_field('products_description')) : ?>
                            <p><?php the_field('products_description'); ?></p>
                        <?php endif; ?>

                        <?php if (get_field('products_link')) : ?>
                            <a class="btn btn-theme btn-md radius animation" href="<?= esc_url(get_field('products_link')['url']); ?>"><?= esc_html(get_field('products_link')['title']); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End Speciality -->

<!-- Start Blog 
============================================= -->
<div class="blog-area home-blog default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5 class="sub-title">Actualités</h5>
                    <h2 class="title">Découvrir nos articles</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Single Item -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="blog-style-one">
                    <div class="thumb">
                        <a href="http://localhost:81/synergie-agro/caracteristiques-de-nos-vergers/"><img src="<?= SA_IMG_URL . '900x600.png'; ?>" alt="900x600"></a>
                        <div class="date"><strong>05</strong> <span>Avr, 2024</span></div>
                    </div>
                    <div class="info">
                        <h3 class="post-title"><a href="http://localhost:81/synergie-agro/caracteristiques-de-nos-vergers/">Caractéristiques de nos vergers</a></h3>
                        <a href="http://localhost:81/synergie-agro/caracteristiques-de-nos-vergers/" class="button-regular">Lire plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
        </div>
        <div class="row">
            <div class="text-center mt-40">
                <a class="btn btn-theme btn-md radius animation" href="http://localhost:81/synergie-agro/actualites/">Plus d'actualités</a>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<?php get_footer(); ?>