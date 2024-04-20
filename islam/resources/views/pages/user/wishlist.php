<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
    <div class="row mb-4">
        <div class="col-lg-12 col-md-8 my-auto">
            <h4 class="my-auto">Wishlist</h4>
        </div>
        <!-- <div class="col-lg-4 col-md-6 my-auto">
            <p class="my-auto">Showing 4 of <span class="text_orange">10 Tours</span></p>
        </div> -->
        <!-- <div class="col-lg-4 col-md-4 my-auto">
            <select class="form-select form-control border-0">
                <option selected>Sort by Recommended</option>
                <option value="1">Sort by Date</option>
                <option value="2">Sort by Rating</option>
            </select>
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-3">
            <label class="form-label passenger_form_label mb-0">Date From</label>
            <input type="date" id="from_date" name="from_date" class="form-control form_custom_input search_vendor_order passenger_form_input h-auto rounded-pill">
            <input type="hidden" name="store_id" value="" class="form-control form_custom_input py-2">
            <?php if (validation_errors('message') || !empty($fieldErrors['message'])) : ?>
                <p class="text-danger"> <?= !empty(validation_show_error('message')) ? validation_show_error('message') :  $fieldErrors['message'] ?></p>
            <?php endif; ?>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <label class="form-label passenger_form_label mb-0">Date To</label>
            <input type="date" id="to_date" name="to_date" class="form-control form_custom_input search_vendor_order passenger_form_input h-auto rounded-pill">
        </div>
    </div>
    <div id="searched_orders_list">
        <div class="row">

            <?php if (!empty($wishList)) {

            ?>
                <?php foreach ($wishList as $key => $order) {

                    $product_info = getproductinfo(intval($order['product_id']));
                    $product_option = getproductoptions(intval($order['product_id']));

                ?>

                    <div class="col-lg-3 col-md-6 mb-4 mywishlist_card">
                        <div class="category_card p-2">
                            <div class="category_img_section position-relative" style="height: 150px;">
                                <div class="position-absolute top-0 end-0 mt-2 me-2" style="z-index: 1;">
                                    <button class="btn like_btn bg-white rounded-circle text_small align-items-center delete_icon" data-id="<?=$product_option['product_id']?>">
                                        <img src="<?= base_url("assets/images/svg/trash.svg") ?>" width="15" alt="">
                                    </button>
                                </div>
                                <a href="<?= base_url('gettour_detail/' . $product_option['product_id']) ?>" class="text-decoration-none color_primary fw-bold">
                                    <img src="<?= base_url('uploads/products/images/' . $product_info['cover_image']) ?>" alt="" style="width: 100%; height:100%; object-fit:cover">
                                </a>
                            </div>
                            <div class="d-flex justify-content-between align-items-start my-2">

                                <a href="<?= base_url('gettour_detail/' . $product_option['product_id']) ?>" class="text-decoration-none color_primary fw-bold">
                                    <?= $product_info['title'] ?> </a>
                            </div>
                            <a href="<?= base_url('gettour_detail/' . $product_option['product_id']) ?>" class="text-decoration-none color_primary fw-bold">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex">

                                        <?php
                                        if (!empty($product_option['adult_sale_price'])) { ?>
                                            <p class=" fw-bold text_light text_medium text-decoration-line-through mb-0 me-2">
                                                AED <?= $product_option['adult_regular_price'] ?> </p>
                                            <p class=" fw-bold text_medium text_info mb-0">
                                                AED <?= $product_option['adult_sale_price'] ?> </p>
                                        <?php } else { ?>
                                            <p class=" fw-bold text_medium text_info mb-0">
                                                AED <?= $product_option['adult_regular_price'] ?> </p>
                                        <?php } ?>
                                    </div>
                                    <a href="<?= base_url('gettour_detail/' . $product_option['product_id']) ?>" class="btn btn_primary rounded-pill text_small">Book Now</a>
                                </div>
                            </a>
                        </div>

                    </div>

                <?php
                }
            } else { ?>
                <div class="text-center p-5">
                    <h5>No Wishlist Found</h5>
                </div>


                <section class="find_categories_section position-relative">
                    <div class="row">
                        <div class="col-lg-5 col-md-10">
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
                                            <div class="category_card2 p-2">
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
                                                    <a href="<?= base_url('gettour_detail/' . $val['id'] . '') ?>" class="btn btn_primary rounded-pill text_small">Book Now</a>
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
            <?php } ?>
        </div>

        <hr>
        <div id="pagination">
            <?= $pager_links ?>
        </div>

    </div>

</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->include('pages/user/footer/filter_wishlist') ?>
<?= $this->endSection() ?>