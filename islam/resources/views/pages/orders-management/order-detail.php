<?= $this->extend('panel_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- Showing Flash Messages i.e Success/Warning etc -->
<?= view_cell('SessionFlashMessagesCell') ?>
<!-- End Flash Messages -->

<div class="row">
    <div class="col-lg-5 mb-3">
        <div class="card order_product_card p-0 mb-3 overflow-hidden h-100">
            <div class="card-header bg_light_orange border-0 p-3">
                <h5 class="mb-0 fw-bold">Overall Payment Detail</h5>
            </div>
            <div class="card-body p-3 bg-white pb-0">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="my-auto fw-bold text_orange">Sub Total:</p>
                    <h5 class="my-auto text_orange fw-bold">AED: <?= $orderDetail['subtotal'] + $orderDetail['total_discount'] ?></h5>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="my-auto fw-bold text_orange">Discount Total:</p>
                    <h5 class="my-auto text_orange fw-bold">AED: <?= $orderDetail['total_discount'] ?></h5>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="my-auto fw-bold text_orange">Grand Total:</p>
                    <h5 class="my-auto text_orange fw-bold">AED:
                        <?= $orderDetail['total'] ?></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 mb-3">
        <?php if (!empty($orderDetail['user_detail'])) : ?>
            <div class="card order_product_card p-0 mb-3 overflow-hidden h-100">
                <div class="card-header bg_light_orange border-0 p-3">
                    <h5 class="mb-0 fw-bold">Customer Detail</h5>
                </div>
                <div class="card-body p-3 bg-white">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label passenger_form_label mb-0">Name: </label>
                            <span class="my-auto fw-bold text-capitalize"><?= $orderDetail['user_detail']['firstname'] . ' ' . $orderDetail['user_detail']['lastname'] ?></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label passenger_form_label mb-0">Email:</label>
                            <span class="my-auto fw-bold"><?= $orderDetail['user_detail']['email'] ?></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label passenger_form_label mb-0">Phone number:</label>
                            <span class="my-auto fw-bold"><?= $orderDetail['user_detail']['mobile'] ?></span>
                        </div>
                        <div class="col-md-6 mb-0">
                            <label class="form-label passenger_form_label mb-0">Nationality:</label>
                            <span class="my-auto fw-bold text-capitalize"><?= getCountryNameById($orderDetail['user_detail']['country_id']) ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="card panel_card p-3 mb-3 h-100">
                <h5 class="fw-bold mb-3 mt-3">
                    Passenger Detail
                </h5>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label passenger_form_label mb-0">Name: </label>
                        <span class="my-auto fw-bold text-capitalize"><?= $orderDetail['user_detail']['firstname'] . ' ' . $orderDetail['user_detail']['lastname'] ?></span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label passenger_form_label mb-0">Email:</label>
                        <span class="my-auto fw-bold"><?= $orderDetail['user_detail']['email'] ?></span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label passenger_form_label mb-0">Phone number:</label>
                        <span class="my-auto fw-bold"><?= $orderDetail['user_detail']['mobile'] ?></span>
                    </div>
                    <div class="col-md-12 mb-0">
                        <label class="form-label passenger_form_label mb-0">Nationality:</label>
                        <span class="my-auto fw-bold text-capitalize"><?= getCountryNameById($orderDetail['user_detail']['country_id']) ?></span>
                    </div>
                </div>
            </div> -->
        <?php endif ?>
    </div>
</div>
<?php if (!empty($orderDetail['user_detail'])) : ?>
    <div class="card panel_card p-3 mb-3">
        <h5 class="mb-2 fw-bold">Statuses</h5>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label passenger_form_label mb-0">Order Status</label>
                <?php
                        $isUserLoggedIn = session('isUserLoggedIn');
                        if ($isUserLoggedIn) {
                            $user_role = intval(session('user_role'));
                            if ($user_role == 1) {
                                $disabled = '';
                            } else {
                                $disabled = 'disabled';
                            }
                        } else {
                            $disabled = '';
                        }
                        ?>
                <select <?= $disabled?> class="form-select form_custom_input py-2 mrg_start form-select passenger_form_select_input passenger_form_input h-auto rounded-pill update_order_status" data-order-id="<?= $orderDetail['id'] ?>">
                    <?php foreach ($statuses['order_statuses'] as $status) : ?>

                        
                        <option value="<?= $status['id'] ?>" <?= $orderDetail['order_status_id'] == $status['id'] ? 'selected' : ''; ?>><?= $status['title'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label passenger_form_label mb-0">Payment Status</label>
                <select disabled class="form-select form_custom_input py-2 mrg_start search_vendor_order form-select passenger_form_select_input passenger_form_input h-auto rounded-pill">
                    <?php foreach ($statuses['payment_statuses'] as $status) : ?>
                        <option value="<?= $status['id'] ?>" <?= $orderDetail['payment_status_id'] == $status['id'] ? 'selected' : ''; ?>><?= $status['title'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <?php if ($orderDetail['notes'] != '') { ?>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label passenger_form_label mb-0 mt-3">Special Request</label>
                    <p class="mb-0">
                        <?= $orderDetail['notes'] ?>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
<?php endif ?>

<?php if (!empty($orderDetail['ordered_product'])) : ?>
    <?php foreach ($orderDetail['ordered_product'] as $productKey => $product) : ?>
        <div class="card panel_card p-3 mb-3">
            <div class="card order_product_card p-0 mb-3 overflow-hidden">
                <div class="card-header bg_light_orange border-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 fw-bold"> <?= getProductNameById($productKey) ?></h5>
                            <span class="badge rounded-pill bg_orange ms-4 fw-light"><?= getTransferTypeNameById($product['order_items'][0]['transfer_type_id']) ?></span>
                        </div>
                        <p class="my-auto"><?= date("j-F-Y \a\\t h:i A", strtotime($product['order_items'][0]['tour_date'])); ?></p>
                    </div>
                </div>
                <div class="card-body p-3">
                    <?php foreach ($product['order_items'] as $orderItem) : ?>
                        <div class="row justify-content-left">
                            <div class="col-lg-4 col-md-4">
                                <h6 class="fw-bold">Adults</h6>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <p class="my-auto">Qty: <?= $orderItem['adult_quantity'] ?></p>
                                    <p class="my-auto">AED: <?= $orderItem['adult_price'] ?> x <?= $orderItem['adult_quantity'] ?></p>
                                    <p class="my-auto text_orange"><?= $orderItem['adult_price'] * $orderItem['adult_quantity'] ?>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <p class="my-auto">Discount:</p>
                                    <p class="my-auto">AED: <?= ($orderItem['adult_price'] - $orderItem['adult_discount_price']) ?> x <?= $orderItem['adult_quantity'] ?></p>
                                    <p class="my-auto text_orange"><?= ($orderItem['adult_price'] - $orderItem['adult_discount_price']) * $orderItem['adult_quantity']  ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <p class="my-auto fw-bold">Total:</p>
                                    <p class="my-auto text_orange fw-bold">
                                        <?= (($orderItem['adult_price'] * $orderItem['adult_quantity']) - (($orderItem['adult_price'] - $orderItem['adult_discount_price']) * $orderItem['adult_quantity']))  ?>
                                    </p>
                                </div>
                            </div>
                            <?php if ($orderItem['child_quantity'] > 0) { ?>
                                <div class="col-lg-4 col-md-4">
                                    <h6 class="fw-bold">Children</h6>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="my-auto">Qty: <?= $orderItem['child_quantity'] ?></p>
                                        <p class="my-auto">AED: <?= $orderItem['child_price'] ?> x <?= $orderItem['child_quantity'] ?></p>
                                        <p class="my-auto text_orange"><?= $orderItem['child_price'] * $orderItem['child_quantity'] ?>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="my-auto">Discount:</p>
                                        <p class="my-auto">AED: <?= ($orderItem['child_price'] - $orderItem['child_discount_price']) ?> x <?= $orderItem['child_quantity'] ?></p>
                                        <p class="my-auto text_orange"><?= ($orderItem['child_price'] - $orderItem['child_discount_price']) * $orderItem['child_quantity']  ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="my-auto fw-bold">Total:</p>
                                        <p class="my-auto text_orange fw-bold">
                                            <?= (($orderItem['child_price'] * $orderItem['child_quantity']) - (($orderItem['child_price'] - $orderItem['child_discount_price']) * $orderItem['child_quantity']))  ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($orderItem['infant_quantity'] > 0) { ?>
                                <div class="col-lg-4 col-md-4">
                                    <h6 class="fw-bold">Infants</h6>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="my-auto">Qty: <?= $orderItem['infant_quantity'] ?></p>
                                        <p class="my-auto">AED: <?= $orderItem['infant_price'] ?> x <?= $orderItem['infant_quantity'] ?></p>
                                        <p class="my-auto text_orange"><?= $orderItem['infant_price'] * $orderItem['infant_quantity'] ?>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="my-auto">Discount:</p>
                                        <p class="my-auto">AED: <?= ($orderItem['infant_price'] - $orderItem['infant_discount_price']) ?> x <?= $orderItem['infant_quantity'] ?></p>
                                        <p class="my-auto text_orange"><?= ($orderItem['infant_price'] - $orderItem['infant_discount_price']) * $orderItem['infant_quantity']  ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="my-auto fw-bold">Total:</p>
                                        <p class="my-auto text_orange fw-bold">
                                            <?= (($orderItem['infant_price'] * $orderItem['infant_quantity']) - (($orderItem['infant_price'] - $orderItem['infant_discount_price']) * $orderItem['infant_quantity']))  ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php endforeach ?>
                    <?php if (!empty($product['order_addons'])) : ?>
                        <h5 class="mb-0 fw-bold mt-4 mb-2">Product AdOns</h5>
                        <?php foreach ($product['order_addons'] as $orderAddon) : ?>
                            <div class="card order_adon_card p-0 mb-3 overflow-hidden">
                                <div class="card-header border-0 p-3">
                                    <h5 class="mb-0 fw-bold"><?= getProductAdonNameById($orderAddon['product_addon_id']) ?></h5>
                                </div>
                                <div class="card-body  p-3">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 col-md-4">
                                            <h6 class="fw-bold">Adults</h6>
                                            <hr>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <p class="my-auto">Qty: <?= $orderAddon['adult_quantity'] ?></p>
                                                <p class="my-auto">AED: <?= $orderAddon['adult_price'] ?> x <?= $orderAddon['adult_quantity'] ?></p>
                                                <p class="my-auto text_orange"><?= $orderAddon['adult_price'] * $orderAddon['adult_quantity'] ?>
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <p class="my-auto">Discount:</p>
                                                <p class="my-auto">AED: <?= ($orderAddon['adult_price'] - $orderAddon['adult_discount_price']) ?> x <?= $orderAddon['adult_quantity'] ?></p>
                                                <p class="my-auto text_orange"><?= ($orderAddon['adult_price'] - $orderAddon['adult_discount_price']) * $orderAddon['adult_quantity']  ?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <p class="my-auto fw-bold">Total:</p>
                                                <p class="my-auto text_orange fw-bold">
                                                    <?= (($orderAddon['adult_price'] * $orderAddon['adult_quantity']) - (($orderAddon['adult_price'] - $orderAddon['adult_discount_price']) * $orderAddon['adult_quantity']))  ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php if ($orderAddon['child_quantity'] > 0) { ?>
                                            <div class="col-lg-4 col-md-4">
                                                <h6 class="fw-bold">Children</h6>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <p class="my-auto">Qty: <?= $orderAddon['child_quantity'] ?></p>
                                                    <p class="my-auto">AED: <?= $orderAddon['child_price'] ?> x <?= $orderAddon['child_quantity'] ?></p>
                                                    <p class="my-auto text_orange"><?= $orderAddon['child_price'] * $orderAddon['child_quantity'] ?>
                                                    </p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <p class="my-auto">Discount:</p>
                                                    <p class="my-auto">AED: <?= ($orderAddon['child_price'] - $orderAddon['child_discount_price']) ?> x <?= $orderAddon['child_quantity'] ?></p>
                                                    <p class="my-auto text_orange"><?= ($orderAddon['child_price'] - $orderAddon['child_discount_price']) * $orderAddon['child_quantity']  ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <p class="my-auto fw-bold">Total:</p>
                                                    <p class="my-auto text_orange fw-bold">
                                                        <?= (($orderAddon['child_price'] * $orderAddon['child_quantity']) - (($orderAddon['child_price'] - $orderAddon['child_discount_price']) * $orderAddon['child_quantity']))  ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($orderAddon['infant_quantity'] > 0) { ?>
                                            <div class="col-lg-4 col-md-4">
                                                <h6 class="fw-bold">Infants</h6>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <p class="my-auto">Qty: <?= $orderAddon['infant_quantity'] ?></p>
                                                    <p class="my-auto">AED: <?= $orderAddon['infant_price'] ?> x <?= $orderAddon['infant_quantity'] ?></p>
                                                    <p class="my-auto text_orange"><?= $orderAddon['infant_price'] * $orderAddon['infant_quantity'] ?>
                                                    </p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <p class="my-auto">Discount:</p>
                                                    <p class="my-auto">AED: <?= ($orderAddon['infant_price'] - $orderAddon['infant_discount_price']) ?> x <?= $orderAddon['infant_quantity'] ?></p>
                                                    <p class="my-auto text_orange"><?= ($orderAddon['infant_price'] - $orderAddon['infant_discount_price']) * $orderAddon['infant_quantity']  ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <p class="my-auto fw-bold">Total:</p>
                                                    <p class="my-auto text_orange fw-bold">
                                                        <?= (($orderAddon['infant_price'] * $orderAddon['infant_quantity']) - (($orderAddon['infant_price'] - $orderAddon['infant_discount_price']) * $orderAddon['infant_quantity']))  ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card order_adon_card p-0 mb-3 overflow-hidden">
                <div class="card-header border-0 p-3">
                    <h5 class="mb-0 fw-bold">Desert safari with vip Majlis</h5>
                </div>
                <div class="card-body  p-3">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-md-4">
                            <h6 class="fw-bold">Adults</h6>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">Qty: 1</p>
                                <p class="my-auto">$880 x 1</p>
                                <p class="my-auto text_orange">$880</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">VAT:</p>
                                <p class="my-auto text_orange">$0</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">Discount:</p>
                                <p class="my-auto text_orange">$0</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto fw-bold">Total:</p>
                                <p class="my-auto text_orange fw-bold">$0</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <h6 class="fw-bold">Children</h6>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">Qty: 1</p>
                                <p class="my-auto">$880 x 1</p>
                                <p class="my-auto text_orange">$880</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">VAT:</p>
                                <p class="my-auto text_orange">$0</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">Discount:</p>
                                <p class="my-auto text_orange">$0</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto fw-bold">Total:</p>
                                <p class="my-auto text_orange fw-bold">$0</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <h6 class="fw-bold">Infants</h6>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">Qty: 1</p>
                                <p class="my-auto">$880 x 1</p>
                                <p class="my-auto text_orange">$880</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">VAT:</p>
                                <p class="my-auto text_orange">$0</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto">Discount:</p>
                                <p class="my-auto text_orange">$0</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="my-auto fw-bold">Total:</p>
                                <p class="my-auto text_orange fw-bold">$0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                        <?php endforeach ?>
                    <?php endif ?>
                    <!-- <hr class="mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-4">
                    <div class="d-flex justify-content-between align-items-center my-1">
                        <p class="my-auto fw-bold text_orange">Product Total:</p>
                        <h5 class="my-auto text_orange fw-bold">$0</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="d-flex justify-content-between align-items-center my-1">
                        <p class="my-auto fw-bold text_orange">AdOns Total:</p>
                        <h5 class="my-auto text_orange fw-bold">$0</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="d-flex justify-content-between align-items-end my-1">
                        <p class="my-auto fw-bold text_orange">Grand Total:</p>
                        <h5 class="my-auto text_orange fw-bold">$0</h5>
                    </div>
                </div>
            </div>
            <hr class=""> -->
                    <!-- <div class="row justify-content-end">
                <div class="col-md-4">
                    <div class="card order_adon_card p-0 mb-3 overflow-hidden">
                        <div class="card-header border-0 p-3">
                            <h5 class="mb-0 fw-bold">Payment Detail</h5>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="my-auto fw-bold text_orange">Product Total:</p>
                                <h5 class="my-auto text_orange fw-bold">$0</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="my-auto fw-bold text_orange">AdOns Total:</p>
                                <h5 class="my-auto text_orange fw-bold">$0</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <p class="my-auto fw-bold text_orange">Grand Total:</p>
                                <h5 class="my-auto text_orange fw-bold">$0</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>

<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->include('pages/orders-management/footer/detail') ?>
<?= $this->endSection() ?>