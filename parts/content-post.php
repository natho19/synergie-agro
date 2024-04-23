<!-- Single Item -->
<div class="col-xl-4 col-md-6 single-item">
    <div class="blog-style-one">
        <div class="thumb">
            <a href="<?php the_permalink(); ?>">
                <img src="<?= has_post_thumbnail() ? the_post_thumbnail_url('full') : SA_IMG_URL . '900x600.png'; ?>" alt="<?= esc_attr(get_the_title()); ?>">
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
</div>
<!-- Single Item -->