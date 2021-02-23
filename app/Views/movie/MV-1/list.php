<div id="content">

    <div id="secondseo">
        <h2>ดูหนังฟรีได้แบบไม่เสียเงินหรือเลือกดูหนังออนไลน์อัพเดตใหม่ก่อนใคร</h2>
        <h2>เลือกหนังที่จะดูได้ตามหมวดหมู่หรือเลือกดูหนังออนไลน์ที่อัพใหม่ได้ที่หน้าแรก</h2>
        <h2>เลือกดูหนังตามปีที่ฉาย</h2>
    </div>

    <?php include('left.php') ?>

    <div class="content-main">

        <div class="box">
            <div class="box-header">
                <ul>
                    <li class="menu-item current-menu-item">
                        <span style="color: #f2d45f;"><?= str_replace('-', ' ', $title) ?></span>
                    </li>
                </ul>
            </div>


            <?php if (!empty($list_video['list'])) { ?>

                <?php foreach ($list_video['list'] as $value) {
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
                                <b style="word-wrap: break-word;"><i class="fa fa-eye" aria-hidden="true"></i> <?php if (empty($value['movie_view'])) {
                                                                                                                    echo "0";
                                                                                                                } else {
                                                                                                                    echo $value['movie_view'];
                                                                                                                } ?> คน</b>
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

                            <div class="movie-corner movie-HD" style=" background-color: <?php echo $display; ?>;"><?php echo strtoupper($value['movie_quality']); ?></div>

                            <div class="movie-image">

                                <a onclick="goView('<?= $value['movie_id'] ?>', '<?= $url_name ?>', '<?= $value['movie_type'] ?>')">

                                    <img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_name']; ?>" title="<?php echo $value['movie_name']; ?>">

                                </a>

                            </div>

                        </div>


                    </div>

            <?php
                }
            } else {
                echo "<h4 style='float:left;color:#fff;width:100%;'><center>ไม่พบหนังที่ค้นหา</center></h4>";
            }
            ?>



        </div>

        <!-- Pagination -->
        <?php


        if ($list_video['total_page'] != '1') {
            if (!empty($list_video['list'])) {
        ?>
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
        <?php
            }
        }

        ?>

        <!-- /Pagination -->

    </div>





    <?php include('right.php') ?>



    <div class="clearfix"></div>

    <!-- ADS ล่าง -->
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

    <!-- ADS ล่าง -->