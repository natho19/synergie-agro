<!-- Start 404 
============================================= -->
<div class="error-page-area default-padding text-center bg-cover">
    <!-- Shape -->
    <div class="shape-left" style="background: url(<?= SA_IMG_URL . 'shape/44-left.png'; ?>);"></div>
    <div class="shape-right" style="background: url(<?= SA_IMG_URL . 'shape/44-right.png'; ?>);"></div>
    <!-- End Shape -->
    <div class="container">
        <div class="error-box">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Oups !</h1>
                    <h2>Aucun contenu</h2>
                    <p>Aucun contenu disponible pour le moment, veuillez retourner sur la page d'accueil.</p>
                    <a class="btn mt-20 btn-md btn-theme" href="<?= esc_url(get_home_url()); ?>">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->