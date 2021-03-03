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

  function goView(id, name, type) {
    countView(id);

    var url = '';
    if (type == 'se') {
      url = "<?= base_url() ?>/series/" + id + '/' + decodeURI(name);
    } else {
      url = "<?= base_url() ?>/video/" + id + '/' + decodeURI(name);
    }

    window.open(url, '_parent');

  }

  function goEP(id, name, index, epname) {
    countView(id);
    window.location.href = "<?= base_url() ?>/series/" + id + '/' + decodeURI(name) + '/' + index + '/' + decodeURI(epname);
  }

  function countView(id) {
    // alert(id);
    var base_url = '<?= base_url() ?>';
    $.ajax({

      url: base_url + "/countview/" + id,
      method: "GET",

      async: true,

      success: function(response) {

        console.log(response); // server response

      }


    });

  }


  function goCate(id, name) {
    window.location.href = "<?= base_url() ?>/category/" + id + '/' + name;
  }


  $(function() {

    $(".movie-formcontract").on("submit", function() {

      var form = $(this)[0];
      var request_text = $.trim($("#request_text").val());
      var ads_con_name = $.trim($("#ads_con_name").val());
      var ads_con_email = $.trim($("#ads_con_email").val());
      var ads_con_line = $.trim($("#ads_con_line").val());
      var ads_con_tel = $.trim($("#ads_con_tel").val());
      var branch = <?= $branch ?>;
      if (form.checkValidity() === false) {

        event.preventDefault();

        event.stopPropagation();

      } else if (request_text) {

        jQuery.ajax({
          url: "/saverequest/branch/" + branch + "/movie/" + request_text,
          type: 'GET',
          async: false,
          success: function(data) {
            console.log(data);

           
            if (data == "OK") {
              alert("Admin จะรีบดำเนินการให้เร็วที่สุด !");
              
              window.location.href = "<?= base_url() ?>";
          
            }
          }
        });

        return false;

      } else {

        

        $.ajax({
          url: "<?php echo base_url('/contact_ads/'); ?>",
          type: 'POST',
          data: {
            namesurname: ads_con_name,
            email: ads_con_email,
            lineid: ads_con_line,
            phone: ads_con_tel,

          },
          success: function(data) {
            alert('ดำเนินการเรียบร้อยแล้วครับ')
            
              window.location.href = "<?= base_url() ?>";
            
            return false;

          }
        });
        return false;

      }



      form.classList.add('was-validated');

    });

  });

  function goReport(id, branch, name, ep) {
		var request = prompt('แจ้งหนังเสืย');
		if (request != null) {
			jQuery.ajax({
				url: "/savereport/branch/" + branch + "/id/" + id + "/reason/" + request + "/name/" + name + "/" + ep,
				type: 'GET',
				crossDomain: true,
				cache: false,
				success: function(data) {
					console.log(request);
					alert('เราจะดำเนินการให้เร็วที่สุด');
				}

			});

		} else {}
	};

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