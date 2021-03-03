

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?= base_url('public/movie/js/defualt.js') ?>"></script>
  <script>
    $(document).ready(function() {
      
      var mySwiper = new Swiper('#HomeSlide', {
        loop: true,
        speed: 800,
        spaceBetween: 100,
        effect: 'fade',

        // Slide auto play
        autoplay: {
          delay: 5000,
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      })

    });
    
    /* Set the width of the side navigation to 0 */
    /* Set the width of the side navigation to 250px */
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.body.style.overflow = 'hidden'
      document.getElementById("overlay").style.display = "block";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.overflow = 'auto'
      document.getElementById("overlay").style.display = "none";
    }
  </script>
  
  </body>

</html>