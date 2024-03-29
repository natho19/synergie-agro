<!-- Start Breadcrumb 
============================================= -->
<?php
$home_title = get_the_title(get_option('page_on_front'));
$page_title = "";
if (is_404()) {
    $page_title = "404";
} elseif (is_home()) {
    $page_title = get_queried_object()->post_title;
} elseif (is_tax()) {
    $page_title = get_queried_object()->name;
} elseif (is_post_type_archive()) {
    $page_title = post_type_archive_title('', false);
} else {
    $page_title = get_the_title();
}
?>

<div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url(<?= SA_IMG_URL . '1900x400.png'; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1><?= $page_title; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?= esc_url(get_home_url()); ?>"><i class="fas fa-home"></i> <?= $home_title; ?></a></li>
                        <li class="active"><?= $page_title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->