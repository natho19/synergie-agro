<?php get_header(); ?>

<!-- Start 404 
============================================= -->
<div class="error-page-area default-padding text-center bg-gray">
    <!-- Shape -->
    <div class="shape-left" style="background: url(<?= SA_IMG_URL . 'shapes/44-left.png'; ?>);"></div>
    <div class="shape-right" style="background: url(<?= SA_IMG_URL . 'shapes/44-right.png'; ?>);"></div>
    <!-- End Shape -->
    <div class="container">
        <div class="error-box">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>404</h1>
                    <h2>Cette page n'existe pas</h2>
                    <p>Il semble que la page que vous recherchez soit introuvable, ait été déplacée ou supprimée. Nous vous invitons à poursuivre votre navigation en utilisant les liens ci-dessous ou à revenir à la page d'Accueil.</p>
                    <a class="btn btn-md btn-theme" href="<?= esc_url(get_home_url()); ?>">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->

<?php get_footer(); ?>