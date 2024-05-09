<?php global $sa_options; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area top-bar-style-one bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <ul class="item-flex">
                        <li>
                            <a href="tel:<?= $sa_options['roaming']; ?>">
                                <i class="fas fa-phone-alt"></i>
                                <?= $sa_options['roaming'] . ' / ' . $sa_options['telephone']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="social">
                        <ul>
                            <li><a href="<?= esc_url($sa_options['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= esc_url($sa_options['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= esc_url($sa_options['youtube']); ?>"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="<?= esc_url($sa_options['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav inc-shape navbar-sticky navbar-default validnavs dark">

            <div class="container d-flex justify-content-between align-items-center">
                <div class="navbar-brand-left">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?= esc_url(get_home_url()); ?>">
                            <img src="<?= $sa_options['logo']['url']; ?>" class="logo" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <img src="<?= $sa_options['logo']['url']; ?>" alt="Logo">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="http://localhost:81/synergie-agro/" class="active">Accueil</a></li>
                        <li><a href="http://localhost:81/synergie-agro/a-propos/">A propos</a></li>
                        <li><a href="http://localhost:81/synergie-agro/domaines-dintervention/">Domaines d'intervention</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projets</a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost:81/synergie-agro/statuts/realisations/">Réalisations</a></li>
                                <li><a href="http://localhost:81/synergie-agro/statuts/projets-futurs/">Projets futurs</a></li>
                                <li><a href="http://localhost:81/synergie-agro/projets/">Tous nos projets</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost:81/synergie-agro/actualites/">Actualités</a></li>
                        <li><a href="http://localhost:81/synergie-agro/contact/">Contact</a></li>
                    </ul>

                    <div class="select-dropdown">
                        <i class="fas fa-globe"></i>
                        <select>
                            <option value="fr" selected>FR</option>
                            <option value="eng">EN</option>
                        </select>
                    </div>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation / A utiliser pour le Select des langues -->
                    <div class="attr-nav">
                        <div class="select-dropdown">
                            <i class="fas fa-globe"></i>
                            <select>
                                <option value="fr" selected>FR</option>
                                <option value="eng">EN</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>
                <!-- Main Nav -->
            </div>

            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->