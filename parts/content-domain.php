<div class="col-lg-4 col-md-6 service-one-single">
    <div class="service-style-one-item text-center">
        <div class="thumb">
            <?php $domain_image = get_sub_field('image'); ?>
            <img src="<?= esc_url($domain_image ? $domain_image['url'] : SA_IMG_URL . '900x600.png'); ?>" alt="<?= esc_attr($domain_image ? $domain_image['alt'] : '900x600'); ?>">
        </div>

        <?php if (get_sub_field('description')) : ?>
            <div class="info">
                <p><?php the_sub_field('description'); ?></p>
            </div>
        <?php endif; ?>

        <?php if (get_sub_field('link')) : ?>
            <a href="<?= esc_url(get_sub_field('link')); ?>" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
        <?php endif; ?>
    </div>
</div>