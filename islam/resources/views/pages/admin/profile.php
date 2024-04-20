<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
  <div class="d-flex justify-content-between align-items-center">
    <h4 class="mb-4">Basic Information</h4>
    <a href="<?= base_url('/admin/add_profile') ?>" class="btn btn_light rounded-pill">Edit Profile</a>
  </div>

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

  <div class="row mt-5">
    <div class="col-lg-3 col-md-4 mb-3">
      <div class="profile_img">

      <?php
         
         $isUserLoggedIn = session('isUserLoggedIn');
            if ($isUserLoggedIn) {
              $userimg=session('user_profileimage');
          } else {
              $userimg='';
          }
          if (!empty($userimg)) {
              $image = base_url('uploads/profile/images/' . $userimg);
          } else {
              $image = base_url('assets/images/user_dashboard.png');
          }
      ?>
        <img src="<?= $image ?>" alt="">
      </div>
    </div>
    <div class="col-lg-9 col-md-8 mb-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="<?= base_url("assets/images/svg/user_orange.svg") ?>" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="text_orange text_medium mb-1">Name</p>
              <div class="d-flex">
                <?php
                if (!empty($userrecord['firstname'])) {
                  $firstname = $userrecord['firstname'];
                } else {
                  $firstname = 'John';
                }
                ?>
                <h6 class="me-1"><?= $firstname ?></h6>
                <?php
                if (!empty($userrecord['lastname'])) {
                  $lastname = $userrecord['lastname'];
                } else {
                  $lastname = 'Doe';
                }
                ?>
                <h6><?= $lastname ?></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="<?= base_url("assets/images/svg/email.svg") ?>" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="text_orange text_medium mb-1 mt-1">Email</p>

              <?php
              if (!empty($userrecord['email'])) {
                $email = $userrecord['email'];
              } else {
                $email = 'john@gmail.com';
              }
              ?>

              <h6><?= $email ?></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="<?= base_url("assets/images/svg/phone.svg") ?>" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="text_orange text_medium mb-1">Phone Number</p>
              <?php
              if (!empty($userrecord['mobile'])) {
                $mobile = $userrecord['mobile'];
              } else {
                $mobile = '+92-12345678';
              }
              ?>
              <h6><?= $mobile ?></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="<?= base_url("assets/images/svg/calendar_orange.svg") ?>" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="text_orange text_medium mb-1 mt-1">Date Of Birth</p>

              <?php
              if (!empty($userrecord['dateofbirth'])) {
                $date_of_birth = $userrecord['dateofbirth'];
              } else {
                $date_of_birth = '01-12-2000';
              }
              ?>

              <h6><?= $date_of_birth ?></h6>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-md-6 mb-3">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="<?= base_url("assets/images/svg/place.svg") ?>" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="text_orange text_medium mb-1">State</p>
              <h6>Pakistan</h6>
            </div>
          </div>
        </div> -->
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="<?= base_url("assets/images/svg/gender.svg") ?>" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="text_orange text_medium mb-1">Gender</p>

              <?php
              if (!empty($userrecord['gender'])) {
                $gender = $userrecord['gender'];
              } else {
                $gender = 'Male';
              }
              ?>

              <h6><?= $gender ?></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="<?= base_url("assets/images/svg/place.svg") ?>" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="text_orange text_medium mb-1">Country</p>
              <h6>Pakistan</h6>
            </div>
          </div>
        </div>
        
        <div class="col-lg-12 col-md-12 mb-3">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="<?= base_url("assets/images/svg/adress_book.svg") ?>" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="text_orange text_medium mb-1">Address</p>
              <?php
              if (!empty($userrecord['address'])) {
                $address = $userrecord['address'];
              } else {
                $address = 'Office 2, 2nd floor 44000';
              }
              ?>
              <h6><?= $address ?></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>