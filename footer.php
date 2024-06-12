<?php global $sa_options; ?>

<!-- Start Footer 
    ============================================= -->
<footer class="bg-dark text-light" style="background-image: url(<?= SA_IMG_URL . 'shapes/8.png'; ?>);">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <!-- Single Item -->
                <?php if (is_active_sidebar('sidebar-area-1')) : ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item about">
                            <img class="logo" src="<?= $sa_options['logo']['url']; ?>" alt="Logo">
                            <?php dynamic_sidebar('sidebar-area-1'); ?>
                            <div class="select-dropdown">
                                <i class="fas fa-globe"></i>
                                <?php pll_the_languages(['dropdown'  => 3]); ?>
                            </div>
                        </div>
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
                        <h4 class="widget-title">Contact</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="far fa-mobile"></i>
                                </div>
                                <div class="content">
                                    <strong>Roaming</strong>
                                    <a href="tel:<?= $sa_options['roaming']; ?>"><?= $sa_options['roaming']; ?></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <strong><?= pll_e('Téléphone'); ?></strong>
                                    <a href="tel:<?= $sa_options['telephone']; ?>"><?= $sa_options['telephone']; ?></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <strong>Email</strong>
                                    <a href="mailto:<?= $sa_options['email']; ?>"><?= $sa_options['email']; ?></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="far fa-mail-bulk"></i>
                                </div>
                                <div class="content">
                                    <strong><?= pll_e('Titre Boîte Postale'); ?></strong>
                                    <?= pll_e('Contenu Boîte Postale'); ?>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fal fa-building"></i>
                                </div>
                                <div class="content">
                                    <strong><?= pll_e('Titre Siège Administratif'); ?></strong>
                                    <?= pll_e('Contenu Siège Administratif'); ?>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="far fa-wrench"></i>
                                </div>
                                <div class="content">
                                    <strong><?= pll_e('Titre Siège Technique'); ?></strong>
                                    <?= pll_e('Contenu Siège Technique'); ?>
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
                    <p>&copy; Copyright <?= get_the_date('Y') ?>. <?= pll_e('Copyright'); ?> <a href="#">Code House</a></p>
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