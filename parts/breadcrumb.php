<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url(<?= SA_IMG_URL . '1900x400.png'; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1><?php the_title(); ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <?php $home_title = get_the_title(get_option('page_on_front')); ?>
                        <li><a href="<?= esc_url(get_home_url()); ?>"><i class="fas fa-home"></i> <?= $home_title; ?></a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->