<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agrica - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>Agrica - Organic Farm Agriculture Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?= SA_IMG_URL . 'favicon.png'; ?>" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <?php wp_head(); ?>
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

</head>

<body>

    <!-- Start Preloader 
    ============================================= -->
    <div id="preloader">
        <div id="agrica-preloader" class="agrica-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area top-bar-style-one bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-8">
                    <ul class="item-flex">
                        <li>
                            <i class="fas fa-clock"></i> Opening Hours : Sunday- Friday, 08:00 am - 05:00pm
                        </li>
                        <li>
                            <a href="tel:+4733378901"><i class="fas fa-phone-alt"></i> +4733378901</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-end">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
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
                        <a class="navbar-brand" href="index.html">
                            <img src="<?= SA_IMG_URL . 'logo-mix.png'; ?>" class="logo" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="<?= SA_IMG_URL . 'logo.png'; ?>" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>
                    
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Agriculture</a></li>
                                <li><a href="index-2.html">Home Farming</a></li>
                                <li><a href="index-3.html">Agriculture Shop</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="farmers.html">Team</a></li>
                                <li><a href="farmer-details.html">Team Details</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="project.html" class="dropdown-toggle" data-toggle="dropdown" >Projects</a>
                            <ul class="dropdown-menu">
                                <li><a href="project.html">Project</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services.html">Services Version One</a></li>
                                <li><a href="services-2.html">Services Version Two</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop Product</a></li>
                                <li><a href="shop-single.html">Shop Single</a></li>
                                <li><a href="shop-single-thumb-only.html">Shop Single Version Two</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    <i class="far fa-shopping-cart"></i>
                                    <span class="badge">3</span>
                                </a>
                                <ul class="dropdown-menu cart-list">
                                    <li>
                                        <div class="thumb">
                                            <a href="#" class="photo">
                                                <img src="<?= SA_IMG_URL . 'products/1.png'; ?>" alt="Thumb">
                                            </a>
                                            <a href="#" class="remove-product">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h6><a href="#">Delica omtantur </a></h6>
                                            <p>2x - <span class="price">$99.99</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#" class="photo">
                                                <img src="<?= SA_IMG_URL . 'products/2.png'; ?>" alt="Thumb">
                                            </a>
                                            <a href="#" class="remove-product">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h6><a href="#">Omnes ocurreret</a></h6>
                                            <p>1x - <span class="price">$33.33</span></p>
                                        </div>
                                    </li>
                                    <li class="total">
                                        <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                        <a href="#" class="btn btn-default btn-cart">Cart</a>
                                        <a href="#" class="btn btn-default btn-cart">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="button"><a href="#">Register</a></li>
                        </ul>
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