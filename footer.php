<?php global $sa_options; ?>

<!-- Start Footer 
    ============================================= -->
<footer class="bg-theme text-light">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <!-- Single Item -->
                <?php if (is_active_sidebar('sidebar-area-1')) : ?>
                    <div class="col-lg-4 col-md-6 item">
                        <?php dynamic_sidebar('sidebar-area-1'); ?>
                    </div>
                <?php endif; ?>
                <!-- End Single Item -->

                <!-- Single Item -->
                <?php if (is_active_sidebar('sidebar-area-2')) : ?>
                    <div class="col-lg-3 offset-lg-1 col-md-6 item">
                        <?php dynamic_sidebar('sidebar-area-2'); ?>
                    </div>
                <?php endif; ?>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item contact">
                        <h4 class="widget-title">Contacts</h4>
                        <ul>
                            <?php if (!empty($sa_options['roaming'])): ?>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-mobile"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Roaming</strong>
                                        <a href="tel:<?= sa_link_number($sa_options['roaming']); ?>"><?= $sa_options['roaming']; ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($sa_options['telephone'])): ?>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Téléphone</strong>
                                        <a href="tel:<?= sa_link_number($sa_options['telephone']); ?>"><?= $sa_options['telephone']; ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($sa_options['email'])): ?>
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
                            <?php if (!empty($sa_options['boite_postale'])): ?>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-mail-bulk"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Boîte Postale</strong>
                                        <p><?= $sa_options['boite_postale']; ?></p>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($sa_options['siege_administratif'])): ?>
                                <li>
                                    <div class="icon">
                                        <i class="fal fa-building"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Siège Administratif</strong>
                                        <p><?= $sa_options['siege_administratif']; ?></p>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($sa_options['siege_technique'])): ?>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-wrench"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Siège Technique</strong>
                                        <p><?= $sa_options['siege_technique']; ?></p>
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
                    <p>&copy; Copyright <?= get_the_date('Y') ?> Synergie Agro par <a href="#">Code House</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
    <div class="shape-right-bottom">
        <img src="<?= SA_IMG_URL . 'shapes/7.png'; ?>" alt="Shape">
    </div>
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
    ============================================= -->
<?php wp_footer(); ?>

</body>

</html>