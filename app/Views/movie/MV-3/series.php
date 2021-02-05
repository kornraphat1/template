<style type="text/css">
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

   .bor {
      border: 7px solid #ccc !important;
   }
</style>
<?php
// echo "<pre>";
//print_r($video_data['movie_picture']);
?>
<div id="single-video-wrapper" class="col-xs-12 col-lg-9 col-md-9">
   <div class="row">
      <!-- Triler Movies -->
      <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>ตัวอย่างซีรี่ย์</h2>
      <!-- <div style="border-top: 5px solid var(--primary-color);"></div><br> -->
      <div class="row">
         <!-- EMBED VIDEO -->
         <div id="single-video" class="col-lg-12 col-md-12">
            <!-- VIDEO SINGLE POST -->
            <article class="post-video">
               <!-- VIDEO INFO -->
               <div class="row video-info dropshd"><br>
                  <!-- 16:9 aspect ratio -->

                  <div class="col-lg-4 col-md-2">
                     <img src="<?php echo $video_data['movie_picture']; ?>" class="bor" style="margin-left: 30px;" width="82%" alt="#">
                  </div>
                  <div class="col-lg-8 col-md-8">
                     <div class="embed-responsive embed-responsive-16by9 video-embed-box">
                        <?php
                        $yb = explode('?v=', $video_data['movie_preview']);
                        if (count($yb) > 1) {
                           $url = "https://www.youtube.com/embed/" . $yb[1];
                        } else {
                           $url = "https://www.youtube.com/embed/" . $yb[0];
                        }
                        ?>
                        <iframe src="<?php echo $url; ?>" class="bor embed-responsive-item"></iframe>
                     </div>
                  </div>
                  <div class="row">

                     <h1 style="word-wrap: break-word;"> <?= $video_data['movie_thname'] ?> </h1>

                  </div>

                  <ul class="social">
                     <li class="social-facebook"><a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?= urlencode(base_url(uri_string())) ?>&display=popup&ref=plugin&src=share_button" target="_blank" class="fa fa-facebook social-icons"></a></li>
                     <li class="social-google-plus"><a href="https://social-plugins.line.me/lineit/share?url=<?= urlencode(base_url(uri_string())) ?>" target="_blank">
                           <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="line" class="fa fa-line-plus social-icons" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path fill="currentColor" d="M272.1 204.2v71.1c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.1 0-2.1-.6-2.6-1.3l-32.6-44v42.2c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.8 0-3.2-1.4-3.2-3.2v-71.1c0-1.8 1.4-3.2 3.2-3.2H219c1 0 2.1.5 2.6 1.4l32.6 44v-42.2c0-1.8 1.4-3.2 3.2-3.2h11.4c1.8-.1 3.3 1.4 3.3 3.1zm-82-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 1.8 1.4 3.2 3.2 3.2h11.4c1.8 0 3.2-1.4 3.2-3.2v-71.1c0-1.7-1.4-3.2-3.2-3.2zm-27.5 59.6h-31.1v-56.4c0-1.8-1.4-3.2-3.2-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 .9.3 1.6.9 2.2.6.5 1.3.9 2.2.9h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.7-1.4-3.2-3.1-3.2zM332.1 201h-45.7c-1.7 0-3.2 1.4-3.2 3.2v71.1c0 1.7 1.4 3.2 3.2 3.2h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2V234c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2v-11.4c-.1-1.7-1.5-3.2-3.2-3.2zM448 113.7V399c-.1 44.8-36.8 81.1-81.7 81H81c-44.8-.1-81.1-36.9-81-81.7V113c.1-44.8 36.9-81.1 81.7-81H367c44.8.1 81.1 36.8 81 81.7zm-61.6 122.6c0-73-73.2-132.4-163.1-132.4-89.9 0-163.1 59.4-163.1 132.4 0 65.4 58 120.2 136.4 130.6 19.1 4.1 16.9 11.1 12.6 36.8-.7 4.1-3.3 16.1 14.1 8.8 17.4-7.3 93.9-55.3 128.2-94.7 23.6-26 34.9-52.3 34.9-81.5z"></path>
                           </svg>
                        </a></li>
                     <li class="social-twitter"><a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=<?= $video_data['movie_thname'] ?>" class="btn-b" id="b"><i class="fa fa-twitter"></i></a></li>

                  </ul>


               </div>
            </article>
         </div>



         <!-- POST L size -->
         <article class="post-video">
            <!-- VIDEO INFO -->
            <div class="video-info">




               <div class="clearfix spacer"></div>
               <p>ปีที่ฉาย : <?php echo $video_data['movie_year']; ?> คะแนน : <?php echo $video_data['movie_ratescore']; ?> / 10</p>

               <?php if ($video_data['movie_des']) {

               ?>

                  <p class="card_description">

                     <?php echo $video_data['movie_des']; ?>

                  </p>

               <?php

               }

               ?>

               <div class="clearfix spacer"></div>

               <div style="border-top: 5px solid var(--primary-color);"></div>
               <div class="clearfix spacer"></div>
               <div class="video-content">
                  <h2 class="title main-head-title">ตอน</h2>
                  <?php
                  foreach ($video_data['name_ep'] as $key => $value) {
                    $url_name =  str_replace('%', '%25',urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname']))))))));
                    $url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value)))))));
                  ?>


                     <p class="series-list"><a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"> <?php echo $video_data['movie_thname'] . ' - ' . $value ?> </a></p>
                  <?php } ?>


               </div>
            </div>
            <div class="clearfix spacer"></div>
            <!-- DETAILS -->
            <!-- <div style="border-top: 5px solid var(--primary-color);"></div> -->

         </article>

      </div>

      <!-- COMMENTS -->


   </div>

</div>

<div class="clearfix spacer"></div>
<div class="row">
</div>

</div>