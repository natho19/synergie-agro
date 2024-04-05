<?php get_header(); ?>

<?php get_template_part('parts/breadcrumb'); ?>

<!-- Start Project Details 
    ============================================= -->
<div class="project-details-style-one default-padding">
    <div class="container">
        <div class="project-detail-content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-widget quick-contact-widget bg-dark text-light mb-50">
                        <div class="content">
                            <h3>Besoin d'aide ?</h3>
                            <p>Notre équipe dévouée est là pour répondre à toutes vos questions, discuter de vos besoins spécifiques et explorer des opportunités de partenariat.</p>
                            <h2>+228 90 23 38 09</h2>
                            <h4><a href="contact@synergieagro.com">contact@synergieagro.com</a></h4>
                            <a class="btn mt-30 circle btn-theme animation btn-md" href="http://localhost:81/synergie-agro/contact/">Nous contacter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-details-top">
                        <img src="<?= SA_IMG_URL . '800x800.png'; ?>" alt="800x800">
                    </div>
                    <div class="item-grid-container">
                        <div class="single-grid">
                            <div class="item-grid-colum">
                                <div class="left-info">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <?php $content = get_post()->post_content;
                                if (!empty($content)) : ?>
                                    <div class="right-info">
                                        <?php the_content(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Project Details Area -->

<?php get_footer(); ?>