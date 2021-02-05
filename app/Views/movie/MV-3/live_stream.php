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
        src: url('<?php echo base_url("/assets/font/Prompt-Bold.ttf")?>');
      }

      div,h2,h3{
        font-family: myFirstFont !important;
      }
      h3, .h3{
          font-size: 16px;
      }
      .bor{
      border: 7px solid #ccc!important;
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

 /* จอใหญ่สุด */
@media (min-width: 1281px) {
  
  #fix_footer2 img{
    background-repeat: no-repeat;
    background-size: contain;
    width: 32%;
    height: auto;
  }
   #fix_footer img{
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
  #single-video-wrapper{
   margin-left: 58px;
 }
  
}

@media (min-width: 1025px) and (max-width: 1280px) {
  
  #fix_footer2 img{
    background-repeat: no-repeat;
    background-size: contain;
    width: 728px;
    height: auto;
  }
   #fix_footer img{
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
 
  
}

@media (min-width: 768px) and (max-width: 1024px) {
  
  #fix_footer2 img{
    background-repeat: no-repeat;
    background-size: contain;
    width: 728px;
    height: auto;
  }
   #fix_footer img{
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

  #single-video{
      margin-right: 30px;
      margin-left: 30px;
      padding-left: 0px;
  }
  
}

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  
  #fix_footer2 img{
    background-repeat: no-repeat;
    background-size: contain;
    width: 100%;
    height: auto;
  }
   #fix_footer img{
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
  #single-video{
      margin-right: 30px;
      margin-left: 30px;
      padding-left: 0px;
  }
  
}
@media (min-width: 481px) and (max-width: 767px) {
  
  #fix_footer2 img{
    background-repeat: no-repeat;
    background-size: contain;
    width: 100%;
    height: auto;
  }
   #fix_footer img{
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
  
  #fix_footer2 img{
    background-repeat: no-repeat;
    background-size: contain;
    width: 100%;
    height: auto;
  }
   #fix_footer img{
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
  #single-video{
      margin-right: 30px;
      margin-left: 30px;
      padding-left: 0px;
  }
  
}
 
</style>

<?php 
//   echo "<pre>";
//  print_r($video_data);die;
//  print_r($feildplay);die;
//  echo "<pre>";
//  print_r($get_video_livesteram);die;

?>



<div id="single-video-wrapper" class="col-xs-12 col-lg-7 col-md-12">
      <div class="row">
         <!-- VIDEO SINGLE POST -->
         <div class="col-xs-12">
               <!-- <a href="http://themeforest.net/user/orcasthemes/portfolio?ref=orcasthemes" class="banner-md">
                  <img src= '<?php echo base_url("/assets/img/banners/banner-xl.jpg")?>'  class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
               </a> -->
            <!-- POST L size -->
            <article class="post-video">
               <!-- VIDEO INFO -->
               <div class="video-info">
                  <!-- 16:9 aspect ratio  -->

                  <!-- ********************* SOURCS MOVIES  ****************************  -->
                  <div class="embed-responsive embed-responsive-16by9 video-embed-box" style="min-height: 200px;margin-bottom: 10px;">
                     <!-- <iframe src="https://freeball95.com/E/M07814.mp4" width="500px" class="embed-responsive-item"></iframe> -->
                        <?php //echo base_url();die;?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="<?php echo $video_data['movie_preview'];?>"  class="bor embed-responsive-item"></iframe>
                        </div>
                  </div>
                     <!-- ********************* SOURCS MOVIES  ****************************  -->

                  <div class="row"> 
                     <div class="col-lg-9 col-xs-9">
                           <h3 style="word-wrap: break-word;"> <?= $video_data['movie_thname'] ?> </h3>
                     </div><br>
                     <div class="col-lg-3">
                           <button class="pull-right btn btn-warning" onclick="goReport('<?=$video_data['movie_id'] ?>','<?=$video_data['branch_id']?>')"><font color="black">แจ้งหนังเสีย</font></button>
                     </div>
                  </div>
                  <ul class="social">
                     <li class="social-facebook"><a href="#" class="fa fa-facebook social-icons"></a></li>
                     <li class="social-google-plus"><a href="#" class="fa fa-google-plus social-icons"></a></li>
                     <li class="social-twitter"><a href="#" class="fa fa-twitter social-icons"></a></li>
                     <li class="social-youtube"><a href="#" class="fa fa-youtube social-icons"></a></li>
                     <li class="social-rss"><a href="#" class="fa fa-rss social-icons"></a></li>
                  </ul>
               </div>
               <!-- DETAILS -->
               <!-- MAIN ROLL ADVERTISE BOX -->
               <!-- <a href="http://themeforest.net/user/orcasthemes/portfolio?ref=orcasthemes" class="banner-md">
               <img src= '<?php echo base_url("/assets/img/banners/banner-xl.jpg")?>'  class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
               </a> -->
            </article>
            <br>
            <div class="col-lg-12 col-md-6 col-xs-3"> 
            <?php 
               // echo "<pre>";
               // print_r($video_data);
               //if(!empty($video_data['movie_thmain']) && empty($video_data['movie_thsub1']) && empty($video_data['movie_thsub2']) ){
                  ?>
                     <!-- <a href="<?php echo base_url('/page/video/id/'.$video_data['movie_id'].'/main') ?>" class="col-lg-3 btn btn-danger" ><font color="white">ลิงค์หลัก 1</font></a> -->
                  <?php   
                  // }else if(!empty($video_data['movie_thmain']) && !empty($video_data['movie_thsub1']) && empty($video_data['movie_thsub2'])){
                  ?>
                        <!-- <a href="<?php echo base_url('/page/video/id/'.$video_data['movie_id'].'/main') ?>" class="col-lg-3 btn btn-danger" ><font color="white">ลิงค์หลัก 1</font></a>
                        <a href="<?php echo base_url('/page/video/id/'.$video_data['movie_id'].'/sub1') ?>" class="col-lg-3 btn btn-danger" ><font color="white">ลิงค์สำรอง 1</font></a> -->
                  <?php
                  // }else if(!empty($video_data['movie_thmain']) && !empty($video_data['movie_thsub1']) && !empty($video_data['movie_thsub2'])){
                      ?>
                        <!-- <a href="<?php echo base_url('/page/video/id'.$video_data['movie_id'].'/main') ?>" class="col-lg-3 btn btn-danger" ><font color="white">ลิงค์หลัก 1</font></a>
                        <a href="<?php echo base_url('/page/video/id'.$video_data['movie_id'].'/sub1') ?>" class="col-lg-3 btn btn-danger" ><font color="white">ลิงค์สำรอง 1</font></a>
                        <a href="<?php echo base_url('/page/video/id'.$video_data['movie_id'].'/sub2') ?>" class="col-lg-3 btn btn-danger" ><font color="white">ลิงค์สำรอง 2</font></a> -->
                      <?php
                   //}
                ?>
            </div>
           
         </div>   
      </div>     
</div>
          <!-- COMMENTS -->
         <!-- <section id="comments">
            <h2 class="title">คอมเม้นท์</h2>
            <div class="widget-area">
               <div class="status-upload">
                  <form>
                     <textarea placeholder="Your comment goes here" ></textarea>
                     <div class="comment-box-control">
                        <ul>
                           <li><a title="" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                           <li><a title="" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                           <li><a title="" data-placement="bottom" data-original-title="Smile"><i class="fa fa-smile-o"></i></a></li>
                        </ul>
                        <button type="submit" class="btn pull-right"><i class="fa fa-share"></i> post comment</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="row comment-posts">
               <div class="col-sm-1">
                  <div class="thumbnail">
                     <img class="img-responsive user-photo" src='<?php echo base_url("/assets/img/thumbs/thumb-review.jpg" )?>' alt="Comment User Avatar">
                  </div>
               </div>

               <div class="col-sm-11">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <strong>John Doe</strong> <span class="pull-right">commented 5 days ago</span>
                     </div>
                     <div class="panel-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
                     </div>
                  </div>
               </div>
            
               <div class="col-sm-1">
                  <div class="thumbnail">
                     <img class="img-responsive user-photo" src='<?php echo base_url("/assets/img/thumbs/thumb-review.jpg")?>' alt="Comment User Avatar">
                  </div>
               </div>

               <div class="col-sm-11">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <strong>John Doe</strong> <span class="pull-right">commented 5 days ago</span>
                     </div>
                     <div class="panel-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
      </div> 
   </div>
   
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
                        <center><a href="https://slotgame66.com" target="_blank" rel="noopener"><img src="<?php echo  $value['ads_picture'];?>"></a></center>
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

      function goReport(id,branch){
       //console.log(id,branch);
       
            $.ajax({
            url: "/savereport/branch/"+branch+"/id/"+id,
            type: 'GET',
            async : false,
            success: function(data)          
            {   
              if(data="OK"){
                 alert("แจ้งหนังเสียเรียบร้อย");
              }
            }
        });

}
   </script> 
 
