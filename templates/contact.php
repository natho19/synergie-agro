<?php global $sa_options; ?>

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
                    <?= do_shortcode('[contact-form-7 id="938ffce" title="Formulaire de contact" html_class="contact-form"]'); ?>
                </div>
            </div>

            <div class="col-tact-stye-one col-xl-5 col-lg-5 pl-80 pl-md-15 pl-xs-15">
                <div class="contact-style-one-info">
                    <h2>Contacts</h2>
                    <ul>
                        <?php if (!empty($sa_options['rccm'])): ?>
                            <li>
                                <div class="content">
                                    <h5 class="title">N° RCCM</h5>
                                    <p><?= $sa_options['rccm']; ?></p>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($sa_options['cfe'])): ?>
                            <li>
                                <div class="content">
                                    <h5 class="title">N° CFE</h5>
                                    <p><?= $sa_options['cfe']; ?></p>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($sa_options['roaming'])): ?>
                            <li>
                                <div class="content">
                                    <h5 class="title">Roaming</h5>
                                    <a href="tel:<?= sa_link_number($sa_options['roaming']); ?>"><?= $sa_options['roaming']; ?></a>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($sa_options['telephone'])): ?>
                            <li>
                                <div class="content">
                                    <h5 class="title">Téléphone</h5>
                                    <a href="tel:<?= sa_link_number($sa_options['telephone']); ?>"><?= $sa_options['telephone']; ?></a>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($sa_options['email'])): ?>
                            <li>
                                <div class="info">
                                    <h5 class="title">Email</h5>
                                    <a href="mailto:<?= $sa_options['email']; ?>"><?= $sa_options['email']; ?></a>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($sa_options['boite_postale'])): ?>
                            <li>
                                <div class="info">
                                    <h5 class="title">Boîte Postale</h5>
                                    <p><?= $sa_options['boite_postale']; ?></p>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($sa_options['siege_administratif'])): ?>
                            <li>
                                <div class="info">
                                    <h5 class="title">Siège Administratif</h5>
                                    <p><?= $sa_options['siege_administratif']; ?></p>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($sa_options['siege_technique'])): ?>
                            <li>
                                <div class="info">
                                    <h5 class="title">Siège Technique</h5>
                                    <p><?= $sa_options['siege_technique']; ?></p>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<?php get_footer(); ?>