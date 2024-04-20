<nav class="navbar navbar-expand-lg navbar-light py-0">
    <a class="navbar-brand brand_color py-0" href="<?= base_url('/') ?>">
        <img src="<?= base_url('assets/images/svg/dubai_safai_logo.svg') ?>" class="img-fluid" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
                <a class="nav-link top_nav_link me-4" href="<?= base_url('/') ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top_nav_link me-4" href="<?= base_url('/tours') ?>">Tours</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top_nav_link me-4" href="<?= base_url('/about') ?>">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top_nav_link me-4" href="<?= base_url('/testimonials') ?>">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top_nav_link me-4" href="<?= base_url('/privacy_policy') ?>">Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top_nav_link me-4" href="<?= base_url('/faq') ?>">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top_nav_link me-4" href="<?= base_url('/contact') ?>">Contact Us</a>
            </li>
        </ul>
        <div class="d-flex my-auto align-items-center">
            <div class="nav-item dropdown">
                <a class="nav-link d-flex justify-content-end align-items-center pe-0" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">


                <?php
                    $isUserLoggedIn = session('isUserLoggedIn');
                    if ($isUserLoggedIn) {
                        $name = session('username');
                        $userimg=session('user_profileimage');
                    } else {
                        $name = 'Anni';
                        $image='';
                    }

                    if (!empty($userimg)) {
                        $image = base_url('uploads/profile/thumbnail40-40/' . $userimg);
                    } else {
                        $image = base_url('assets/images/user_dashboard.png');
                    }
                    ?>

                    
                    <div class="logged_in_user">
                        <img src="<?= $image ?>" alt="" class="rounded-pill">
                    </div>

                    

                    <h6 class="logged_in_user_name ms-2 mb-0"><?php echo $name ?></h6>
                    <img src="<?= base_url('assets/images/svg/arrow_down_dropdown.svg') ?>" class="ms-1" alt="">
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end my_dropdown_menu" aria-labelledby="navbarDarkDropdownMenuLink">

                    <li>
                        <a class="dropdown-item text_medium px-1" href="<?= base_url('/logout') ?>">
                            <img src="<?= base_url('assets/images/svg/panel_svg/logout.svg') ?>" class="me-2" alt="">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>

            <?php
            $isUserLoggedIn = session('isUserLoggedIn');
            if ($isUserLoggedIn) {
                $user_role = session('user_role');
              
                if ($user_role !== '1') { ?>


                    <a href="<?= base_url('/cart_detail') ?>" class="btn footer_socail_icon text-decoration-none ms-3 position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg_orange fw-light">
                            <?php
                            $isNotemptyCart = session('isnotemptyCart');
                            if ($isNotemptyCart) {
                                $total_items = session('total_items_in_cookies');
                                //$user_role = session('user_role');
                                if (intval($total_items) < 10) {
                                    $show_total = $total_items;
                                } else {
                                    $show_total = '9+';
                                }
                            ?>
                                <?= $show_total ?>
                            <?php } else { ?>
                                0
                            <?php } ?>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        <img src="<?= base_url('assets/images/svg/panel_svg/cart_icon.svg') ?>" width="16" alt="">
                    </a>

            <?php }
            }
            ?>
        </div>
    </div>
</nav>