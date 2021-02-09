<div class="hero common-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1> <?=$catename?> </h1>
                    <!-- <ul class="breadcumb">
                        <li class="active"><a href="#">Home</a></li>
                        <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                    </ul> -->
                </div>
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

            if (!empty($path_imgads)) {

                foreach ($path_imgads as $value) {

                    if ($value['ads_position'] == "1") {

                        if ($i != 0) {

                            $style = "width: 100%;";

                        }

                        $i++;

            ?>

                        <a onclick="onClickAds(<?= $value['ads_id']?>, <?= $branch ?>)" href="<?php echo $value['ads_url']; ?>" target="_blank">

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

            <div class="col-md-4 ">

                <div class="sidebar hidden-xs hidden-sm">

                    <div class="celebrities">

                        <!-- <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">หมวดหมู่</a> -->

                        <ul class="dropdown-menu">

                            <li class="fa-chevron"><a onclick="goView2('29')">Action</a></li>

                            <li class="fa-chevron"><a onclick="goView2('30')">Adventure</a></li>

                            <li class="fa-chevron"><a onclick="goView2('31')">Comedy</a></li>

                            <li class="fa-chevron"><a onclick="goView2('32')">Drama</a></li>

                            <li class="fa-chevron"><a onclick="goView2('33')">Fantasy</a></li>

                            <li class="fa-chevron"><a onclick="goView2('34')">Martial Arts</a></li>

                            <li class="fa-chevron"><a onclick="goView2('35')">Shounen</a></li>

                            <li class="fa-chevron"><a onclick="goView2('36')">Supernatural</a></li>

                            <li class="fa-chevron"><a onclick="goView2('37')">Manhua</a></li>

                            <li class="fa-chevron"><a onclick="goView2('38')">Horror</a></li>

                        </ul>

                        <h4 class="sb-title">หมวดหมู่</h4>

                        <?php foreach ($category_list as $value) { ?>

                            <div class="celeb-item">

                                <div class="celeb-author">

                                    <h3><a href="<?php echo base_url('/category/' . $value['category_id'] . "/" . urlencode(str_replace(' ','-',$value['category_name']))); ?>" title=<?= $value['category_name'] ?>><?= $value['category_name'] ?></a></h3>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                </div>

                <?php 

                if (!empty($path_imgads)) {
                    foreach ($path_imgads as $value) {
                        if ($value['ads_position'] == "2") {

                ?>

                            <div class="col-sm-6 col-xs-6 col-md-12 col-lg-12">
                                <asidenone>
                                    <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'];?>" target="_blank">
                                        <img src="<?php echo $pathads . $value['ads_picture']; ?>" style="width: 100%;margin-top: 20px;border-left-width: 10px;margin-left: 15px;" class="hoverimg">
                                    </a>
                                </asidenone>
                            </div>

                <?php
                        }
                    }
                }

                ?>

            </div>

            <div class="col-md-8 col-xs-12 manga-item-list">

                <div class="title-hd">
                    <!-- <h2><?=$catename?></h2> -->
                </div>

                <div class="flex-wrap-movielist">
                    <?php 
                    if(!empty($list_video)){
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

                                <h2>
                                    <a href="<?php echo $urlvideo; ?>">
                                        <?php echo $value['movie_thname']?>
                                    </a>
                                </h2>

                                <p class="rate"><i class="ion-android-star"></i><span><?php echo $value['movie_ratescore']; ?></span> /10<span style="float: right;"><i class="fa fa-eye" aria-hidden="true"></i> 45</span> </p>

                            </div>

                        </div>

                    <?php 
                            } 
                        }else{
                            echo "<h6>ไม่พบหนังในหมวดหมู่นี้</h6>";
                        }
                    ?>

                </div>
                
                <?php if(!empty($list_video)){ ?>
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
                <?php } ?>
            </div>
        </div>
    </div>

        
