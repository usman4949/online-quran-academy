<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jQuery Validation -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<!-- Bootstrap 4 (used in one of your scripts) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Custom Scripts -->
<script src="assets/lib/wow/wow.min.js"></script>
<script src="assets/js/jquery.preloaders.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
<!-- Login Modal Popup Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- **** Quran Reading Script **** -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'https://api.alquran.cloud/v1/surah',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                if (data.code === 200) { // Check if the response code indicates success
                    var surahs = data.data; // Extract the array of surahs
                    var quranText = '<ul>'; // Start with an unordered list

                    $.each(surahs, function(index, surah) {
                        quranText += '<li><strong>' + surah.number + '</strong>: ' + surah.name + ' - ' + surah.englishNameTranslation + '</li>';
                    });

                    quranText += '</ul>'; // Close the unordered list

                    $('#read_quran').html(quranText); // Insert the HTML into the read_quran element
                } else {
                    console.error('Error fetching Quran:', data.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Quran:', error);
            }
        });
    });
</script>


