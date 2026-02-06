<!-- Single Item -->
<div class="gallery-style-one">
    <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
    <div class="overlay">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>
</div>
<!-- End Single Item -->