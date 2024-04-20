<?= $this->extend('login_template/layout') ?>


<?= $this->section('main_content') ?>

<div class="container-fluid px-0">


    <!--Start success and fail session -->
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
    <!--End success and fail session -->

    <?php
    /********Start form Validation *********/
    if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
        $validation = session()->get('validation');
        $fieldErrors = session()->get('errors');
    }
    /********End form Validation *********/
    ?>


    <div class="row justify-content-end">
        <div class="col-lg-11">
            <a class="navbar-brand brand_color" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/images/svg/dubai_safai_logo.svg') ?>" class="img-fluid" alt="">
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-5 mt-5">
            <div class="mt-5 tab_ms_0">
                <h1 class="mt-5">
                    Login to your Account
                </h1>
                <p class="mt-4">
                    See what is going on with your business
                </p>
                <form class="w-100" action='<?= base_url('login_user') ?>' method='post'>
                    <div class="mb-3">
                        <label class="form-label sign_up_label">Email</label>
                        <input type="email" required class="form-control sign_up_input w-100" name='email' placeholder="mail@abc.com" value="<?= old('email') ?>">
                    </div>

                    <?php
                    /********Start Show Email Validation Error*********/
                    if (!empty($fieldErrors['email'])) : ?>
                        <p class="text-danger">
                            <?= $fieldErrors['email']; ?>
                        </P>
                    <?php
                    endif
                    /********End Email Validation Error*********/
                    ?>

                    <div class="mb-3">
                        <label class="form-label sign_up_label">Password</label>
                        <div class="position-relative">
                            <input id="password-field" required type="password" class="form-control sign_up_input" name="password" value="<?= old('password') ?>">
                            <div class="position-absolute top-50 end-0 translate-middle-y">
                                <span toggle="#password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                    <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>
                        <p id="password-error-container"></p>
                    </div>


                    <?php
                    /********Start Show Password Validation Error*********/
                    if (!empty($fieldErrors['password'])) : ?>
                        <p class="text-danger">
                            <?= $fieldErrors['password']; ?>
                        </P>
                    <?php
                    endif
                    /********End Password Validation Error*********/
                    ?>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check w-50">
                                <input class="form-check-input remember_me_checkbox" type="checkbox" value="" id="remember_me" checked>
                                <label class="form-check-label text_light" for="remember_me">
                                    Remember Me
                                </label>
                            </div>
                            <a href="<?= base_url('/forget_password') ?>" class="text-decoration-none text_orange">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <!-- <a href="<?= base_url('/dashboard') ?>" class="btn btn_primary w-100">Login</a> -->
                        <button type="submit" class="btn btn_primary w-100">Login</button>
                    </div>
                </form>
                <p class="text_light mb-5 text-center">Don’t have an account yet?
                    <a href="<?= base_url('/sign_up') ?>" class="text-decoration-none text_orange">Create Now</a>
                </p>
                <p class="mt-5 text_light text-center">
                    © 2024 Travling. All Rights Reserved
                </p>
            </div>
        </div>
        <div class="col-lg-6 mt-5">
            <div class="card border-0 login_card_bg h-100 p-5">
                <div class="card login_blur_card position-relative h-100">
                    <div class="position-absolute top-0 start-100 translate-middle">
                        <div class="card top_feature_card2 p-1" style="margin-right: 100px; margin-top:170px;">
                            <img src="<?= base_url('assets/images/al_ain_tour.jpg') ?>" alt="" style="width: 150px; height:80px; border-radius:8px">
                            <h6 class="fw-bold mt-2 text-start">Al Ain City Tour</h6>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/images/svg/location.svg  ') ?>" alt="">
                                <p class="text_light text_small mb-0 ms-2">Al Ain, UAE</p>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute top-50 start-0 translate-middle mt-5 ms-5">
                        <div class="card top_feature_card p-2 mt-5 ms-5">
                            <img src="<?= base_url('assets/images/bab_al_shms.jpg') ?>" alt="" style="width: 180px; height:100px; border-radius:8px">
                            <h6 class="fw-bold mt-2 text-start">Baab AL Shams Dinner</h6>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/images/svg/location.svg  ') ?>" alt="">
                                <p class="text_light text_small mb-0 ms-2">Dubai, UAE</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-white w-75 mt-2 ms-2">
                        Start your journey by one click, explore beautiful world!
                    </h4>
                    <img src="<?= base_url('assets/images/login_girl.png') ?>" class="img-fluid w-75 ms-auto" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('extraScript') ?>
<script>
    $(document).ready(function() {
        //start jquery validation of form//
        $.validator.addMethod(
            "password_regex",
            function(value, element) {
                return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()\-_=+{};:,<.>ยง~]).{8,25}$/.test(value);
            },
            "Please enter a valid phone number (+92 XXX XXX XXXX)"
        );
        $('form').validate({
            errorPlacement: function(error, element) {
                if (element.attr("name") == "password") {
                    error.appendTo("#password-error-container");
                } else {
                    error.insertAfter(element);
                }
            },
            rules: {
                email: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 8,
                    //maxlength: 16,
                    password_regex: true,
                },

            },
            messages: {
                email: {
                    required: "Email is required",
                },
                password: {
                    required: "Password is required",
                    minlength: "Password must be at least 8 characters long",
                    // minlength: "Password should not exceed 16 characters",
                    password_regex: "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character."
                },

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        //end jquery validation of form//
    });
</script>
<?= $this->endSection() ?>