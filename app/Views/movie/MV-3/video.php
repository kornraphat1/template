
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
               $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname'])))))));

               if (
                     !empty($video_data['movie_thmain']) 
                     && empty($video_data['movie_thsub1']) 
                     && empty($video_data['movie_thsub2'])
                  ) {
            ?>
               <a href="<?php echo base_url('video/' . $video_data['movie_id'] . '/'. $url_name) ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์หลัก 1</font>
               </a>
            <?php
            } else if (!empty($video_data['movie_thmain']) && !empty($video_data['movie_thsub1']) && empty($video_data['movie_thsub2'])) {
            ?>
               <a href="<?php echo base_url('video/' . $video_data['movie_id'] . '/'. $url_name) ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์หลัก 1</font>
               </a>
               <a href="<?php echo base_url('video/' . $video_data['movie_id'] . '/'. $url_name) ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์สำรอง 1</font>
               </a>
            <?php
            } else if (!empty($video_data['movie_thmain']) && !empty($video_data['movie_thsub1']) && !empty($video_data['movie_thsub2'])) {
            ?>
               <a href="<?php echo base_url('video/' . $video_data['movie_id'] . '/'. $url_name) ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์หลัก 1</font>
               </a>
               <a href="<?php echo base_url('video/' . $video_data['movie_id'] . '/'. $url_name) ?>" class="col-lg-3 btn btn-danger">
                  <font color="white">ลิงค์สำรอง 1</font>
               </a>
               <a href="<?php echo base_url('video/' . $video_data['movie_id'] . '/'. $url_name) ?>" class="col-lg-3 btn btn-danger">
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

<script type="text/javascript">
   function hide() {
      document.getElementById("ads_fox_bottom").remove();
   }

   function goReport(id, branch) {
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
      window.location.href = "<?= base_url() ?>/series/<?= $video_data['movie_id'] ?>/" + value;

   }
</script>