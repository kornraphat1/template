
   <link rel="stylesheet" type="text/css" href='<?php echo $document_root . "assets/css/ad.css";?>'>
      <div class="col-lg-8 col-md-12">
         <section id="home-main">

            <div class="content-web">
               <h1 class="title-description">หนังใหม่ ดูหนังออนไลน์ อัพเดททุกวัน <strong>doonung8k</strong> </h1>
            </div>

            <h1 class="icon"><i class="fa fa-television" aria-hidden="true"></i>รายการหนัง doonung8k</h1>
            <div class="row">
               <!-- ARTICLES -->
               <div class="col-md-12 col-sm-12">
                  <div class="row auto-clear">
                     <?php 
                    
                        foreach($list_video['list'] as $value){

                           $id = $value['movie_id'];
                           $url_name = urlname_encode($value['movie_name']);
                           
                           if($value['movie_type']=="se"){
                              $urlvideo = urldecode(base_url('series/'.$id.'/'.$url_name));
                           }else{
                              $urlvideo = urldecode(base_url('video/'.$id.'/'.$url_name));
                           }
                        
                     ?>  
                     <article class="col-lg-3 col-md-3 col-sm-4">
                        <!-- POST L size -->
                        <div class="post post-medium ">
                           <div class="thumbr " style=" background-color: dimgray; padding-bottom: 1px;">
                              <a class="afterglow post-thumb" href="<?= $urlvideo ?>" data-lity>
                                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                 <div  class="movie-imdb">
                                    <b>
                                       <span><?php echo ($value['movie_ratescore']);?></span>
                                    </b>
                                 </div>
                                 <?php 
                                    if($value['movie_quality']=="hd"){
                                          $display = "red";
                                    }else if($value['movie_quality']=="sd"){
                                          $display = "green";
                                    }else{
                                          $display = "green";
                                    }
                                 ?> 
                                 
                                 <div class="movie-corner" style="background-color: <?php echo $display;?>;"><?php echo strtoupper($value['movie_quality']);?></div>
                                 <div class="home-box bor" style="background-image: url('<?php echo $value['movie_picture']; ?>')"> 
                                 </div> 
                              </a>
                                       
                              <h2 class="titla_name" style="height: 53px;">
                                 <a class="title" style="word-wrap: break-word;" href="<?= $urlvideo ?>"><?php echo $value['movie_name'];?></a>
                              </h2>
                           
                           </div>
                                 
                        </div>
                     </article>
                  <?php } ?>
                  </div>
                  <div class="row pagi text-center">
                        <?= pagination($list_video['page'], $list_video['total_page']); ?>
                  </div>
               </div>

            </div>

         </section>
      </div>
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

   function hidebtnAD2 () {
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

      function onClickAds(adsid, branch){
      var backurl = '<?php echo $backURL;?>';
      $.ajax({
         url: backurl+"ads/sid/<?= session_id()?>/adsid/"+adsid+"/branch/"+branch,
         async: true,
         success: function( response ) {
            console.log( response ); // server response
         }
      });
      }

</script> 