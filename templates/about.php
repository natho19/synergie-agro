<?php /* Template Name: A propos */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start About 
============================================= -->
<div class="about-style-one-area default-padding overflow-hidden">
    <div class="container">
        <div class="row align-center">
            <div class="col-xl-6 col-lg-5">
                <div class="about-style-one-thumb">
                    <img src="<?= SA_IMG_URL . '800x1000.png'; ?>" alt="800x1000">
                    <div class="animation-shape">
                        <img src="<?= SA_IMG_URL . 'illustration/1.png'; ?>" alt="Illustration">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                <div class="about-style-one-info">
                    <h2 class="title">Qui sommes-nous ?</h2>
                    <p>Synergie Agro est une société qui s'est spécialisée dans la conception de solution technologiques innovantes pour le développement de toute la chaîne de valeur en agro-industrie.</p>
                </div>
                <div class="about-style-one-info">
                    <h2 class="title">Notre vision</h2>
                    <p>Notre vision est de contribuer à une agriculture plus durable, plus efficace et plus rentable pour les agriculteurs. Nous croyons en l’innovation et en la collaboration pour relever les défis actuels de l’agriculture tels que la sécurité alimentaire, la préservation de l’environnement et l’adaptation aux changements climatiques.</p>
                </div>
                <div class="about-style-one-info">
                    <h2 class="title">Notre mission</h2>
                    <p>La mission de Synergie Agro est d’intervenir sur toute la chaine de valeur c’est-à-dire, de la production, de la transformation et de la commercialisation.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Choose Us 
============================================= -->
<div class="choose-us-style-three-area default-padding bg-dark text-light">
    <div class="illustration-bottom">
        <img src="<?= SA_IMG_URL . 'illustration/17.png'; ?>" alt="Illustration">
    </div>
    <div class="shape" style="background-image: url(<?= SA_IMG_URL . '800x800.png;' ?>);">
        <a href="https://www.youtube.com/watch?v=3JigXb9KXqI" class="popup-youtube video-play-button">
            <i class="fas fa-play"></i>
            <div class="effect"></div>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6 pl-60 pl-md-15 pl-xs-15">
                <h2 class="title">Synergie Agro en Vidéo</h2>
                <p>Découvrez Synergie Agro à travers notre vidéo de présentation sur notre chaîne YouTube officielle. À travers des images captivantes et des témoignages inspirants, cette vidéo vous emmène dans un voyage passionnant par nos réalisations, nos projets futurs et notre engagement envers une agriculture durable.</p>
                <div class="list-grid">
                    <ul class="list-item">
                        <li>Agriculture moderne, biologique et durable</li>
                        <li>Innovation technologique</li>
                        <li>Qualité des produits et services</li>
                        <li>Collaboration avec les acteurs de l'agro-industrie</li>
                    </ul>
                </div>
                <div class="mt-50">
                    <a class="btn btn-theme btn-md radius animation" href="http://localhost:81/synergie-agro/domaines-dintervention/"><i class="fab fa-youtube"></i> Notre chaîne YouTube</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Choose Us -->

<!-- Start Brand
============================================= -->
<div class="brand-style-two-area text-center bg-gray default-padding">
    <div class="container">
        <div class="brand-style-two">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand5col swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <img src="<?= SA_IMG_URL . 'brand/1.png'; ?>" alt="Thumb">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <img src="<?= SA_IMG_URL . 'brand/2.png'; ?>" alt="Thumb">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <img src="<?= SA_IMG_URL . 'brand/3.png'; ?>" alt="Thumb">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <img src="<?= SA_IMG_URL . 'brand/4.png'; ?>" alt="Thumb">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <img src="<?= SA_IMG_URL . 'brand/5.png'; ?>" alt="Thumb">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <img src="<?= SA_IMG_URL . 'brand/3.png'; ?>" alt="Thumb">
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Brand -->
        </div>
    </div>
</div>
<!-- End Brand -->

<?php get_footer(); ?>