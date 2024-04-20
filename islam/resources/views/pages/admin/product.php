<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="mb-4">All Products</h4>
        <a href="<?= base_url('/admin/add_products') ?>" class="btn btn_light rounded-pill">Add Product</a>
    </div>


    <!--Start success and error session -->
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success" id="successAlert">
            <p>
                <?php echo session()->get('success') ?>
            </p>
        </div>
    <?php endif; ?>

    <?php if (session()->get('fail')) : ?>
        <div class="alert alert-danger" id="failAlert">
            <p>
                <?php echo session()->get('fail') ?>
            </p>
        </div>
    <?php endif; ?>
    <!--End success and error session -->

    <div class="row justify-content-between mt-3">
        <div class="col-lg-3 col-md-4 my-2">
            <label class="form-label passenger_form_label mb-0">Show Entries</label>
            <select class="form-select passenger_form_select_input passenger_form_input h-auto rounded-pill">
                <option selected="">5</option>
                <option value="1">10</option>
                <option value="2">15</option>
                <option value="3">20</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 my-2">
            <label class="form-label passenger_form_label mb-0">Sort by</label>
            <select class="form-select passenger_form_select_input passenger_form_input h-auto rounded-pill">
                <option selected="">Latest</option>
                <option value="1">Max Adult Price</option>
                <option value="2">Max Child Price</option>
                <option value="3">Min Adult Price</option>
                <option value="4">Min Child Price</option>
            </select>
        </div>
        <div class="col-lg-5 col-md-4 my-2">
            <label class="form-label passenger_form_label mb-0">Search Product</label>
            <input type="search" class="form-control passenger_form_input h-auto rounded-pill" placeholder="Seacrh">
        </div>
    </div>
    <div class="row">
        <?php
        if ($allproducts['pager_total'] != 0) {
            // var_dump($allproducts['pager_total']);
            // exit;
            foreach ($allproducts as $val) {
                if (is_array($val)) {
                    // var_dump($val['cover_image']);
                    // exit;

                    if (!empty($val['cover_image'])) {
                        $image = base_url('uploads/products/images/' . $val['cover_image']);
                    } else {
                        $image = base_url() . 'assets/images/no_image.png';
                    }

        ?>
                    <div class="col-lg-3 col-md-6 my-2">
                        <div class="category_card p-2 action_btns_hov">
                            <div class="category_img_section position-relative">
                                <div class="position-absolute top-0 end-0 mt-2 me-2 action_btns">
                                    <div class="d-flex">
                                        <a href="<?= base_url('admin/viewedit_products/' . $val['id']) ?>" class="btn btn_action">
                                            <img src="<?= base_url('assets/images/svg/edit_icon.svg') ?>" alt="" width="12">
                                        </a>
                                        <a href="<?= base_url('gettour_detail/' . $val['id']) ?>" class="btn btn_action ms-1">
                                            <img src="<?= base_url('assets/images/svg/eye_icon.svg') ?>" alt="" width="15">
                                        </a>
                                    </div>
                                </div>

                                <img src="<?= $image ?>" alt="" class="w-100 my_allproductscoverimg">
                            </div>
                            <div class="d-flex justify-content-between align-items-start my-2">
                                <a href="<?=base_url('gettour_detail/'.$val['id'])?>" class="text-decoration-none color_primary fw-bold fs-6" style="height: 28px;">
                                    <?= $val['title'] ?>
                                </a>
                            </div>
                            <div class="form-check">
                                    <?php
                                    $product_info = getproductinfo($val['id']);
                                    if (!empty($product_info['markas_top'])) {
                                        $checked = 'checked';
                                    } else {
                                        $checked = '';
                                    }
                                    ?>
                                    <input class="form-check-input feature_product" <?= $checked ?> type="checkbox" data-producid='<?= $val['id'] ?>' value="feature">
                                    <label class="form-check-label">
                                        Mark as top
                                    </label>
                                </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <p class="my-auto text_light">Price</p>
                                <h6 class="text_orange mb-0 d-flex align-items-baseline">
                                    <?php
                                    if (!empty($val['options'][0]['adult_regular_price'])) {
                                        $adultprice = $val['options'][0]['adult_regular_price'];
                                    } else {
                                        $adultprice = 0;
                                    }

                                    if (!empty($val['options'][0]['adult_sale_price'])) {
                                        $add_class = 'text_light text-decoration-line-through me-1';
                                    } else {
                                        $add_class = '';
                                    }
                                    ?>
                                    <span class="<?= $add_class ?>">AED <?= $adultprice ?></span>

                                    <?php
                                    if (!empty($val['options'][0]['adult_sale_price'])) {
                                        $save = floatval($val['options'][0]['adult_regular_price']) - floatval($adultsaleprice = $val['options'][0]['adult_sale_price']);
                                    ?>

                                        <p class="mb-0 fw-bold fs-5">
                                            AED <?= $adultsaleprice = $val['options'][0]['adult_sale_price']; ?>
                                        </p>
                                        <p class="mb-0 text_info text_small ms-1">
                                            save <?= $save ?>
                                        </p>
                                    <?php } ?>

                                </h6>

                            </div>
                            <!-- <div class="d-flex justify-content-between align-items-center">
                        <p class="my-auto text_light">Child Price</p>
                        <h6 class="fw-bold text_orange mb-0">
                        <?php
                        if (!empty($val['options'][0]['child_regular_price'])) {
                            $childprice = $val['options'][0]['child_regular_price'];
                        } else {
                            $childprice = 0;
                        }
                        ?>
                            AED <?= $childprice ?>
                        </h6>
                    </div> -->
                        </div>
                    </div>
            <?php
                }
            } ?>
    </div>

    <!-- ***** Pagination ***** -->
    <div class="mt-3 pagination" id="pagination">
        <?= $pager_links ?>
    </div>
    <!-- <div id="pagination">
        <nav aria-label="Page navigation" class="my_new_pagination mt-3">
            <ul class="pagination">
                <li class="page-item active">
                    <a href="#" class="page-link">
                        1
                    </a>
                </li>
                <li class="page-item ">
                    <a href="#" class="page-link">
                        2
                    </a>
                </li>
                <li class="page-item ">
                    <a href="#" class="page-link">
                        3
                    </a>
                </li>
            </ul>
        </nav>
    </div> -->
<?php } else { ?>
    <div class="col-sm-12 text-center mt-5">
        <h3>No Product Found</h3>
    </div>
<?php } ?>

</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<script>
    // Function to hide alerts after 3 seconds
    setTimeout(function() {
        document.getElementById('successAlert').style.display = 'none';
        document.getElementById('failAlert').style.display = 'none';
    }, 3000);

    $(document).ready(function() {
        $('.feature_product').change(function() {
            var $checkbox = $(this);
            var isChecked = $(this).prop('checked');
            if (isChecked) {
                var checked = 'true';
            } else {
                var checked = 'false';
            }

            var product_id = $(this).attr('data-producid');
            $.ajax({
                url: '<?php echo base_url('admin/markas_top'); ?>',
                type: 'get',
                data: {
                    product_id: product_id,
                    checked: checked
                },
                dataType: 'json',
                success: function(html) {
                    if (html.status == 1) {
                        $checkbox.prop('checked', 'true');

                        // Swal.fire({
                        //      title: "Marked as top",
                        //    // text: "Maked as top!",
                        //     icon: "success"
                        // });
                        Swal.fire({
                           // background: 'abc.png',
                            toast: true,
                            icon: 'success',
                            text: 'Marked as top',
                            animation: false,
                            background: '#f4fcfe',
                            color:'#99ea6b',
                            //position: position,
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener("mouseenter", Swal.stopTimer);
                                toast.addEventListener("mouseleave", Swal.resumeTimer);
                            },
                        });
                    } else {
                        // Swal.fire({
                        //     title: "Not marked as top",
                        //     //text: "Not maked as top!",
                        //     icon: "error"
                        // });

                        Swal.fire({
                           // background: 'abc.png',
                           background: '#f4fcfe',
                            toast: true,
                            color:'#f27474',
                            icon: 'error',
                            text: 'Unmarked as top',
                            animation: false,
                            //position: position,
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener("mouseenter", Swal.stopTimer);
                                toast.addEventListener("mouseleave", Swal.resumeTimer);
                            },
                        });
                    }
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>