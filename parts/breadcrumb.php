<!-- Start Breadcrumb 
============================================= -->
<?php
global $sa_options;
$homepage_title = get_the_title(get_option('page_on_front'));
$page_title = sa_get_page_title();
?>

<?php if ($sa_options['banner']['url']) : ?>
    <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url(<?= $sa_options['banner']['url']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1><?= $page_title; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?= esc_url(get_home_url()); ?>"><i class="fas fa-home"></i><?= $homepage_title ?></a>
                            </li>
                            <li class="active"><?= $page_title ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End Breadcrumb -->