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
                    <img src="<?= SA_IMG_URL . '800x1000.png'; ?>" alt="Image Not Found">
                    <div class="animation-shape">
                        <img src="<?= SA_IMG_URL . 'illustration/1.png'; ?>" alt="Image Not Found">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                <div class="about-style-one-info">
                    <h2 class="title">Qui sommes-nous ?</h2>
                    <p>SYNERGIE AGRO est une société qui s'est spécialisé dans la conception de solution technologiques innovantes pour le développement de toute la chaîne de valeur en agro-industrie.</p>
                </div>
                <div class="about-style-one-info">
                    <h2 class="title">Notre vision</h2>
                    <p>Notre vision est de contribuer à une agriculture plus durable, plus efficace et plus rentable pour les agriculteurs. Nous croyons en l’innovation et en la collaboration pour relever les défis actuels de l’agriculture tels que la sécurité alimentaire, la préservation de l’environnement et l’adaptation aux changements climatiques.</p>
                </div>
                <div class="about-style-one-info">
                    <h2 class="title">Notre mission</h2>
                    <p>La mission de SYNERGIE AGRO est d’intervenir sur toute la chaine de valeur c’est-à-dire, de la production, de la transformation et de la commercialisation.</p>
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
        <img src="<?= SA_IMG_URL . 'illustration/17.png'; ?>" alt="Image Not Found">
    </div>
    <div class="shape" style="background-image: url(<?= SA_IMG_URL . '800x800.png;' ?>);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6 pl-60 pl-md-15 pl-xs-15">
                <h2 class="title">Healthy life with <br> fresh products</h2>
                <p>
                    Consume ipsum dolor sit amet consectetur adipisicing elit. Veritatis, illo ullam harum et fuga suscipit quibusdam sapiente. Corrupti ut consequatur magni minus! Iusto eos consectetur similique minus culpa odio temporibus.
                </p>
                <div class="list-grid">
                    
                    <div class="achivement-content">
                        <div class="item">
                            <div class="progressbar">
                                <div class="circle" data-percent="87">
                                    <strong></strong>
                                </div>
                            </div>
                            <h4>Organic Solutions</h4>
                        </div>
                    </div>
                    <ul class="list-item">
                        <li>Biodynamic food</li>
                        <li>Organic gardening</li>
                        <li>Organic food certification</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Choose Us -->

<?php get_footer(); ?>