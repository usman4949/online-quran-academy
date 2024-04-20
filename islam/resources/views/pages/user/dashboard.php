<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
<?php
            $isUserLoggedIn = session('isUserLoggedIn');
            if ($isUserLoggedIn) {
                $name = session('username');
                $user_id=session('userid');
            } else {
                $name = 'Anni';
                $user_id=0;
            }
        ?>
    <h4 class="text_orange fw-bold">Hey <?=$name?> !</h4>
    <h5 class="mb-3">HELLO, Enjoy your Trip Easily</h5>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange"><?=usertotal_favouritetrip($user_id)?></h4>
                <p class="text_light">Favourite Trips</p>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange"><?=usertotal_orders($user_id)?></h4>
                <p class="text_light">My Bookings</p>
            </div>
        </div>
        <!-- <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange">2100 $</h4>
                <p class="text_light">E-Vouchers</p>
            </div>
        </div> -->
        <!-- <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange">20K+</h4>
                <p class="text_light">Happy Customers</p>
            </div>
        </div> -->
    </div>

    <div class="card contact_card h-100 p-3 py-4 text-center">
        <!-- <figure class="highcharts-figure">
            <div id="container"></div>
        </figure> -->

        
        <section class="find_categories_section position-relative">
                    <div class="row">
                        <div class="col-lg-5 col-md-10 text-start">
                            <h4 class="fw-bold top_activites_heading">Top Acitivites</h4><span><a href="<?= base_url('tours') ?>" class="btn btn_primary rounded-pill text_small top_activity_dashboard">See All</a></span>
                        </div>
                    </div>
                    <div class="find_categories_container">
                        <div class="owl-carousel owl-theme find_categories_carousel">
                            <?php

                            if (isset($top_product) and !empty($top_product)) {
                                foreach ($top_product as $key => $val) {
                                    if (isset($val['options'][0]) and isset($val['images'][0]['path'])) {

                                        if (!empty($val['images'][0]['path'])) {
                                            $image =base_url('uploads/products/images/' . $val['images'][0]['path'] . '');
                                        } else {
                                            $image = base_url() . 'assets/images/no_image.png';
                                        }
                            ?>
                                        <div class="find_categories_item">
                                            <div class="category_card2 p-2 text-start">
                                                <a href="<?= base_url('gettour_detail/' . $val['id'] . '') ?>">
                                                    <div class="category_img_section2 position-relative">
                                                        <img src="<?= $image ?>" alt="" class="w-100 h-100" style="object-fit: cover;">
                                                    </div>
                                                </a>
                                                <a href="<?= base_url('gettour_detail/' . $val['id'] . '') ?>" class="text-decoration-none text-dark">
                                                    <h6 class="mt-2 fw-bold"><?= substr($val['title'], 0, 23) . (strlen($val['title']) > 23 ? '...' : '') ?></h6>
                                                    <p class="text_light description_text mb-0">
                                                        <?= substr(strip_tags($val['overview']), 0, 50) . (strlen(strip_tags($val['overview'])) > 50 ? '...' : '') ?>
                                                    </p>
                                                </a>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-bold mb-0">AED:<?= $val['options'][0]['adult_regular_price']  ?> <span class="text_light description_text">/person</span> </h6>
                                                    <a href="<?= base_url('gettour_detail/' . $val['id'] . '') ?>" class="btn btn_primary rounded-pill text_small mt-2">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                }
                            } else { ?>
                                No Activity Found
                            <?php } ?>

                        </div>
                    </div>
                </section>
    </div>

</div>
<?= $this->endSection() ?>