<div class="row">
    <?php if (!empty($wishList)) {

    ?>
        <?php foreach ($wishList as $key => $order) {

            $product_info = getproductinfo(intval($order['product_id']));
            $product_option = getproductoptions(intval($order['product_id']));


            if (!empty($product_option['adult_sale_price'])) {
                $price = $product_option['adult_sale_price'];
            } else {
                $price = $product_option['adult_regular_price'];
            }

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
    <?php } ?>
</div>