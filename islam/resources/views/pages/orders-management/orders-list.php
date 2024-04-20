<?= $this->extend('panel_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- Showing Flash Messages i.e Success/Warning etc -->
<?= view_cell('SessionFlashMessagesCell') ?>
<!-- End Flash Messages -->

<div class="card panel_card p-3 mb-3">
    <div class="row">
        <div class="col-lg-12 col-md-12 my-auto">
            <div class="d-flex align-items-center mb-1 wrap_flex">
                <h4 class="my-auto">Orders List</h4>
                <!-- <div class="ms-auto" style="max-width: 382px !important;">
                    <input type="text" name="order_id" id="orderSearchInput" class="form-control passenger_form_input h-auto rounded-pill" placeholder="DS-00001 (search by num)">
                </div>
                <a href="javascript:void(0)" class="ms-2 more_filters btn btn_light rounded-pill">More Filters</a> -->
            </div>
        </div>

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
</div>
<div class="card panel_card p-3 mb-3">
    <div class="table-responsive pricing_table mb-0" id="searched_orders_list">
        <table class="table price_offers_table mb-0 align-middle table-striped">
            <thead class="pricing_table_head">
                <tr class="bg_light_orange">
                    <th scope="col" class="p-3 text-center" style="min-width: 50px;">Sr.</th>
                    <th scope="col" class="p-3 text-center">Order&nbsp;no</th>
                    <th scope="col" class="p-3 text-center">User</th>
                    <th scope="col" class="p-3 text-center">Phone&nbsp;No</th>
                    <th scope="col" class="p-3 text-center">Booked&nbsp;at</th>
                    <th scope="col" class="p-3 text-center">Price</th>
                    <th scope="col" class="p-3 text-center">Items</th>
                    <th scope="col" class="p-3 text-center">Order&nbsp;status</th>
                    <th scope="col" class="p-3 text-center">Payment&nbsp;status</th>
                    <th scope="col" class="p-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody id="">
                <!-- <span id="perpage_sr">1</span> -->
                <?php $index = 1;
                ?>
                <?php if (!empty($ordersList)) : ?>
                    <?php foreach ($ordersList as $key => $order) : ?>
                        <tr>
                            <td class="w-auto text-center py-1">
                                <p class="price_desc mb-0"><?php echo $index++ ?></p>
                            </td>
                            <td class="w-auto text-center py-1">
                                <a href="<?= base_url('admin/orders/detail?id=') . ($order['id']) ?>" class="text-decoration-none">
                                    <p class="price_desc mb-0 text-nowrap">
                                        <?= 'DS-' . sprintf('%06d', $order['id']); ?></p>
                                </a>
                            </td>
                            <td class="w-auto text-center py-1">
                                <p class="price_desc mb-0 text_dull text-capitalize">
                                    <?= $order['user_detail']['firstname'] . ' ' . $order['user_detail']['lastname'] ?>
                                </p>
                            </td>
                            <td class="w-auto text-center py-1">
                                <p class="price_desc mb-0 text_dull ">
                                    <?= $order['user_detail']['mobile'] ?>
                                </p>
                            </td>
                            <td class="w-auto text-center py-1">
                                <p class="price_desc mb-0 text_dull ">
                                    <?= date("j-F-Y \a\\t h:i A", strtotime($order['created_at'])); ?>
                                </p>
                            </td>
                            <td class="w-auto text-center py-1">
                                <p class="price_text fs-6 mb-0"><?= ($order['total']); ?></p>
                            </td>
                            <td class="w-auto text-center py-1">
                                <p class="price_desc mb-0"><?= $order['total_items']; ?></p>
                            </td>
                            <!-- <td class="w-auto text-center py-1">
                                <p class="price_desc mb-0"></p>
                            </td> -->

                            <td class="w-auto text-center py-1">
                                <p class="review_label_text badge rounded-pill  mb-0 ms-1 " style="width: fit-content; background-color:<?= $order['order_status_color']; ?>">
                                    <?= $order['order_status_title']; ?>
                                </p>
                            </td>
                            <td class="w-auto text-center py-1">
                                <p class="review_label_text badge rounded-pill  mb-0 ms-1  " style="width: fit-content; background-color:<?= $order['payment_status_color']; ?>">
                                    <?= $order['payment_status_title']; ?>
                                </p>
                            </td>

                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="<?= base_url('admin/orders/detail?id=') . $order['id'] ?>" class="btn role_action_btn tooltip-left" data-tooltip="view">
                                        <img src="<?= base_url('assets/images/svg/eye_icon.svg') ?>" alt="">
                                    </a>
                                    <!-- <a href="<?= base_url('vendor/panel/order-detail?order_id=') . $order['id'] ?>" class="btn role_action_btn ms-1 tooltip-left" data-tooltip="Edit">
                                        <img src="<?= base_url() ?>/assets/images/svg/edit.svg" alt="">
                                    </a> -->
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr>
                        <td colspan="10" class="text-center">
                            <h5 class="text_orange my-4">No order found!</h5>
                        </td>
                    </tr>
                <?php endif  ?>
            </tbody>
        </table>
        <hr>
        <div id="pagination">
            <?= $pager_links ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->include('pages/orders-management/footer/list') ?>
<?= $this->endSection() ?>