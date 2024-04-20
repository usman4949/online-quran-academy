<?= $this->extend('login_template/layout') ?>


<?= $this->section('main_content') ?>

<div class="container-fluid sign_up_bg px-0" style="min-height: 100vh;">
    <div class="row justify-content-end">
        <div class="col-lg-11">
            <a class="navbar-brand brand_color" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/images/svg/dubai_safai_logo.svg') ?>" class="img-fluid" alt="">
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 mt-5">
                <img src="<?= base_url('assets/images/change_password_img.png') ?>" class="img-fluid mt-5" alt="">
            </div>
            <div class="col-lg-6 mt-5">
                <div class="card forget_password_card p-4 px-5 mt-5">
                    <h4 class="fw-bold my-5 text-center">Change Password </h4>
                    <form class="w-100">
                        <div class="mb-3">
                            <label class="form-label sign_up_label">New Password</label>
                            <div class="position-relative">
                                <input id="password-field" type="password" class="form-control sign_up_input">
                                <div class="position-absolute top-50 end-0 translate-middle-y">
                                    <span toggle="#password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                        <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label sign_up_label">Confirm New Password</label>
                            <div class="position-relative">
                                <input id="password-field2" type="password" class="form-control sign_up_input" placeholder="*****">
                                <div class="position-absolute top-50 end-0 translate-middle-y">
                                    <span toggle="#password-field2" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                        <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <a href="<?= base_url('/login') ?>" class="btn btn_light">Cancel</a>
                            <a href="<?= base_url('/login') ?>" class="btn btn_primary ms-2">Confirm</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>