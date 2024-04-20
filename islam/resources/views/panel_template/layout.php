<!doctype html>
<html lang="en" dir="ltr">

<?= $this->include('panel_template/head') ?>

<body class="panell">
    <main>
        <!-- Top Header -->
        <div class="container-fluid top_nav_bg top_nav_pos">
            <div class="container-fluid">
                <?= $this->include('panel_template/navbar') ?>
            </div>
        </div>

        <div class="container-fluid pt_81">
            <div class="row">
                <div class="col-lg-3 col-md-4 fixed_pos">

                <?php
            $isUserLoggedIn = session('isUserLoggedIn');
            if ($isUserLoggedIn) {
                $name = session('username');
                $userid=session('userid');
                $user_role=session('user_role');
            } else {
                $name = 'Anni';
                $userid=0;
                $user_role=0;
            }
        ?>          
                   <?php if($user_role==1){ ?>
                    <?= $this->include('panel_template/sidebar') ?>
                    <?php }else{ ?>
                        <?= $this->include('panel_template/user_sidebar') ?>
                    <?php } ?>
                </div>
                <div class="col-lg-9 col-md-8 ms_25">
                    <?= $this->renderSection('main_content') ?>
                </div>
            </div>
        </div>

        <!-- Top Header -->


    </main>

    <?= $this->include('panel_template/script') ?>
</body>
<?= $this->renderSection('extraScript') ?>
</html>