<!doctype html>
<html lang="en" dir="ltr">

<?= $this->include('login_template/head') ?>

<body>
    <main>

        <?= $this->renderSection('main_content') ?>


    </main>

    <?= $this->include('login_template/script') ?>
</body>
<?= $this->renderSection('extraScript') ?>
</html>