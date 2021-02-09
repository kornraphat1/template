<div class="slider movie-items">

    <div class="container padding-top-search">

        <div class="row">
            <div id="content">
                <div class="content-web">
                    <h1 class="title-web"><span class="text-silver-linear">ดูหนังออนไลน์</span> <span class="text-gold-linear">DOSABAI</span></h1>
                    <h2 class="title-description">หนังใหม่ ดูหนังออนไลน์ ครบทุกเรื่องทุกรสที่ DOSABAI</h2>
                </div>
            </div>

            <div class="slick-multiItemSlider">
                <?php //echo "<pre>";print_r($movie_recomend);die; 
                ?>
                <?php foreach ($movie_recomend['list'] as $value) {

                    $id = $value['movie_id'];

                    if ($value['movie_type'] == 'mo') {
                        $urlvideo = base_url('/video/' . $id . '/' . urlencode(str_replace(' ', '-', $value['movie_thname'])));
                    } else if ($value['movie_type'] == 'se') {
                        $urlvideo = base_url('/series/' . $id . '/' . urlencode(str_replace(' ', '-', $value['movie_thname'])));
                    }

                ?>


                    <div class="movie-item">

                        <div class="mv-img mv-img-resize">

                            <?php
                            if (substr($value['movie_picture'], 0, 4) == 'http') {
                            ?>

                                <a href="<?php echo $urlvideo; ?>">
                                    <img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">
                                </a>

                            <?php
                            } else {
                            ?>

                                <a href="<?php echo $urlvideo; ?>">
                                    <img src="<?php echo $backURL . $img_backurl . $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">
                                </a>

                            <?php
                            }
                            ?>



                        </div>

                        <div class="hvr-inner">

                            <a href="<?php echo $urlvideo; ?>">ดูหนัง <i class="ion-ios-arrow-righ"></i></a>

                        </div>

                        <div class="title-in">

                            <div class="cate">



                            </div>

                            <h2><a href="#">
                                    <?php echo $value['movie_thname']; ?>
                                </a></h2>

                            <p><i class="ion-android-star"></i><span><?php echo $value['movie_ratescore']; ?></span></p>

                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>

    </div>
</div>

<div style="background-color: #020d18;">

    <div class="container" style="background-color:#020d18;">

        <div class="col-sm-12 dark-bg">

            <?php

            $style = "width: 100%;";
            $i = 0;

            if (!empty($ads)) {

                foreach ($ads as $value) {

                    if ($value['ads_position'] == "1") {

                        if ($i <= 0) {
                            $style = "width: 100%;padding-bottom: 10px;";
                        }

                        $i++;

            ?>

                        <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url']; ?>" target="_blank">
                            <img alt="<?php echo $value['ads_url']; ?>" title="<?php echo $value['ads_url']; ?>" src="<?php echo $pathads . $value['ads_picture']; ?>" style="<?= $style ?>" class="hoverimg">
                        </a>

            <?php

                    }
                }
            } else {
            }

            ?>

        </div>

    </div>
</div>

<div class="movie-items">

    <div class="container">

        <div class="row ipad-width">

            <?php include('left.php'); ?>

            <div class="col-md-8 col-xs-12 manga-item-list">

                <div class="title-hd">

                    <h2>หนังมาใหม่</h2>
                </div>

                <div class="flex-wrap-movielist">



                    <?php foreach ($list_video['list'] as $value) {

                        $id = $value['movie_id'];

                        $s_replace = [
                            ")", "(", " ", '%'
                        ];
                        $e_replace = [
                            "", "", "-", '%25'
                        ];

                        $url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_thname'])));
                        if ($value['movie_type'] == 'se') {

                            $urlvideo = str_replace('%', '%25', urldecode(base_url('/series/' . $id . '/' . $url_name)));
                        } else {

                            $urlvideo = str_replace('%', '%25', urldecode(base_url('/video/' . $id . '/' . $url_name)));
                        }

                    ?>

                        <div class="movie-item-style-2 movie-item-style-1">

                            <div class="mv-img-style-resize">


                                <?php
                                if (substr($value['movie_picture'], 0, 4) == 'http') {
                                ?>

                                    <img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">


                                <?php
                                } else {
                                ?>

                                    <a href="<?php echo $urlvideo; ?>">
                                        <img src="<?php echo $backURL . $img_backurl . $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">
                                    </a>

                                <?php
                                }
                                ?>

                            </div>



                            <div class="hvr-inner">

                                <a href="<?php echo $urlvideo; ?>">ดูหนัง <i class="ion-ios-arrow-righ"></i></a>

                            </div>

                            <div class="mv-item-infor">

                                <h2><a href="<?php echo $urlvideo; ?>"><?php echo $value['movie_thname'] ?></a></h2>

                                <p class="rate"><i class="ion-android-star"></i><span><?php echo $value['movie_ratescore']; ?></span> <span style="float: right;"><i class="fa fa-eye" aria-hidden="true"></i> <?php if (empty($value['movie_view'])) {
                                                                                                                                                                                                                    echo "0";
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo $value['movie_view'];
                                                                                                                                                                                                                } ?></span> </p>



                            </div>

                        </div>

                    <?php } ?>

                </div>

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

            </div>

        </div>

    </div>



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position: relative; min-height: 1px;padding-left: 0px;padding-right: 0px;background-color: #020d18;">

        <div class="title-hd col-log-12" style="padding-top:20px">

            <div class="container">
                <?php $i = 5;

                ?>

                <?php foreach ($category_list_interest as $key => $values) { ?>

                    <?php $i++ ?>

                    <div class="title-hd col-lg-12" style="padding-top:20px">
                        <?php
                        $cate_id = $values['category_id'];
                        $name_cate = $values['category_name'];
                        ?>
                        <h2> <?php echo $name_cate; ?></h2>
                        <a class="pull-right" href="<?php echo "/category/" . $cate_id . "/" . urlencode($name_cate); ?>" style="margin-right: 10px; margin-top: -31px;">ดูทั้งหมด</a></h2>
                    </div>

                    <div class="flex-wrap-movielist">

                        <?php


                        $quality = "";
                        foreach ($values['movie'] as $key =>  $val) {
                            $name = divineMovieName($val['movie_thname'], $val['movie_year']);
                            $values['movie'][$key]['movie_thname'] = $name['thaiName'];
                            $values['movie'][$key]['movie_enname'] = $name['engName'];
                        }
                        ?>
                        <?php foreach ($values['movie'] as $value) {
                            $id = $value['movie_id'];
                            if (empty($value['movie_year'])) {
                                if (empty($value['movie_thname'])) {
                                    $moviename =   $value['movie_enname'];
                                } else if (empty($value['movie_enname'])) {
                                    $moviename =   $value['movie_thname'];
                                } else {
                                    $moviename =   $value['movie_thname'] .  $value['movie_enname'];
                                }
                            } else {
                                if (empty($value['movie_thname'])) {
                                    $moviename =   $value['movie_enname'] . ' (' . $value['movie_year'] . ') ';
                                } else if (empty($value['movie_enname'])) {
                                    $moviename =   $value['movie_thname'] . ' (' . $value['movie_year'] . ') ';
                                } else {
                                    $moviename =   $value['movie_thname'] . ' (' . $value['movie_year'] . ') ' . $value['movie_enname'];
                                }
                            }
                            $s_replace = [
                                ")", "(", " ", '%'
                            ];
                            $e_replace = [
                                "", "", "-", '%25'
                            ];
                            if ($value['movie_type'] == 'se') {
                                $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $moviename)))))));
                                $urlvideo = str_replace('%', '%25', urldecode(base_url('/series/' . $id . '/' . $url_name)));
                            } else {
                                $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $moviename)))))));
                                $urlvideo = str_replace('%', '%25', urldecode(base_url('/movie/' . $id . '/' . $url_name)));
                            }
                        ?>
                            <div class="movie-item-style-2 movie-item-style-1">

                                <div class="mv-img-style-resize">

                                    <?php
                                    if (substr($value['movie_picture'], 0, 4) == 'http') {
                                    ?>

                                        <img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">


                                    <?php
                                    } else {
                                    ?>

                                        <a href="<?php echo $urlvideo; ?>">
                                            <img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>"">
                                            </a>

                                        <?php
                                    }
                                        ?>



                                    </div>

                                    <div class=" hvr-inner">

                                            <a href="<?php echo $urlvideo; ?>">ดูหนัง <i class="ion-ios-arrow-righ"></i></a>

                                </div>

                                <div class="mv-item-infor">

                                    <h2><a href="<?php echo $urlvideo; ?>"><?php echo $value['movie_thname']; ?></a></h2>

                                    <p class="rate"><i class="ion-android-star"></i><span><?php echo $score; ?></span> &nbsp; <span style="float: right;"><i class="fa fa-eye" aria-hidden="true"></i> <?php if (empty($value['movie_view'])) {
                                                                                                                                                                                                            echo "0";
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            echo $value['movie_view'];
                                                                                                                                                                                                        } ?></span> </p>

                                </div>

                            </div>

                    <?php

                        }
                    }

                    ?>

                    </div>



            </div>

        </div>

    </div>

    <div id="content">
        <div class="content-web">
            <center>
                <a href="<?php echo base_url(); ?>">
                    <img class="logo-footer" src="<?php echo $path_setting . $setting['setting_logo']; ?>" width="180px" title="ดูหนังออนไลน์ ดูหนังใหม่ที่ Dosabai.com" alt="ดูหนังออนไลน์ ดูหนังใหม่ที่ Dosabai">
                </a>
            </center>

            <p class="content-footer"><strong><a href="">ดูหนังออนไลน์ฟรี</a></strong> โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS <strong><a href="">ดูหนัง</a></strong> <strong><a href="">ดูซีรี่ย์</a></strong> หนังไทย หนังฝรั่ง หนังเอเชีย หนังการ์ตูน Netflix Movie หนังบู๊ หนังตลก หนังอาชญากรรม หนังดราม่า สยองขวัญ หนังผจญภัย และยังมี <strong><a href="">หนังใหม่2020</a></strong> ให้รับชมอีกมากมาย <br>สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมงที่ <strong><a href="">Dosabai.com</a></strong></p>
        </div>
    </div>