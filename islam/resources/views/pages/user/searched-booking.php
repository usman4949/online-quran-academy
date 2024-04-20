<?php if (!empty($ordersList)) { ?>
    <?php foreach ($ordersList as $key => $order) { ?>

        <div class="card booking_card p-2 mb-3">
            <div class="d-flex flex-wrap">
                <div class="flex-shrink-0">
                    <div class="booking_card_img">
                        <img src="<?= base_url('uploads/products/images/' . $order['productoption_detail']['cover_image']) ?>" alt="..." style="height: inherit;">
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

<?php } ?>