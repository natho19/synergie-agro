<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start Contact Us 
    ============================================= -->
<div class="contact-area contact-page overflow-hidden bg-gray default-padding">
    <!-- <div class="sahpe-right-bottom">
            <img src="<?= SA_IMG_URL . 'shape/16.png'; ?>" alt="Image Not Found">
        </div> -->
    <div class="container">
        <div class="row align-center">

            <div class="col-tact-stye-one col-xl-7 col-lg-7">
                <div class="contact-form-style-one mb-md-50">
                    <!-- <img src="<?= SA_IMG_URL . 'illustration/10.png'; ?>" alt="Image Not Found"> -->
                    <h5 class="sub-title">Une question ?</h5>
                    <h2 class="heading">Nous contacter</h2>
                    <!-- action="assets/mail/contact.php" -->
                    <form action="" method="POST" class="contact-form contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nom *" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email *" type="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Téléphone" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    <i class="fa fa-paper-plane"></i> Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-tact-stye-one col-xl-5 col-lg-5 pl-80 pl-md-15 pl-xs-15">
                <div class="contact-style-one-info">
                    <h2>
                        <span>
                            Informations de contact
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                <path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path>
                            </svg>
                        </span>
                    </h2>
                    <p>
                        Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.
                    </p>
                    <ul>
                        <li>
                            <div class="content">
                                <h5 class="title">Hotline</h5>
                                <a href="">+4733378901</a>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h5 class="title">Siège administratif</h5>
                                <p>55 Main Street, The Grand Avenue 2nd Block, <br> New York City</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h5 class="title">Siège technique</h5>
                                <p>55 Main Street, The Grand Avenue 2nd Block, <br> New York City</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h5 class="title">Official Email</h5>
                                <a href="mailto:info@agrul.com.com">info@agrul.com</a>
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