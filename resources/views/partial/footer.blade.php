  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Skydash</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">Mrdeep</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>



  <!-- Template Main JS File -->
  <script src="https://js.stripe.com/v3/"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    //     $(document).ready(function() {
    //   $('.seat').click(function() {
    //       $('.seat').removeClass('selected');
    //       $(this).addClass('selected');
    //       $('#selectedSeat').val($(this).data('seat'));
    //   });

    //   $('#seatForm').submit(function(e) {
    //       e.preventDefault();
    //       let selectedSeat = $('#selectedSeat').val();
    //       console.log('Selected Seat:', selectedSeat);
    //       // You can now submit the form or perform any other action with the selected seat
    //   });
    // });

    $(document).ready(function() {
      // Fetch available seats from database (replace with your actual logic)
      var availableSeats = fetchAvailableSeats(); // Assuming this function returns an array of available seat numbers

      // Update seat availability based on fetched data
      updateSeatAvailability(availableSeats);

      // Handle seat selection click event
      $('.seat').click(function() {
        var selectedSeat = $(this).data('seat');

        // Check if seat is available
        if (availableSeats.includes(selectedSeat)) {
          // Update selected seat and enable submit button
          $('#selectedSeat').val(selectedSeat);
          $('#seatForm button[type="submit"]').prop('disabled', false);

          // Update seat availability in UI and database (replace with your logic)
          availableSeats.splice(availableSeats.indexOf(selectedSeat), 1);
          updateSeatAvailability(availableSeats);
          updateAvailableSeatsInDatabase(selectedSeat); // Assuming this function updates database
        } else {
          alert('This seat is already unavailable!');
        }
      });
    });

    function updateSeatAvailability(availableSeats) {
      $('.seat').each(function() {
        var seatNumber = $(this).data('seat');
        $(this).prop('disabled', !availableSeats.includes(seatNumber));
      });
    }

    // Implement functions to fetch and update available seats in the database (replace with your actual database interaction logic)
    function fetchAvailableSeats() {
      // ... your logic to fetch available seats from database ...
      return []; // Replace with actual data retrieval
    }

    function updateAvailableSeatsInDatabase(selectedSeat) {
      // ... your logic to update available seats in database ...
    }
  </script>

  <script>
    $(document).ready(function() {
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function() {
        if (this.checked) {
          checkbox.each(function() {
            this.checked = true;
          });
        } else {
          checkbox.each(function() {
            this.checked = false;
          });
        }
      });
      checkbox.click(function() {
        if (!this.checked) {
          $("#selectAll").prop("checked", false);
        }
      });
    });
  </script>



  </body>

  </html>