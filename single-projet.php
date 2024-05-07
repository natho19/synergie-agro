<?php global $sa_options; ?>

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
                            <?php if ($sa_options['need_help']) : ?>
                                <p><?= $sa_options['need_help']; ?></p>
                            <?php endif; ?>
                            <?php if ($sa_options['roaming']) : ?>
                                <h2><a href="tel:<?= $sa_options['roaming']; ?>"><?= $sa_options['roaming']; ?></a></h2>
                            <?php endif; ?>
                            <?php if ($sa_options['email']) : ?>
                                <h4><a href="<?= $sa_options['email']; ?>"><?= $sa_options['email']; ?></a></h4>
                            <?php endif; ?>
                            <a class="btn mt-30 circle btn-theme animation btn-md" href="<?= esc_url(get_permalink(get_page_by_path('contact'))); ?>">Nous contacter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-details-top">
                        <img src="<?= has_post_thumbnail() ? the_post_thumbnail_url('full') : SA_IMG_URL . '800x800.png'; ?>" alt="<?= esc_attr(get_the_title()); ?>">
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