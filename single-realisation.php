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
                            <p>Contactez-nous par téléphone ou par email, nous vous répondrons dans les meilleurs délais.</p>
                            <?php if ($sa_options['roaming']) : ?>
                                <h2><a href="tel:<?= sa_link_number($sa_options['roaming']); ?>"><?= $sa_options['roaming']; ?></a></h2>
                            <?php endif; ?>
                            <?php if ($sa_options['telephone']) : ?>
                                <h2><a href="tel:<?= sa_link_number($sa_options['telephone']); ?>"><?= $sa_options['telephone']; ?></a></h2>
                            <?php endif; ?>
                            <?php if ($sa_options['email']) : ?>
                                <h4><a href="<?= $sa_options['email']; ?>"><?= $sa_options['email']; ?></a></h4>
                            <?php endif; ?>
                            <a class="btn mt-30 circle btn-theme animation btn-md" href="<?= esc_url(get_permalink(get_page_by_path('contact'))); ?>">Nous contacter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="project-details-top">
                            <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                        </div>
                    <?php endif; ?>

                    <?php $content = get_post()->post_content; if (!empty($content)) : ?>
                        <div class="item-grid-container">
                            <div class="single-grid">
                                <div class="item-grid-colum">
                                    <div class="left-info">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <div class="right-info">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php $realization_images = get_field('realization_gallery'); if ($realization_images) : ?>
                        <div class="project-static-gallery">
                            <div class="row">
                                <h4>Autres images</h4>
                                <?php foreach ($realization_images as $image) : ?>
                                    <div class="col-lg-6 col-md-6">
                                        <a href="<?= esc_url($image['url']); ?>" class="item popup-gallery">
                                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Project Details Area -->

<?php get_footer(); ?>