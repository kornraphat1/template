
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
                     <?php
                        if (!empty($ep_name)) {
                           $ep_name = $ep_name;
                        } else {
                           $ep_name = '-';
                        }
                     ?>
                     <button class="pull-right btn btn-warning" onclick="goReport('<?= $video_data['movie_id'] ?>','<?= $video_data['branch_id'] ?>','<?= $video_data['movie_thname'] ?>','<?= $ep_name ?>')">
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
                  <div class="movie-series-content">
                     <div class="row">
                        <div class="col-md-12">
                           <?php
                              if ($index > 0) {
                                 $key = $index - 1;
                                 $disabled = '';
                              } else {
                                 $key = $index;
                                 $disabled = 'disabled';
                              }

                              $url_name =  urlname_encode($video_data['movie_thname']);
                              $url_epname =  urlname_encode($video_data['name_ep'][$key]);


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
                  
                  <a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?= urlencode(base_url(uri_string())) ?>&display=popup&ref=plugin&src=share_button" target="_blank"><i class="fa fa-facebook-f"></i></a>

                  <a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=<?= $video_data['movie_thname'] ?>" class="btn-b" id="b"><i class="fa fa-twitter"></i></a>

                  <a href="https://social-plugins.line.me/lineit/share?url=<?= urlencode(base_url(uri_string())) ?>" target="_blank">
                     <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="line" class="svg-inline--fa fa-line fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M272.1 204.2v71.1c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.1 0-2.1-.6-2.6-1.3l-32.6-44v42.2c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.8 0-3.2-1.4-3.2-3.2v-71.1c0-1.8 1.4-3.2 3.2-3.2H219c1 0 2.1.5 2.6 1.4l32.6 44v-42.2c0-1.8 1.4-3.2 3.2-3.2h11.4c1.8-.1 3.3 1.4 3.3 3.1zm-82-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 1.8 1.4 3.2 3.2 3.2h11.4c1.8 0 3.2-1.4 3.2-3.2v-71.1c0-1.7-1.4-3.2-3.2-3.2zm-27.5 59.6h-31.1v-56.4c0-1.8-1.4-3.2-3.2-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 .9.3 1.6.9 2.2.6.5 1.3.9 2.2.9h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.7-1.4-3.2-3.1-3.2zM332.1 201h-45.7c-1.7 0-3.2 1.4-3.2 3.2v71.1c0 1.7 1.4 3.2 3.2 3.2h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2V234c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2v-11.4c-.1-1.7-1.5-3.2-3.2-3.2zM448 113.7V399c-.1 44.8-36.8 81.1-81.7 81H81c-44.8-.1-81.1-36.9-81-81.7V113c.1-44.8 36.9-81.1 81.7-81H367c44.8.1 81.1 36.8 81 81.7zm-61.6 122.6c0-73-73.2-132.4-163.1-132.4-89.9 0-163.1 59.4-163.1 132.4 0 65.4 58 120.2 136.4 130.6 19.1 4.1 16.9 11.1 12.6 36.8-.7 4.1-3.3 16.1 14.1 8.8 17.4-7.3 93.9-55.3 128.2-94.7 23.6-26 34.9-52.3 34.9-81.5z"></path>
                     </svg>
                  </a>
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

   function goReport(id, branch, name, ep) {
      var request = prompt('แจ้งหนังเสืย');
      if (request != null) {
         jQuery.ajax({
            url: "<?=base_url()?>/savereport/branch/" + branch + "/id/" + id + "/reason/" + request + "/name/" + name + "/" + ep,
            type: 'GET',
            crossDomain: true,
            cache: false,
            success: function(data) {
               console.log(request);
               alert('เราจะดำเนินการให้เร็วที่สุด');
            }

         });

      }
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