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
    <!-- <link rel="stylesheet" href="<?= $document_root ?>/assets/css/paginate.css"> -->

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

</style>


<body data-rsssl=1>
    <!-- หัวบน -->
    <header class="nav-bar">

        <div class="container-head">
            <h1 class="imghead">
                <a href="/page/home">
                    <?php
                    if (!empty($setting)) {
                        if (substr($setting['setting_logo'], 0, 3) == 'http') {
                    ?>
                            <img src='<?= $setting['setting_logo'] ?>' width="85%" alt="">

                        <?php
                        } else {
                        ?>
                            <img src='<?= $backURL . 'setting/' . $setting['setting_logo'] ?>' width="85%" alt="">

                    <?php
                        }
                    }
                    ?>
                    
                </a>
            </h1>
            <nav>
                <div class="menu-mainmenu">
                    <ul class="nav-menu">


                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo base_url(); ?>">หน้าแรก </a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo base_url('/newmovie'); ?>">หนังใหม่</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo base_url('/category/7/' . urlencode('หนังฝรั่ง')); ?>">หนังฝรั่ง</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo base_url('/category/6/' . urlencode('หนังไทย')); ?>">หนังไทย</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo base_url('/category/28/Netflix-Movie'); ?>">Netflix</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo base_url('/category/41/ซีรี่ย์เน็ตฟิก') ?>">ซีรีย์</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo base_url('/list_top_imdb'); ?>">TOP IMDB</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo base_url('/av'); ?>">18+</a></li>

                        
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category "><a data-toggle="modal" data-target="#myModal">ติดต่อ|ขอหนัง</a></li>
                        <li class="widget widget_search">

                            <form role="search" method="get" id="searchform">
                                <!-- <div class="input-group">
                                    <input type="text" value="" name="s" id="input-ser" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary" id="searchsubmit"> <i class="fas fa-search"></i> </button>
                                    </div>
                                </div> -->

                                <div class="input-group">
                                    <input type="text" id="search" name="search" class="form-control" placeholder="หนังที่ต้องการค้นหา...." value="<?= $keyword_string ?>">
                                    <span class="input-group-addon searchsubmit" id="searchsubmit"> <i class="fas fa-search"></i> </span>
                                </div>

                            </form>


                        </li>
                    </ul>
                </div>
            </nav>
        </div>

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
                            <form class="form-horizontal" onsubmit="return contact_ads()">
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
                            <form class="form-horizontal" onsubmit="return request_movie()">
                                <textarea name="request" id="request" placeholder="พิมพ์ชื่อหนังที่ต้องการขอ..."></textarea>
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

        <!-- <nav class="navbar ">
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
                </ul>
            </div>

        </nav> -->

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
            <?php if ($setting['t1']) {
            ?>
                <div class="content-web">
                    <h1 class="title-web">
                        <span class="title-web-text-t1"><?= $setting['t1']; ?></span>
                        <span class="title-web-text-t3"> <?= $setting['t3']; ?></span>
                    </h1>
                    <h2 class="title-description"> <?= $setting['t2']; ?> <?= $setting['t3']; ?></h2>
                </div>
            <?php
            } ?>


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