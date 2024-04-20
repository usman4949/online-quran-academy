<table class="table price_offers_table mb-0 align-middle table-striped">
            <thead class="pricing_table_head">
                <tr class="bg_light_orange">
                    <th scope="col" class="p-3 text-center" style="min-width: 50px;">Sr.</th>
                    <th scope="col" class="p-3 text-center">Order&nbsp;no1</th>
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
                                    <?= date("j M, Y h:ia", strtotime($order['created_at'])); ?>
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