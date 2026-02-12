<div class="col-lg-4 col-md-6 service-one-single">
    <div class="service-style-one-item text-center">
        <?php $domain_image = get_sub_field('image'); if ($domain_image) : ?>
            <div class="thumb">
                <img src="<?= esc_url($domain_image['url']); ?>" alt="<?= esc_attr($domain_image['alt']); ?>">
            </div>
        <?php endif; ?>
        <?php if (get_sub_field('description')) : ?>
            <div class="info">
                <p><?php the_sub_field('description'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>