<section id="movie-footer" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <a class="navbar-brand" href="<?php echo base_url() ?>">
          <img class="logo" src="<?= $path_setting . $setting['setting_logo'] ?> ">
        </a>
        <p><strong>ดูหนังฟรี</strong> โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS ดูอนิเมะใหม่ให้รับชมอีกมากมาย สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมง</p>
      </div>
    </div>
  </div>
</section>

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
<script>
  $.ajax({
    url: "https://pirateback.aegistrex.com/checkstatus",
    method: "POST",
    data: {
      id: "9"
    },
    success: function(result) {

      var res = result.substring(0, 2);

      if (res != "OK") {
        window.location.href = "https://info.aegistrex.com/close.html?d=<?= $_SERVER['HTTP_HOST']; ?>";
      }

    }
  });
</script>


</body>

</html>