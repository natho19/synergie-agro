<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start 404 
============================================= -->
<div class="error-page-area default-padding text-center bg-cover">
    <!-- Shape -->
    <div class="shape-left" style="background: url(<?= SA_IMG_URL . 'shapes/44-left.png'; ?>);"></div>
    <div class="shape-right" style="background: url(<?= SA_IMG_URL . 'shapes/44-right.png'; ?>);"></div>
    <!-- End Shape -->
    <div class="container">
        <div class="error-box">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>404</h1>
                    <h2>Titre 404</h2>
                    <p>Description 404</p>
                    <a class="btn mt-20 btn-md btn-theme" href="<?= esc_url(get_home_url()); ?>">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->

<?php get_footer(); ?>