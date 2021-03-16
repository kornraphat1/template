<!-- HOME MAIN POSTS -->
<style type="text/css">


</style>
<link rel="stylesheet" type="text/css" href='<?php echo base_url("/assets/css/ad.css") ?>'>
<div class="col-lg-9 col-md-9">

   <?php if (isset($topview)) { ?>
      <div class="row" id="topview">
         <div class="col-xs-11 category-video-grid video-info dropshd">
            <section id="main-reviews">
               <div id="review-carousel" class="carousel slide" data-ride="carousel">
                  <h1 class="icon"><i class="fa fa-star" aria-hidden="true"></i>top reviews</h1>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                     <div class="item active">
                        <div class="row auto-clear">
                           <?php foreach ($topview as $key => $value) {
                              $id = $value['movie_id'];
                              $urlvideo = base_url('/page/video/id/' . $id); ?>
                              <article class="reviews col-xs-3">
                                 <!-- POST L size -->
                                 <div class="post post-medium">
                                    <a class="thumbr post-thumb" href="<?= $urlvideo ?>">
                                       <span class="review-number"><?= $value['movie_ratescore'] ?></span>
                                       <img src="<?= $value['movie_picture'] ?>" class="review img-responsive" style="max-height: 180px !important;" alt="Client">
                                    </a>
                                    <div class="infor">
                                       <h4>
                                          <a class="title" href="<?= $urlvideo ?>"><?= $value['movie_name'] ?></a>
                                       </h4>
                                    </div>
                                 </div>
                              </article>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="clearfix"></div>
         </div>
      </div>
   <?php } ?>

   <section id="home-main">
      <h1 class="icon">
         <i class="fa fa-television" aria-hidden="true"></i><?= $title ?>
      </h1>
      <div class="row">
         <!-- ARTICLES -->
         <div class="col-md-12 col-sm-12">
            <div class="row auto-clear">
               <?php
               foreach ($list_video['list'] as $value) {

                  if (substr($value['movie_picture'], 0, 4) == "http") {
                     $movie_pic =  $value['movie_picture'];
                  } else {
                     // echo  $movie_pic = $base_backurl.$img_backurl.'.$value['movie_picture']');
                     $movie_pic = $base_backurl . $img_backurl . $value['movie_picture'];
                  }

                  $id = $value['movie_id'];
                  $s_replace = [
                     ")", "(", " ", '%'
                  ];
                  $e_replace = [
                     "", "", "-", '%25'
                  ];
                  $url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_name'])));

               ?>
                  <article class="col-lg-3 col-md-3 col-sm-4">
                     <!-- POST L size -->
                     <div class="post post-medium " style=" background-color: dimgray; padding-bottom: 1px;">
                        <div class="thumbr ">
                           <a class="afterglow post-thumb" onclick="goView('<?= $value['movie_id'] ?>', '<?= $url_name ?>', '<?= $value['movie_type'] ?>')" data-lity>
                              <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                              <div class="movie-imdb">
                                 <b>
                                    <span><?php echo ($value['movie_ratescore']); ?></span>
                                 </b>
                              </div>
                              <?php
                              if ($value['movie_quality'] == "hd") {
                                 $display = "red";
                              } else if ($value['movie_quality'] == "sd") {
                                 $display = "green";
                              } else {
                                 $display = "green";
                              }
                              ?>

                              <div class="movie-corner" style=" background-color: <?php echo $display; ?>;"><?php echo strtoupper($value['movie_quality']); ?></div>
                              <img class="bor home-box" src="<?php echo $movie_pic; ?>" alt="<?= $value['movie_quality'] ?>">
                           </a>


                           <h2 class="titla_name" style="height: 53px;">
                              <a class="title" style="word-wrap: break-word;" onclick="goView('<?= $value['movie_id'] ?>', '<?= $url_name ?>', '<?= $value['movie_type'] ?>')"><?php echo $value['movie_name']; ?></a>
                           </h2>
                        </div>

                     </div>
                  </article>
               <?php
               }
               ?>
            </div>
         </div>
      </div>

   </section>
</div>
</div>
</div>



<!--********************************  TABS *************************************-->

<!--********************************  /TABS *************************************-->

<style type="text/css">
   .floating_ads_bt-mid_container {
      position: fixed;
      left: 50%;
      bottom: 0%;
      -ms-transform: translate(-50%, 0%);
      -moz-transform: translate(-50%, 0%);
      -webkit-transform: translate(-50%, 0%);
      transform: translate(-50%, 0%);
      width: 728px;
      height: 90px;
      margin-bottom: 15px;
      background: none;
      z-index: 20000;
      box-shadow: #000 0 2px 18px;
      text-align: center;
   }
</style>

<script>
   $("#formsearch").submit(function(event) {
      var url = "<?= base_url('/search/') ?>" + '/' + $("#search").val();
      window.location.href = url;
      event.preventDefault();
   });

   function hidebtnAD2() {
      var x = document.getElementById("myDIV2");
      if (x.style.display === "none") {
         x.style.display = "block";
      } else {
         x.style.display = "none";
      }
   }
</script>
<script type="text/javascript">
   function hide() {
      document.getElementById("ads_fox_bottom").remove();
   }
</script>