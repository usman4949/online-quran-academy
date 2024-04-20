<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>

<?php /********Start form Validation *********/
if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
    $validation = session()->get('validation');
    $fieldErrors = session()->get('errors');
}
/********End form Validation *********/
?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
    <div class="d-flex align-items-center mb-4">
        <a href="<?= base_url('/admin/profile') ?>" class="btn panel_back_btn text-decoration-none">
            <img src="<?= base_url('assets/images/svg/arrow_left_white.svg') ?>" alt="">
        </a>
        <h5 class="my-auto ms-4">Edit Profile</h5>
    </div>
    <form action="<?php echo base_url('admin/edit-profile') ?>" method="post">
        <div class="row">


            <div class="col-md-12 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">
                    Profile Image
                </label>
                <div action="/upload" id="profile-pic" class="dropzone dropzone_main needsclick dz-clickable">
                    <div class="dz-message needsclick">
                        <span class="text">
                            <?php
                            if (!empty($userrecord['profile_pic'])) {
                                $image = base_url('uploads/profile/images/' . $userrecord['profile_pic']);
                                $style = 'width: -webkit-fill-available;';
                            } else {
                                $image = base_url('assets/images/svg/panel_svg/upload_icon.svg');
                                $style = '';
                            }
                            ?>
                            <img style="<?= $style ?>" src="<?= $image ?>" alt="">
                            <span class="text_light">Drag and drop Cover image, or <span class="text_orange">Browse</span></span>
                        </span>
                    </div>
                </div>
                <input type="hidden" id="profile-image" value="<?= old('productcover_img', $userrecord['profile_pic']) ?>" name="profile_img">
                <!-- <input type="hidden" name="cover_path" id="gallery-image-path" value=""> -->
                <input type="hidden" name="is_service" id="is_service_input" value="false">
            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">First Name<span class="required_show">*</span></label>
                <input type="text" class="form-control passenger_form_input" required value="<?= $userrecord['firstname'] ?>" placeholder="Atif" name="first_name">

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['first_name'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['first_name']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>

            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Last Name<span class="required_show">*</span></label>
                <input type="text" class="form-control passenger_form_input" required placeholder="Khan" name="last_name" value="<?= $userrecord['lastname'] ?>">

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['last_name'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['last_name']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>

            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Gender<span class="required_show">*</span></label>
                <select class="form-select passenger_form_select_input passenger_form_input" required name="gender">
                    <option value='male'>Male</option>
                    <option value="female">Female</option>
                </select>

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['gender'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['gender']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>

            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Date of birth<span class="required_show">*</span></label>
                <input type="date" class="form-control passenger_form_input" required placeholder="Enter your dob" name="date_of_birth" value="<?= $userrecord['dateofbirth'] ?>">

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['date_of_birth'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['date_of_birth']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Email<span class="required_show">*</span></label>
                <input type="text" class="form-control passenger_form_input" required placeholder="atifkhan@gmail.com" name="email" value="<?= $userrecord['email'] ?>">

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['email'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['email']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>

            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Phone Number<span class="required_show">*</span></label>
                <input type="number" class="form-control passenger_form_input" required placeholder="03018138901" name="phone_no" min='0' value="<?= $userrecord['mobile'] ?>">

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['phone_no'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['phone_no']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">City</label>
                <select class="form-select passenger_form_select_input passenger_form_input" required name="city">
                    <?php foreach ($country as $val) { ?>
                        <option value="<?= $val['id'] ?>"><?= $val['name'] ?></option>
                    <?php } ?>
                </select>

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['city'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['city']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>

            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">State</label>
                <select class="form-select passenger_form_select_input passenger_form_input" required name="state">
                    <option selected value="1">UAE</option>
                    <option value="2">Pakistan</option>
                </select>

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['state'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['state']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>
            <div class="col-md-12 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Password<span class="required_show">*</span></label>
                <div class="position-relative">
                    <input id="password-field" name="password" required type="password" class="form-control sign_up_input" placeholder="******">
                    <div class="position-absolute top-50 end-0 translate-middle-y">
                        <span toggle="#password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                            <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                        </span>
                    </div>
                </div>
                <!-- <input type="password" class="form-control passenger_form_input" required placeholder="Enter your Password" name="password"> -->
                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['password'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['password']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
                <p id="password-error-container"></p>
            </div>
            <div class="col-md-12 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Address<span class="required_show">*</span></label>
                <textarea class="form-control passenger_form_input h-auto" required name="address" rows="4" placeholder="House#123"><?= $userrecord['address'] ?></textarea>
                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['address'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['address']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>

            <div class="col-md-12 mb-4 text-end">
                <button type="submit" class="btn btn_primary px-4">Save</button>
            </div>
        </div>
    </form>
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