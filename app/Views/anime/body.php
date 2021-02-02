<div id="content">
    <div class="content-web">
        <h1 class="title-web"><span class="text-silver-linear">ดูหนังออนไลน์</span> <span class="text-gold-linear"> donengded</span></h1>
        <h2 class="title-description">หนังใหม่ ดูหนังออนไลน์ ครบทุกเรื่องทุกรสที่ donengded</h2>
    </div>
   
    <div class="content-main-av">
        <div class="box">
            <div class="box-header">
                <ul>
                    <li class="menu-item current-menu-item">
                        <h2 class="text-center">Anime</h2>
                    </li>
                </ul>
            </div>
            <?php
            foreach ($list_video as $value) {
                
                $id = $value['movie_id'];
                $s_replace = [
                    ")", "(", " ", '%'
                ];
                $e_replace = [
                    "", "", "-", '%25'
                ];
                $url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_thname'])));
                if ($value['movie_type'] == 'se') {
                    $urlvideo = str_replace('%', '%25', urldecode(base_url('/anime/video/' . $id . '/' . $url_name)));
                } else {
                    $urlvideo = str_replace('%', '%25', urldecode(base_url('/anime/video/' . $id . '/' . $url_name)));
                }

                if (substr($value['movie_picture'], 0, 4) == 'http') {
                    $movie_picture = $value['movie_picture'];
                } else {
                    $movie_picture = $path_thumbnail . $value['movie_picture'];
                }
            ?>
                <div class="movie-av">
                    <div class="movie-box">
                        <div class="movie-title">
                            <h2>
                                <a href='<?php echo $urlvideo; ?>' onclick="countView('<?= $id ?>')">
                                    <span class="movie-title-color"><?php echo $value['movie_thname']; ?></span>
                                </a>
                            </h2>
                        </div>
                        <?php if ($value['movie_ratescore']) { ?>
                            <div class="movie-imdb">
                                <b><span><?php echo $value['movie_ratescore']; ?></span></b>
                            </div>

                        <?php
                        }
                        ?>


                        <div class="movie-view">
                            <b style="word-wrap: break-word;">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php
                                if (empty($value['movie_view'])) {
                                    echo "0";
                                } else {
                                    echo $value['movie_view'];
                                }
                                ?> คน
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
                        <div class="movie-corner movie-HD" style=" background-color: <?php echo $display; ?>;">
                            <?php echo strtoupper($value['movie_quality']); ?>
                        </div>
                        <div class="movie-image">
                            <a href='<?php echo $urlvideo; ?>' onclick="countView('<?= $id ?>')">
                                <img src="<?php echo $movie_picture; ?>" title="<?php echo $value['movie_thname']; ?>" alt="<?php echo $value['movie_thname']; ?>">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Pagination -->
        <div class="box">
            <div class="navigation">
                <ul>
                    <div class="topbar-filter">
                        <div class="pagination2">
                            <?= pagination($paginate['page'], $paginate['total_page']); ?>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <!-- /Pagination -->
        <div class="box">
        <?php // echo "<pre>"; print_r($video_interest);die; 
        ?>
        <?php foreach ($video_interest as $value) {  ?>
            <div class="title-hd col-lg-12">
                <div class="box-header">
                    <ul>
                        <li class="menu-item current-menu-item">
                            <h3> <?php echo $value['category_name']; ?></h3>
                        </li>
                    </ul>
                    <ul style="float:right;">
                        <li class="menu-item current-menu-item">
                            <a class="pull-right" href="<?php echo base_url("/anime/category/" . $value['category_id'] . "/" . urlencode(str_replace(' ', '-', $value['category_name']))); ?>" style="margin-right: 10px;">ดูทั้งหมด...</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php


            foreach ($value['list'] as $val) {


                $movie_id = $val['movie_id'];
                $movie_thname = $val['movie_thname'];
                $movie_type = $val['movie_type'];
                $movie_quality = $val['movie_quality'];
                $movie_picture = $val['movie_picture'];;

                if (strtolower($val['movie_sound']) == 'th' || strtolower($val['movie_sound']) == 'thai') {
                    $mo_sound = 'พากษ์ไทย';
                } else if (strtolower($val['movie_sound']) == 'eng') {
                    $mo_sound = 'พากษ์อังกฤษ';
                } else {
                    $mo_sound = '';
                }

                if (!($val['movie_view'])) {
                    $movie_view = 0;
                } else if (strlen($val['movie_view']) >= 5) {
                    $movie_view =  substr($val['movie_view'], 0, -3) . 'k';
                } else {
                    $movie_view = $val['movie_view'];
                }
                if (!empty($val['movie_ratescore']) && $val['movie_ratescore'] != 0) {
                    if (strpos($val['movie_ratescore'], '.')) {
                        $score = substr($val['movie_ratescore'], 0, 3);
                    } else {
                        $score = substr($val['movie_ratescore'], 0);
                    }
                } else {
                    $score = 5;
                }

                
                    $urlvideo = str_replace('%', '%25', urldecode(base_url('/anime/video/' . $id . '/' . $url_name)));
             


             
                    $urlvideo = base_url('/anime/video/' . $movie_id . '/' . $url_name);
               


                
                if (substr($val['movie_picture'], 0, 4) == 'http') {
                    $movie_picture = $val['movie_picture'];
                } else {
                    $movie_picture = $path_thumbnail . $val['movie_picture'];
                }
            ?>
                <div class="movie-av">
                    <div class="movie-box">
                        <div class="movie-title">
                            <h2>
                                <a href='<?php echo $urlvideo; ?>' onclick="countView('<?= $id ?>')">
                                    <span class="movie-title-color"><?php echo $movie_thname; ?></span>
                                </a>
                            </h2>
                        </div>
                        <div class="movie-imdb">
                            <b><span><?php echo $score; ?></span></b>
                        </div>
                        <div class="movie-view">
                            <b style="word-wrap: break-word;">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo $movie_view; ?> คน
                            </b>
                        </div>
                        <?php
                        if ($movie_quality == "hd") {
                            $display = "red";
                        } else if ($movie_quality == "sd") {
                            $display = "green";
                        } else {
                            $display = "green";
                        }
                        ?>
                        <div class="movie-corner movie-HD" style=" background-color: <?php echo $display; ?>;">
                            <?php echo strtoupper($movie_quality); ?>
                        </div>
                        <div class="movie-image">
                            <a href='<?php echo $urlvideo; ?>' onclick="countView('<?= $id ?>')">
                                <img src="<?php echo $movie_picture; ?>" title="<?php echo $movie_thname; ?>" alt="<?php echo $movie_thname; ?>">
                            </a>
                        </div>
                    </div>
                </div>
        <?php

            }
        }
        ?>
    </div>
    </div>
    <div class="content-right">
        <div class="sidebar">
            <div class="sidebar-header">
                <p style="font-size: 18px; text-align: center;">
                    หมวดหมู่
                </p>
            </div>
            <ul>
                <?php foreach ($category_id as $value) { ?>
                    <li class="cat-item cat-left">
                        <h3 class="cate-name">
                            <a href="<?php echo base_url('anime/category/' . $value['category_id'] . '/' . urlencode(str_replace(' ', '-', $value['category_name']))); ?>" title=<?php echo $value['category_name']; ?> alt="<?php echo $value['category_name']; ?>">
                                <?php echo $value['category_name']; ?>
                            </a>
                        </h3>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<div id="content">
    <div class="content-web">
        <center>
            <a href="<?php echo str_replace('/public', '', base_url()); ?>">
                <img class="logo-footer" src='<?php echo $path_setting . $setting['setting_logo']; ?>' width="180px" title="<?php echo $setting['setting_title']; ?>" alt="<?php echo $setting['setting_title']; ?>">
            </a>
        </center>
        <p class="content-footer"><strong><a href="">donengded</a></strong> <strong><a href="">ดูหนัง</a></strong> ดูหนังซีรี่ส์ฟรี โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS <strong><a href="">ดูหนังออนไลน์</a></strong>
            <?php foreach ($category_id as $value) {
                echo $value['category_name'] . " ";
            } ?> และยังมี ให้รับชมอีกมากมาย <br>สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมงที่ <strong><a href="">donengded.com</a></strong></p>
    </div>
</div>
<!-- ADS2 -->
<div id="ads_fox_bottom">
    <div id="ads_fix_footer">
        <div style="text-align:center;">
            <div id="fix_footer">
                <?php foreach ($path_imgads as $value) {
                    if (empty($value['ads_position'] == "4")) {
                    } else { ?>
                        <!-- ปุ่ม close ADS ล่าง -->
                        <a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>
                <?php }
                } ?>
            </div>
        </div>
        <?php
        foreach ($path_imgads as $value) {
            if ($value['ads_position'] == "4") {
        ?>
                <div style="clear:both;"></div>
                <div id="fix_footer2" style="width:100%; display:block;  overflow:hidden; line-height:0px;">
                    <div style="display:inline-block; width:100%; text-align:center;">
                        <div class="textwidget custom-html-widget">
                            <center><a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?= $value['ads_url'] ?>" target="_blank" rel="noopener"><img alt="<?= $value['ads_name'] ?>" title="<?= $value['ads_name'] ?>" src="<?php echo  $path_ads  . $value['ads_picture']; ?>" width="70%"></a></center>
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