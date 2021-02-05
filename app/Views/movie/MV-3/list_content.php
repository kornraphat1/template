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
</style>

<?php
//   echo "<pre>";
//  print_r($video_data);die;
//  print_r($feildplay);die;
//  echo "<pre>";
//  print_r($get_video_livesteram);die;
// print_r($listcontent);die;
?>
<div class="col-lg-9 col-md-12">
    <div class="row">

        <div class="row">
            <!-- POST ARTICLES -->
            <div class="col-lg-12 col-md-12">
                <section id="category">
                    <div class="row auto-clear">
                        <!-- RELATED VIDEOS -->
                        <div class="col-lg-12 col-md-12 col-sm-12 category-video-grid">
                            <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>รายการคอนเทนต์</h2>
                            <!-- VIDEO POSTS ROW -->
                            <div class="row">
                                <?php foreach ($listcontent as $value) { ?>
                                    <article class="col-lg-4 col-md-6 col-sm-4">
                                        <!-- POST L size -->
                                        <div class="post post-medium">
                                            <div class="thumbr">
                                                <a class="post-thumb" href="<?php echo "/page/content/branch/" . $branch . "/id/" . $value['content_id']; ?>" data-lity>
                                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>

                                                    <img class="img-responsive" src="<?php echo $backURL . "/img_content/" . $value['content_thumbnail']; ?>" alt="#">
                                                    <center><p><?php echo $value['content_head'];?></p></center>
                                                </a>
                                            </div>
                                            <div class="infor">
                                                <!-- <h4>
                                                    <a class="title" href="#"> <?php echo $value['content_head'] ?></a>
                                                </h4> -->
                                            </div>
                                        </div>
                                    </article>
                                <?php  }  ?>
                            </div>
                            <div class="clearfix spacer"></div>
                        </div>
                    </div>
                    <div class="row pagi text-center">
                        <ul class="pagination dropshd">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </section>
            </div>
            <!-- SIDEBAR -->
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
                     <img class="img-responsive user-photo" src='<?php echo base_url("/assets/img/thumbs/thumb-review.jpg") ?>' alt="Comment User Avatar">
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
                     <img class="img-responsive user-photo" src='<?php echo base_url("/assets/img/thumbs/thumb-review.jpg") ?>' alt="Comment User Avatar">
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
</script>