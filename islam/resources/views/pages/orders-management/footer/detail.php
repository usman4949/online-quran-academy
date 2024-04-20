<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).on('change', '.update_order_status', function() {
        var id = $(this).data('order-id');
        var order_status_id = $(this).val();
        // console.log(order_status_id);
        var initialStatus = $(this).data('initialStatus');
        Swal.fire({
            text: 'Do you want to change the status of order?',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true,
            customClass: {
                popup: 'swal-popup-class'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url('admin/orders/update-status'); ?>",
                    type: 'POST',
                    data: {
                        id: id,
                        order_status_id: order_status_id,
                    },
                    success: function(response) {
                        // location.reload();
                        console.log(response);
                        if (response.status == 'success') {
                            // location.reload();
                            $('.update_order_status').closest('.panel_card').before('<div class="alert mt-3 alert-success product_next_item light_green_bg border-0 text_success fw-bold alert-dismissible " role="alert" id="mtDiv">Successfully update the order status</div>');
                            setTimeout(function() {
                                $('.update_order_status').closest('.panel_card').prev('.product_next_item').remove();
                            }, 3000);

                            // $('#mtDiv').html(response.message);
                            // $('#mtDiv').removeClass('d-none');
                            // $('#mtDiv').addClass('show');

                            // setTimeout(function() {
                            //     $('#mtDiv').removeClass('show');
                            //     $('#mtDiv').addClass('d-none');
                            // }, 5000);
                        } else {
                            $.each(response.errors, function(field, message) {
                                var errorElement = $('<span class="text-danger">' + message + '</span>');
                                $('.update_order_status').after('<span class="text-danger">' + message + '</span>');
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        // if (xhr.responseJSON && xhr.responseJSON.errors) {
                        //     var errors = xhr.responseJSON.errors;
                        //     $.each(errors, function(field, message) {
                        //         var errorElement = $('<span class="text-danger">' + message + '</span>');
                        //         $(this).after(errorElement);
                        //     });
                        // }
                    }
                });
            } else {
                $(this).val(initialStatus);
            }
        });
    });
    $('.update_order_status').each(function() {
        $(this).data('initialStatus', $(this).val());
    });
</script>