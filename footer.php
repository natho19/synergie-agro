    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light" style="background-image: url(<?= SA_IMG_URL . 'shape/8.png'; ?>);">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item about">
                            <img class="logo" src="<?= SA_IMG_URL . 'logo.png'; ?>" alt="Logo">
                            <p>Synergie Agro est une entreprise spécialisée dans la conception de solutions technologiques novatrices pour le développement de toute la chaîne de valeur en agro-industrie.</p>
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
                                <li>
                                    <div class="icon">
                                        <i class="fal fa-building"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Siège administratif</strong>
                                        Route de Kpalimé près CEET Akossombo
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-wrench"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Siège technique</strong>
                                        Agou Nyogbo près de l'Orphelinat
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-mail-bulk"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Boîte Postale</strong>
                                        08 B.P 81809 Lomé-Togo
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-mobile"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Roaming</strong>
                                        <a href="tel:22890233809">+228 90 23 38 09</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Téléphone</strong>
                                        <a href="tel:22822210452">+228 22 21 04 52</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Email</strong>
                                        <a href="mailto:synergieagro2020@gmail.com">synergieagro2020@gmail.com</a>
                                    </div>
                                </li>
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