<?= $this->extend('login_template/layout') ?>


<?= $this->section('main_content') ?>


<div class="container-fluid sign_up_bg px-0" style="min-height: 100vh;">

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
    }
    /********End form Validation *********/
    ?>

    <div class="row justify-content-end">
        <div class="col-lg-6">
            <a class="navbar-brand brand_color" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/images/svg/dubai_safai_logo.svg') ?>" class="img-fluid" alt="">
            </a>
            <div class="ms-5 mt-5">
                <img src="<?= base_url('assets/images/svg/sign_up_star.svg') ?>" class="img-fluid d-block" alt="">
                <h1 class="w-75 mt-5">
                    Start turning your
                    ideas into reality.
                </h1>
                <p class="w-75 mt-4">
                    Create a free account and get full access to all features for 30 days.
                    No credit card needed. Trusted by over 4,000 professionals.
                </p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card sign_up_card p-4 px-5" style="min-height: 100vh;">
                <h4 class="fw-bold">Create Account </h4>
                <form class="w-100" method='post' action='<?= base_url('sign_upuser') ?>'>
                    <div class="mb-3">
                        <label class="form-label sign_up_label">Name</label>
                        <input type="text" class="form-control sign_up_input w-100" required name='name' placeholder="John Doe" value="<?= old('name') ?>">
                    </div>

                    <?php
                    /********Start Show Name Validation Error*********/
                    if (!empty($fieldErrors['name'])) : ?>
                        <p class="text-danger">
                            <?= $fieldErrors['name']; ?>
                        </P>
                    <?php
                    endif
                    /********End Name Validation Error*********/
                    ?>

                    <div class="mb-3">
                        <label class="form-label sign_up_label">Email</label>
                        <input type="email" class="form-control sign_up_input w-100" required name='email' placeholder="johndoe@email.com" value="<?= old('email') ?>">
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
                        <label class="form-label sign_up_label">Mobile No</label>
                        <input type="text" class="form-control sign_up_input w-100" required name='mobile_no' placeholder="+9711313413" value="<?= old('mobile_no') ?>">
                    </div>

                    <?php
                    /********Start Show Email Validation Error*********/
                    if (!empty($fieldErrors['mobile_no'])) : ?>
                        <p class="text-danger">
                            <?= $fieldErrors['mobile_no']; ?>
                        </P>
                    <?php
                    endif
                    /********End Email Validation Error*********/
                    ?>


                    <div class="mb-3">
                        <label class="form-label sign_up_label">Password</label>
                        <div class="position-relative">
                            <input id="password-field" type="password" required name='password' id='password' class="form-control sign_up_input" value="<?= old('password') ?>">
                            <div class="position-absolute top-50 end-0 translate-middle-y">
                                <span toggle="#password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                    <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <p id="password-error-container"></p>

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
                        <label class="form-label sign_up_label">Confirm Password</label>
                        <div class="position-relative">
                            <input id="password-field2" type="password" required name='confirm_password' class="form-control sign_up_input" placeholder="*****" value="<?= old('confirm_password') ?>">
                            <div class="position-absolute top-50 end-0 translate-middle-y">
                                <span toggle="#password-field2" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                    <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <p id="password-error-container"></p>

                    <?php
                    /********Start Show Password Validation Error*********/
                    if (!empty($fieldErrors['confirm_password'])) : ?>
                        <p class="text-danger">
                            <?= $fieldErrors['confirm_password']; ?>
                        </P>
                    <?php
                    endif
                    /********End Password Validation Error*********/
                    ?>

                    <div class="mb-3">
                        <!-- <a href="<?= base_url('/login') ?>" class="btn btn_primary w-100">Create Account</a> -->
                        <button type="submit" class="btn btn_primary w-100">Create Account</button>
                    </div>
                </form>
                <p class="text_light">Already have an account?
                    <a href="<?= base_url('/login') ?>" class="text-decoration-none text_orange">Login</a>
                </p>
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
                name: {
                    required: true,
                },
                email: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 8,
                    //maxlength: 16,
                    password_regex: true,
                },
                confirm_password: {
                    required: true,
                    minlength: 8,
                    //maxlength: 16,
                    password_regex: true,
                    // equalTo: "#password",
                },
                mobile_no:{
                    required: true, 
                }
            },
            messages: {
                name: {
                    required: "Name is required",
                },
                email: {
                    required: "Email is required",
                },
                password: {
                    required: "Password is required",
                    minlength: "Password must be at least 8 characters long",
                    // minlength: "Password should not exceed 16 characters",
                    password_regex: "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character."
                },
                confirm_password: {
                    required: "Password is required",
                    minlength: "Password must be at least 8 characters long",
                    //  equalTo:'Password and Confirm Password not matched',
                    // minlength: "Password should not exceed 16 characters",
                    password_regex: "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character."
                },
                mobile_no:{
                    required: "Mobile is required",
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        //end jquery validation of form//
    });
</script>
<?= $this->endSection() ?>