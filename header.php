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
                            <?php if (!empty($sa_options['roaming'])) : ?>
                                <a href="tel:<?= sa_link_number($sa_options['roaming']); ?>">
                                <i class="far fa-mobile"></i>
                                <?= $sa_options['roaming']; ?> 
                            </a>
                            <?php endif; ?>
                            <?php if (!empty($sa_options['telephone'])) : ?>
                                <a href="tel:<?= sa_link_number($sa_options['telephone']); ?>">
                                    <i class="fas fa-phone-alt"></i>
                                    <?= $sa_options['telephone']; ?> 
                                </a>
                            <?php endif; ?>   
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="social">
                        <ul>
                            <?php if (!empty($sa_options['youtube'])) : ?>
                                <li><a href="<?= esc_url($sa_options['youtube']); ?>"><i class="fab fa-youtube"></i></a></li>
                            <?php endif; ?>
                            <?php if (!empty($sa_options['tiktok'])) : ?>
                                <li><a href="<?= esc_url($sa_options['tiktok']); ?>"><i class="fab fa-tiktok"></i></a></li>
                            <?php endif; ?>
                            <?php if (!empty($sa_options['facebook'])) : ?>
                                <li><a href="<?= esc_url($sa_options['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <?php endif; ?>
                            <?php if (!empty($sa_options['linkedin'])) : ?>
                                <li><a href="<?= esc_url($sa_options['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            <?php endif; ?>
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

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main',
                        'container' => false,
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div><!-- /.navbar-collapse -->
                <!-- Main Nav -->
            </div>

            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->