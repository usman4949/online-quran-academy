<?php
$this->uri = current_url(true);
$uriSegments = $this->uri->getSegments();
?>

<div class="card panel_card p-2">
    <div class="d-flex mx-auto align-items-center py-2">
        <div class="flex-shrink-0">
            <div class="logged_in_user">
                <?php

                  
                $isUserLoggedIn = session('isUserLoggedIn');
                if ($isUserLoggedIn) {
                    $name = session('username');
                    $userid = session('userid');
                    $userimg=session('user_profileimage');
                } else {
                    $name = 'Anni';
                    $userid = 0;
                    $userimg='';
                }
                if (!empty($userimg)) {
                    $image = base_url('uploads/profile/thumbnail40-40/' . $userimg);
                } else {
                    $image = base_url('assets/images/user_dashboard.png');
                }
                ?>
                <img src="<?= $image ?>" alt="" class="rounded-pill">
            </div>
        </div>
        <div class="flex-grow-1 ms-2">
            <h6 class="logged_in_user_name text_orange mb-0"><?= $name ?>  </h6>
        </div>
    </div>
    <ul class="nav flex-column nav-pills nav-fill sidebar_height">
        <li class="nav-item mb-2" role="presentation" style="flex: none;">
            <a class="nav-link sidebar_nav_text <?= (in_array('dashboard', $uriSegments)) ? 'active' : '' ?>" href="<?= base_url('/admin/dashboard') ?>">
                <img src="<?= base_url('/') ?>/assets/images/svg/panel_svg/dashboard<?= (in_array('dashboard', $uriSegments)) ? '_active' : '' ?>.svg" class="me-2" alt="">
                Dashboard
               
            </a>
        </li>
        <li class="nav-item mb-2" role="presentation" style="flex: none;">
            <a class="nav-link sidebar_nav_text <?= (in_array('profile', $uriSegments)) || (in_array('add_profile', $uriSegments)) ? 'active' : '' ?>" href="<?= base_url('/admin/profile') ?>">
                <img src="<?= base_url('/') ?>/assets/images/svg/panel_svg/profile<?= (in_array('profile', $uriSegments)) || (in_array('add_profile', $uriSegments)) ? '_active' : '' ?>.svg" class="me-2" alt="">
                My Profile
            </a>
        </li>

        <li class="nav-item mb-2" role="presentation" style="flex: none;">
            <a class="nav-link sidebar_nav_text <?= (in_array('products', $uriSegments)) || (in_array('add_products', $uriSegments)) ? 'active' : '' ?>" href="<?= base_url('/admin/products') ?>">
                <img src="<?= base_url('/') ?>/assets/images/svg/panel_svg/product_icon<?= (in_array('products', $uriSegments)) || (in_array('add_products', $uriSegments)) ? '_active' : '' ?>.svg" class="me-2" alt="">
                Products
            </a>
        </li>
        <?php if ($_SESSION['user_role'] != '1') { ?>
            <li class="nav-item mb-2" role="presentation" style="flex: none;">
                <a class="nav-link sidebar_nav_text <?= (in_array('booking', $uriSegments)) ? 'active' : '' ?>" href="<?= base_url('/admin/booking') ?>">
                    <img src="<?= base_url('/') ?>/assets/images/svg/panel_svg/booking<?= (in_array('booking', $uriSegments)) ? '_active' : '' ?>.svg" class="me-2" alt="">
                    My Booking
                </a>
            </li>
        <?php  } ?>
        <li class="nav-item mb-2" role="presentation" style="flex: none;">
            <a class="nav-link sidebar_nav_text <?= (in_array('orders', $uriSegments)) ? 'active' : '' ?>" href="<?= base_url('/admin/orders/list') ?>">
                <img src="<?= base_url('/') ?>/assets/images/svg/panel_svg/booking<?= (in_array('booking', $uriSegments)) ? '_active' : '' ?>.svg" class="me-2" alt="">
                Booking Management
            </a>
        </li>
        <!-- <li class="nav-item mb-2" role="presentation" style="flex: none;">
            <a class="nav-link sidebar_nav_text" href="">
                <img src="<?= base_url('assets/images/svg/panel_svg/favourite.svg') ?>" class="me-2" alt="">
                Favourite
            </a>
        </li>
        <li class="nav-item mb-2" role="presentation" style="flex: none;">
            <a class="nav-link sidebar_nav_text" href="">
                <img src="<?= base_url('assets/images/svg/panel_svg/transaction.svg') ?>" class="me-2" alt="">
                Transaction
            </a>
        </li>
        <li class="nav-item mb-2" role="presentation" style="flex: none;">
            <a class="nav-link sidebar_nav_text" href="">
                <img src="<?= base_url('assets/images/svg/panel_svg/setting.svg') ?>" class="me-2" alt="">
                Setting
            </a>
        </li> -->
        <li class="nav-item mb-2" role="presentation" style="flex: none;">
            <a class="nav-link sidebar_nav_text" href="<?= base_url('/logout') ?>">
                <img src="<?= base_url('assets/images/svg/panel_svg/logout.svg') ?>" class="me-2" alt="">
                Logout
            </a>
        </li>
    </ul>
</div>