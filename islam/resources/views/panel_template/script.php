<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="<?= base_url('assets/js/rte.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script src="<?= base_url('assets/js/charts.js') ?>"></script>
<script src="<?= base_url('assets/js/custom_libs/images_upload.js') ?>"></script>

<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<!-- <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script> -->
<script>
    new DataTable('#example');

    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
</script>

<script>
    var editor1cfg = {}
    editor1cfg.toolbar = "basic";
    var editor1 = new RichTextEditor(".div_editor1", editor1cfg);

    var editor111cfg = {}
    editor111cfg.toolbar = "basic";
    editor111cfg.height = "100px"; // Set the desired height here
    var editor111 = new RichTextEditor(".div_editor111", editor1cfg);

    // var editor7cfg = {}
    // editor7cfg.toolbar = "basic";
    // var editor7 = new RichTextEditor(".div_editor7", editor7cfg);

    // var editor8cfg = {}
    // editor8cfg.toolbar = "basic";
    // var editor8 = new RichTextEditor(".div_editor8", editor8cfg);

    // var editor9cfg = {}
    // editor9cfg.toolbar = "basic";
    // var editor9 = new RichTextEditor(".div_editor9", editor9cfg);

    // var editor10cfg = {}
    // editor10cfg.toolbar = "basic";
    // var editor10 = new RichTextEditor(".div_editor10", editor10cfg);
</script>

<script>
    $('.js-example-basic-multiple').select2();

    initializeFileUploader(
        '#product-gallery', //
        '<?php echo base_url('admin/upload-resized-images') ?>', //
        '<?= base_url() ?>',
        1,
        '#product-image', //
        'image/jpeg,image/png,image/jpg',
         {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            // 'width': '1440',
            // 'height': '573',
            'dimensionsWithPath': JSON.stringify([{
                    thumbnail_path: 'thumbnail1440-573',
                    width: '1440',
                    height: '573'
                },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
             ])
        }
    );

    initializeFileUploader(
        '#product1-gallery', //
        '<?php echo base_url('admin/upload-resized-images') ?>', //
        '<?= base_url() ?>',
        1,
        '#image_one', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            // 'width': '500',
            // 'height': '500',
            'dimensionsWithPath': JSON.stringify([{
                    thumbnail_path: 'thumbnail204-137',
                    width: '204',
                    height: '137'
                },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
             ])
        }
    );

    initializeFileUploader(
        '#product2-gallery', //
        '<?php echo base_url('admin/upload-image') ?>', //
        '<?= base_url() ?>',
        1,
        '#image_two', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            'width': '500',
            'height': '500',
            // 'dimensionsWithPath': JSON.stringify([{
            //         thumbnail_path: 'thumbnail361-217',
            //         width: '361',
            //         height: '217'
            //     },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
            // ])
        }
    );

    initializeFileUploader(
        '#product3-gallery', //
        '<?php echo base_url('admin/upload-image') ?>', //
        '<?= base_url() ?>',
        1,
        '#image_three', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            'width': '500',
            'height': '500',
            // 'dimensionsWithPath': JSON.stringify([{
            //         thumbnail_path: 'thumbnail361-217',
            //         width: '361',
            //         height: '217'
            //     },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
            // ])
        }
    );

    initializeFileUploader(
        '#product4-gallery', //
        '<?php echo base_url('admin/upload-image') ?>', //
        '<?= base_url() ?>',
        1,
        '#image_four', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            'width': '500',
            'height': '500',
            // 'dimensionsWithPath': JSON.stringify([{
            //         thumbnail_path: 'thumbnail361-217',
            //         width: '361',
            //         height: '217'
            //     },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
            // ])
        }
    );

    initializeFileUploader(
        '#profile-pic', //
        '<?php echo base_url('admin/upload-resized-images') ?>', //
        '<?= base_url() ?>',
        1,
        '#profile-image', //
        'image/jpeg,image/png,image/jpg',
         {
            'directory': 'uploads/profile/images/', //
            'dir_folder': 'images', //
            // 'width': '1440',
            // 'height': '573',
            'dimensionsWithPath': JSON.stringify([{
                    thumbnail_path: 'thumbnail40-40',
                    width: '40',
                    height: '40'
                },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
             ])
        }
    );

</script>