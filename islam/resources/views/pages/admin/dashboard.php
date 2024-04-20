<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
<!-- <div class="card contact_card bg_light_orange p-3 py-4 text-center">
    <img src="<?= base_url("assets/images/svg/warning.svg") ?>" class="mx-auto" width="70" />
    <p class="mt-5">There are no bookings yet...!</p>
</div> -->
    <?php
    $isUserLoggedIn = session('isUserLoggedIn');
    if ($isUserLoggedIn) {
        $name = session('username');
    } else {
        $name = 'Anni';
    }
    ?>
    <h4 class="text_orange fw-bold">Hey <?= $name ?> !</h4>
    <h3 class="mb-3">HELLO, Enjoy your Trip Easily</h3>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange"><?=total_products()?></h4>
                <p class="text_light">Total Products</p>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange"><?=total_orders();?></h4>
                <p class="text_light"> Total Orders</p>
            </div>
        </div>
        <!-- <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange">2100 $</h4>
                <p class="text_light">E-Vouchers</p>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange">20K+</h4>
                <p class="text_light">Happy Customers</p>
            </div>
        </div> -->
    </div>

    <div class="card contact_card h-100 p-3 py-4 text-center">
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </div>

</div>
<?= $this->endSection() ?>