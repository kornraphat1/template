<head>

    <!-- Basic need -->

    <meta charset="UTF-8"/>
    <meta name=viewport content="width=device-width, initial-scale=1"/>
    <meta name="format-detection" content="telephone-no"/>
    <title><?php echo $setting['setting_title']; ?></title>
    <link rel="icon" type="image/png" href="<?php echo $path_setting . $setting['setting_icon']; ?>" />
    <meta name="description" content="<?php echo $setting['setting_description']; ?>" />
    <meta name="keywords" content=" <?php echo $setting['setting_keyword']; ?>" />
    <meta name="author" content="OrcasThemes">

    <?php

    if (("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) != ('https://' . $_SERVER['HTTP_HOST'] . '/')) {

        echo '<link rel="canonical" href="' . 'https://' . $_SERVER['HTTP_HOST'] . '' . '" />';

    }

    ?>


    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet"/>
    <!-- CSS files -->
    <link rel="stylesheet" href='<?php echo $document_root . "/assets/css/custom.css?v=5"; ?>' />
    <link rel="stylesheet" href='<?php echo $document_root . "/assets/css/style.css?v=8"; ?>' />
    <link rel="stylesheet" href='<?php echo $document_root . "/assets/css/plugins.css?v=2"; ?>' />
    <link rel="stylesheet" href='<?php echo $document_root . "/assets/css/animate.css?v=1"; ?>' />
    <link rel="stylesheet" href='<?php echo $document_root . "/assets/css/size.css?v=3"; ?>' />
    <link rel="stylesheet" href='<?php echo $document_root . "/assets/css/font-awesome.min.css?v=1"; ?>'>

    <!-- TAG og facebook -->
    <meta property="og:url" content="<?php echo base_url(uri_string()); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo  $setting['setting_title']; ?>" />
    <meta property="og:description" content="<?php echo  $setting['setting_description']; ?>" />
    <meta property="og:image" content="<?php echo $path_setting . $setting['setting_logo']; ?>" />

    <!-- TAG og Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo  $setting['setting_title']; ?>" />
    <meta name="twitter:description" content="<?php echo  $setting['setting_description']; ?>" />
    <meta name="twitter:image" content="<?php echo $path_setting . $setting['setting_logo']; ?>" />
    <meta name="twitter:site" content="@ondemandacademy" />

    <?php 
        if (!empty($setting['setting_header'])) {
            echo base64_decode($setting['setting_header']);
        }
    ?>

</head>



<style>

    /* จอไอโฟน 5 / se */

    @media only screen and (max-width: 320px) {

        .movie-item-style-1 .hvr-inner {

            margin-left: 47px;

        }

        .flex-wrap-movielist {

            max-width: 100%;

            margin: 0 auto;

            padding-left: 5rem;



        }

        .pagination {

            flex-wrap: wrap;

        }



        .if-size {

            width: 100%;

            height: 35%;

        }



        .bd-hd {

            font-size: 18px;

            color: #ffffff;

            font-weight: 700;

            text-transform: none;

            margin-bottom: 25px;

        }



        .padding-top {

            padding-top: 100%;

        }



        #ads_fox_bottom {

            bottom: 0px;

            display: block;

            min-height: 40px;

            position: fixed;

            text-align: center;

            z-index: 50000;

            width: 100%;

        }



        #ads_fix_footer {

            width: 100%;

        }



        .icon-fb {

            width: 18%;

        }



        .icon-line {

            width: 18%;

        }



        .slick-slide {

            display: none;

            float: left;

            height: 55%;

            min-height: 1px;

        }



        div.top-search div,

        div.top-search-mobile div {

            width: 100px;

            height: 46px;

            font-size: 16px;

            font-weight: bold;

            color: #fff;

            text-shadow: 1px 1px #000;

            padding: 10px 10px;

            border-top-left-radius: 8px;

            border-bottom-left-radius: 8px;

            background: #d40909;

            /* fallback for old browsers */

            background: -webkit-linear-gradient(to top,

                    #33001b,

                    #d40909);

            /* Chrome 10-25, Safari 5.1-6 */

            background: linear-gradient(to top,

                    #33001b,

                    #d40909);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }



        .padding-top-search {

            padding-top: 20px;

        }

    }





    /* จอ Mobile เล็กกว่า Iphone 678 plus*/

    @media only screen and (min-width: 360px) and (max-device-width: 413px) {

        .movie-item-style-1 .hvr-inner {

            margin-left: 47px;

        }



        .flex-wrap-movielist {

            max-width: 100%;

            margin: 0 auto;



        }



        .if-size {

            width: 100%;

            height: 35%;

        }



        .bd-hd {

            font-size: 18px;

            color: #ffffff;

            font-weight: 700;

            text-transform: none;

            margin-bottom: 25px;

        }



        .padding-top {

            padding-top: 100%;

        }



        #ads_fox_bottom {

            bottom: 0px;

            display: block;

            min-height: 40px;

            position: fixed;

            text-align: center;

            z-index: 50000;

            width: 100%;

        }



        #ads_fix_footer {

            width: 100%;

        }



        .icon-fb {

            width: 18%;

        }



        .icon-line {

            width: 18%;

        }



        .slick-slide {

            display: none;

            float: left;

            height: 55%;

            min-height: 1px;

        }



        div.top-search div,

        div.top-search-mobile div {

            width: 100px;

            height: 46px;

            font-size: 16px;

            font-weight: bold;

            color: #fff;

            text-shadow: 1px 1px #000;

            padding: 10px 10px;

            border-top-left-radius: 8px;

            border-bottom-left-radius: 8px;

            background: #d40909;

            /* fallback for old browsers */

            background: -webkit-linear-gradient(to top,

                    #33001b,

                    #d40909);

            /* Chrome 10-25, Safari 5.1-6 */

            background: linear-gradient(to top,

                    #33001b,

                    #d40909);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }



        .padding-top-search {

            padding-top: 20px;

        }

    }



    /* จอไอโฟน 678 plus */

    @media only screen and (min-width: 414px) and (max-device-width: 767px) {

        .movie-item-style-1 .hvr-inner {

            margin-left: 47px;

        }



        .flex-wrap-movielist {

            max-width: 100%;

            margin: 0 auto;

            padding-left: 0rem;

        }



        .manga-item-list {

            padding: 20px !important;

        }



        .if-size {

            width: 100%;

            height: 35%;

        }



        .bd-hd {

            font-size: 18px;

            color: #ffffff;

            font-weight: 700;

            text-transform: none;

            margin-bottom: 25px;

        }



        .padding-top {

            padding-top: 100%;

        }



        #ads_fox_bottom {

            bottom: 0px;

            display: block;

            min-height: 40px;

            position: fixed;

            text-align: center;

            z-index: 50000;

            width: 100%;

        }



        #ads_fix_footer {

            width: 100%;

        }



        .icon-fb {

            width: 18%;

        }



        .icon-line {

            width: 18%;

        }



        .slick-slide {

            display: none;

            float: left;

            height: 55%;

            min-height: 1px;

        }



        div.top-search div,

        div.top-search-mobile div {

            width: 100px;

            height: 46px;

            font-size: 16px;

            font-weight: bold;

            color: #fff;

            text-shadow: 1px 1px #000;

            padding: 10px 10px;

            border-top-left-radius: 8px;

            border-bottom-left-radius: 8px;

            background: #d40909;

            /* fallback for old browsers */

            background: -webkit-linear-gradient(to top,

                    #33001b,

                    #d40909);

            /* Chrome 10-25, Safari 5.1-6 */

            background: linear-gradient(to top,

                    #33001b,

                    #d40909);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

    }



    /* จอ Ipad */

    @media only screen and (min-device-width: 768px) and (max-device-width: 1023px) {



        .if-size {

            width: 100%;

            height: 35%;

        }



        .bd-hd {

            font-size: 31px;

            color: #ffffff;

            font-weight: 700;

            text-transform: none;

            margin-bottom: 25px;

        }



        #ads_fox_bottom {

            bottom: 0px;

            display: block;

            min-height: 40px;

            position: fixed;

            text-align: center;

            z-index: 50000;

            width: 100%;

        }



        #ads_fix_footer {

            width: 100%;

        }



        .padding-top {

            padding-top: 47%;

        }



        .search_width {

            width: 60%;

        }



        .icon-fb {

            width: 12%;

        }



        .icon-line {

            width: 12%;

        }



        .slick-slide {

            display: none;

            float: left;

            height: 36%;

            min-height: 1px;

        }



    }



    @media screen and (min-device-width: 1024px) and (max-device-width: 1199px) and (-webkit-min-device-pixel-ratio: 1) {

        .slick-slide {

            display: none;

            float: left;

            height: 36%;

            min-height: 1px;

        }



        .if-size {

            width: 100%;

            height: 26%;

        }



        .bd-hd {

            font-size: 30px;

            color: #ffffff;

            font-weight: 700;

            text-transform: none;

            margin-bottom: 25px;

        }



        .padding-top {

            padding-top: 180px;

        }



        #ads_fox_bottom {

            bottom: 0px;

            display: block;

            min-height: 40px;

            position: fixed;

            text-align: center;

            z-index: 50000;

            width: 100%;

        }



        #ads_fix_footer {

            width: 100%;

        }



        .padding-top {

            padding-top: 47%;

        }



        .search_width {

            width: 83%;

        }



        .icon-fb {

            width: 3rem;

        }



        .icon-line {

            width: 3rem;

        }

    }



    /* จอ Laptop pmint*/

    @media screen and (min-device-width: 1200px) and (max-device-width: 1600px) and (-webkit-min-device-pixel-ratio: 1) {

        .if-size {

            width: 100%;

            height: 68%;

        }



        .bd-hd {

            font-size: 30px;

            color: #ffffff;

            font-weight: 700;

            text-transform: none;

            margin-bottom: 25px;

        }



        .padding-top {

            padding-top: 12%;

        }



        #ads_fox_bottom {

            bottom: 0px;

            display: block;

            min-height: 40px;

            position: fixed;

            text-align: center;

            z-index: 50000;

            width: 100%;

        }



        #ads_fix_footer {

            width: 100%;

        }



        .padding-top {

            padding-top: 47%;

        }



        .search_width {

            width: 83%;

        }



        .icon-fb {

            width: 70%;

        }



        .icon-line {

            width: 70%;

        }



        .padding-top-search {

            padding-top: 20px;

        }

    }



    /* จอใหญ่สุด */

    @media screen and (min-device-width: 1601px) {

        .if-size {

            width: 100%;

            height: 46%;

        }



        .bd-hd {

            font-size: 30px;

            color: #ffffff;

            font-weight: 700;

            text-transform: none;

            margin-bottom: 25px;

        }



        .padding-top {

            padding-top: 47%;

        }



        #ads_fox_bottom {

            bottom: 0px;

            display: block;

            min-height: 40px;

            position: fixed;

            text-align: center;

            z-index: 50000;

            width: 100%;

        }



        #ads_fix_footer {

            width: 100%;

        }



        .search_width {

            width: 83%;

        }



        .icon-fb {

            width: 70%;

        }



        .icon-line {

            width: 70%;

        }



        .padding-top-search {

            padding-top: 0px;

        }

    }

</style>



<body>

    <!--preloading-->

    <div id="preloader">
        <img class="logo" src="<?php echo $path_setting . $setting['setting_logo']; ?>" alt="" width="200">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- BEGIN | Header -->

    <header class="ht-header" style="z-index:999999">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                    <a href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo $path_setting . $setting['setting_logo']; ?>" alt="<?php echo $setting['setting_title']; ?>" width="200" ></a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->



                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>

                        <li class="first">
                            <a href="<?php echo base_url();?>" class="btn btn-default lv1">
                                หน้าแรก
                            </a>
                        </li>

                        <li class="first">
                            <a href="<?php echo base_url('/category/69/หนังการ์ตูน'); ?>" title="หนังการ์ตูน" class="btn btn-default lv1">
                                หนังการ์ตูน
                            </a>
                        </li>

                        <li class="first">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">หมวดหมู่</a>
                            <ul class="dropdown-menu">
                            
                                <?php foreach($category_list as $value){ ?>
                                <li class="fa-chevron"><a onclick="goView2('<?php echo $value['category_id'];?>','<?php echo $value['category_name'];?>')"> <?php echo $value['category_name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>

                        <li class="first">
                            <a href="<?php echo base_url('/category/65/หนังไทย'); ?>" class="btn btn-default lv1" title="หนังไทย">
                                หนังไทย
                            </a>
                        </li>
                        <li class="first">
                            <a href="<?php echo base_url('/category/66/หนังฝรั่ง'); ?>" class="btn btn-default lv1" title="หนังฝรั่ง">
                                หนังฝรั่ง
                            </a>
                        </li>

                        <li>
                            <a onclick="request_movie('<?php echo $branch; ?>')">ขอหนัง <span class="pull-right"></span></a>
                        </li>

                    </ul>

                    <div class="social" style="float: right;display: flex;">
                    <?php if(!empty($setting['setting_fb'])){ ?>
                        <a target="_blank" href="<?php echo $setting['setting_fb']; ?>"><img class="icon-fb" id="icon-facebook" src='<?php echo base_url("/assets/images/social-icon/facebook.png"); ?>' style="margin-right: 5px; width: 29px;"></a>
                    <?php } ?>
                    <?php if(!empty($setting['setting_line'])){ ?>
                        <a target="_blank" href="<?php echo $setting['setting_line']; ?>"><img class="icon-line" id="icon-line" src='<?php echo base_url("/assets/images/social-icon/line.png"); ?>' style="margin-right: 5px; width: 29px; border-radius:5px;"></a>
                    <?php } ?>
                    </div>
                </div>

                <!-- /.navbar-collapse -->

            </nav>

            <!-- top search form -->

            <div class="top-search">
                <div>ค้นหา <span class="pull-right"><i class="ion-search"></i></span></div>
                <form id="formsearch" class="search_width">
                    <input type="search" id="search" placeholder="คุณกำลังมองหา  หนังยอดฮิต, หนังใหม่ล่าสุด" value="<?= $keyword_string ?>">
                </form>
            </div>
        </div>
    </header>

    <!-- END | Header -->

    <div class="clear-fix"></div>

    <div class="mb-search">
        <div class="container">
            <div class="row">
                <div class="top-search-mobile" style="z-index:99;">
                    <div>ค้นหา <span class="pull-right"><i class="ion-search"></i></span></div>
                    <form id="formsearch-mobile" class="search_width">
                        <input type="search" id="search-mobile" placeholder="" value="<?= $keyword_string ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>