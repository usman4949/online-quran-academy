<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="mb-4">Basic Information</h4>
        <a href="<?= base_url('/add_profile') ?>" class="btn btn_light rounded-pill">Edit Profile</a>
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

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-3">
            <p class="text_light mb-1">First Name</p>
            <?php
               if(!empty($userrecord['firstname'])){
                 $firstname=$userrecord['firstname'];
               }else{
                 $firstname='John';
               }
            ?>
            <h5><?= $firstname?></h5>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <p class="text_light mb-1">Last Name</p>
            <?php
               if(!empty($userrecord['lastname'])){
                 $lastname=$userrecord['lastname'];
               }else{
                 $lastname='Doe';
               }
            ?>
            <h5><?= $lastname?></h5>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <p class="text_light mb-1">Phone Number</p>
            <?php
               if(!empty($userrecord['mobile'])){
                 $mobile=$userrecord['mobile'];
               }else{
                 $mobile='+92-12345678';
               }
            ?>
            <h5><?= $mobile?></h5>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <p class="text_light mb-1">Email</p>

            <?php
               if(!empty($userrecord['email'])){
                 $email=$userrecord['email'];
               }else{
                 $email='john@gmail.com';
               }
            ?>

            <h5><?= $email?></h5>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <p class="text_light mb-1">Gender</p>
            
            <?php
               if(!empty($userrecord['gender'])){
                 $gender=$userrecord['gender'];
               }else{
                 $gender='Male';
               }
            ?>

            <h5><?= $gender?></h5>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <p class="text_light mb-1">Date Of Birth</p>

            <?php
               if(!empty($userrecord['dateofbirth'])){
                 $date_of_birth=$userrecord['dateofbirth'];
               }else{
                 $date_of_birth='01-12-2000';
               }
            ?>

            <h5><?= $date_of_birth?></h5>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <p class="text_light mb-1">State</p>
            <h5>Pakistan</h5>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <p class="text_light mb-1">Country</p>
            <h5>Pakistan</h5>
        </div>
        <div class="col-lg-12 col-md-12 mb-3">
            <p class="text_light mb-1">Address</p>
            <?php
               if(!empty($userrecord['address'])){
                 $address=$userrecord['address'];
               }else{
                 $address='Office 2, 2nd floor 44000';
               }
            ?>
            <h5><?= $address?></h5>
        </div>
    </div>
</div>
<?= $this->endSection() ?>