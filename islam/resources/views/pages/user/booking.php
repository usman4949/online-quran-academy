<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
    <div class="row mb-4">
        <div class="col-lg-4 col-md-12 my-auto">
            <h4 class="my-auto">Booking Information</h4>
        </div>
        <!-- <div class="col-lg-4 col-md-6 my-auto">
            <p class="my-auto">Showing 4 of <span class="text_orange">10 Tours</span></p>
        </div>
        <div class="col-lg-4 col-md-6 my-auto">
            <select class="form-select form-control border-0">
                <option selected>Sort by Recommended</option>
                <option value="1">Sort by Date</option>
                <option value="2">Sort by Rating</option>
            </select>
        </div> -->
    </div>
    <div class="row mb-2">
        <div id="orders_search" data-oid="true">
            <div class="row search_filters mt-4">
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

                <div class="col-lg-3 col-md-6 mb-3">
                    <label class="form-label passenger_form_label mb-0">Order Status</label>
                    <select class="form-select form_custom_input py-2 mrg_start search_vendor_order form-select passenger_form_select_input passenger_form_input h-auto rounded-pill" name="order_status_id">
                        <option selected value="">Order Status</option>

                        <?php if (!empty($statuses['order_statuses'])) : ?>
                            <?php foreach ($statuses['order_statuses'] as $status) { ?>
                                <option value="<?= $status['id'] ?>"><?= $status['title'] ?></option>
                            <?php } ?>
                        <?php endif  ?>
                    </select>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <label class="form-label passenger_form_label mb-0">Payment Status</label>
                    <select class="form-select form_custom_input py-2 mrg_start search_vendor_order form-select passenger_form_select_input passenger_form_input h-auto rounded-pill" name="payment_status_id">
                        <option selected value="">Payment Status</option>
                        <?php if (!empty($statuses['payment_statuses'])) : ?>
                            <?php foreach ($statuses['payment_statuses'] as $status) { ?>
                                <option value="<?= $status['id'] ?>"><?= $status['title'] ?></option>
                            <?php } ?>
                        <?php endif ?>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 d-none">
                    <label class="form-label passenger_form_label mb-0">Sort By</label>
                    <select class="form-select passenger_form_select_input passenger_form_input h-auto rounded-pill">
                        <option selected>Sort by Recommended</option>
                        <option value="1">Sort by Date</option>
                        <option value="2">Sort by Rating</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="col-lg-2 col-md-3 text-end">
                        <a href="javascript:void(0)" class="btn btn_light rounded-pill reset_and_clear_btn text-end">Reset filters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="searched_orders_list">
        <?php if (!empty($ordersList)) {

        ?>
            <?php foreach ($ordersList as $key => $order) { 
                 if (!empty($order['productoption_detail']['cover_image'])) {
                    $image = base_url('uploads/products/images/' . $order['productoption_detail']['cover_image']);
                } else {
                    $image = base_url() . 'assets/images/no_image.png';
                }
                ?>

                <div class="card booking_card p-2 mb-3">
                    <div class="d-flex flex-wrap">
                        <div class="flex-shrink-0">
                            <div class="booking_card_img">
                                <img src="<?= $image ?>" alt="..." style="height: inherit;">
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="fw-bold"> <?= $order['productoption_detail']['title'] ?></h5>
                                    <p class="my-auto"> <img src="<?= base_url('assets/images/svg/panel_svg/location_black.svg') ?>" class="mb-1 me-1" alt="">Dubai</p>

                                    <p class="mb-1 mt-1"><span><strong>Total Price: </strong></span><span class="text-start text_orange fw-bold">AED <?= ($order['total']); ?></span></p>
                                    <p class="mb-1 mt-1"><strong>Tour Date:</strong> <?= date("j M, Y h:ia", strtotime($order['order_detail']['tour_date'])); ?></p>

                                    <!-- <div class="d-flex mt-2">
                                    <div class="rating_card p-2 d-flex justify-content-center align-items-center">
                                        4.2
                                    </div>
                                    <p class="my-auto ms-2">Very Good 371 reviews</p>
                                </div> -->
                                </div>
                                <div class="me-2">
                                    <p class="mb-0 text-end">Order Status</p>
                                    <p class="mb-0 text-end text_orange fw-bold"> <?= $order['order_status_title']; ?></p>
                                </div>
                            </div>

                            <div class="mt-3 text-end">
                                <a href="<?= base_url('admin/orders/detail?id=') . $order['id'] ?>" class="text-decoration-none btn btn_primary">View Information</a>
                            </div>
                            <!-- <hr class="my-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex">
                                <img src="<?= base_url('assets/images/svg/rating_star_fill.svg') ?>" class="" alt="">
                                <img src="<?= base_url('assets/images/svg/rating_star_fill.svg') ?>" class="ms-2" alt="">
                                <img src="<?= base_url('assets/images/svg/rating_star_fill.svg') ?>" class="ms-2" alt="">
                                <img src="<?= base_url('assets/images/svg/rating_star_fill.svg') ?>" class="ms-2" alt="">
                                <img src="<?= base_url('assets/images/svg/rating_star_dull.svg') ?>" class="ms-2" alt="">
                            </div>
                            <a href="<?= base_url('admin/orders/detail?id=') . $order['id'] ?>" class="text-decoration-none btn btn_primary">View Information</a>
                        </div> -->
                        </div>
                    </div>
                </div>
            <?php
            }
        } else { ?>
            <div class="text-center">
                <h5>No Order Found</h5>
            </div>

            
        <section class="find_categories_section position-relative">
                <div class="row">
                    <div class="col-lg-5 col-md-10">
                    <h4 class="fw-bold top_activites_heading">Top Acitivites</h4><span><a href="<?=base_url('tours')?>" class="btn btn_primary rounded-pill text_small top_activity_dashboard">See All</a></span>
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
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->include('pages/user/footer/list') ?>
<?= $this->endSection() ?>