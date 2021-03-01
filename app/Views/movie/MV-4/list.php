<div class="hero common-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1> <?=$title?> </h1>
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
                if (!empty($ads['pos1'])) {
                    foreach ($ads['pos1'] as $val) {


                        if (substr($val['ads_picture'], 0, 4) == 'http') {
                            $ads_picture = $val['ads_picture'];
                        } else {
                            $ads_picture = $path_ads . $val['ads_picture'];
                        }
                ?>
                        <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $val['branch_id'] ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
                            <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
                        </a>
                <?php
                    }
                }
                ?>

        </div>

    </div>
</div>

<div class="movie-items">

    <div class="container">

        <div class="row ipad-width">

            
        <?php include('left.php'); ?>

            <div class="col-md-9 col-xs-12 manga-item-list">

                <div class="title-hd">
                    
                </div>

                <div class="flex-wrap-movielist">
                    <?php 
                    if(!empty($list_video)){
                        foreach ($list_video['list'] as $value) {

                            $id = $value['movie_id'];
                            $s_replace = [
                                ")", "(", " ", '%'
                            ];
                            $e_replace = [
                                "", "", "-", '%25'
                            ];
        
                            $url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_name'])));
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

                                    <img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_name']; ?>" title="<?php echo $value['movie_name']; ?>">


                                <?php
                                } else {
                                ?>

                                    <a href="<?php echo $urlvideo; ?>">
                                        <img src="<?php echo $backURL . $img_backurl . $value['movie_picture']; ?>" alt="<?php echo $value['movie_name']; ?>" title="<?php echo $value['movie_name']; ?>">
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
                                        <?php echo $value['movie_name']?>
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
                                    <?= pagination($list_video['page'], $list_video['total_page']); ?>
                                </div>

                            </div>

                        </ul>

                    </div>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>

        
