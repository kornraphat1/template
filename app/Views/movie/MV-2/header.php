<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1290; user-scalable=1;">
    <title><?php echo $setting['setting_title']; ?></title>
    <!-- icon -->
    <?php
    if (!empty($setting)) {
        if (substr($setting['setting_icon'], 0, 3) == 'http') {
    ?>
            <link rel="icon" type="image/png" href="<?= $setting['setting_icon'] ?>" />
        <?php
        } else {
        ?>
            <link rel="icon" type="image/png" href="<?= $backURL . 'setting/' . $setting['setting_icon'] ?>" />
    <?php
        }
    }
    ?>
    <meta name="description" content="<?php echo $setting['setting_description']; ?>" />
    <meta name="keywords" content=" <?php echo $setting['setting_keyword']; ?>" />
    <meta name="author" content="OrcasThemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="ahrefs-site-verification" content="b1eaaf15b97924166d4bedbc41f0f1052d2b109a77474547804fb1deab7c135a">
    <meta name="google-site-verification" content="FAgygvDnheGcPeqP4UMeP4v9pmMY8iQkZ_colYC1eFE" />
    <?php
    if (!empty($setting['setting_header'])) {
        echo base64_decode($setting['setting_header']);
    }
    $logos = $setting['setting_logo'];
    ?>
    <!-- TAG og facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo base_url(); ?>" />
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

    <?php
    if (
        ("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) != ('https://' . $_SERVER['HTTP_HOST'] . '/')
    ) {
        echo '<link rel="canonical" href="' . 'https://' . $_SERVER['HTTP_HOST'] . '' . '" />';
    }
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/main.css?v=1010">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/poster.css">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/ads.css">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "https://www.nungdedhd.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.nungdedhd.com/search.html?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

</head>
<style>
    .h1,
    .h2,
    .h3,
    h1,
    h2,
    h3 {
        margin-top: 0px;
        margin-bottom: 10px;
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #ad0e0e;
        border-color: #ffffff;
    }

    .pagination>li>a,
    .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #100303;
        border: 1px solid #c3bdbd;
    }

    .nav-bar .container-head nav .nav-menu li {
        transition: all 0.3s ease;
        padding-left: px;
    }

    h1.titleweb {
        font-size: 45px;
        padding-top: 3rem;
        letter-spacing: 1pt;
        margin-left: -21rem;
        text-align: center;
        color: #ff2337;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes glow {
        from {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e3b3cb, 0 0 40px #aca0a6, 0 0 50px #baacb3, 0 0 60px #cec2c8, 0 0 70px #beb4b9;
        }

        to {
            text-shadow: 0 0 20px #fff, 0 0 30px #cec4c7, 0 0 40px #7e7779, 0 0 50px #b4b0b1, 0 0 60px #e70d56, 0 0 70px #bcb2b4, 0 0 80px #c21f3c;
        }
    }

    .title-description {
        text-align: center;
        color: #ffffff;
        font-size: 2rem;
        margin-left: -16rem;
    }

    .head-description-nk {
        color: red;
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e3b3cb, 0 0 40px #aca0a6, 0 0 50px #baacb3, 0 0 60px #cec2c8, 0 0 70px #beb4b9;
    }

    .head-description-nk:hover {
        color: white;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
    }
</style>

<body data-rsssl=1>
    <!-- หัวบน -->
    <header class="nav-bar">

        <div class="container-head">
            <h1 class="imghead">
                <a href="<?php echo base_url(); ?>">
                    <img src='<?php echo $backURL . "setting/" . $setting['setting_logo']; ?>' width="100%" alt="<?php echo $setting['setting_title']; ?>" title="<?php echo $setting['setting_title']; ?>"><br>
                    <h6 style="position: relative; margin: 0 auto; display: block; width: fit-content; color:red">Nungdedhd.com</h6>
                </a>
            </h1>
            <nav>
                <div class="menu-mainmenu">
                    <h1 class="titleweb">
                        Nungdedhd.com
                    </h1>
                    <h3 class="title-description"> ดูหนังใหม่ ฟรี โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD ได้ที่ <a href="<?php echo base_url(); ?>" class="head-description-nk"> Nungdedhd </a></h3>
                    <ul class="nav-menu position-category" style="margin-top: -12rem;">
                        <!-- <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30"><a href="<?php echo base_url(); ?>">หน้าหลัก</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30"><a href="<?php echo base_url('/newmovie'); ?>">หนังใหม่</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6038"><a href="<?php echo base_url('/category/7/' . urlencode('หนังฝรั่ง')); ?>">หนังฝรั่ง</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7674"><a href="<?php echo base_url('/category/6/' . urlencode('หนังไทย')); ?>">หนังไทย</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28"><a href="<?php echo base_url('/category/8/' . urlencode('หนังเอเชีย')); ?>">หนังเอเชีย</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29"><a href="<?php echo base_url('/category/10/' . urlencode('หนังการ์ตูน')); ?>">หนังการ์ตูน</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28"><a href="<?php echo base_url('/category/28/Netflix-Movie'); ?>"> หนังNetflix</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7674"><a data-toggle="modal" data-target="#myModal">ขอหนัง|ติดต่อเรา</a></li> -->
                        <li class="widget widget_search search_movie">
                            <form role="search" method="get" id="formsearch">
                                <div class="input-group">
                                    <input class="form-control" type="text" value="" placeholder="ค้นหาหนัง..." id="search">
                                    <span class="input-group-btn">
                                        <button type="submit" id="searchsubmit"> <i class="fas fa-search" aria-hidden="true" style="width: fit-content;height: 34px;padding: 10px;"></i> </button>
                                    </span>
                                </div>
                            </form>
                        </li>

                    </ul>
                </div>
                <div class="header-title" style="text-align: right;padding-left: 8rem;width: 64rem;margin-left: 43rem;list-style: none;">
                    <div class="row" style="display: flex;">
                        <li>
                            <?php if (!empty($setting['setting_fb'])) { ?>
                                <a target="_blank" href="<?php echo $setting['setting_fb']; ?>"><img id="icon-facebook" style="width: 6%;" src="<?= $backURL ?>images/social-icon/facebook.png" title="ติดต่อทางเฟซบุ้ค" alt="ติดต่อทางเฟซบุ้ค"></a>
                            <?php } ?>
                            <?php if (!empty($setting['setting_line'])) { ?>
                                <a target="_blank" href="<?php echo $setting['setting_line']; ?>"><img id="icon-line" style="width: 6%; border-radius:5px" src="<?= $backURL ?>images/social-icon/line.png" title="ติดต่อทางไลน์" alt="ติดต่อทางไลน์"></a>
                            <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
        <style>
            textarea {
                border: 0;
                border-bottom: 3px solid #fff;
                color: #595959;
                display: block;
                float: left;
                font-size: 16px;
                height: auto;
                padding: 12px;
                transition: all 0.2s linear 0s;
                unicode-bidi: embed;
                width: 100%;
                background: #fff;
                font-style: italic;
                border-radius: 8px;
                margin-bottom: 15px;
            }

            .modal-content {
                border-radius: 8px;
                background: #000;
                padding: 20px;
            }

            .modal-title {
                color: white;
            }

            .modal-body {
                color: white;
            }
        </style>
        <!-- Modal ติดต่อ | ขอหนัง -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ติดต่อ | ขอหนัง</h4>
                    </div>
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#menu1">ติดต่อลงโฆษณา</a></li>
                        <li><a data-toggle="pill" href="#menu2">ขอหนัง </a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="form-group"> </div>
                        <div id="menu1" class="tab-pane fade in active">
                            <form class="form-horizontal" action="<?php echo base_url('/contact_ads/'); ?>" method="post" onsubmit="return checkcontact()">
                                <div class="form-group"> </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="namesurname">ชื่อ สกุล *:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="namesurname" placeholder="Enter name" required autocomplete="off" pattern="([^,<>;]+)" name="namesurname">
                                        <div class="invalid-feedback">
                                            กรุณากรอกชื่อ นามสกุล และ ห้ามใช้ เครื่องหมาย <> , ;
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Email *:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" pattern="(^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$)" required autocomplete="off" name="email">
                                        <div class="invalid-feedback">
                                            กรุณากรอก Email เช่น " xxx@xxx.com " และ ห้ามใช้ เครื่องหมาย <> , ;
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="lineid">Line ID *:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lineid" placeholder="Enter Line ID" required name="lineid" required autocomplete="off" pattern="([^,<>;]+)">
                                        <div class="invalid-feedback">
                                            กรุณากรอก Line ID และ ห้ามใช้ เครื่องหมาย <> , ;
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="phone">เบอร์โทรศัพท์ *:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="phone" placeholder="Enter Yourphone" required name="phone" required autocomplete="off" pattern="([,<>';]+)|(^0([8|9|6])([0-9]{8}$))">
                                        <div class="invalid-feedback">
                                            กรุณากรอก เบอร์โทรศัพท์ 10หลัก เช่น " 06xxxxxxxx " และ ห้ามใช้ เครื่องหมาย <> , ;
                                        </div>
                                    </div>
                                    <label id="ads_con_all_alt">**กรุณากรอกข้อมูลให้ครบทุกช่อง</label>
                                </div>
                                <div class="form-group"> </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default">ส่ง</button>
                                    <button type="close" class="btn btn-default" data-dismiss="modal">ปิด</button>
                                </div>
                            </form>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <form class="form-horizontal" method="post" onsubmit="return checkcontact_2()" action="<?php echo base_url('/contact/'); ?>">
                                <textarea name="contact" id="contact" placeholder="พิมพ์ชื่อหนังที่ต้องการขอ..."></textarea>
                                <div class="form-group"> </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default">ส่ง</button>
                                    <button type="close" class="btn btn-default" data-dismiss="modal">ปิด</button>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!-- /Modal ติดต่อ | ขอหนัง -->
    </header>
    <!-- สิ้นสุดเนื้อหา -->
    <!-- เนื้อหา -->
    <div class="container">
        <style>
            .add-on .input-group-btn>.btn {
                border-left-width: 0;
                left: -2px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            }

            /* stop the glowing blue shadow */
            .add-on .form-control:focus {
                box-shadow: none;
                -webkit-box-shadow: none;
                border-color: #cccccc;
            }

            .form-control {
                width: 100%
            }

            .navbar-nav>li>a {
                border-right: 1px solid #ddd;
                background-color: black;
                padding-bottom: 15px;
                padding-top: 15px;
                font-size: 25px;
                color: #ef0000;
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            .navbar-nav>li>a:hover {
                transform: scale(1.1);
                border-radius: 10px;
                z-index: 99;
                -webkit-transition: all 0.6s ease;
            }

            .navbar-nav:last-child {
                border-right: 0
            }
        </style>

        <nav class="navbar ">
            <div class="container trending">
                <ul class="nav navbar-nav trending-menu" style="padding-left: 9rem;">
                    <li><a href="<?php echo base_url(); ?>">หน้าแรก </a></li>
                    <li><a href="<?php echo base_url('/newmovie'); ?>">หนังใหม่</a></li>
                    <li><a href="<?php echo base_url('/category/7/' . urlencode('หนังฝรั่ง')); ?>">หนังฝรั่ง</a></li>
                    <li><a href="<?php echo base_url('/category/6/' . urlencode('หนังไทย')); ?>">หนังไทย</a></li>
                    <li><a href="<?php echo base_url('/category/28/Netflix-Movie'); ?>">Netflix</a></li>
                    <li><a href="<?php echo base_url('/category_series') ?>">ซีรีย์</a></li>
                    <li><a href="<?php echo base_url('/list_top_imdb'); ?>">TOP IMDB</a></li>
                    <li><a data-toggle="modal" data-target="#myModal">ติดต่อ|ขอหนัง</a></li>
                    <!-- <li><a class="week" href="#">SUBSCRIBE </a></li> -->
                </ul>
            </div>

        </nav>

        <main class="content">

            <!-- ส่วนกลาง -->
            <div class="sec_cen">

                <!-- Banner ซ้าย -->
                <div class="ad_left">
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

                <div class="ad_cen">
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
                <!-- Banner ขวา -->
                <div class="ad_right">
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

            <script type="text/javascript">
                $(function() {

                    $(".form-horizontal").on("submit", function() {

                        var form = $(this)[0];
                        // var namesurname = $.trim($("#namesurname").val());
                        // var email = $.trim($("#email").val());
                        // var lindid = $.trim($("#lindid").val());
                        // var ads_con_line = $.trim($("#phone").val());
                        // var ads_con_tel = $.trim($("#ads_con_tel").val());

                        if (form.checkValidity() === false) {

                            event.preventDefault();

                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');

                    });

                });
            </script>