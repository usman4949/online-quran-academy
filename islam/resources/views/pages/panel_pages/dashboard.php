<?= $this->extend('panel_template/layout') ?>


<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
<?php
            $isUserLoggedIn = session('isUserLoggedIn');
            if ($isUserLoggedIn) {
                $name = session('username');
            } else {
                $name = 'Anni';
            }
        ?>
    <h4 class="text_orange fw-bold">Hey <?=$name?> !</h4>
    <h3 class="mb-3">HELLO, Enjoy your Trip Easily</h3>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange">210+</h4>
                <p class="text_light">TRIPS</p>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card contact_card h-100 p-3 py-4 text-center">
                <h4 class="fw-bold text_orange">380 Hours</h4>
                <p class="text_light"> Travel Time</p>
            </div>
        </div>
        <div class="col-md-6 mb-3">
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
        </div>
    </div>

    <div class="card contact_card h-100 p-3 py-4 text-center">
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </div>

</div>
<?= $this->endSection() ?>