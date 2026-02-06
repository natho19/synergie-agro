<!-- Single Item -->
<div class="blog-style-one">
    <div class="thumb">
        <a href="<?php the_permalink(); ?>">
            <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
        </a>
        <div class="date">
            <strong><?= get_the_date('d'); ?></strong>
            <span><?= get_the_date('M, Y') ?></span>
        </div>
    </div>
    <div class="info">
        <h3 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
    </div>
</div>
<!-- Single Item -->