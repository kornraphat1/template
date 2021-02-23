
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
                           $s_replace = [")", "(", " ", '%'];
                           $e_replace = [ "", "", "-", '%25'];
                           $url_name = urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_name'])));
                           
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
      

     <!-- ADS2 -->
     <div id="ads_fox_bottom">
      <div id="ads_fix_footer">
      <div style="text-align:center;">
         <div id="fix_footer">
            <?php 
            foreach($ads['pos2'] as $value){ 
               if(!empty($value['ads_position']=="2")){
            ?>
               <a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>
            <?php 
               }
            } 
            ?>
         </div>
      </div>
     <?php
            foreach ($ads['pos2'] as $value){
               if($value['ads_position']=="2"){ 
         ?>
            <div style="clear:both;"></div> 
                  <div id="fix_footer2" style="width:100%; display:block; float:left; margin:-7px 0 0 0; overflow:hidden; line-height:0px;">
                     <div style="display:inline-block; width:100%; text-align:center;">
                        <div class="textwidget custom-html-widget">
                        <center><a onclick="onClickAds(<?=$value['ads_id']?>, <?=$branch?>)" href="https://slotgame66.com" target="_blank" rel="noopener"><img alt="<?=$value['ads_name']?>" title="<?=$value['ads_name']?>" src="<?php echo  $backURL."ads/".$value['ads_picture'];?>"></a></center>
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
   <!-- ADS2 -->
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