<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">

<html lang="th" prefix="og: https://ogp.me/ns#">



<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/style.min.css">

    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/stylesheet.css?v=22">

    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/sidebar.css?v=1">

    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/poster.css">

    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/navigation.css">

    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/single.css">



    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/all.min.css">

    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/font-awesome.min.css">

    

    <link href="<?= $document_root ?>/assets/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet"> <!--load all styles -->

    

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

   

   

    <title><?php echo $setting['setting_title']; ?></title>

    <link rel="canonical" href="#" />

    <?php if (!empty($setting['setting_header'])) {

        echo base64_decode($setting['setting_header']);

    }

    $logos = $setting['setting_logo'];

    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=1000; user-scalable=1.5;" />
    <meta name="description" content="<?php echo $setting['setting_description']; ?>" />
    <meta name="keywords" content=" <?php echo $setting['setting_keyword']; ?>" />
    <meta name="author" content="OrcasThemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />

    <?php

    if (("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) != ('https://' . $_SERVER['HTTP_HOST'] . '/')) {

        echo '<link rel="canonical" href="' . 'https://' . $_SERVER['HTTP_HOST'] . '' . '" />';

    }

    ?>

    <link rel="icon" type="image/png" href='<?php echo $path_setting . $setting['setting_icon']; ?>' />



    <!-- TAG og facebook -->

    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo base_url(uri_string()); ?>" />
    <meta property="og:title" content="<?php echo $setting['setting_title']; ?>" />
    <meta property="og:description" content="<?php echo  $setting['setting_description']; ?>" />
    <meta property="og:image" content="<?php echo $setting['image']; ?>" />



    <!-- TAG og twitter -->

    <meta name="twitter:card" content="summary" />

    <meta name="twitter:title" content="<?php echo $setting['setting_title']; ?>" />

    <meta name="twitter:description" content="<?php echo $setting['setting_description']; ?>" />

    <meta name="twitter:image" content="<<?php echo $setting['image']; ?>" />

    <meta name="twitter:site" content="@ondemandacademy" />

    <meta name="geo.region" content="TH" />

    <meta name="geo.position" content="14.897192;100.83273" />

    <meta name="ICBM" content="14.897192, 100.83273" />



    <style>

        body {

            font-family: 'Mitr', sans-serif;

        }

    </style>

    <meta name="google-site-verification" content="4Slg2QhpVrOUmcX9cvY5MJL_mxemuI2peizyqfDvJw0" />

</head>



<body class="home blog" cfapps-selector="body">

    <div id="mainseo">

        <h1>ดูหนัง และ ดูหนังออนไลน์ หนังใหม่ชนโรงเต็มเรื่อง</h1>

    </div>

    <style>



    </style>

    <div id="wrap">

        <div class="header">

            <div class="header-left">

                <div class="header-logo">

                    <a href="<?php echo str_replace('/public', '', base_url()); ?>">

                        <img src='<?php echo $path_setting . $setting['setting_logo']; ?>' width="55%" title="<?php echo $setting['setting_title']; ?>" alt="<?php echo $setting['setting_title']; ?>">

                    </a>

                </div>

            </div>

            <div class="header-right">

                <div class="header-title">

                    <div class="row" style="display: flex;">

                        <li>

                            <p class="header-font-1"><?php echo $setting['setting_title']; ?></p>

                            <?PHP if (!empty($setting['setting_fb'])) {

                            ?>

                                <a target="_blank" href="<?php echo $setting['setting_fb']; ?>"><img id="icon-facebook" style="width: 6%;" src="<?= $document_root ?>/assets/images/social-icon/facebook.png" title="ติดต่อทางเฟซบุ้ค" alt="ติดต่อทางเฟซบุ้ค"></a>

                            <?php

                            }

                            if (!empty($setting['setting_line'])) {

                            ?>

                                <a target="_blank" href="<?php echo $setting['setting_line']; ?>"><img id="icon-line" style="width: 6%; border-radius:5px" src="<?= $document_root ?>/assets/images/social-icon/line.png" title="ติดต่อทางไลน์" alt="ติดต่อทางไลน์"></a>

                            <?php

                            }  ?>

                        </li>

                    </div>

                </div>

            </div>

        </div>

        <div class="navbar">

            <ul class="nav">

                <li class="nav-main-item  menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">

                    <a class="nav-main-link" alt="หน้าแรก" href="<?php echo str_replace('/public', '', base_url()); ?>" style="font-size: 19px">

                        หน้าแรก

                    </a>

                </li>

                <!-- <li class="cat-item">

                    <a href="<?php echo base_url('/zoom'); ?>" alt="หนังซูม" title="Movie-zoom" style="font-size: 19px">

                        หนังซูม

                    </a>

                </li> -->





                <li class="cat-item">

                    <a href="<?php echo base_url('/category/7/หนังฝรั่ง'); ?>" alt="หนังฝรั่ง" title="Inter Movie" style="font-size: 19px">

                        หนังฝรั่ง

                    </a>

                </li>

                <li class="cat-item">

                    <a href="<?php echo base_url('/category/6/หนังไทย'); ?>" alt="หนังไทย" title="Thai Movie" style="font-size: 19px">

                        หนังไทย

                    </a>

                </li>

                <li class="cat-item">

                    <a href="<?php echo base_url('/category/8/หนังเอเชีย'); ?>" alt="หนังเอเชีย" title="Animation" style="font-size: 19px">

                        หนังเอเชีย

                    </a>

                </li>

                <li class="cat-item">

                    <a href="<?php echo base_url('/category/10/หนังการ์ตูน'); ?>" alt="หนังการ์ตูน" title="Animation" style="font-size: 19px">

                        หนังการ์ตูน

                    </a>

                </li>



                <!-- <li class="nav-main-item  menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">

                    <a class="nav-main-link request" style="font-size: 19px">ขอหนัง</a>

                </li> -->

                <li class="cat-item" style="float: right;padding-top: 13px;display: flex;">

                    <button type="button" id="request" name="request" class="header-requestmovie-button" onclick="request_movie('<?= $branch ?>')">ขอหนัง</button>

                    <form id="formsearch" style="padding-right: 10px;">

                        <input type="text" id="search" class="header-search-input" placeholder="หนังที่ต้องการค้นหา...." value="<?= $keyword_string ?>">

                        <button type="submit" class="header-search-button">ค้นหา</button>

                    </form>

                </li>

            </ul>

        </div>

        <!-- Banner 1 -->

        <div class="notice" style="z-index:2147483647;display: flex">

            <div class="ads_left" style="width: 15%">

                <?php

                if (!empty($ads['pos2'])) {

                    foreach ($ads['pos2'] as $val) {





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

            <div class="ads_center" style="width: 70%">

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

            <div class="ads_right" style="width: 15%">

                <?php

                if (!empty($ads['pos3'])) {

                    foreach ($ads['pos3'] as $val) {





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