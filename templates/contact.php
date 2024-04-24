<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start Contact Us 
    ============================================= -->
<div class="contact-area contact-page overflow-hidden bg-gray default-padding">
    <div class="container">
        <div class="row align-center">

            <div class="col-tact-stye-one col-xl-7 col-lg-7">
                <div class="contact-form-style-one mb-md-50">
                    <?php if (get_field('form_subtitle')) : ?>
                        <h5 class="sub-title"><?php the_field('form_subtitle'); ?></h5>
                    <?php endif; ?>
                    <?php if (get_field('form_title')) : ?>
                        <h2 class="heading"><?php the_field('form_title'); ?></h2>
                    <?php endif; ?>
                    <!-- Contact form -->
                    <?= do_shortcode('[contact-form-7 id="fc5a2ef" title="Formulaire de contact" html_class="contact-form"]'); ?>
                </div>
            </div>

            <div class="col-tact-stye-one col-xl-5 col-lg-5 pl-80 pl-md-15 pl-xs-15">
                <div class="contact-style-one-info">
                    <?php if (get_field('contact_title')) : ?>
                        <h2>
                            <span>
                                <?php the_field('contact_title'); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                    <path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path>
                                </svg>
                            </span>
                        </h2>
                    <?php endif; ?>
                    <ul>
                        <li>
                            <div class="content">
                                <h5 class="title">Roaming</h5>
                                <a href="tel:+22890233809">+228 90 23 38 09</a>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <h5 class="title">Téléphone</h5>
                                <a href="tel:+22822210452">+228 22 21 04 52</a>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h5 class="title">Siège administratif</h5>
                                <p>Route de Kpalimé près CEET Akossombo 08 B.P 81809 Lomé-Togo N° RCCM : TG-LOM 2020 A3319 N°CFE : 05177PP2020/2020</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h5 class="title">Siège technique</h5>
                                <p>Agou Nyogbo près de l'orphelinat</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h5 class="title">Email</h5>
                                <a href="mailto:synergieagro2020@gmail.com">synergieagro2020@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<?php get_footer(); ?>