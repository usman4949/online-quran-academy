<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<?php
echo form_open(base_url('admin/edit_products/' . $product_detail['id']), [
    'class' => '',
    'id' => 'regForm',
    'enctype' => 'multipart/form-data',
    'method' => 'post',
]);
?>
<div class="card panel_card p-3 mb-3">
    <div class="d-flex align-items-center mb-4">
        <a href="<?= base_url('/admin/products') ?>" class="btn panel_back_btn text-decoration-none">
            <img src="<?= base_url('assets/images/svg/arrow_left_white.svg') ?>" alt="">
        </a>
        <h5 class="my-auto ms-4">Edit Product</h5>
    </div>


    <div class="d-flex location_tabs mb-3">
        <a class="nav-link destination_tabs" href="#" scroll-trigger="basic_info">Basic Information</a>
        <a class="nav-link destination_tabs ms-2" href="#" scroll-trigger="images">Images</a>
        <a class="nav-link destination_tabs ms-2" href="#" scroll-trigger="product_feature">Product Feature</a>
        <a class="nav-link destination_tabs ms-2" href="#" scroll-trigger="option_table">Option Table</a>
        <a class="nav-link destination_tabs ms-2" href="#" scroll-trigger="others">Others</a>
    </div>

    <!-- <ul class="nav nav-pills nav-fill mb-3" style="gap: 15px;">
        <li class="nav-item">
            <a class="nav-link product_tabs p-2 px-0 rounded-pill" href="#" scroll-trigger="basic_info">Basic Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link product_tabs p-2 px-0 rounded-pill" href="#" scroll-trigger="images">Images</a>
        </li>

        <li class="nav-item">
            <a class="nav-link product_tabs p-2 px-0 rounded-pill" href="#" scroll-trigger="product_feature">Product Feature</a>
        </li>

        <li class="nav-item">
            <a class="nav-link product_tabs p-2 px-0 rounded-pill" href="#" scroll-trigger="option_table">Option Table</a>
        </li>
        <li class="nav-item">
            <a class="nav-link product_tabs p-2 px-0 rounded-pill" href="#" scroll-trigger="others">Others</a>
        </li>
    </ul> -->

    <!--Start success and error session -->
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success">
            <p>
                <?php echo session()->get('success') ?>
            </p>
        </div>
    <?php endif; ?>

    <?php if (session()->get('fail')) : ?>
        <div class="alert alert-danger">
            <p>
                <?php echo session()->get('fail') ?>
            </p>
        </div>
    <?php endif; ?>
    <!--End success and error session -->

    <?php /********Start form Validation *********/
    if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
        $validation = session()->get('validation');
        $fieldErrors = session()->get('errors');
        // var_dump($fieldErrors);
        // exit;
    }
    /********End form Validation *********/
    ?>

    <div class="row" scroll-target="basic_info">
        <div class="col-md-6 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Product Name<span class="required_show">*</span></label>
            <input type="text" class="form-control passenger_form_input" required id='product_name' placeholder="Evening Desert Safari" name="title" value="<?= $product_detail['title'] ?>">

            <?php
            /********Start Show Name Validation Error*********/
            if (!empty($fieldErrors['title'])) : ?>
                <p class="text-danger">
                    <?= $fieldErrors['title']; ?>
                </P>
            <?php
            endif
            /********End Name Validation Error*********/
            ?>
        </div>

        <div class="col-md-6 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Category<span class="required_show">*</span></label>
            <select class="js-example-basic-multiple form-control p-1 passenger_form_input select_categories" required name="product_category[]" multiple="multiple">

                <?php
                if (!empty($all_productcategory)) {
                    foreach ($all_productcategory as $val) {
                        // var_dump($product_detail['product_category']);
                        // exit;
                        $selected = '';
                        foreach ($product_detail['product_category'] as $val2) {
                            if ($val2['category_id'] == $val['id']) {
                                $selected = 'selected';
                                break;
                            }
                        }

                        // foreach ($product_category as $product_cat) {
                        //     if ($product_cat['category_id'] == $val['id']) {
                        //         $selected = 'selected';
                        //         break;
                        //     }
                        // }
                ?>
                        <option value="<?= $val['id'] ?>" <?= $selected ?>>
                            <?= $val['title'] ?>
                        </option>
                <?php }
                } ?>
            </select>

            <?php
            /********Start Show Name Validation Error*********/
            if (!empty($fieldErrors['product_category'])) : ?>
                <p class="text-danger">
                    <?= $fieldErrors['product_category']; ?>
                </P>
            <?php
            endif
            /********End Name Validation Error*********/
            ?>
        </div>

        <div class="col-md-6 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Slug<span class="required_show">*</span></label>
            <input type="text" class="form-control passenger_form_input" required id='product_slug' placeholder="Evening_Desert_Safari" name="slug" value="<?= $product_detail['slug'] ?>">

        </div>

        <div class="col-md-12 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Overview<span class="required_show">*</span></label>
            <textarea class="form-control passenger_form_input h-auto div_editor1" required rows="4" name="overview"><?= $product_detail['overview'] ?></textarea>
            <?php
            /********Start Show Name Validation Error*********/
            if (!empty($fieldErrors['overview'])) : ?>
                <p class="text-danger">
                    <?= $fieldErrors['overview']; ?>
                </P>
            <?php
            endif
            /********End Name Validation Error*********/
            ?>
        </div>

        <div class="col-md-6 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Meta Description</label>
            <textarea class="form-control passenger_form_input h-auto div_editor11" rows="4" name="meta_description"><?= $product_detail['meta_description'] ?></textarea>
        </div>

        <div class="col-md-6 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Meta Keywords</label>
            <textarea class="form-control passenger_form_input h-auto div_editor12" rows="4" name="meta_keywords"><?= $product_detail['meta_keywords'] ?></textarea>
        </div>

    </div>
</div>
<!-- <form action="<?= base_url('admin/upload_products') ?>" method="post"> -->



<div class="card panel_card p-3 mb-3" scroll-target="images">
    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">
                Cover Image<span class="required_show">*</span>
            </label>
            <div action="/upload" id="product-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text">
                        <img class="w-100" src="<?= old(base_url('assets/images/svg/panel_svg/upload_icon.svg'), base_url('uploads/products/images/' . $product_detail['cover_image'])) ?>" alt="">
                        <span class="text_light">Drag and drop Cover image, or <span class="text_orange">Browse</span></span>
                    </span>
                </div>
            </div>
            <input type="hidden" id="product-image" value="<?= old('productcover_img', $product_detail['cover_image']) ?>" name="productcover_img" required>
            <!-- <input type="hidden" name="cover_path" id="gallery-image-path" value=""> -->
            <input type="hidden" name="is_service" id="is_service_input" value="false">

            <?php
            /********Start Show Name Validation Error*********/
            if (!empty($fieldErrors['productcover_img'])) : ?>
                <p class="text-danger">
                    <?= $fieldErrors['productcover_img']; ?>
                </P>
            <?php
            endif
            /********End Name Validation Error*********/
            ?>
            <div class="mt-2">
                <span><small>Note: Upload image of dimension 1440x573</small></span>
            </div>
        </div>
    </div>
    <div class="row">
        <label class="form-label passenger_form_label color_primary mb-1">
            Product Images<span class="required_show">*</span>
        </label>

        <div class="col-lg-3 col-md-6 mb-4">
            <div action="/upload" id="product1-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text">
                        <!-- <img src="<?= base_url('assets/images/svg/panel_svg/add_orange.svg') ?>" alt=""> -->
                        <?php
                        if (!empty($product_detail['product_img'][0]['path'])) { ?>
                            <img class="w-100" src="<?= old('productimages[]', base_url('uploads/products/images/' . $product_detail['product_img'][0]['path'])) ?>" alt="">
                            <input type="hidden" name="productimages[]" id="image_one" value="<?= $product_detail['product_img'][0]['path'] ?>">
                        <?php } else { ?>
                            <img src="<?= base_url('assets/images/svg/panel_svg/add_orange.svg') ?>" alt="">
                            <input type="hidden" name="productimages[]" id="image_one" value="">
                        <?php } ?>
                    </span>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div action="/upload" id="product2-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text">
                        <!-- <img src="<?= base_url('assets/images/svg/panel_svg/add_orange.svg') ?>" alt=""> -->
                        <?php
                        if (!empty($product_detail['product_img'][1]['path'])) { ?>
                            <img class='w-100' src="<?= old(base_url('assets/images/svg/panel_svg/add_orange.svg'), base_url('uploads/products/images/' . $product_detail['product_img'][1]['path'])) ?>" alt="">
                            <input type="hidden" name="productimages[]" id="image_two" value="<?= $product_detail['product_img'][1]['path'] ?>">
                        <?php } else { ?>
                            <img src="<?= base_url('assets/images/svg/panel_svg/add_orange.svg') ?>" alt="">
                            <input type="hidden" name="productimages[]" id="image_two" value="">
                        <?php } ?>
                    </span>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div action="/upload" id="product3-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text">
                        <!-- <img src="<?= base_url('assets/images/svg/panel_svg/add_orange.svg') ?>" alt=""> -->
                        <?php
                        if (!empty($product_detail['product_img'][2]['path'])) { ?>
                            <img class='w-100' src="<?= old(base_url('assets/images/svg/panel_svg/add_orange.svg'), base_url('uploads/products/images/' . $product_detail['product_img'][2]['path'])) ?>" alt="">
                            <input type="hidden" name="productimages[]" id="image_three" value="<?= $product_detail['product_img'][2]['path'] ?>">
                        <?php } else { ?>
                            <img src="<?= base_url('assets/images/svg/panel_svg/add_orange.svg') ?>" alt="">
                            <input type="hidden" name="productimages[]" id="image_three" value="">
                        <?php } ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div action="/upload" id="product4-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text">
                        <!-- <img src="<?= base_url('assets/images/svg/panel_svg/add_orange.svg') ?>" alt=""> -->
                        <?php
                        if (!empty($product_detail['product_img'][3]['path'])) { ?>
                            <img src="<?= old(base_url('assets/images/svg/panel_svg/add_orange.svg'), base_url('uploads/products/images/' . $product_detail['product_img'][3]['path'])) ?>" alt="">
                            <input type="hidden" name="productimages[]" id="image_four" value="<?= $product_detail['product_img'][3]['path'] ?>">
                        <?php } else { ?>
                            <img src="<?= base_url('assets/images/svg/panel_svg/add_orange.svg') ?>" alt="">
                            <input type="hidden" name="productimages[]" id="image_four" value="">
                        <?php } ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <span><small>Note: Upload atleast one image of dimension 500x500</small></span>
        </div>

        <?php if (!empty(session('image_errors'))) : ?>
            <div class="text-danger">
                <?= session('image_errors') ?>
            </div>
        <?php endif ?>
    </div>
</div>



<div class="card panel_card p-3 mb-3" scroll-target="product_feature">

    <div id="product_table1">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="my-auto">Product Feature</h5>
        </div>

        <div class="col-md-12">

            <div class="col-md-6 mt-4 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Select Feature<span class="required_show">*</span></label>
                <select class="js-example-basic-multiple form-control p-1 passenger_form_input product_feature" name='select_feature' id='product_feature' required multiple="multiple">

                    <?php
                    if (!empty($all_productfeature)) {
                        foreach ($all_productfeature as $val) {
                            // var_dump($product_detail);
                            // exit;
                            foreach ($product_detail['selectedproduct_feature'] as $featured_items) {
                                //    var_dump($featured_items['id']);
                                //    exit;
                                if ($featured_items['id'] == $val['id']) {
                                    $selected = 'selected';
                                    break;
                                } else {
                                    $selected = '';
                                }
                            }
                    ?>
                            <option value="<?= $val['id'] ?>" data-name='<?= $val['name'] ?>' <?= $selected ?>>
                                <?= $val['name'] ?>
                            </option>
                    <?php }
                    } ?>
                </select>

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['product_feature'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['product_feature']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>
        </div>

        <?php


        if (!empty($product_detail['selectedproduct_feature'])) { ?>
            <div class="myfeature_table">
                <!-- <h5 class="mb-2 my_featuretable" id='product_title'></h5> -->
                <div class="table-responsive mt-2">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr class="bg_light_orange">
                                <th scope="col" class="p-3" style="min-width: 20px;">#</th>
                                <th scope="col" class="p-3">Feature&nbsp;Name<span class="required_show">*</span></th>
                                <th scope="col" class="p-3">Value<span class="required_show">*</span></th>
                            </tr>
                        </thead>
                        <tbody class='featuretable_tr'>

                            <?php
                            $i = 1;
                            foreach ($product_detail['selectedproduct_feature'] as $val) {

                                // var_dump($val['feature_name']);
                                // exit;


                            ?>
                                <tr>
                                    <td class="p-3">
                                        <div class="form-check">
                                            <?= $i ?>
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        <div class="form-check">
                                            <?= $val['feature_name'] ?>
                                        </div>
                                    </td>
                                    <td class="p-3 option_namez">
                                        <input type="hidden" value='<?= $val['id'] ?>' name="product_feature[]">
                                        <input type="text" class="form-control" required name="feature_value[]" value='<?= $val['feature_value'] ?>' placeholder="Tour Services">
                                    </td>

                                </tr>
                            <?php $i++;
                            } ?>

                        </tbody>
                    </table>
                </div>


            </div>
        <?php } ?>

    </div>


</div>

<div class="card panel_card p-3 mb-3" scroll-target="option_table">

    <div id="product_table">
        <!-- <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="my-auto">Option Table</h5>
            <a href="javascript:void(0);" class="btn btn_light rounded-pill add_moretable">+ Add More</a>
        </div> -->
        <?php
        // var_dump($product_detail);
        // exit;
        $s = 1;
        foreach ($product_detail['product_item'] as $key => $val) {

            //         exit;
            // if(count($product_item)==1){
            //     $getproductitem=getallproductitem(intval($val['id']));
            // }else{
            //     $getproductitem=getproductitem(intval($val['id']));
            // }

        ?>
            <div class="price_table mt-3">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label passenger_form_label color_primary mb-1">Title <span class="required_show">*</span></label>
                        <input type="text" class="form-control passenger_form_input newtitle" required name='newtitle[]' value="<?= $val['title'] ?>" placeholder="Evening Desert Safari">
                    </div>
                    <!-- <div class="col-md-6 mb-4">
                        <label class="form-label passenger_form_label color_primary mb-1">Description</label>
                        <textarea class="form-control passenger_form_input newdescription div_editor111" name='newdescription[]' placeholder="Evening Desert Safari"><?= $val['options'][0]['description'] ?></textarea>
                    </div> -->
                </div>

                <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label passenger_form_label color_primary mb-1">Description</label>
                    <textarea class="form-control passenger_form_input newdescription div_editor111" name='newdescription[]' placeholder="In this Trip we have ...."><?= $val['options'][0]['description'] ?></textarea>
                </div>
            </div>
                <!-- <h5 class="mb-2 my_optiontable" id='product_title'><?= $val['title'] ?></h5> -->
                <h5 class="mb-3 mt-5 my_optiontable"></h5>
                <div class="table-responsive mt-2">
                    <table class="table price_offers_table newprice_offers_table table-striped mb-0">
                        <thead>
                            <tr class="bg_light_orange">
                                <input type='hidden' name='product_item[]' class='product_item' value=<?= $s ?>>
                                <th scope="col" class="p-3" style="min-width: 20px;"></th>
                                <th scope="col" class="p-3">Transfer&nbsp;Type<span class="required_show">*</span></th>
                                <th scope="col" class="p-3">Quantity/Item<span class="required_show">*</span></th>
                                <!-- <th scope="col" class="p-3" style="min-width: 200px;">Description</th> -->
                                <th scope="col" class="p-3">Adult&nbsp;Regular&nbsp;Price<span class="required_show">*</span></th>
                                <th scope="col" class="p-3">Adult&nbsp;Sale&nbsp;Price</th>
                                <th scope="col" class="p-3">Child&nbsp;Regular&nbsp;Price</th>
                                <th scope="col" class="p-3">Child&nbsp;Sale&nbsp;Price</th>
                                <th scope="col" class="p-3">Infant&nbsp;Regular&nbsp;Price</th>
                                <th scope="col" class="p-3">Infant&nbsp;Sale&nbsp;Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($all_producttransfer)) {
                                foreach ($all_producttransfer as $product_opt) {
                                    //foreach ($val['options'] as $val2) {
                                    // var_dump($val2);
                                    // exit;
                                    $product_name = '';
                                    $product_desc = '';
                                    $adult_regularprice = '';
                                    $adult_saleprice = '';
                                    $child_regularprice = '';
                                    $child_saleprice = '';
                                    $infant_regularprice = '';
                                    $infant_saleprice = '';
                                    // var_dump($val);
                                    // exit;
                                    //foreach($all_producttransfer as $product_opt){
                                    foreach ($val['options'] as $val2) {


                                        if ($val2['transfer_type_id'] == $product_opt['id']) {
                                            $checked = 'checked';
                                            $name = $product_opt['name'];
                                            $required = '';
                                            $product_name = $val2['name'];
                                            $product_desc = $val2['description'];
                                            $adult_regularprice = $val2['adult_regular_price'];
                                            $adult_saleprice = $val2['adult_sale_price'];
                                            $child_regularprice = $val2['child_regular_price'];
                                            $child_saleprice = $val2['child_sale_price'];
                                            $infant_regularprice = $val2['infant_regular_price'];
                                            $infant_saleprice = $val2['infant_sale_price'];
                                            $quantity = $val2['quantity_price'];
                                            break;
                                        } else {
                                            $checked = '';
                                            $name = '';
                                            $required = '';
                                            $product_name = '';
                                            $product_desc = '';
                                            $adult_regularprice = '';
                                            $adult_saleprice = '';
                                            $child_regularprice = '';
                                            $child_saleprice = '';
                                            $infant_regularprice = '';
                                            $infant_saleprice = '';
                                            $quantity = "";
                                        }
                                    }
                            ?>
                                    <tr>
                                        <td class="p-3">
                                            <div class="form-check">
                                                <input <?= $checked ?> class="form-check-input passenger_form_checkbox" type="checkbox" value="<?= $product_opt['name'] ?>" id="mytransfer_<?= $product_opt['id'] ?>" data-id="<?= $product_opt['id'] ?>">
                                            </div>
                                        </td>
                                        <th scope="row" class="p-3">
                                            <?= $product_opt['name'] ?>
                                            <input type="hidden" value="<?= $name ?>" class="tranfertype_<?= $product_opt['id'] ?>" name="transfer_type[<?= $s ?>][]">
                                        </th>
                                        <td class="p-3 option_namez" style="display: none;">
                                            <input type="text" class="form-control tour_detail_input option_name asdasd mynewoption_name" id="option_name" name="option_name[<?= $s ?>][]" value='<?= $product_name ?>' placeholder="Desert Safari">
                                            <textarea class="form-control mytourdescription tour_detail_input mydatadesc mynewoptiondesc" rows="1" name="option_description[<?= $s ?>][]" placeholder="Mobile Voucher"><?= $product_desc ?></textarea>
                                        </td>
                                        <td class="p-3">
                                            <input type="text" class="form-control tour_detail_input option_quantity asdasd" id="option_quantity" name="option_quantity[<?= $s ?>][]" value='<?= $quantity ?>' placeholder="1">
                                        </td>
                                        <td class="p-3">
                                            <input <?= $required ?> type="number" class="form-control tour_detail_input allprices adultregular_price" name="adult_regular_price[<?= $s ?>][]" min="1" value="<?= $adult_regularprice ?>" placeholder="110">
                                        </td>
                                        <td class="p-3">
                                            <input <?= $required ?> type="number" class="form-control tour_detail_input allprices adultsale_price" name="adult_sale_price[<?= $s ?>][]" value="<?= $adult_saleprice ?>" placeholder="100">
                                        </td>
                                        <td class="p-3">
                                            <input <?= $required ?> type="number" class="form-control tour_detail_input allprices childregular_price" name="child_regular_price[<?= $s ?>][]"  value="<?= $child_regularprice ?>" placeholder="90">
                                        </td>
                                        <td class="p-3">
                                            <input <?= $required ?> type="number" class="form-control tour_detail_input allprices childsale_price" name="child_sale_price[<?= $s ?>][]" value="<?= $child_saleprice ?>" placeholder="80">
                                        </td>
                                        <td class="p-3">
                                            <input <?= $required ?> type="number" class="form-control tour_detail_input allprices infantregular_price" name="infant_regular_price[<?= $s ?>][]" value="<?= $infant_regularprice ?>" placeholder="200">
                                        </td>
                                        <td class="p-3">
                                            <input <?= $required ?> type="number" class="form-control tour_detail_input allprices infantsale_price" name="infant_sale_price[<?= $s ?>][]" value="<?= $infant_saleprice ?>" placeholder="150">
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php $s++;
        } ?>
    </div>

    <div class="table-responsive mt-5 add_featuretable">
        <table class="table price_offers_table table-striped mb-0">
            <thead>
                <tr class="bg_light_orange">
                    <th scope="col" class="p-3">Name<span class="required_show">*</span></th>
                    <th scope="col" class="p-3" style="min-width: 200px;">Description</th>
                    <th scope="col" class="p-3 text-center">More&nbsp;Options</th>
                </tr>
            </thead>
            <tbody id='mytable_options'>
                <tr>
                    <td class="p-3">
                        <input type="text" class="form-control tour_detail_input tour_optionname">
                    </td>
                    <td class="p-3">
                        <textarea class="form-control tour_detail_input mytourdescription1 newtours" rows="1"></textarea>

                    </td>
                    <td class="p-3">
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn_action text_orange fs-4 add_btn">
                                +
                            </button>
                            <!-- <a href="javascript:void(0);" class="btn btn_action ms-1 text_orange fs-3 minus_btn">
                                -
                            </a> -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="row m-2">
            <div class="col-md-12 text-end">
                <button type="button" class="btn btn_light px-4 cancel_btn">Cancel</button>
                <button type="button" class="btn btn_primary px-4 save_btn">Save</button>
            </div>
        </div>
    </div>

    <div class="newtable" style="display: none;">
        <div class="row" style="justify-content: end;">
            <a style="width: auto;" href="javascript:void(0);" class="btn btn_light rounded-pill edit_table">Edit</a>
        </div>
    </div>
</div>


<div class="card panel_card p-3 mb-3" scroll-target="others">

    <div id="product_table1">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="my-auto">Product Addons</h5>

        </div>

        <div class="col-sm-12 newaddons">
            <?php
            if (!empty($product_detail['product_selectedproductaddons'])) {
            ?>
                <div class='appended_table'>

                    <div class="price_table">
                        <div class='price_table'>
                            <h5 class="mb-2 my_optiontable"></h5>
                            <div class="table-responsive mt-2">
                                <table class="table price_offers_table table-striped newprice_offers_table1 mb-0">
                                    <thead>
                                        <tr class="bg_light_orange">
                                            <input type='hidden' name='product_item[]' class='product_item'>
                                            <th scope="col" class="p-3">Add&nbsp;Ons<span class="required_show">*</span></th>
                                            <th scope="col" class="p-3">Adult&nbsp;Regular&nbsp;Price<span class="required_show">*</span></th>
                                            <th scope="col" class="p-3">Adult&nbsp;Sale&nbsp;Price</th>
                                            <th scope="col" class="p-3">Child&nbsp;Regular&nbsp;Price</th>
                                            <th scope="col" class="p-3">Child&nbsp;Sale&nbsp;Price</th>
                                            <th scope="col" class="p-3">Infant&nbsp;Regular&nbsp;Price</th>
                                            <th scope="col" class="p-3">Infant&nbsp;Sale&nbsp;Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="addons_tablebody">
                                        <?php foreach ($product_detail['product_selectedproductaddons'] as $selectedval) { ?>
                                            <tr class="mynewtraddons">

                                                <th scope="row" class="p-3">
                                                    <div class="d-flex align-items-center">
                                                        <button type="button" class="btn btn_action text_orange fs-4 addmoreaddons_btn">
                                                            +
                                                        </button>
                                                        <a href="javascript:void(0);" class="btn btn_action ms-1 text_orange fs-3 minusaddons_btn mx-1">
                                                            -
                                                        </a>
                                                        <div class="get_dropdownvalues addonsdropdown_html" style="min-width:150px;">
                                                            <div class="addonsdropdown_html selectdropdown_addons">
                                                                <select class="form-control p-1 passenger_form_input product_addons add_onsdropdown" name="product_addons[]" id="product_addons">
                                                                    <option value="0">--Select Addons--</option>
                                                                    <option value="Other">Other</option>'

                                                                    <?php
                                                                    if (!empty($all_productaddons)) {
                                                                        foreach ($all_productaddons as $val) {
                                                                            //$selected = ($val['id'] == $selectedval['addon_id']) ? 'selected' : '';
                                                                            // var_dump($val['id']);
                                                                            if ($val['id'] == $selectedval['addon_id']) {
                                                                                $selected = 'selected';
                                                                            } else {
                                                                                $selected = '';
                                                                            }
                                                                            // if (in_array($val['id'], $selecteddropdown)) {
                                                                            //     $selected = 'selected'; // Skip previously selected value
                                                                            // } else {
                                                                            //     $selected = '';
                                                                            // }

                                                                            // if (!empty($selectedDropdownValues)) {
                                                                            //     if (in_array($val['id'], $selectedDropdownValues)) {
                                                                            //         continue;
                                                                            //     }
                                                                            // }
                                                                    ?>
                                                                            <option value="<?= $val['id'] ?>" data-name="<?= $val['name'] ?>" <?= $selected ?>>
                                                                                <?= $val['name'] ?>
                                                                            </option>
                                                                    <?php    }
                                                                    } ?>

                                                                </select>
                                                            </div>

                                                            <div class="other" style="display: none;">
                                                                <input type="text" class="form-control my_optiontext" style="margin-top: 6px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </th>


                                                <td class="p-3">
                                                    <input type="number" class="form-control tour_detail_input allprices adultaddonregular_price" value="<?= $selectedval['adult_regular_price'] ?>" name="adultaddonregular_price[]" min="1" placeholder='110'>
                                                </td>
                                                <td class="p-3">
                                                    <input type="number" class="form-control tour_detail_input allprices adultaddonsale_price" value="<?= $selectedval['adult_sale_price'] ?>" name="adultaddonsale_price[]"  placeholder='100'>
                                                </td>
                                                <td class="p-3">
                                                    <input type="number" class="form-control tour_detail_input allprices childaddonregular_price" value="<?= $selectedval['child_regular_price'] ?>" name="childaddonregular_price[]" placeholder='90'>
                                                </td>
                                                <td class="p-3">
                                                    <input type="number" class="form-control tour_detail_input allprices childaddonsale_price" value="<?= $selectedval['child_sale_price'] ?>" name="childaddonsale_price[]"  placeholder='80'>
                                                </td>
                                                <td class="p-3">
                                                    <input type="number" class="form-control tour_detail_input allprices infantaddonregular_price" value="<?= $selectedval['infant_regular_price'] ?>" name="infantaddonregular_price[]" placeholder='200'>
                                                </td>
                                                <td class="p-3">
                                                    <input type="number" class="form-control tour_detail_input allprices infantaddonsale_price" value="<?= $selectedval['infant_sale_price'] ?>" name="infantaddonsale_price[]"  placeholder='150'>
                                                </td>
                                            </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-md-6 mt-4 mb-4 newaddons_div">
                    <label class="form-label passenger_form_label color_primary mb-1">Select Addons</label>
                    <div class="selectdropdown_addons">
                        <select class="form-control p-1 passenger_form_input product_addons newproductaddons" id='product_addons'>
                            <option value="0">--Select Addons--</option>
                            <!-- <option value="other">Other</option> -->
                            <?php
                            if (!empty($all_productaddons)) {
                                foreach ($all_productaddons as $val) {
                                    if (in_array($val['id'], old('product_addons', []))) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                            ?>
                                    <option value="<?= $val['id'] ?>" data-name='<?= $val['name'] ?>' <?= $selected ?>>
                                        <?= $val['name'] ?>
                                    </option>
                            <?php }
                            } ?>
                        </select>
                        <div class="mt-2">
                            <span><small>Note: Select category to get addons</small></span>
                        </div>
                    </div>


                </div>


                <div class="addonstable"></div>
                <div class="new_addonssection"></div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="card panel_card p-3 mb-3" scroll-target="others">

    <div id="product_table1">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="my-auto">Product Sections</h5>
        </div>

        <div class="col-sm-12">

            <div class="col-md-6 mt-4 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Select Section</label>
                <select class="js-example-basic-multiple form-control p-1 passenger_form_input product_section" name='product_section[]' id='product_section' multiple="multiple">
                    <!-- <option selected>--Select--</option> -->
                    <?php
                    if (!empty($all_productsection)) {
                        $name = [];
                        foreach ($all_productsection as $val) {
                            // if (in_array($val['id'], old('product_section', []))) {
                            //     $selected = 'selected';
                            // } else {
                            //     $selected = '';
                            // }

                            $selected = '';
                            foreach ($product_detail['product_section'] as $val2) {
                                if ($val2['section_id'] == $val['id']) {
                                    $selected = 'selected';
                                    // $name[]=$val['name'];
                                    break;
                                }
                            }
                    ?>
                            <option value="<?= $val['id'] ?>" data-name='<?= $val['name'] ?>' <?= $selected ?>>
                                <?= $val['name'] ?>
                            </option>
                    <?php }
                    } ?>
                </select>

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['product_section'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['product_section']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>
        </div>
    </div>
</div>
<div class="product_sectioncard">
    <?php
    //var_dump($product_detail['product_section']);
    //  $containsHighlight = false;
    //  $containsInclusion = false;
    //  $containsExclusion = false;
    //  $containsInformation = false;
    //  $containsRedeem = false;
    //  foreach ($name as $newname) {
    //     // var_dump($newname);
    //     if (containsHighlight($newname)) {
    //         $containsHighlight = true;
    //     }else if(containsInclusion($newname)){
    //         //var_dump('22');
    //         $containsInclusion=true;
    //     }else if(containsExclusion($newname)){
    //         $containsExclusion=true;
    //     }else if(containsInformation($newname)){
    //         $containsInformation=true;
    //     }else if(containsRedeem($newname)){
    //         $containsRedeem=true;
    //     }
    // }


    // function containsHighlight($string) {
    //     // Your logic to check if the string contains a highlight
    //     // For example:
    //     return strpos($string, 'Highlights') !== false;
    // }

    // function containsInclusion($string) {
    //     // Your logic to check if the string contains a highlight
    //     // For example:
    //     return strpos($string, 'Inclusions') !== false;
    // }

    // function containsExclusion($string) {
    //     // Your logic to check if the string contains a highlight
    //     // For example:
    //     return strpos($string, 'Exclusions') !== false;
    // }
    // function containsInformation($string) {
    //     // Your logic to check if the string contains a highlight
    //     // For example:
    //     return strpos($string, 'Information') !== false;
    // }
    // function containsRedeem($string) {
    //     // Your logic to check if the string contains a highlight
    //     // For example:
    //     return strpos($string, 'Redeem') !== false;
    // }
    $s = 3;
    foreach ($product_detail['product_section'] as $val2) {
        $sectionname = getsectionname($val2['section_id']);

        // var_dump($sectionname);
    ?>


        <div class="card panel_card p-3 mb-3">

            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label passenger_form_label color_primary mb-1"><?= $sectionname['name'] ?></label>
                    <textarea class="form-control passenger_form_input h-auto div_editor<?= $s ?>" name="section_text[]" rows="4"><?= $val2['section_description'] ?></textarea>
                </div>
            </div>
        </div>
    <?php $s++;
    }  ?>
</div>


<!-- 
<div class="card panel_card p-3  mb-3">
    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Inclusions</label>
            <textarea class="form-control passenger_form_input h-auto div_editor3" name="inclusion" rows="4"><?= $product_detail['inclusions'] ?></textarea>
        </div>
    </div>
</div>



<div class="card panel_card p-3 mb-3">
    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Exclusions</label>
            <textarea class="form-control passenger_form_input h-auto div_editor4" name="exclusion" rows="4"><?= $product_detail['exclusions'] ?></textarea>
        </div>
    </div>
</div>


<div class="card panel_card p-3 mb-3">
    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Information</label>
            <textarea class="form-control passenger_form_input h-auto div_editor5" name="information" rows="4"><?= $product_detail['information'] ?></textarea>
        </div>
    </div>
</div>



<div class="card panel_card p-3 mb-3">
    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">Redeem</label>
            <textarea class="form-control passenger_form_input h-auto div_editor6" name="redeem" rows="4"><?= $product_detail['redeem'] ?></textarea>
        </div>
    </div>
</div> -->


<div class="row mb-3 p-3">
    <div class="col-md-12 text-end">
        <button type="submit" class="btn btn_primary px-4 saveformbtn">Save</button>
    </div>
</div>

<!-- </form> -->
<?php echo form_close(); ?>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script>
    $(document).ready(function() {
        var base_url = '<?php echo base_url(); ?>';

        //start add more addons
        $(document).on('click', '.addmoreaddons_btn', function() {

            var showAlert = false;
            var categoryselected_values = $('.select_categories').val();
            var newproductaddons = $('.newproductaddons').val();
            var selectedValues = [];
            var selectedDropdownValues = [];
            var addOnDropdowns = $(this).closest('tr').find('.add_onsdropdown');

            var selectedValues1 = [];

            // Loop through each found .add_onsdropdown element and retrieve its selected value
            addOnDropdowns.each(function() {
                var newselectedValue = $(this).val();
                selectedValues1.push(newselectedValue);
            });
            //console.log('selectedValues1',selectedValues1);




            $('.mynewtraddons .add_onsdropdown').each(function() {
                selectedDropdownValues.push($(this).val());
            });






            // console.log('selectedDropdownValues', selectedDropdownValues);
            // console.log('selectedValue:', selectedValue);
            // console.log('selectedDropdownValues:', selectedDropdownValues);


            var myhtml = '';
            $('.add_onsdropdown').each(function() {
                var selectedValue = $(this).val();
                if (selectedValue !== '0') {
                    selectedValues.push(selectedValue);
                }

                // if (selectedDropdownValues.includes(selectedValue)) {
                //     alert('Already Selected');
                //     showAlert = true;
                //     return false;
                // }

                // } else if (selectedValue === newproductaddons || selectedDropdownValues.includes(selectedValue)) {
                //     showAlert = true;
                //     alert('Already Selected');
                //     return false; // Exit the loop
                // }
                // if (newproductaddons !== selectedValue) {
                //     if (selectedValue !== '0') {
                //         selectedValues.push(selectedValue);
                //     }
                // } else {
                //     showAlert = true;
                //     alert('Already Selected');
                //     return false; // Exit the function
                // }
            });

            // If showAlert is true, don't proceed with AJAX call
            if (showAlert) {
                return; // Exit the function
            }

            $.ajax({
                url: base_url + 'admin/addmoreaddons',
                type: 'get',
                data: {
                    selecteddropdown: selectedValues,
                    categoryselected_values: categoryselected_values,
                    selectedDropdownValues: selectedDropdownValues,

                },
                dataType: 'html',
                success: function(html) {
                    //$('.get_dropdownvalues1').append(html);
                    // myhtml+=html;

                    // if (selectedValues1 == 'Other') {
                    //     $('.other').show();
                    // } else {
                    //     $('.other').hide();

                    var tableoptionhtml = `  <tr class="mynewtraddons">
               
               <th scope="row" class="p-3">
               <div class="d-inline-flex justify-content-center">
               <button type="button" class="btn btn_action text_orange fs-4 addmoreaddons_btn">
                   +
               </button>
               <a href="javascript:void(0);" class="btn btn_action ms-1 text_orange fs-3 minusaddons_btn">
                   -
               </a>

               <div  style="min-width:150px;">
                    <div class="addonsdropdown_html">
                        ${html}
                    </div>

               
               </div>
            
           </div>
               </th>
               <td class="p-3">
                   <input type="number" class="form-control tour_detail_input allprices adultaddonregular_price" name="adultaddonregular_price[]" min="1"  placeholder='110'>
               </td>
               <td class="p-3">
                   <input type="number" class="form-control tour_detail_input allprices adultaddonsale_price" name="adultaddonsale_price[]"  placeholder='100'>
               </td>
               <td class="p-3">
                   <input type="number" class="form-control tour_detail_input allprices childaddonregular_price" name="childaddonregular_price[]"  placeholder='90'>
               </td>
               <td class="p-3">
                   <input type="number" class="form-control tour_detail_input allprices childaddonsale_price" name="childaddonsale_price[]" placeholder='80'>
               </td>
               <td class="p-3">
                   <input type="number" class="form-control tour_detail_input allprices infantaddonregular_price" name="infantaddonregular_price[]" placeholder='200'>
               </td>
               <td class="p-3">
                   <input type="number" class="form-control tour_detail_input allprices infantaddonsale_price" name="infantaddonsale_price[]" placeholder='150'>
               </td>
           </tr>
           `;
                    $('#addons_tablebody').append(tableoptionhtml);
                    // }
                }
            });

            // console.log(myhtml);

        });
        //end addmore addons




        //start addons -
        $(document).on('click', '.minusaddons_btn', function() {
            $(this).parents('.mynewtraddons').hide();
            $(this).parents('.mynewtraddons').html('');

            var visibleLength = $('.mynewtraddons:visible').length;
            if (visibleLength == 0) {
                $('.addonstable').html('');
                $('.newaddons_div').show();
            }

        });
        //end addons -

        //start on change addons dropdown
        $(document).on('change', '.add_onsdropdown', function() {
            var selected_value = $(this).val();
            //alert(selectedValues1);
            if (selected_value == 'Other') {
                //$('.other').html("<input type='text' class='form-control my_optiontext' style='margin-top: 6px;'>");
                $(this).closest('tr').find('.other').show();
                // $('.other').show();
            } else {
                $(this).closest('tr').find('.other').hide();
                // $('.other').hide();
            }
        });
        //end on change addons dropdown


        //started on change category to get addons of category
        $(document).on('change', '.select_categories', function() {
            //var selected_length = ('.select_categories option:selected').length;
            var selected_values = $('.select_categories').val();
            var selected_length = selected_values.length;

            if (selected_length === 0) {
                selected_values = 0;
            }
            //var selected_values = [];

            // alert(selected_length);

            $.ajax({
                url: base_url + 'admin/get_addons',
                type: 'get',
                data: {
                    selected_categories: selected_values
                },
                dataType: 'html',
                success: function(html) {
                    $('.selectdropdown_addons').html(html);
                }
            });
            // console.log('slected',selected_values);
            // if (selected_length > 0) {
            //   alert('selected');
            // }else{
            //     alert('not');
            // }
        });
        //end on change category to get addons of category

        //started on change Addons//
        $(document).on('change', '.newproductaddons', function() {


            //$('.addonstable').html('');
            // var selected_length = $(".newproductaddons option:selected").length;
            // var selected_val = $(this).find('option:selected').attr('data-name');


            var $dropdown = $(this);
            var table = $dropdown.closest('.newaddons').find('.addonstable');

            table.html('');
            var selected_length = $dropdown.find('option:selected').length;
            var selected_name = $dropdown.find('option:selected').attr('data-name');
            var selected_val = $dropdown.find('option:selected').val();



            var pricetable = '';
            if (selected_length > 0) {
                if (selected_val > 0 || selected_val == 'other') {
                    $('.newaddons_div').hide();

                    var categoryselected_values = $('.select_categories').val();
                    var selectedValues = [];
                    $('.newproductaddons').each(function() {
                        var selectedValue = $(this).val();
                        if (selectedValue !== '0') {
                            selectedValues.push(selectedValue);
                        }
                    });
                    $.ajax({
                        url: base_url + 'admin/addmoreaddons',
                        type: 'get',
                        data: {
                            selecteddropdown: selectedValues,
                            categoryselected_values: categoryselected_values
                        },
                        dataType: 'html',
                        success: function(html) {

                            $('.get_dropdownvalues').append(html);
                        }
                    });

                    var tablehtml = `
    <div class='appended_table'>
      
    <div class="price_table">
    <div class='price_table'>
    <h5 class="mb-2 my_optiontable"></h5>
<div class="table-responsive mt-2">
<table class="table price_offers_table table-striped newprice_offers_table1 mb-0">
    <thead>
        <tr class="bg_light_orange">
        <input type='hidden' name='product_item[]' class='product_item'>
            <th scope="col" class="p-3">Add&nbsp;Ons<span class="required_show">*</span></th>
            <th scope="col" class="p-3">Adult&nbsp;Regular&nbsp;Price<span class="required_show">*</span></th>
            <th scope="col" class="p-3">Adult&nbsp;Sale&nbsp;Price</th>
            <th scope="col" class="p-3">Child&nbsp;Regular&nbsp;Price</th>
            <th scope="col" class="p-3">Child&nbsp;Sale&nbsp;Price</th>
            <th scope="col" class="p-3">Infant&nbsp;Regular&nbsp;Price</th>
            <th scope="col" class="p-3">Infant&nbsp;Sale&nbsp;Price</th>
        </tr>
    </thead>
    <tbody id="addons_tablebody">
                            <tr class="mynewtraddons">
               
                <th scope="row" class="p-3">
                <div class="d-flex align-items-center">
                <button type="button" class="btn btn_action text_orange fs-4 addmoreaddons_btn">
                    +
                </button>
                <a href="javascript:void(0);" class="btn btn_action ms-1 text_orange fs-3 minusaddons_btn mx-1">
                    -
                </a>
                <div class="get_dropdownvalues addonsdropdown_html" style="min-width:150px;">
                </div>
            </div>
            </th>

             
                <td class="p-3">
                    <input type="number" class="form-control tour_detail_input allprices adultaddonregular_price" name="adultaddonregular_price[]" placeholder='110'>
                </td>
                <td class="p-3">
                    <input type="number" class="form-control tour_detail_input allprices adultaddonsale_price" name="adultaddonsale_price[]" placeholder='100'>
                </td>
                <td class="p-3">
                    <input type="number" class="form-control tour_detail_input allprices childaddonregular_price" name="childaddonregular_price[]" placeholder='90'>
                </td>
                <td class="p-3">
                    <input type="number" class="form-control tour_detail_input allprices childaddonsale_price" name="childaddonsale_price[]" placeholder='80'>
                </td>
                <td class="p-3">
                    <input type="number" class="form-control tour_detail_input allprices infantaddonregular_price" name="infantaddonregular_price[]" placeholder='200'>
                </td>
                <td class="p-3">
                    <input type="number" class="form-control tour_detail_input allprices infantaddonsale_price" name="infantaddonsale_price[]" placeholder='150'>
                </td>
            </tr>
              
              
                        </tbody>
</table>
</div>
</div>
</div>
</div>
`;
                    pricetable += tablehtml;


                    //var previoushtml=$('#product_table .newtable1').html();
                    // $('.addonstable').append(pricetable);
                    table.append(pricetable);

                }
            } else {
                $('.addonstable').html('');
            }
        });

        //end on change Addons//


        //start add new option text field change
        $(document).on('change', '.my_optiontext', function() {
            var $this = $(this);
            var otherTextField = $(this).closest('th').find('.add_onsdropdown');
            var option_value = $(this).val();
            var categoryselected_values = $('.select_categories').val();
            var newproductaddons = $('.newproductaddons').val();
            var selectedValues = [];
            var selectedDropdownValues = [];
            var addOnDropdowns = $(this).closest('tr').find('.add_onsdropdown');

            var selectedValues1 = [];

            // Loop through each found .add_onsdropdown element and retrieve its selected value
            addOnDropdowns.each(function() {
                var newselectedValue = $(this).val();
                selectedValues1.push(newselectedValue);
            });
            //console.log('selectedValues1',selectedValues1);




            $('.mynewtraddons .add_onsdropdown').each(function() {
                selectedDropdownValues.push($(this).val());
            });

            var myhtml = '';
            $('.add_onsdropdown').each(function() {
                var selectedValue = $(this).val();
                if (selectedValue !== '0') {
                    selectedValues.push(selectedValue);
                }
            });

            // var $this = $(this);

            $.ajax({
                url: base_url + 'admin/save_moreaddons',
                type: 'get',
                data: {
                    option_value: option_value,
                    selecteddropdown: selectedValues,
                    categoryselected_values: categoryselected_values,
                    selectedDropdownValues: selectedDropdownValues,
                },
                dataType: 'html',
                success: function(html) {
                    // $('.addonsdropdown_html').html(html);
                    //$this.closest('.addonsdropdown_html').html(html);
                    $this.closest('tr').find('.addonsdropdown_html').html(html);
                    $this.closest('tr').find('.other').hide();
                    //$('.other').html("");
                }
            });
            //otherTextField.hide();
        });
        //end add new option text field change


        $('.newtitle').keyup(function() {
           
            var productoptionname = $(this).val();
            alert(productoptionname);
            $('#product_title').html(productoptionname);
            $('.tour_optionname').val(productoptionname);
            $('.mynewoption_name').val(productoptionname);
            // $('.option_name').val(productoptionname);
        });

        $('.newdescription').keyup(function() {
            var productoptiondesc = $(this).val();
            //$('#product_title').html(productoptionname);
            $('.mytour').val(productoptiondesc);
            // $('.option_name').val(productoptionname);
            $('.mynewoptiondesc').html(productoptiondesc);
            // $('.option_name').val(productoptionname);
        });
        //end entering product name in option table name  

        var editorsConfig = {};
        editorsConfig.toolbar = "basic";
        //start change product section
        $(document).on('change', '#product_section', function() {
            $('.highlight_section').hide();
            $('.inclusions_section').hide();
            $('.exclusions_section').hide();
            $('.information_section').hide();
            $('.redeem_section').hide();
            $('.product_sectioncard').html("");
            if ($("#product_section option:selected").length > 1 || $("#product_section option:selected").length === 1) {
                //  $('.feature_table').show();
                var selectedOptions = [];
                var selectOptionsName = [];
                var feature_tablehtml = '';
                $("#product_section option:selected").each(function() {
                    selectedOptions.push($(this).val());
                    selectOptionsName.push($(this).attr('data-name'));
                });
                var s = 7;
                for (var i = 0; i < selectOptionsName.length; i++) {

                    var tablehtml = `
                    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">` + selectOptionsName[i] + `</label>
            <textarea class="form-control passenger_form_input h-auto div_editor` + s + `" name="section_text[]" rows="4"></textarea>
        </div>
    </div>
            `;

                    feature_tablehtml += tablehtml;
                    // if(selectOptionsName[i]=='Highlights'){
                    //     $('.highlight_section').show();
                    // }else if(selectOptionsName[i]=='Inclusions'){
                    //     $('.inclusions_section').show();
                    // }else if(selectOptionsName[i]=='Exclusions'){
                    //     $('.exclusions_section').show();
                    // }else if(selectOptionsName[i]=='Information'){
                    //     $('.information_section').show(); 
                    // }else if(selectOptionsName[i]=='Redeem'){
                    //     $('.redeem_section').show();
                    // }
                    console.log(selectOptionsName[i]);
                    s++;
                }
                $('.product_sectioncard').html(feature_tablehtml);

                // Initialize ClassicEditor for dynamically added textarea elements
                for (var j = 7; j < s; j++) {
                    // ClassicEditor
                    //     .create(document.querySelector('.div_editor' + j), editorsConfig)
                    //     .catch(error => {
                    //         console.error(error);
                    //     });

                    var editorCfg = {};
                    editorCfg.toolbar = "basic";
                    new RichTextEditor(".div_editor" + j, editorCfg);
                }
            }
        });
        //end change product section


        //start change product feature
        $(document).on('change', '#product_feature', function() {
            //     
            console.log($("#product_feature option:selected").length)
            if ($("#product_feature option:selected").length > 1 || $("#product_feature option:selected").length === 1) {
                $('.myfeature_table').show();
                var selectedOptions = [];
                var selectOptionsName = [];
                var feature_tablehtml = '';
                $("#product_feature option:selected").each(function() {
                    selectedOptions.push($(this).val());
                    selectOptionsName.push($(this).attr('data-name'));
                });

                var s = 1;
                for (var i = 0; i < selectedOptions.length; i++) {
                    var tablehtml = `
                                <tr>
                                    <td class="p-3">
                                        <div class="form-check">
                                         ` + s + `
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        <div class="form-check">
                                        ` + selectOptionsName[i] + `
                                        </div>
                                    </td>
                                    <td class="p-3 option_namez">
                                       <input type="hidden" value=` + selectedOptions[i] + ` name="product_feature[]"> 
                                       <input type="text" class="form-control" name="feature_value[]" required value='<?= old('feature_value[]') ?>' placeholder="Tour Services">
                                    
                                    </td>
                                </tr>
            `;

                    feature_tablehtml += tablehtml;
                    s++;
                }

                $('.featuretable_tr').html(feature_tablehtml);
            } else {
                $('.myfeature_table').hide();
            }
            // console.log(selectedOptions);
            // console.log(selectOptionsName);
        });
        //end change product feature

        //start image library

        //end image library


        // $(document).on('click', '.passenger_form_checkbox', function() {
        //     var $checkbox = $(this);
        //     var isChecked = $checkbox.prop('checked');
        //     if (!isChecked) {
        //         $checkbox.prop('checked', false); // Trigger change event after setting 'checked' property
        //     } else {
        //         $checkbox.prop('checked', true).change();
        //     } // Trigger change event after setting 'checked' property
        // });


        // $(document).on('change', '.passenger_form_checkbox', function() {
        //     // Select all checkboxes
        //     var $checkboxes = $('.passenger_form_checkbox');
        //     // Filter checked checkboxes
        //     var checkedCheckboxes = $checkboxes.filter(':checked');

        //     // Iterate through all checkboxes
        //     $checkboxes.each(function() {
        //         var isChecked = $(this).is(":checked");
        //         var $row = $(this).closest('tr');
        //         var relatedFields = $row.find('.allprices'); // Select all fields with class 'allprices' within the same row

        //         if (isChecked) {
        //             relatedFields.prop('required', true); // Make all fields required
        //             console.log('hey');
        //             $('form').validate().element(relatedFields); // Trigger validation for related fields
        //             console.log('were');
        //         } else {
        //             relatedFields.prop('required', false); // Remove required attribute from all fields
        //             relatedFields.each(function() {
        //                 $(this).valid(); // Reset validation state
        //             });
        //         }
        //     });
        // });


        // start handing checkbox option like Without Transfers etc
        $(document).on('click', '.passenger_form_checkbox', function() {
            //      $(this).prop('checked', true);
            var $checkbox = $(this);
            var myid = $checkbox.attr('data-id');
            var $hiddenInput = $checkbox.closest('tr').find('.tranfertype_' + myid);
            var relatedFields = $(this).closest('tr').find('.allprices');
            if ($checkbox.is(":checked")) {
                // relatedFields.prop('required', true);
                var myval = $checkbox.val();
                $hiddenInput.val(myval);
            } else {
                //relatedFields.prop('required', false);
                $hiddenInput.val('');
            }

            //     $checkbox.each(function() {
            //     var isChecked = $(this).is(":checked");
            //     var $row = $(this).closest('tr');
            //     var relatedFields = $row.find('.allprices :input'); // Select all input fields with class 'allprices' within the same row

            //     if (isChecked) {
            //         relatedFields.prop('required', true); // Make all fields required
            //     } else {
            //         relatedFields.prop('required', false); // Remove required attribute from all fields
            //     }

            //     // Trigger validation for the input fields in the row
            //     $row.validate().form();
            // });
            // $('form').validate().element(relatedFields);

            //     var $checkboxes = $('.passenger_form_checkbox'); // Select all checkboxes
            // var checkedCheckboxes = $checkboxes.filter(':checked'); // Filter checked checkboxes

            // // Iterate through all checkboxes
            // $checkboxes.each(function() {
            //     var isChecked = $(this).is(":checked");
            //     var relatedFields = $(this).closest('tr').find('.allprices'); // Select all fields with class 'allprices' within the same row

            //     if (isChecked) {
            //         relatedFields.prop('required', true); // Make all fields required
            //     } else {
            //         relatedFields.prop('required', false); // Remove required attribute from all fields
            //     }
            // });

            // // Re-validate the form
            // $('form').validate().element('.allprices');
            //   //  $('form').validate().element(relatedFields);

        });
        // end handing checkbox option like Without Transfers etc


        // start entering product name in option table name  
        $('#product_name').keyup(function() {
            var productname = $(this).val();
            $('#product_title').html(productname);
            $('.tour_optionname').val(productname);
            $('.option_name').val(productname);
        });
        //end entering product name in option table name  


        // start handling add more button click in option table      
        $(document).on('click', '.add_moretable', function() {
            $('.option_name').val('');
            $('#product_table').hide();
            $('.add_featuretable').show();

            $('.passenger_form_checkbox').prop('checked', false);
            $('.passenger_form_checkbox').removeAttr('checked');
            $('.tranfertype_1,.tranfertype_2,.tranfertype_3').val('');
            $('.tranfertype_1,.tranfertype_2,.tranfertype_3').removeAttr('value');
            $('.allprices').prop('required', false);
        });
        // end handling add more button click in option table  

        // start handling plus button click in more option table      
        $(document).on('click', '.add_btn', function() {
            var tablehtml = `<tr class='mynewtr'>
                    <td class="p-3">
                        <input type="text" class="form-control tour_detail_input  tour_optionname">
                    </td>
                    <td class="p-3">
                        <textarea class="form-control tour_detail_input mytourdescription1 newtours" rows="1"></textarea>
                    </td>
                    <td class="p-3">
                        <div class="d-flex justify-content-center">
                            <button type='button' class="btn btn_action text_orange fs-4 add_btn">
                                +
                            </button>
                            <button type='button' class="btn btn_action ms-1 text_orange fs-3 minus_btn">
                                -
                            </button>
                        </div>
                    </td>
                </tr>`;
            $('#mytable_options').append(tablehtml);
        });

        // end handling plus button click in more option table   


        // start handling minus button click in more option table   
        $(document).on('click', '.minus_btn', function() {
            $(this).parents('.mynewtr').hide();
            $(this).parents('.mynewtr').html('');
        });
        // end handling minus button click in more option table  

        //start cancel button click
        $(document).on('click', '.cancel_btn', function() {
            $('.add_featuretable').hide();
            $('#product_table').show();
            $('.tranfertype_1').val('Sharing Transfers');
            $('.passenger_form_checkbox[value="Sharing Transfers"]').prop('checked', true);
            // $('.allprices').prop('required',true);
        });
        //end cancel button click

        // start handling save button click in more option table
        $(document).on('click', '.save_btn', function() {
            $('.newtable .appended_table').html('');
            $('.newtable .newtitlesection').html('');
            $('.newtable .price_table').html('');

            $('.newtable .appended_table').empty().css('margin-top', '0');
            $('.newtable .newtitlesection').empty().css('margin-top', '0');
            $('.newtable .price_table').empty().css('margin-top', '0');

            var rowCount = $('#mytable_options tr:visible').length;

            // var $product_prices = $('#product_table .allprices');
            // var newval = [];
            // $product_prices.each(function() {
            //     newval.push($(this).val());
            // });

            // if (newval.some(value => value.trim() !== '')) {
            //     var price_table=$('.price_table').clone();
            //     $('.newtable').append(price_table);
            // }

            var isEmpty = false;
            var values = [];
            $('.tour_optionname').each(function() {
                values.push($(this).val());
            });

            for (var i = 0; i < values.length; i++) {
                if (values[i] === '') {
                    isEmpty = true;
                    break;
                }
            }

            if (isEmpty) {
                // Perform the desired action if any value is empty
                alert('Option Name cannot be empty');
            } else {
                showtable(rowCount);
                //$('.save_btn').hide();
                $('.add_featuretable').hide();
                $('.edit_table').show();
                // $('.add_btn').prop('disabled', true);
                // $('.minus_btn').prop('disabled', true);
                // $('.tour_optionname').prop('readonly', true);
                // $('.mytourdescription1').prop('readonly', true);
            }
        });
        // end handling save button click in more option table

        //start form save button click
        $(document).on('click', '.saveformbtn', function(e) {
            e.preventDefault();
            var allTablesChecked = true;
            //  if ($('.passenger_form_checkbox:checked').length > 0) {
            $('.text_danger').remove();
            validateoptiontabel();
            // $('.newprice_offers_table').each(function() {

            //     if (!$(this).is(':visible')) {
            //         // Skip hidden tables
            //         return true; // Continue to the next iteration
            //     }
            //     if ($(this).find('.passenger_form_checkbox:checked').length === 0) {
            //         allTablesChecked = false;
            //         return false; // Exit the loop if any table does not have a checked checkbox
            //     }
            // });

            // if (!allTablesChecked) {
            //     alert('Please choose at least one transfer type in each transfer table.');
            //     return; // Exit function if any table does not have a checked checkbox
            // }

            // if ($('#regForm')[0].checkValidity()) {
            //     // All required fields are valid, submit the form
            //     $('#regForm').submit();
            // } else {
            //     // Required fields are invalid, display an error message or handle accordingly
            //     alert('Please fill in all required fields.');
            // }
            $('#regForm').submit();
            // } else {
            //     alert('Please choose atleast one Transfer Type');
            // }

        });
        //end form save button click

        //start handling regular and sale price
        $(document).on('change', '.adultsale_price', function() {

            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var adultregularprice = $(this).closest('tr').find('.adultregular_price');
                var get_regularprice = parseFloat(adultregularprice.val());
                $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                // alert('Value cannot be less than 0');
                $(this).val('');
            }
        });

        $(document).on('change', '.childsale_price', function() {
            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var childregularprice = $(this).closest('tr').find('.childregular_price');
                var get_regularprice = parseFloat(childregularprice.val());
                $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                $(this).val('');
            }
        });

        $(document).on('change', '.infantsale_price', function() {
            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var infantregularprice = $(this).closest('tr').find('.infantregular_price');
                var get_regularprice = parseFloat(infantregularprice.val());
                $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    // alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                $(this).val('');
            }
        });


        $(document).on('change', '.adultregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                var adultsaleprice = $(this).closest('tr').find('.adultsale_price');
                var get_saleprice = parseFloat(adultsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    // alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                $(this).val('');
            }
        });

        $(document).on('change', '.childregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                var childsaleprice = $(this).closest('tr').find('.childsale_price');
                var get_saleprice = parseFloat(childsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    // alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                $(this).val('');
            }
        });

        $(document).on('change', '.infantregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                var infantsaleprice = $(this).closest('tr').find('.infantsale_price');
                var get_saleprice = parseFloat(infantsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    //  alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                $(this).val('');
            }
        });

        //end handling regular and sale price

        //start edit button

        $(document).on('click', '.edit_table', function() {
            $('.add_featuretable').show();
            $(this).hide();
        });
        //end edit button

        // start function for show table in more option table
        function showtable($length) {

            $('.newtable').show();
            var rowCount = $('#mytable_options tr:visible').length;
            var pricetable = '';

            var testvalues = [];
            var tours_value = [];
            $('.tour_optionname').each(function() {
                testvalues.push($(this).val());

            });

            $('.newtours').each(function() {
                tours_value.push($(this).val());

            });


            var s = 1;
            for (var i = 0; i < rowCount; i++) {
                var tablehtml = `
                <div class="appended_table">
                <div class="row newtitlesection" style="margin-top:10px">
                        <div class="col-md-6 mb-4">
                            <label class="form-label passenger_form_label color_primary mb-1">Title <span class="required_show">*</span></label>
                            <input type="text" class="form-control passenger_form_input newtitle" name='newtitle[]' value="` + testvalues[i] + `" placeholder="Evening Desert Safari">
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label passenger_form_label color_primary mb-1">Description</label>
                            <textarea class="form-control passenger_form_input newdescription" name='newdescription[]' placeholder="Evening Desert Safari">` + tours_value[i] + `</textarea>
                        </div>
                    </div>
                <div class="price_table">
                <div class='price_table'>
                
        <h5 class="mb-3 mt-5 my_optiontable"></h5>
        <div class="table-responsive mt-2">
            <table class="table price_offers_table table-striped newprice_offers_table mb-0">
                <thead>
                    <tr class="bg_light_orange">
                    <input type='hidden' name='product_item[]' class='product_item' value=` + s + `>
                        <th scope="col" class="p-3" style="min-width: 20px;"></th>
                        <th scope="col" class="p-3">Transfer&nbsp;Type<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Quantity/Item*</th>
                        <th scope="col" class="p-3">Adult&nbsp;Regular&nbsp;Price<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Adult&nbsp;Sale&nbsp;Price</th>
                        <th scope="col" class="p-3">Child&nbsp;Regular&nbsp;Price</th>
                        <th scope="col" class="p-3">Child&nbsp;Sale&nbsp;Price</th>
                        <th scope="col" class="p-3">Infant&nbsp;Regular&nbsp;Price</th>
                        <th scope="col" class="p-3">Infant&nbsp;Sale&nbsp;Price</th>
                    </tr>
                </thead>
                <tbody>
                                        <tr>
                            <td class="p-3">
                                <div class="form-check">
                                    <input class="form-check-input passenger_form_checkbox" type="checkbox" value="Sharing Transfers" id="mytransfer_` + s + `" data-id=` + s + ` checked>
                                </div>
                            </td>
                            <th scope="row" class="p-3">
                                Sharing Transfers                                <input type="hidden" value="Sharing Transfers" class="tranfertype_` + s + `" name="transfer_type[` + s + `][]">
                            </th>
                            <td class="p-3 option_namez" style="display: none;">
                                        <input type="hidden" class="form-control tour_detail_input option_name mynewoption_name asdasd" value="` + testvalues[i] + `" name="option_name[` + s + `][]">
                                        <textarea class="form-control mytourdescription tour_detail_input mydatadesc mynewoptiondesc"  rows="1" name="option_description[` + s + `][]">` + tours_value[i] + `</textarea> 
                            </td> 

                            <td class="p-3 option_namez">
                                <input type="text" class="form-control tour_detail_input option_name asdasd" id="option_quantity" name="option_quantity[` + s + `][]" placeholder="1">
                            </td>

                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultregular_price" min="1"  name="adult_regular_price[` + s + `][]" placeholder='110'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultsale_price"  name="adult_sale_price[` + s + `][]" placeholder='100'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childregular_price"  name="child_regular_price[` + s + `][]" placeholder='90'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childsale_price"  name="child_sale_price[` + s + `][]" placeholder='80'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantregular_price"  name="infant_regular_price[` + s + `][]" placeholder='200'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantsale_price"  name="infant_sale_price[` + s + `][]" placeholder='150'>
                            </td>
                        </tr>
                                            <tr>
                            <td class="p-3">
                                <div class="form-check">
                                    <input class="form-check-input passenger_form_checkbox" type="checkbox" value="Private Transfers" id="mytransfer_` + s + `" data-id=` + s + `>
                                </div>
                            </td>
                            <th scope="row" class="p-3">
                            Private Transfers                                <input type="hidden" class="tranfertype_` + s + `" name="transfer_type[` + s + `][]">
                            </th>
                            
                            <td class="p-3 option_namez" style="display: none;">
                                        <input type="hidden" class="form-control tour_detail_input option_name mynewoption_name asdasd" value="` + testvalues[i] + `" name="option_name[` + s + `][]">
                                        <textarea class="form-control mytourdescription tour_detail_input mydatadesc mynewoptiondesc"  rows="1" name="option_description[` + s + `][]">` + tours_value[i] + `</textarea> 
                            </td> 

                            <td class="p-3 option_namez">
                                <input type="text" class="form-control tour_detail_input option_name asdasd" id="option_quantity" name="option_quantity[` + s + `][]" placeholder="1">
                            </td>

                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultregular_price" min="1" name="adult_regular_price[` + s + `][]" placeholder='110'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultsale_price"  name="adult_sale_price[` + s + `][]" placeholder='100'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childregular_price" name="child_regular_price[` + s + `][]" placeholder='90'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childsale_price"  name="child_sale_price[` + s + `][]" placeholder='80'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantregular_price"  name="infant_regular_price[` + s + `][]" placeholder='200'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantsale_price"  name="infant_sale_price[` + s + `][]" placeholder='150'>
                            </td>
                        </tr>
                                            <tr>
                            <td class="p-3">
                                <div class="form-check">
                                    <input class="form-check-input passenger_form_checkbox" type="checkbox" value="Without Transfers" id="mytransfer_` + s + `" data-id=` + s + `>
                                </div>
                            </td>
                            <th scope="row" class="p-3">
                            Without Transfers                                <input type="hidden" class="tranfertype_` + s + `" name="transfer_type[` + s + `][]">
                            </th>
                            <td class="p-3 option_namez" style="display: none;">
                                        <input type="hidden" class="form-control tour_detail_input option_name mynewoption_name asdasd" value="` + testvalues[i] + `" name="option_name[` + s + `][]">
                                        <textarea class="form-control mytourdescription tour_detail_input mydatadesc mynewoptiondesc"  rows="1" name="option_description[` + s + `][]">` + tours_value[i] + `</textarea> 
                            </td> 

                            <td class="p-3 option_namez">
                                <input type="text" class="form-control tour_detail_input option_name asdasd" id="option_quantity" name="option_quantity[` + s + `][]" placeholder="1">
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultregular_price" min="1" name="adult_regular_price[` + s + `][]" placeholder='110'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultsale_price" name="adult_sale_price[` + s + `][]" placeholder='100'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childregular_price"  name="child_regular_price[` + s + `][]" placeholder='90'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childsale_price" name="child_sale_price[` + s + `][]" placeholder='80'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantregular_price"  name="infant_regular_price[` + s + `][]" placeholder='200'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantsale_price"  name="infant_sale_price[` + s + `][]" placeholder='150'>
                            </td>
                        </tr>
                                    </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
        `;
                pricetable += $(tablehtml).html();
                s++;
            }
            $('.newtable').append(pricetable);
        }
        // end function for show table in more option table

        //start validation
        // function validateProductVariations() {
        //     var valid = true;

        //     var $checkboxes = $('.passenger_form_checkbox'); // Select all checkboxes
        //     var checkedCheckboxes = $checkboxes.filter(':checked'); // Filter checked checkboxes

        //     // Iterate through all checkboxes
        //     $checkboxes.each(function() {

        //         var isChecked = $(this).is(":checked");
        //         var relatedFields = $(this).closest('tr').find('.allprices'); // Select all fields with class 'allprices' within the same row
        //         $(this).closest('tr').find('.allprices').next('.text_danger').remove();
        //         if (isChecked) {

        //             relatedFields.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>')
        //             valid = false;
        //             relatedFields.prop('required', true); // Make all fields required
        //         } else {
        //             relatedFields.next('.text_danger').remove();
        //             relatedFields.prop('required', false); // Remove required attribute from all fields
        //         }
        //     });
        //     return valid;


        //     // $('.variation_quantity').each(function() {
        //     //     const quantityField = $(this);
        //     //     const quantityValue = quantityField.val();
        //     //     const orderQuantityValue = parseFloat($("[name='max_order_quantity']").val()); // Get the order quantity value
        //     //     quantityField.next('.text_danger').remove();
        //     //     if (quantityValue === '') {
        //     //         quantityField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter quantity</span>')
        //     //         valid = false;
        //     //     } else {
        //     //         const integerRegex = /^\d+$/;
        //     //         if (!integerRegex.test(quantityValue)) {
        //     //             quantityField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter valid quantity.</span>');
        //     //             valid = false;
        //     //         } else if (parseFloat(quantityValue) <= orderQuantityValue) { // Compare quantity with order quantity
        //     //             quantityField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Qt must be more than Max Qt limit.</span>');
        //     //             valid = false;
        //     //         } else {
        //     //             quantityField.next('.text_danger').remove();
        //     //         }
        //     //     }
        //     // });
        //     // return valid;
        // }


        function validateoptiontabel() {
            var valid = true;

            var $checkboxes = $('.passenger_form_checkbox:checked'); // Select all checked checkboxes


            // if ($('.passenger_form_checkbox:checked').length <= 0) {
            //     var relatedFields = $('.my_optiontable');
            //     relatedFields.next('.text_danger').remove();
            //     relatedFields.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please Check atleast one checkbox from below</span>');
            //     valid = false;
            // }
            $('.newprice_offers_table').each(function() {

                if (!$(this).is(':visible')) {
                    // Skip hidden tables
                    return true; // Continue to the next iteration
                }
                if ($(this).find('.passenger_form_checkbox:checked').length === 0) {
                    var relatedFields = $(this).closest('.price_table').find('.my_optiontable');
                    relatedFields.next('.text_danger').remove();
                    relatedFields.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please check atleast one checkbox from below table</span>');
                    valid = false;
                }
            });

            // Iterate through all checked checkboxes
            $checkboxes.each(function() {

                //start for Adult regular price
                var relatedFields = $(this).closest('tr').find('.adultregular_price'); // Select all fields with class 'adultregular_price' within the same row
                relatedFields.next('.text_danger').remove(); // Remove any previous error messages

                relatedFields.each(function() {
                    var priceField = $(this);
                    var priceValue = priceField.val().trim();

                    if (priceValue === '') {
                        priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                        valid = false;
                    } else {
                        var decimalRegex = /^\d{1,10}(\.\d{1,2})?$/;
                        if (!decimalRegex.test(priceValue)) {
                            priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                            valid = false;
                        }
                    }
                });
                // end for Adult regular price

                //start for Adult Sale price
                // var adultsaleprice = $(this).closest('tr').find('.adultsale_price'); // Select all fields with class 'adultregular_price' within the same row
                // adultsaleprice.next('.text_danger').remove(); // Remove any previous error messages

                // adultsaleprice.each(function() {
                //     var priceField = $(this);
                //     var priceValue = priceField.val().trim();

                //     if (priceValue === '') {
                //         priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                //         valid = false;
                //     } else {
                //         var decimalRegex = /^\d{1,10}(\.\d{1,2})?$/;
                //         if (!decimalRegex.test(priceValue)) {
                //             priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                //             valid = false;
                //         }
                //     }
                // });
                // end for Adult Sale price

                //start for Child Regular price
                // var childregularprice = $(this).closest('tr').find('.childregular_price'); // Select all fields with class 'adultregular_price' within the same row
                // childregularprice.next('.text_danger').remove(); // Remove any previous error messages

                // childregularprice.each(function() {
                //     var priceField = $(this);
                //     var priceValue = priceField.val().trim();

                //     if (priceValue === '') {
                //         priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                //         valid = false;
                //     } else {
                //         var decimalRegex = /^\d{1,10}(\.\d{1,2})?$/;
                //         if (!decimalRegex.test(priceValue)) {
                //             priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                //             valid = false;
                //         }
                //     }
                // });
                // end for Child Regular price

                //start for Child Sale price
                // var childsaleprice = $(this).closest('tr').find('.childsale_price'); // Select all fields with class 'adultregular_price' within the same row
                // childsaleprice.next('.text_danger').remove(); // Remove any previous error messages

                // childsaleprice.each(function() {
                //     var priceField = $(this);
                //     var priceValue = priceField.val().trim();

                //     if (priceValue === '') {
                //         priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                //         valid = false;
                //     } else {
                //         var decimalRegex = /^\d{1,10}(\.\d{1,2})?$/;
                //         if (!decimalRegex.test(priceValue)) {
                //             priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                //             valid = false;
                //         }
                //     }
                // });
                // end for Child Sale price

                //start for Infant Regular price
                // var infantregularprice = $(this).closest('tr').find('.infantregular_price'); // Select all fields with class 'adultregular_price' within the same row
                // infantregularprice.next('.text_danger').remove(); // Remove any previous error messages

                // infantregularprice.each(function() {
                //     var priceField = $(this);
                //     var priceValue = priceField.val().trim();

                //     if (priceValue === '') {
                //         priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                //         valid = false;
                //     } else {
                //         var decimalRegex = /^\d{1,10}(\.\d{1,2})?$/;
                //         if (!decimalRegex.test(priceValue)) {
                //             priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                //             valid = false;
                //         }
                //     }
                // });
                // end for Infant Regular price

                //start for Infant Sale price
                // var infantsaleprice = $(this).closest('tr').find('.infantsale_price'); // Select all fields with class 'adultregular_price' within the same row
                // infantsaleprice.next('.text_danger').remove(); // Remove any previous error messages

                // infantsaleprice.each(function() {
                //     var priceField = $(this);
                //     var priceValue = priceField.val().trim();

                //     if (priceValue === '') {
                //         priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                //         valid = false;
                //     } else {
                //         var decimalRegex = /^\d{1,10}(\.\d{1,2})?$/;
                //         if (!decimalRegex.test(priceValue)) {
                //             priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                //             valid = false;
                //         }
                //     }
                // });
                // end for Infant Sale price


                //start for Option name
                // var optionname = $(this).closest('tr').find('.option_name'); // Select all fields with class 'adultregular_price' within the same row
                // optionname.next('.text_danger').remove(); // Remove any previous error messages

                // optionname.each(function() {
                //     var priceField = $(this);
                //     var priceValue = priceField.val();

                //     if (priceValue === '') {
                //         priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                //         valid = false;
                //     }
                // });
                // end for Option name


            });

            return valid;
        }

        //stop validation

        //start form validation jquery
        $('form').validate({
            rules: {
                title: {
                    required: true,
                },
                'product_category[]': {
                    required: true,
                },
                overview: {
                    required: true,
                },
                productcover_img: {
                    required: true
                },
                select_feature: {
                    required: true,
                },

            },
            messages: {
                title: {
                    required: "Product Name is required",
                },
                'product_category[]': {
                    required: "Category is required",
                },
                overview: {
                    required: "Overview is required",
                },
                productcover_img: {
                    required: "Product Cover is required",
                },
                select_feature: {
                    required: "Feature is required",
                },

            },
            submitHandler: function(form) {
                if (validateoptiontabel()) {
                    form.submit();
                } else {
                    $('html, body').animate({
                        scrollTop: 0
                    }, 'fast');
                    event.preventDefault();
                }
                //form.submit();
            }
        });
        //end form validation jquery

    });
</script>

<script>
    /* Write code on document load */
    $(document).ready(function() {
        var scrollTrigger = $("*[scroll-trigger]");
        scrollTrigger.bind('click', function(e) {
            e.preventDefault(); // prevent hard jump, the default behavior
            var _this = $(this);
            var triggerAttr = _this.attr('scroll-trigger');
            var scrollTarget = $('*[scroll-target=' + triggerAttr + ']'); // Set the target as variable

            // perform animated scrolling by getting top-position of target-element and set it as scroll target
            $('html, body').stop().animate({
                scrollTop: scrollTarget.offset().top - 80
            }, 100);
            return false;
        });
    });
</script>

<?= $this->endSection() ?>