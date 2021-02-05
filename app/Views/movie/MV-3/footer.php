</div>
<!-- FOOTER -->
<div id="footer" class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
   <div class="container">
      <footer>
         <div class="row copyright-bottom text-center">
            <div class="col-md-12 text-center">
            
                  <center>
                     <?php
                     if (!empty($setting)) {
                        if (substr($setting['setting_logo'], 0, 4) == 'http') {
                     ?>
                           <a href="<?= base_url(); ?>" class="banner-l ">
                              <img class="img-responsive logo" src='<?= $setting['setting_logo'] ?>' alt="#">
                           </a>
                        <?php
                        } else {
                        ?>
                           <a href="<?= base_url(); ?>" class="banner-l ">
                              <img class="img-responsive logo" src='<?= $path_logo . $setting['setting_logo'] ?>' alt="#">
                           </a>
                     <?php
                        }
                     }
                     ?>
                

            
                     <p class="content-footer"><strong><a href="">doonung8k</a></strong>
                        <strong><a href="">ดูหนังใหม่</a></strong>
                         ฟรี โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS
                        
                       
                        <strong><a href="">ดูหนังออนไลน์</a></strong>
                        หนังไทย หนังฝรั่ง หนังเอเชีย หนังการ์ตูน Netflix Movie หนังบู๊ หนังตลก หนังอาชญากรรม หนังดราม่า สยองขวัญ หนังผจญภัย
                        <strong><a href="">ดูซีรี่ส์</a></strong> 
                        และยังมี
                        <strong><a href="">หนังใหม่</a></strong>
                        อีกมากมาย <br>สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมงที่
                        <strong><a href="">doonung8k.com</a></strong>
                     </p>
                  </center>
               </div>
            </div>
         </div>
      </footer>
   </div>
</div>
<!-- JAVA SCRIPT -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v7.0&appId=1805058466397049&autoLogAppEvents=1"></script>
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>

<?php if (!empty($setting['setting_footer'])) {
   echo $setting['setting_footer'];
}
?>
<!--  <script src='<?php echo base_url("/assets/js/lity.js") ?>' ></script> -->
<script>
   $(".nav .dropdown").hover(function() {
      $(this).find(".dropdown-toggle").dropdown("toggle");
   });
</script>
<!-- MODAL -->
<div id="enquirypopup" class="modal fade in " role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content row">
         <div class="modal-header custom-modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>free access</h2>
         </div>
         <div class="modal-body">
            <form name="info_form" class="form-inline" method="post">
               <div class="form-group col-sm-12">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
               </div>
               <div class="form-group col-sm-12">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
               </div>
               <div class="form-group col-sm-12">
                  <button class="subscribe-btn pull-right" type="submit" title="Subscribe">Subscribe</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script>
 
   $("#formsearch").submit(function(event) {

      if ($("#search").val()) {
         var url = "<?= base_url('/search/') ?>" + '/' + $("#search").val();
         window.location.href = url;
         event.preventDefault();
      } else {
        var url= "<?php echo base_url() ?>";
        window.location.href = url;
         event.preventDefault();
      }



   });
   document.addEventListener('readystatechange', event => {
      // When HTML/DOM elements are ready:
      if (event.target.readyState === "interactive") { //does same as:  ..addEventListener("DOMContentLoaded"..
         // CallAcceptAds();
      }
      // When window loaded ( external resources are loaded too- `css`,`src`, etc...) 
      if (event.target.readyState === "complete") {
         // CallAcceptAds();
      }
   });

   function AcceptAds() {
      alert("กรุณาปิด Adblock เพื่อรับชมภาพยนต์ หากท่านปิดแล้วกดปุ่ม OK");
      CallAcceptAds();
   }

   function CallAcceptAds() {
      var adBlockEnabled = false;
      var testAd = document.createElement('div');
      testAd.innerHTML = '&nbsp;';
      testAd.className = 'adsbox';
      document.body.appendChild(testAd);
      window.setTimeout(function() {
         if (testAd.offsetHeight === 0) {
            AcceptAds()
            adBlockEnabled = true;
         }
         testAd.remove();
         console.log('AdBlock Enabled? ', adBlockEnabled)
      }, 1);
   }
</script>
<script>
        $.ajax({
            url: "https://pirateback.aegistrex.com/checkstatus", 
            method: "POST",
            data: {id: "1"},
            success: function(result){

               var res = result.substring(0, 2);

               if(res!="OK"){
                    window.location.href = "https://info.aegistrex.com/close.html?d=<?=$_SERVER['HTTP_HOST'];?>";
                }

            }
        });
        </script>
<script>
   (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</body>

</html>