<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
    <div class="row mb-4">
        <div class="col-lg-4 col-md-12 my-auto">
            <h4 class="my-auto">Booking Information</h4>
        </div>
        <div class="col-lg-4 col-md-6 my-auto">
            <p class="my-auto">Showing 4 of <span class="text_orange">10 Tours</span></p>
        </div>
        <div class="col-lg-4 col-md-6 my-auto">
            <select class="form-select form-control border-0">
                <option selected>Sort by Recommended</option>
                <option value="1">Sort by Date</option>
                <option value="2">Sort by Rating</option>
            </select>
        </div>
    </div>
    <?php
    for ($i = 1; $i <= 2; $i++) {
    ?>
        <div class="card booking_card p-2 mb-3">
            <div class="d-flex flex-wrap">
                <div class="flex-shrink-0">
                    <div class="booking_card_img">
                        <img src="<?= base_url('assets/images/evening_desert_safari.png') ?>" alt="...">
                    </div>
                </div>
                <div class="flex-grow-1 ms-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="fw-bold">Evening Desert Safari</h5>
                            <p class="my-auto"> <img src="<?= base_url('assets/images/svg/panel_svg/location_black.svg') ?>" class="mb-1 me-1" alt=""> Abu Dhabi</p>
                            <div class="d-flex mt-2">
                                <div class="rating_card p-2 d-flex justify-content-center align-items-center">
                                    4.2
                                </div>
                                <p class="my-auto ms-2">Very Good 371 reviews</p>
                            </div>
                        </div>
                        <div>
                            <p class="mb-0 text-end">starting from</p>
                            <p class="mb-0 text-end text_orange fw-bold">$240/night</p>
                            <p class="mb-0 text-end">excl. tax</p>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <img src="<?= base_url('assets/images/svg/rating_star_fill.svg') ?>" class="" alt="">
                            <img src="<?= base_url('assets/images/svg/rating_star_fill.svg') ?>" class="ms-2" alt="">
                            <img src="<?= base_url('assets/images/svg/rating_star_fill.svg') ?>" class="ms-2" alt="">
                            <img src="<?= base_url('assets/images/svg/rating_star_fill.svg') ?>" class="ms-2" alt="">
                            <img src="<?= base_url('assets/images/svg/rating_star_dull.svg') ?>" class="ms-2" alt="">
                        </div>
                        <a href="" class="text-decoration-none btn btn_primary">View Information</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?= $this->endSection() ?>