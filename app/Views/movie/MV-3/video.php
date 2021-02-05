<!-- มาร์กอัป JSON-LD ที่สร้างขึ้นโดยโปรแกรมช่วยมาร์กอัปข้อมูลที่มีโครงสร้างของ Google -->
<script type="application/ld+json">
   {

      "@context": "http://schema.org",
      "@type": "Movie",
      "name": "รายการหนัง",
      "image": "<?php echo $video_data['movie_picture']; ?>",
      "url": "<?= "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>",
      "aggregateRating": {
         "@type": "AggregateRating",
         "ratingValue": "<?php echo $video_data['movie_ratescore']; ?>",
         "bestRating": "9.8",
         "worstRating": "0",
         "ratingCount": "4892",
         "dateCreated": "<?= $datethai ?>",
         "director": {
            "@type": "Person",
            "name": "Unknow"
         }
      }
   }
</script>
<style type="text/css">
   .video-embed-box {
      margin-left: 0px !important;
      margin-right: 0px !important;
   }

   .movie-trailer {
      position: relative;
      float: left;
      width: 60%;
      height: 55vw;
      max-height: 400px;
      box-sizing: border-box;
   }

   @font-face {
      font-family: myFirstFont;
      src: url('<?php echo base_url("/assets/font/Prompt-Bold.ttf") ?>');
   }

   div,
   h2,
   h3 {
      font-family: myFirstFont !important;
   }

   h3,
   .h3 {
      font-size: 16px;
   }

   .bor {
      border: 7px solid #ccc !important;
   }

   #ads_fix_footer {
      width: 100%;
      margin: auto;
   }

   #ads_fox_bottom {
      bottom: 0px;
      display: block;
      min-height: 40px;
      position: fixed;
      text-align: center;
      z-index: 50000;
      width: 100%;
   }

   .col-ms-12 {
      padding-right: 17px;
   }


   /* จอใหญ่สุด */
   @media (min-width: 1281px) {

      #fix_footer2 img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 32%;
         height: auto;
      }

      #fix_footer img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 50px;
         height: 13px;
         margin-left: 37px;
         margin-top: -15px;
      }

      #fix_footer {
         width: 26px;
         height: 0px;
         display: -webkit-inline-box;
         margin: 0px 0px 0px 450px;
         cursor: pointer;
      }

      #single-video-wrapper {
         margin-left: 58px;
      }

      .col-ms-4 {
         padding-right: 17px;

      }
   }

   @media (min-width: 1025px) and (max-width: 1280px) {

      #fix_footer2 img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 728px;
         height: auto;
      }

      #fix_footer img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 50px;
         height: 13px;
         margin-left: 60px;
      }

      #fix_footer {
         width: 26px;
         height: 0px;
         display: -webkit-inline-box;
         margin: 0px 0px 0px 450px;
         cursor: pointer;
      }

      .col-ms-4 {
         padding-right: 17px;
      }
   }

   @media (min-width: 768px) and (max-width: 1024px) {

      #fix_footer2 img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 728px;
         height: auto;
      }

      #fix_footer img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 50px;
         height: 13px;
         margin-left: -25px;
         margin-top: -9px;
      }

      #fix_footer {
         width: 26px;
         height: 0px;
         display: -webkit-inline-box;
         margin: 0px 0px 0px 75%;
         cursor: pointer;
      }

      #single-video {
         margin-right: 30px;
         margin-left: 30px;
         padding-left: 0px;
      }

      .col-ms-4 {
         padding-right: 17px;
      }

   }

   @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

      #fix_footer2 img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 100%;
         height: auto;
      }

      #fix_footer img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 50px;
         height: 13px;
         margin-left: auto;
      }

      #fix_footer {
         width: 26px;
         height: 0px;
         display: -webkit-inline-box;
         margin: 0px 0px 0px 75%;
         cursor: pointer;
      }

      #single-video {
         margin-right: 30px;
         margin-left: 30px;
         padding-left: 0px;
      }


   }

   @media (min-width: 481px) and (max-width: 767px) {

      #fix_footer2 img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 100%;
         height: auto;
      }

      #fix_footer img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 50px;
         height: 13px;
         margin-left: 30px;
         margin-top: -40px;
      }

      #fix_footer {
         width: 26px;
         height: 0px;
         display: -webkit-inline-box;
         margin: 0px 0px 0px 75%;
         cursor: pointer;
      }
   }

   @media (min-width: 320px) and (max-width: 480px) {

      h2 {
         font-size: 14px !important;
      }

      #fix_footer2 img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 100%;
         height: auto;
      }

      #fix_footer img {
         background-repeat: no-repeat;
         background-size: contain;
         width: 50px;
         height: 13px;
         margin-left: 7px;
         margin-top: -8px
      }

      #fix_footer {
         width: 26px;
         height: 0px;
         display: -webkit-inline-box;
         margin: 0px 0px 0px 75%;
         cursor: pointer;
      }

      #single-video {
         margin-right: 30px;
         margin-left: 30px;
         padding-left: 0px;
      }


   }

   .btn-twitter {
      position: relative;
      height: 20px;
      box-sizing: border-box;
      padding: 1px 8px 1px 6px;
      background-color: #1b95e0;
      color: #fff;
      border-radius: 3px;
      font-weight: 500;
      cursor: pointer;
   }

   .btn-twitter i {
      position: relative;
      top: 2px;
      display: inline-block;
      width: 14px;
      height: 14px;
      background: transparent 0 0 no-repeat;
      background-image: url(data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E);
   }
</style>

<?php
//  echo "<pre>";
//  print_r($video_data);die;
// print_r($feildplay);die;
// echo "<pre>";
//  print_r($path_livesteram);
?>
<div id="single-video-wrapper" class="col-xs-12 col-lg-8 col-md-12 standard-bg">
   <div class="row">
      <!-- Triler Movies -->
      <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>ตัวอย่างวีดีโอ</h2>
      <!-- <div style="border-top: 5px solid var(--primary-color);"></div><br> -->
      <div class="row">
         <!-- EMBED VIDEO -->
         <div id="single-video" class="col-lg-12 col-md-12">
            <!-- VIDEO SINGLE POST -->
            <article class="post-video">
               <!-- VIDEO INFO -->
               <div class="row"><br>
                  <!-- 16:9 aspect ratio -->
                  <div class="col-xs-8">
                     <div class="embed-responsive embed-responsive-16by9 video-embed-box">

                        <iframe src="<?php echo 'https://www.youtube.com/embed/' . $video_data['movie_preview']; ?>" class="bor embed-responsive-item"></iframe>
                     </div>
                  </div>
                  <div class="col-xs-4">
                     <img src="<?php echo $video_data['movie_picture']; ?>" class="bor" width="82%" alt="<?php echo $video_data['movie_thname']; ?>" title="<?php echo $video_data['movie_thname']; ?>">
                  </div>

               </div>
            </article>
         </div>
         <article class="col-lg-3 col-md-6 col-sm-3">
            <!-- POST L size -->
            <div class="post post-medium">
               <div class="thumbr">
                  <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>


                  </a>
               </div>
               <div class="infor">
               </div>
            </div>
         </article>
      </div>
      <!--/ Triler Movies -->
      <!-- VIDEO SINGLE POST -->
      <div class="col-xs-12">
         <!-- <a href="http://themeforest.net/user/orcasthemes/portfolio?ref=orcasthemes" class="banner-md">
                  <img src= '<?php echo base_url("/assets/img/banners/banner-xl.jpg") ?>'  class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
               </a> -->
         <!-- POST L size -->
         <article class="post-video">
            <!-- VIDEO INFO -->
            <div class="video-info">
               <!-- 16:9 aspect ratio  -->

               <div class="row">
                  <div class="col-lg-9 col-xs-9">
                     <h1 style="word-wrap: break-word;"> <?= $video_data['movie_thname'] ?> </h1>
                  </div><br>
                  <div class="col-lg-3">
                     <button class="pull-right btn btn-warning" onclick="goReport('<?= $video_data['movie_id'] ?>','<?= $video_data['branch_id'] ?>')">
                        <font color="black">แจ้งหนังเสีย</font>
                     </button>
                  </div>
               </div>
               <!-- Your share button code -->

               <!-- ********************* SOURCS MOVIES  ****************************  -->
               <div class="embed-responsive embed-responsive-16by9 video-embed-box" style="min-height: 150px;margin-bottom: 10px;">
                  <!-- <iframe src="https://freeball95.com/E/M07814.mp4" width="500px" class="embed-responsive-item"></iframe> -->
                  <?php //echo base_url();die;
                  ?>
                  <iframe src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay . '/' . $index)  ?>" scrolling="no" frameborder="0" style="width:100%; height:100%; z-index:500;" allowfullscreen="yes"></iframe>
               </div>
               <?php
               if ($video_data['movie_type'] == 'se') {
               ?>
                  <div class="movie-series-content ">
                     <div class="row">
                        <div class="col-md-12">
                           <?php
                           if ($index > 0) {
                              $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname'])))))));
                              $key = $index - 1;
                              $url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
                              $disabled = '';
                           } else {
                              $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname'])))))));
                              $key = $index;
                              $url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
                              $disabled = 'disabled';
                           }

                           ?>

                           <a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"><button <?= $disabled ?> style=" float: left;">ตอนก่อนหน้า</button></a>


                           <select onchange="click_ep(this)">

                              <?php

                              foreach ($video_data['name_ep'] as $key => $value) {

                             $url_name =  str_replace('%', '%25',urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname']))))))));

                                 $select = "";
                                 if ($value == $video_data['name_ep'][$index]) {

                                    $select = 'selected';
                                 }

                                 // $href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname 

                              ?>

                                 <option value="<?php echo $url_name . '/' . $key . '/' . $url_epname ?>" <?= $select; ?>><?php echo $video_data['movie_thname'] . ' - ' . $value ?> </option>
                              <?php } ?>
                           </select>

                           <?php
                           if (isset($video_data['name_ep'][$index + 1])) {
                              $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname'])))))));
                              $key = $index + 1;
                              $url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
                              $disabled = '';
                           } else {
                              $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname'])))))));
                              $key = $index;
                              $url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
                              $disabled = 'disabled';
                           }

                           ?>

                           <a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"><button style=" float: right; " <?= $disabled ?>>ตอนถัดไป</button></a>


                        </div>
                     </div>
                  </div>

               <?php
               }
               ?>

               <ul class="social row">
                  <div class="col-ms-4" style="padding-right: 2px;">
                     <div class="fb-share-button" data-href="<?= base_url(uri_string()) ?>" data-layout="button">
                     </div>
                  </div>

                  <div class="col-ms-4">
                     <a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
                        <div class="btn-twitter navbar-right" data-scribe="component:button" style="width: 65px;">
                           <a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
                              <span style="padding: 0px 0px 0px;" class="label" id="l">ทวีต</span>
                           </a>
                        </div>
                  </div>

                  <div class="col-ms-4">
                     <div class="line-it-button" data-lang="th" data-type="share-a" data-ver="3" data-url="<?= base_url(uri_string()) ?>" data-color="default" data-size="small" data-count="true" style="display: none;"></div>
                  </div>
               </ul>
               <!-- ********************* SOURCS MOVIES  ****************************  -->
            </div>
            <!-- DETAILS -->
         </article>
         <br>
         <div class="col-lg-12 col-md-6 col-xs-12">
            <?php
            // echo "<pre>";
            // print_r($video_data);
            if (!empty($video_data['movie_thmain']) && empty($video_data['movie_thsub1']) && empty($video_data['movie_thsub2'])) {
            ?>
               <a href="<?php echo base_url('/page/video/id/' . $video_data['movie_id'] . '/main') ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์หลัก 1</font>
               </a>
            <?php
            } else if (!empty($video_data['movie_thmain']) && !empty($video_data['movie_thsub1']) && empty($video_data['movie_thsub2'])) {
            ?>
               <a href="<?php echo base_url('/page/video/id/' . $video_data['movie_id'] . '/main') ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์หลัก 1</font>
               </a>
               <a href="<?php echo base_url('/page/video/id/' . $video_data['movie_id'] . '/sub1') ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์สำรอง 1</font>
               </a>
            <?php
            } else if (!empty($video_data['movie_thmain']) && !empty($video_data['movie_thsub1']) && !empty($video_data['movie_thsub2'])) {
            ?>
               <a href="<?php echo base_url('/page/video/id' . $video_data['movie_id'] . '/main') ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์หลัก 1</font>
               </a>
               <a href="<?php echo base_url('/page/video/id' . $video_data['movie_id'] . '/sub1') ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์สำรอง 1</font>
               </a>
               <a href="<?php echo base_url('/page/video/id' . $video_data['movie_id'] . '/sub2') ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์สำรอง 2</font>
               </a>
            <?php
            }
            ?>

            <h2 class="title col-xs-12">คอมเม้นท์</h2>
            <div class="fb-comments col-xs-12" data-href="<?= base_url(uri_string()) ?>" data-numposts="5" data-width=""></div>

         </div>

      </div>
   </div>
</div>

</div>
<!-- AD 2 -->
<div id="ads_fox_bottom">
   <div id="ads_fix_footer">
      <div style="text-align:center;">
         <div id="fix_footer">
            <a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>
         </div>
      </div>
      <?php
      // echo "<pre>";
      // print_r($path_imgads);die;
      //print_r($backURL);die;
      foreach ($ads as $value) {
         if ($value['ads_position'] == "2") {
      ?>
            <div style="clear:both;"></div>
            <div id="fix_footer2" style="width:100%; display:block; float:left; margin:-7px 0 0 0; overflow:hidden; line-height:0px;">
               <div style="display:inline-block; width:100%; text-align:center;">
                  <div class="textwidget custom-html-widget">
                     <center><a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'] ?>" target="_blank" rel="noopener"><img alt="<?php echo $value['ads_name']; ?>" title="<?php echo $value['ads_name']; ?>" src="<?php echo $backURL . "ads/" . $value['ads_picture']; ?>"></a></center>
                  </div>
               </div>
            </div>
            <div style="clear:both;"></div>
      <?php
         }
      }
      ?>
   </div>
</div>
<!-- AD 2 -->
<script type="text/javascript">
   function hide() {
      document.getElementById("ads_fox_bottom").remove();
   }

   function goReport(id, branch) {
      //console.log(id,branch);

      $.ajax({
         url: "/savereport/branch/" + branch + "/id/" + id,
         type: 'GET',
         async: false,
         success: function(data) {
            if (data = "OK") {
               alert("แจ้งหนังเสียเรียบร้อย");
            }
         }
      });

   }

   function onClickAds(adsid, branch) {

      var backurl = '<?= $backURL ?>';

      $.ajax({
         url: backurl + "ads/sid/<?= session_id() ?>/adsid/" + adsid + "/branch/" + branch,
         async: true,
         success: function(response) {
            console.log(response); // server response
         }
      });

   }

   function click_ep(selectObject) {
      var value = selectObject.value;

      // alert(value)



      window.location.href = "<?= base_url() ?>/series/<?= $video_data['movie_id'] ?>/" + value;

   }
</script>