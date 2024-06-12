<!-- Single Item -->
<div class="gallery-style-one">
    <img src="<?= has_post_thumbnail() ? the_post_thumbnail_url('full') : SA_IMG_URL . 'placeholders/800x800.png'; ?>" alt="<?= esc_attr(get_the_title()); ?>">
    <div class="overlay">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>
</div>
<!-- End Single Item -->