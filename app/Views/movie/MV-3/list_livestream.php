<script language="javascript" src='<?php echo base_url("/assets/js/jquery-3.4.1.min.js") ?>'></script>
<style type="text/css" id="wp-custom-css">
</style>
<link rel="stylesheet" type="text/css" href='<?php echo base_url("/assets/css/ad.css") ?>'>
<br><br>
<?php 
    // echo "<pre>";
    // print_r($list_livestream);
    // die;
    //print_r($backURL);
?>
<style>
     .post:hover .thumbr{
        box-shadow: none;
        }
   
    @media (min-width: 1281px) {
        .imgborderlivestream{
        border: 7px solid black;
        margin-bottom: 15px;
        box-shadow: none;
        }
    }
    
    @media (min-width: 1024px) and (max-width: 1280px) {
        .imgborderlivestream{
            border: 7px solid black;
            margin-bottom: 15px;
            box-shadow: none;
            
        }
        /* .col-md-12{
            width: 121%;
        } */
         
    }
    @media (min-width: 768px) and (max-width: 1024px) {
        .imgborderlivestream{
            border: 7px solid black;
            margin-bottom: 15px;
            box-shadow: none;
        }
    }
    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
        .imgborderlivestream{
            border: 7px solid black;
            margin-bottom: 15px;
            box-shadow: none;
        }
    }
    @media (min-width: 481px) and (max-width: 767px) {
        .imgborderlivestream{
            border: 7px solid black;
            margin-bottom: 15px;
            box-shadow: none;
        }
    }
    @media (min-width: 320px) and (max-width: 480px) {
        .imgborderlivestream{
            border: 7px solid black;
            margin-bottom: 15px;
            box-shadow: none;
            width: 107%;
        }
    }
    /* @media (min-width: 992px){
        .col-md-12 {
            width: 121%;
        }
    } */
</style>
<div class="col-lg-9 col-md-12">
    <div class="row">
      
            <div class="row">
            <!-- POST ARTICLES -->	
            <div class="col-lg-12 col-md-12">
               <section id="category">
                  <div class="row auto-clear">
                     <!-- RELATED VIDEOS -->
                     <div class="col-lg-12 col-md-12 col-sm-12 category-video-grid">
                        <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>รายการทีวี</h2>
                        <!-- VIDEO POSTS ROW -->
                        <div class="row">
                        <?php foreach($list_livestream as $value) { ?> 
                           <article class="col-lg-4 col-md-6 col-sm-4">
                              <!-- POST L size -->
                              <div class="post post-medium">
                                 <div class="thumbr">
                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                       <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                      
                                       <img class="img-responsive" src="<?php echo $backURL."movie/livestream/".$value['livestream_img']; ?>" alt="#">
                                    </a>
                                 </div>
                                 <div class="infor">
                                    <h4>
                                       <a class="title" href="#"> <?php echo $value['livestream_name']?></a>
                                    </h4>
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
</div>


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
        foreach ($path_imgads as $value) {
            if ($value['ads_position'] == "2") {
        ?>
                <div style="clear:both;"></div>
                <div id="fix_footer2" style="width:100%; display:block; float:left; margin:-7px 0 0 0; overflow:hidden; line-height:0px;">
                    <div style="display:inline-block; width:100%; text-align:center;">
                        <div class="textwidget custom-html-widget">
                            <center><a href="https://slotgame66.com" target="_blank" rel="noopener"><img src="<?php echo  $backURL . "ads/" . $value['ads_picture']; ?>"></a></center>
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