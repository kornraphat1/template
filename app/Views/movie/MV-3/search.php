<!-- HOME MAIN POSTS -->
<script language="javascript" src= '<?php echo base_url("/assets/js/jquery-3.4.1.min.js")?>' ></script>
<!-- <script type="text/javascript">
var name = "#float_banner"; 
var locateY= null;  
$(function(){
    locateY=parseInt($(name).css("font").replace("px",""));
    $(window).scroll(function(){
        offset=locateY+$(document).scrollTop()+"px";
        $(name).animate({top:offset},{duration:0,queue:false});
    });
});
</script>

<style type="text/css">
div#float_banner{
    position:absolute;
    width:100px;
    display:block;
    height:600px;
    z-index:100;
   /* margin: center;*/
}
</style> -->

<style type="text/css">


   </style>
   <link rel="stylesheet" type="text/css" href='<?php echo base_url("/assets/css/ad.css")?>'>
            <div class="col-lg-9 col-md-9">

               <?php if ( isset($topview) ) { ?>
               <div class="row" id="topview">
                  <div class="col-xs-11 category-video-grid video-info dropshd">
                  <section id="main-reviews">
                     <div id="review-carousel" class="carousel slide" data-ride="carousel">
                        <h2 class="icon"><i class="fa fa-star" aria-hidden="true"></i>top reviews</h2>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                           <div class="item active">
                              <div class="row auto-clear">
                                 <?php foreach ($topview as $key => $value) {  $id = $value['movie_id']; $urlvideo = base_url('/page/video/id/'.$id);?>
                                    <article class="reviews col-xs-3">
                                       <!-- POST L size -->
                                       <div class="post post-medium">
                                          <a class="thumbr post-thumb" href="<?= $urlvideo ?>">
                                          <span class="review-number"><?= $value['movie_ratescore'] ?></span>
                                          <img src="<?= $value['movie_picture'] ?>" class="review img-responsive" style="max-height: 180px !important;" alt="Client">
                                          </a>
                                          <div class="infor">
                                             <h4>
                                                <a class="title"href="<?= $urlvideo ?>"><?= $value['movie_thname'] ?></a>
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
                                 
               <?php 
                  // echo "<pre>";
                  // print_r($list_video);die;
               ?>
               <section id="home-main">

                  <?php if ($cateRow['category_name']=="") {
                     $cateRow['category_name'] = "รายการหนัง";
                  } ?>

                  <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i><?=$cateRow['category_name']?></h2>
                  <div class="row">
                     <!-- ARTICLES -->
                     <div class="col-md-12 col-sm-12">
                        <div class="row auto-clear">
                              <?php 
                                 foreach($list_video as $value){
                                 if(substr($value['movie_picture'], 0, 4)=="http"){
                                      $movie_pic =  $value['movie_picture']; 
                                 }else{
                                   // echo  $movie_pic = $base_backurl.$img_backurl.'.$value['movie_picture']');
                                      $movie_pic = $base_backurl.$img_backurl.$value['movie_picture'];
                                 }
                                 $id = $value['movie_id'];
                                
                                     $s_replace = [
                                        ")", "(", " ", '%'
                                      ];
                                      $e_replace = [
                                        "", "", "-", '%25'
                                      ];
                                    $url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_thname'])));
                                    if($value['movie_type']=="se"){
                                      $urlvideo = str_replace('%', '%25', urldecode(base_url('/series/'.$id.'/'.$url_name)));
                                    }else{
                                       $urlvideo = str_replace('%', '%25', urldecode(base_url('/page/video/id/'.$id.'/'.$url_name)));
                                    }
                              ?>  
                                    <article class="col-lg-3 col-md-3 col-sm-4">
                                       <!-- POST L size -->
                                       <div class="post post-medium " style=" background-color: dimgray; padding-bottom: 1px;">
                                          <div class="thumbr ">
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
                                                 
                                                <div class="movie-corner" style=" background-color: <?php echo $display;?>;"><?php echo strtoupper($value['movie_quality']);?></div>
                                                <img class="bor home-box" src="<?php echo $movie_pic;?>" src='<?php //echo base_url("/assets/img/thumbs/thumb-s.jpg")?>' alt="#">
                                             </a>
                                             
                                             <?php 
                                                // if (strlen($value['movie_thname']) > 25)
                                                // $value['movie_thname'] = substr($value['movie_thname'], 0, 25) . '...';

                                                if (strlen($value['movie_thname']) > 40){
                                                //= substr($value['movie_thname'], 0, 40) . '...';
                                                $value['movie_thname'] = iconv_substr($value['movie_thname'], 0, 40, "UTF-8") . '...';
                                                }
                                             ?>
                                             <h4>
                                                <a class="title" style="word-wrap: break-word;" href="#"><?php echo $value['movie_thname'];?></a>
                                             </h4>
                                          
                                          </div>
                                         
                                       </div>
                                    </article>
                              <?php 
                                 }
                              ?>
                        </div>
                     </div>




                     <!-- RIGHT ASIDE -->
                     <div class="col-lg-3 hidden-md col-sm-12 text-center top-sidebar">
                      
                      <!--   <div class="subscribe-box">
                           <h2 class="icon"><i class="fa fa-plug" aria-hidden="true"></i>subscribe</h2>
                          
                           <form name="search-submit" method="post" action="#" id="subscribe-submit">
                              <fieldset class="search-fieldset">
                                 <input id="subscribe" type="text" name="search" size="12" class="search-field" placeholder="Your email address" value="">
                                 <button class="subscribe-btn" type="submit" title="Subscribe">Subscribe</button>
                              </fieldset>
                           </form>
                        </div> -->
                        

                        <!-- *************** ใส่โฆษณา ฝั่งขวา *************** -->
                        <!-- <a href="http://themeforest.net/user/orcasthemes/portfolio?ref=orcasthemes" class="banner-l hidden-sm hidden-xs">
                        <img src='<?php // echo base_url("/assets/img/banners/banner-l.jpg") ?>' class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
                        </a> -->
                         <!-- *************** ใส่โฆษณา ฝั่งขวา *************** -->


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
   
      <!-- ******************************** โฆษณาก่อน footer ***************************-->
     <!-- AD 2 -->
     <div id="ads_fox_bottom">
      <div id="ads_fix_footer">
      <div style="text-align:center;">
         <div id="fix_footer">
         <a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>
         </div>
      </div>
      <?php 
            // echo "<pre>";
            // print_r($path_imgads);die;
            foreach ($path_imgads as $value){
               if($value['ads_position']=="2"){ 
         ?>
            <div style="clear:both;"></div> 
                  <div id="fix_footer2" style="width:100%; display:block; float:left; margin:-7px 0 0 0; overflow:hidden; line-height:0px;">
                     <div style="display:inline-block; width:100%; text-align:center;">
                        <div class="textwidget custom-html-widget">
                        <center><a href="<?php echo $value['ads_url']?>" target="_blank" rel="noopener"><img src="<?php echo $backURL."ads/".$value['ads_picture'];?>"></a></center>
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
      <!-- ******************************** โฆษณาก่อน footer ***************************-->

      <!-- *****************************  Slide Bar AD  ******************************** -->
     <!--  <div id="float_banner" class="body">
         <a href="http://www.cmsproweb.com/" target="_blank">
            <img src="//www.ninenik.com/img/link/1224135320.jpg" />
         </a>
      </div> -->
     <!-- *****************************  Slide Bar AD  ******************************** -->
<script>


   $( "#formsearch" ).submit(function( event ) {
      var url = "<?= base_url('/search/') ?>"+'/'+$("#search").val();
      window.location.href = url;
      event.preventDefault();
   });

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
		}</script> 