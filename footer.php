<?php global $sa_options; ?>

<!-- Start Footer 
    ============================================= -->
<footer class="bg-dark text-light" style="background-image: url(<?= SA_IMG_URL . 'shape/8.png'; ?>);">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item about">
                        <img class="logo" src="<?= $sa_options['logo']['url']; ?>" alt="Logo">
                        <?php if ($sa_options['description']) : ?>
                            <p><?= $sa_options['description']; ?></p>
                        <?php endif; ?>
                        <div class="select-dropdown">
                            <i class="fas fa-globe"></i>
                            <select>
                                <option value="fr" selected>FR</option>
                                <option value="eng">EN</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-lg-3 offset-lg-1 col-md-6 item">
                    <div class="footer-item link">
                        <h4 class="widget-title">Liens utiles</h4>
                        <ul>
                            <li>
                                <a href="http://localhost:81/synergie-agro/a-propos/">A propos</a>
                            </li>
                            <li>
                                <a href="http://localhost:81/synergie-agro/domaines-dintervention/">Domaines d'intervention</a>
                            </li>
                            <li>
                                <a href="http://localhost:81/synergie-agro/statuts/realisations/">Réalisations</a>
                            </li>
                            <li>
                                <a href="http://localhost:81/synergie-agro/statuts/projets-futurs/">Projets futurs</a>
                            </li>
                            <li>
                                <a href="http://localhost:81/synergie-agro/actualites/">Actualités</a>
                            </li>
                            <li>
                                <a href="http://localhost:81/synergie-agro/contact/">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item contact">
                        <h4 class="widget-title">Contact</h4>
                        <ul>

                            <?php if ($sa_options['roaming']) : ?>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-mobile"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Roaming</strong>
                                        <a href="tel:<?= $sa_options['roaming']; ?>"><?= $sa_options['roaming']; ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if ($sa_options['telephone']) : ?>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Téléphone</strong>
                                        <a href="tel:<?= $sa_options['telephone']; ?>"><?= $sa_options['telephone']; ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if ($sa_options['email']) : ?>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Email</strong>
                                        <a href="mailto:<?= $sa_options['email']; ?>"><?= $sa_options['email']; ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if ($sa_options['mailbox']) : ?>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-mail-bulk"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Boîte Postale</strong>
                                        <?= $sa_options['mailbox']; ?>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if ($sa_options['head_office']) : ?>
                                <li>
                                    <div class="icon">
                                        <i class="fal fa-building"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Siège administratif</strong>
                                        <?= $sa_options['head_office']; ?>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if ($sa_options['technical_office']) : ?>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-wrench"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Siège technique</strong>
                                        <?= $sa_options['technical_office']; ?>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!-- Single Item -->
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; Copyright <?= get_the_date('Y') ?>. Tous droits réservés Synergie Agro par <a href="#">Code House</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
    <div class="shape-right-bottom">
        <img src="<?= SA_IMG_URL . 'shape/7.png'; ?>" alt="Shape">
    </div>
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
    ============================================= -->
<?php wp_footer(); ?>

</body>

</html>