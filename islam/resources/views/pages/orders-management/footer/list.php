<script>
    $('.more_filters').click(function() {
        $('.search_filters').slideToggle(100);
        if ($('.more_filters').text() == "More Filters") {
            $(this).text("Show Less")
        } else {
            $(this).text("More Filters")
        }
    });
</script>
<script>
    var searchTimer;
    var page = 1;

    function searchOrders() {
        var from_date = $('[name=from_date]').val();
        var order_id = $('[name=order_id]').val();
        var to_date = $('[name=to_date]').val();
        var estore_id = $('[name=estore_id]').val();
        var order_status_id = $('[name=order_status_id]').val();
        var delivery_status_id = $('[name=delivery_status_id]').val();
        var payment_status_id = $('[name=payment_status_id]').val();
        $('#orders_search').find('.text-danger').remove();
        var search = $('#orders_search').data('oid');


        console.log(order_id);
        // console.log(to_date);
        if (searchTimer) { // clearing the previous timer if it exists
            clearTimeout(searchTimer);
        }
        searchTimer = setTimeout(function() {
            $.ajax({
                type: "get",
                url: "<?php echo base_url('admin/orders/list'); ?>",
                data: {
                    estore_id: estore_id,
                    id: order_id,
                    order_status_id: order_status_id,
                    delivery_status_id: delivery_status_id,
                    payment_status_id: payment_status_id,
                    from_date: from_date,
                    to_date: to_date,
                    search: search,
                    page: page,
                },

                async: false,
                success: function(response) {

                    $('#searched_orders_list').html(response);
                    // $('#perpage_sr').text(srno);
                },
                error: function(xhr, status, error) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(field, message) {
                            var inputField = $('#orders_search').find('[name="' + field + '"]');
                            var errorElement = $('<p class="text-danger">' + message + '</p>');
                            inputField.after(errorElement);
                        });
                    }
                }
            });
        }, 500);
    }
    $(document).on('click', '#pagination a', function(e) {
        e.preventDefault();
        if ($(this).hasClass('page-link')) {
            page = $(this).attr('href').split('page=')[1];
            searchOrders();
            $('html, body').animate({
                scrollTop: 0
            }, 'fast');
        }
    });
    $(document).on('change', '.search_vendor_order', function() {
        page = 1;
        searchOrders();
    });

    $(document).on('keyup', '#orderSearchInput', function() {
        page = 1;
        searchOrders();
    });

    $('.reset_and_clear_btn').on('click', function() {
        $('.search_vendor_order').val('');
        $('#orderSearchInput').val('');
        searchOrders();
    });
</script>

<script>
    $(document).ready(function() {
        var startDate = document.getElementById("from_date");
        var endDate = document.getElementById("to_date");

        if (startDate.value !== "") {

            endDate.setAttribute("min", startDate.value);
        }

        startDate.addEventListener("change", function() {
            var selectedStartDate = startDate.value;
            endDate.setAttribute("min", selectedStartDate);
        });

        endDate.addEventListener("change", function() {
            var selectedEndDate = endDate.value;
            startDate.setAttribute("max", selectedEndDate);
        });

        startDate.addEventListener("input", function() {
            if (startDate.value === "") {

            } else {
                var selectedStartDate = startDate.value;
                endDate.setAttribute("min", selectedStartDate);
            }
        });

        endDate.addEventListener("input", function() {
            if (endDate.value === "") {

            } else {
                var selectedEndDate = endDate.value;
                startDate.setAttribute("max", selectedEndDate);
            }
        });
    });
</script>