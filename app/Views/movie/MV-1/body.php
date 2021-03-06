<div id="content">
    <div class="content-web">
        <h1 class="title-web"><span class="text-silver-linear">ดูหนังออนไลน์</span> <span class="text-gold-linear"> donengded</span></h1>
        <h2 class="title-description">หนังใหม่ ดูหนังออนไลน์ ครบทุกเรื่องทุกรสที่ donengded</h2>
    </div>


    <?php include('left.php') ?>



    <div class="content-main">
        <div class="box">
            <div class="box-header">
                <ul>
                    <li class="menu-item current-menu-item">
                        <h2 class="text-center">หนังมาใหม่</h2>
                    </li>
                </ul>
            </div>
            <?php
            foreach ($list_video['list'] as $value) {
                $id = $value['movie_id'];
                $s_replace = [
                    ")", "(", " ", '%'
                ];
                $e_replace = [
                    "", "", "-", '%25'
                ];
                $url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_name'])));
                

            ?>
                <div class="movie">
                    <div class="movie-box">
                        <div class="movie-title">
                            <h2>
                                <a onclick="goView('<?= $value['movie_id'] ?>', '<?= $url_name ?>', '<?= $value['movie_type'] ?>')">
                                    <span class="movie-title-color"><?php echo $value['movie_name']; ?></span>
                                </a>
                            </h2>
                        </div>
                        <div class="movie-imdb">
                            <b><span><?php echo $value['movie_ratescore']; ?></span></b>
                        </div>
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
                            <a onclick="goView('<?= $value['movie_id'] ?>', '<?= $url_name ?>', '<?= $value['movie_type'] ?>')">
                                <img src="<?php echo $value['movie_picture']; ?>" title="<?php echo $value['movie_name']; ?>" alt="<?php echo $value['movie_name']; ?>">
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
                            <?= pagination($list_video['page'], $list_video['total_page']); ?>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <!-- /Pagination -->

        <div class="box">
            <?php // echo "<pre>"; print_r($video_interest);die; 
            ?>
            <?php foreach ($video_cate as $value) {  ?>
                <div class="title-hd col-lg-12">
                    <div class="box-header">
                        <ul>
                            <li class="menu-item current-menu-item">
                                <h3> <?php echo $value['category_name']; ?></h3>
                            </li>
                        </ul>
                        <ul style="float:right;">
                            <li class="menu-item current-menu-item">
                                <a class="pull-right" href="<?php echo base_url("/category/" . $value['category_id'] . "/" . urlencode(str_replace(' ', '-', $value['category_name']))); ?>" style="margin-right: 10px;">ดูทั้งหมด...</a>
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

                    $url_name = urldecode(str_replace([" ", "'"], ["-", ""], $val['movie_thname']));


                ?>
                    <div class="movie">
                        <div class="movie-box">
                            <div class="movie-title">
                                <h2>
                                    <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')">
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
                                <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')">
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



    <?php include('right.php') ?>



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
            <?php foreach ($category_list as $value) {
                echo $value['category_name'] . " ";
            } ?> และยังมี ให้รับชมอีกมากมาย <br>สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมงที่ <strong><a href="">donengded.com</a></strong></p>
    </div>
</div>
<!-- ADS2 -->
<div id="ads_fox_bottom">
    <div id="ads_fix_footer">

        <?php
        if (!empty($ads['pos4'])) {
            foreach ($ads['pos4'] as $val) {
                if (substr($val['ads_picture'], 0, 4) == 'http') {
                    $ads_picture = $val['ads_picture'];
                } else {
                    $ads_picture = $path_ads . $val['ads_picture'];
                }
        ?>
                <div style="text-align:center;">
                    <div id="fix_footer">

                        <!-- ปุ่ม close ADS ล่าง -->
                        <a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>

                    </div>
                </div>

                <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $val['branch_id'] ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
                    <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
                </a>
        <?php
            }
        }
        ?>
    </div>
</div>
<!-- ADS2 -->