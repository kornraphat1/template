<!DOCTYPE html>
<html lang="th" class="standard-bg">

<head>
   <?php if (!empty($setting['setting_header'])) {
      echo base64_decode($setting['setting_header']);
   }
   $logos = $setting['setting_logo'];
   ?>
   <meta charset="utf-8" />
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
   <title><?php echo $title_web; ?></title>
   <meta name="description" content="<?php echo $discription_web; ?>" />
   <meta name="keywords" content="<?php echo $title_web; ?>" />
   <meta name="author" content="OrcasThemes">
   <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
   <link rel="canonical" href="<?= "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />

   <meta name="twitter:card" content="summary" />
   <meta name="twitter:title" content="<?php echo  $title_web; ?>" />
   <meta name="twitter:description" content="<?php echo  $setting['setting_description']; ?>" />
   <meta name="twitter:image" content="<?php echo $backURL . "setting/$logos"; ?>" />
   <meta name="twitter:site" content="@ondemandacademy" />

   <meta property="og:type" content="website" />
   <meta property="og:title" content="<?php echo $title_web; ?>" />
   <meta property="og:description" content="<?php echo $discription_web; ?>" />
   <meta property="og:image" content="<?php echo $get_img_og['movie_picture']; ?>" />

   <meta name="geo.region" content="TH" />
   <meta name="geo.position" content="14.897192;100.83273" />
   <meta name="ICBM" content="14.897192, 100.83273" />


   <!-- <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:description" content="<?php //echo $discription_web;
                                             ?>" />
   <meta name="twitter:title" content="<?php //echo $title_web; 
                                       ?>" />
   <meta name="twitter:site" content="@037HD_COM" />
   <meta name="twitter:image" content="<?php //echo $get_img_og['movie_picture'];
                                       ?>" />
   <meta name="twitter:creator" content="@037HD_COM" /> -->

   <link rel="icon" type="image/png" href='<?php echo $backURL . "setting/" . $setting['setting_logo']; ?>' />
   <link href='<?php echo base_url("/assets/css/bootstrap.css") ?>' rel="stylesheet">
   <link rel="stylesheet" href='<?php echo base_url("/assets/css/screen.css?v=1000") ?>'>
   <link rel="stylesheet" href='<?php echo base_url("/assets/css/animation.css") ?>'>
   <link rel="stylesheet" href='<?php echo base_url("/assets/css/font-awesome.css") ?>'>
   <link href='<?php echo base_url("/assets/css/lity.css") ?>' rel="stylesheet">

   <script src="<?= base_url('/assets/js/bootbox.min.js'); ?>"></script>
   <script src="<?= base_url('/assets/js/components_modals.js'); ?>"></script>




   <style type="text/css">
      @media only screen and (max-width: 600px) {
         .header-top {
            padding-top: 0px !important;
         }

         .container-fluid {
            padding-bottom: 0px !important;
         }

         .navbar-default {
            margin-top: 0px;
            margin-bottom: 0px;
         }

         .img-responsive {
            max-height: 210px !important;
         }

         .thumbr {
            width: 60%;
            height: 100%;
            overflow: hidden;
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
         }

         .infor {
            margin-left: 15px;
         }

         .floating_ads_bt-mid_container1 {

            display: none;
            top: 15% !important;
            height: 500px !important;

         }

         #btnMyDIV1 {
            display: none;
            width: 50px !important;
            height: 50px !important;
            top: 15% !important;
         }

         #topview {
            display: none;
         }

      }

      /*Ipad*/
      /* @media only screen and (max-width: 1024px){ */
      @media (max-width: 1024px) and (min-width: 768px) and (max-height: 1366px) and (-webkit-min-device-pixel-ratio: 1.5) {

         .container-fluid {
            padding-right: 0px !important;
            padding-left: 0px !important;
         }

         .ads-head {
            padding-left: 0px !important;
            padding-right: 0px !important;
         }

         .navbar-default .navbar-nav>li>a {
            font-size: 26px !important;
         }

         .navbar-default .navbar-toggle {
            top: -220px;
         }

         .navbar-toggle .icon-bar {
            height: 4px !important;
            width: 32px !important;
         }

         .navbar-toggle {
            padding: 35px 34px !important;
         }

         .dark-bg {
            /* display: none; */
            background-color: #080b12;
         }

         .header-top {
            padding-top: 0px !important;
         }

         .container-fluid {
            padding-bottom: 0px !important;
         }

         .navbar-default {
            margin-top: 0px;
            margin-bottom: 0px;
         }

         .img-responsive {
            max-height: 210px !important;
         }

         #img-logo {
            width: 300px;
            height: 300px !important;
            max-height: 300px !important;
         }
      }

      /* @media only screen and (max-width: 321px) { */
      /*Mobile*/
      @media only screen and (max-width: 480px) {

         .container-fluid {
            padding-right: 0px !important;
            padding-left: 0px !important;
         }

         .home-mega-menu {
            margin-top: 0px;
         }

         #con-ads {
            padding-left: 0px;
            padding-right: 0px;
            margin-bottom: 15px;
         }

         .ads-head {
            padding-left: 0px;
            padding-right: 0px;
         }

         .main-logo {
            margin-top: 1px;
            margin-bottom: 1px;
         }

         #img-logo {
            width: 200px;
            height: 250px;
            margin-top: 0px;
            margin-bottom: 0px;
         }

         .navbar {
            margin-bottom: 0px !important;
         }

         .navbar-default .navbar-toggle {
            top: -150px !important;
         }

         .header-top {
            padding-top: 0px !important;
         }

         .container-fluid {
            padding-bottom: 0px !important;
         }

         .navbar-default {
            margin-top: 0px;
            margin-bottom: 0px;
         }

         .img-responsive {
            max-height: 210px !important;
         }

         .thumbr {
            width: 60%;
            height: 100%;
            overflow: hidden;
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
         }

         .infor {
            margin-left: 15px;
         }

         .floating_ads_bt-mid_container1 {

            display: none;
            top: 15% !important;
            height: 500px !important;

         }

         #btnMyDIV1 {
            display: none;
            width: 50px !important;
            height: 50px !important;
            top: 15% !important;
         }

         #topview {
            display: none;
         }

      }

      .img-responsive {
         max-height: 210px !important;
         border-color: #f9f0f0;
      }

      .thumbr-corousel {
         width: 90%;
         margin: 0 auto;
      }

      a.post-thumb {
         background-color: transparent;
         border-radius: 0px;
      }

      a.title {
         font-size: 14px;
         text-align: center;
         font-style: normal;
      }

      a.title.headcon {
         font-size: 20px;
         text-align: center;
         font-style: normal;
         padding-top: 10
      }

      .thumbr img {
         width: 100%;
         margin: 0 auto;
      }

      #btnMyDIV1 {

         color: red !important;
         font-size: 30px !important;
         background: none !important;
         border: none !important;
         float: right;
         width: 30px;
         height: 30px;
         position: relative;
         top: -100px;

      }

      /* .standard-bg {
         padding-top: 0px;
         background: #080b12 url('<?= base_url("/assets/img/backgrounds/Galaxy-Background-3.jpg") ?>') no-repeat center top fixed;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         background-size: cover;
         -o-background-size: cover;
         background-attachment: fixed;
         background-position: center;
         background-repeat: no-repeat;
         padding-bottom: 30px;
      } */

      @font-face {
         font-family: myFirstFont;
         src: url('<?php echo base_url("/assets/font/Prompt-Bold.ttf") ?>');
      }

      div,
      ul,
      li,
      a {
         font-family: myFirstFont;
      }

      .floating_ads_bt-mid_container1 {
         position: fixed;
         left: 50%;
         bottom: 0%;
         top: 2%;
         -ms-transform: translate(-50%, 0%);
         -moz-transform: translate(-50%, 0%);
         -webkit-transform: translate(-50%, 0%);
         transform: translate(-50%, 0%);
         width: 728px;
         height: 90px;
         margin-bottom: 15px;
         background: none;
         z-index: 20000;
         box-shadow: #000 0 2px 18px;
         text-align: center;
      }

      .navbar {
         position: relative;
         /* min-height: 50px; */
         margin-bottom: 20px;
         border: 1px solid transparent;
      }

      /* .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
               position: relative;
               min-height: 1px;
               padding-right: 0px;
               padding-left: 6px;
            } */

      .hoverimg {
         border-width: 1px;
         -webkit-transition: -webkit-transform 200ms ease;
         transition: -webkit-transform 200ms ease;
         transition: transform 200ms ease;
         transition: transform 200ms ease, -webkit-transform 200ms ease;
      }

      .hoverimg:hover {
         box-shadow: 0 0 3px 0 #f9f0f0;
         -webkit-transform: scale(1.05);
         -ms-transform: scale(1.05);
         transform: scale(1.05);
      }

      .col-md-12-mb {
         margin: 0 auto;
         width: 100%;
      }

      h4 {
         text-align: center;
         margin: 5px 0;
      }

      .boderimg {
         border-color: white;
      }

      #ads_fox_bottom {
         bottom: 0;
         display: block;
         min-height: 40px;
         position: fixed;
         text-align: center;
         z-index: 50000;
         width: 100%
      }

      #ads_fix_footer {
         width: 1000px;
         margin: auto
      }

      .myBtn {
         position: fixed;
         bottom: 88px;
         right: 600px;
         z-index: 99;
         font-size: 18px;
         background-color: red;
         color: white;
         width: 37px;
         padding: -2px;
      }
   </style>
   <style type="text/css">
      @font-face {
         font-family: myFirstFont;
         src: url('<?php echo base_url("/assets/font/Prompt-Bold.ttf") ?>');
      }

      div,
      h2,
      h3 {
         font-family: myFirstFont !important;
      }

      a {
         font-size: 14px;
         font-style: normal;
      }

      .thumbr img {
         max-height: 280px !important;
      }

      .movie-corner {
         width: 80px;
         position: absolute;
         text-align: center;
         line-height: 20px;
         letter-spacing: 1px;
         color: #f0f0f0;
         top: 10px;
         right: -20px;
         left: auto;
         transform: rotate(45deg);
         -webkit-transform: rotate(45deg);
         font-weight: 700;
         box-shadow: 0 0 3px rgba(0, 0, 0, .3);
         text-shadow: 1px 1px 1px #222;

      }

      .close_ads {
         width: 26px;
         height: 0px;
         display: -webkit-inline-box;
         margin: 0px 0px 0px 510px;
         cursor: pointer;
      }

      .bor {
         border: 5px solid #ffffff !important;
      }

      @media screen and (min-width: 1100px) {
         .pull-right {
            display: inline-block;
         }
      }

      /* .imgads{
         width: 60%;
      } */

      @media only screen and (max-width: 600px) {
         #ads_b {
            width: 30%;
            height: auto;
            margin-right: 600px;
         }

         .close_ads {
            width: 26px;
            height: 0px;
            display:
               -webkit-inline-box;
            margin: 0px 0px 0px 510px;
            cursor: pointer;
         }

         .myBtn {
            position: fixed;
            bottom: 42px;
            left: 361px;
            z-index: 2000;
            font-size: 18px;
            background-color: red;
            color: white;
            width: 24px;
         }

         .thumbr img {
            max-height: 280px !important;
         }
      }

      .movie-imdb {
         position: absolute;
         top: 0;
         left: 0;
         font-size: 11px;
         background-color: #000000;
         margin: 4px;
         padding: 2px 6px;
         color: rgba(255, 255, 255, .9);
         border-radius: 0 0 4px 0;
         border-radius: 3px;
      }

      .movie-imdb b {
         background: url(<?= base_url('/assets/img/icon-star.png') ?>) no-repeat 0;
         background-size: 11px 11px;
      }

      .movie-imdb b span {
         margin-left: 14px;
      }

      #ads_fix_footer {
         width: 100%;
         margin: auto;
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

      /* จอใหญ่สุด */
      @media (min-width: 1281px) {

         #fix_footer2 img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 728px;
            height: auto;
         }

         #fix_footer img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 50px;
            height: 13px;
            margin-left: 37px;
            margin-top: -15px;
         }

         #fix_footer {
            width: 26px;
            height: 0px;
            display: -webkit-inline-box;
            margin: 0px 0px 0px 450px;
            cursor: pointer;
         }

         #home-main {
            margin-left: 30px;
         }

      }

      @media (min-width: 1025px) and (max-width: 1280px) {

         #fix_footer2 img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 728px;
            height: auto;
         }

         #fix_footer img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 50px;
            height: 13px;
            margin-left: 60px;
         }

         #fix_footer {
            width: 26px;
            height: 0px;
            display: -webkit-inline-box;
            margin: 0px 0px 0px 450px;
            cursor: pointer;
         }

      }

      @media (min-width: 768px) and (max-width: 1024px) {

         #fix_footer2 img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 728px;
            height: auto;
         }

         #fix_footer img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 50px;
            height: 13px;
            margin-left: -25px;
            margin-top: -9px;
         }

         #fix_footer {
            width: 26px;
            height: 0px;
            display: -webkit-inline-box;
            margin: 0px 0px 0px 75%;
            cursor: pointer;
         }

      }

      @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

         #fix_footer2 img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
            height: auto;
         }

         #fix_footer img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 50px;
            height: 13px;
            margin-left: auto;
         }

         #fix_footer {
            width: 26px;
            height: 0px;
            display: -webkit-inline-box;
            margin: 0px 0px 0px 75%;
            cursor: pointer;
         }

      }

      @media (min-width: 481px) and (max-width: 767px) {

         #fix_footer2 img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
            height: auto;
         }

         #fix_footer img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 50px;
            height: 13px;
            margin-left: 30px;
            margin-top: -40px;
         }

         #fix_footer {
            width: 26px;
            height: 0px;
            display: -webkit-inline-box;
            margin: 0px 0px 0px 75%;
            cursor: pointer;
         }
      }

      @media (min-width: 320px) and (max-width: 480px) {

         #fix_footer2 img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
            height: auto;
         }

         #fix_footer img {
            background-repeat: no-repeat;
            background-size: contain;
            width: 50px;
            height: 13px;
            margin-left: 7px;
            margin-top: -8px
         }

         #fix_footer {
            width: 26px;
            height: 0px;
            display: -webkit-inline-box;
            margin: 0px 0px 0px 75%;
            cursor: pointer;
         }
      }

      /* div.thumbr {
         height: 350px;
      }
      .post-thumb img {
         width: 100%;
         height: auto;
      } */

      /*ทำภาพให้เท่ากัน */
      .home-box {
         width: 100%;
         height: 235px;
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         background-color: #000;
      }

      .header-top {
         /* background-image: url(http://manga.varietyphp.com/assets/img/headtop.png); */
         background-image: url(<?= base_url('/assets/img/headtop.png') ?>);
         background-repeat: no-repeat;
         background-size: contain;
         background-position: right;
         text-align: center;
      }

      .carousel {
         display: block;
         margin: 2px 0;
      }

      .thumbr,
      .infor {
         display: block;
         border-radius: 0px;
      }

      #video_social {
         display: inherit;
         padding-left: 0;
      }
   </style>
</head>

<body class=" standard-bg">
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4QBGVR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
   <?php
   $logo = $setting['setting_logo'];
   ?>
   <div class="container-fluid ">
      <div class="container">
         <div class="col-md-12 row header-top">
            <div class="col-lg-3 col-md-6 col-sm-5 col-xs-8">
               <?php if (empty($logo)) {
               } else { ?>
                  <a class="main-logo" href="<?= base_url() ?>"><img id="img-logo" src='<?php echo $backURL . "setting/$logo " ?>' class="main-logo img-responsive" alt="Muvee Reviews" title="Muvee Reviews"></a>
               <?php } ?>
            </div>
            <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">
               <!-- <img src='<?php echo base_url("/assets/img/banners/banner-sm.jpg") ?>'  class="img-responsive" alt="Muvee Reviews Video Magazine HTML5 Bootstrap"> -->
            </div>

         </div>
      </div>
      <!-- MENU -->
      <div class="container home-mega-menu" style="margin-top: 10px;">

         <nav class="navbar navbar-default">
            <div class="navbar-header">
               <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse js-navbar-collapse megabg dropshd">
               <ul class="nav navbar-nav">
                  <li class="dropdown mega-dropdown">
                     <a href="<?php echo base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">หน้าหลัก <span class="pull-right"></span></a>
                  </li>
                  <?php
                  for ($x = 0; $x <= 3; $x++) { ?>
                     <li class="dropdown mega-dropdown">
                        <a href="<?php echo base_url('/page/categoty/id/' . $cate[$x]['category_id'] . '/' . urlencode($cate[$x]['category_name'])); ?>" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $cate[$x]['category_name']; ?> <span class="pull-right"></span></a>
                     </li>
                  <?php
                  }
                  ?>
                  <li class="dropdown mega-dropdown">
                     <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ประเภทหนัง <span class="fa fa-chevron-down pull-right"></span></a>
                     <ul class="dropdown-menu">
                        <?php foreach ($cate as $key => $value) { ?>
                           <li><a href="<?php echo base_url('/page/categoty/id/' . $value['category_id'] . '/' . urlencode($value['category_name'])); ?>"><?php echo $value['category_name']; ?></a></li>
                        <?php } ?>
                     </ul>
                  </li>
               </ul>
               <ul class="social" id="video_social" style="margin-top: 3px;">
                  <?php if (!empty($setting['setting_fb'])) { ?>
                     <li><a target="_blank" href="<?php echo $setting['setting_fb']; ?>"><img src='<?php echo base_url("assets/img/social-icon/facebook-icon.png"); ?>' width="180%;"></a></li>
                  <?php } ?>
                  <?php if (!empty($setting['setting_line'])) { ?>
                     <li><a target="_blank" href="<?php echo $setting['setting_line']; ?>"><img src='<?php echo base_url("assets/img/social-icon/line-logo.png"); ?>' width="200%;"></a></li>
                  <?php } ?>
               </ul>
               <div class="search-block">
                  <form id="formsearch">
                     <input type="search" id="search" placeholder="Search" value="<?= $keyword ?>">
                  </form>
               </div>
            </div>
            <!-- /.nav-collapse -->
         </nav>

      </div>
      <div style="text-align: -webkit-center;">

         <div id="con-ads" class="container ads-head">
            <!-- <div class="col-xs-2"> 
                        <img src="//www.movie-th.com/wp-content/uploads/2020/03/15080.gif" style="width: 100%">    
                        <img src="//www.movie-th.com/wp-content/uploads/2020/04/betgrand168.gif" style="width: 100%">      
                     </div> -->
            <!-- ADS 1 -->
            <?php
            // echo "<pre>";
            //       print_r($path_imgads);die;
            ?>
            <div class="col-xs-12 ads-head">
               <?php
               $style = "width: 100%;";
               $i = 0;
               if (!empty($path_imgads)) {
                  foreach ($path_imgads as $value) {
                     if ($value['ads_position'] == "1") {
                        if ($i != 0) {
                           $style = "width: 100%; margin-top: 20px;";
                        }
                        $i++;
               ?>
                        <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'] ?>" target="_blank">
                           <img src="<?php echo $backURL . 'banner/' . $value['ads_picture'] ?>" style="<?= $style ?>" class="hoverimg">
                        </a>
               <?php
                     }
                  }
               } else {
               }
               ?>
            </div>
            <!-- <div class="col-xs-2"> 
                        <img src="//www.movie-th.com/wp-content/uploads/2020/03/15080.gif" style="width: 100%"> 
                        <img src="//www.movie-th.com/wp-content/uploads/2020/04/UFABet.gif" style="width: 100%">         
                     </div> -->
         </div>

      </div>


      <!-- Content -->
      <?php if (!empty($listcontent)) { ?>
         <div id="channels-block" class="container-fluid">
            <div class="container-fluid ">
               <div class="col-md-12">
                  <!-- CHANNELS -->
                  <section id="channels">
                     <div class="container">
                        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                           <a href='<?php echo "/page/list_content/branch/" . $branch ?>' ; class="btn btn-primary pull-right"> ดูทั้งหมด</a>
                           <!-- <div class="carousel-control-box">
                           <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                           <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div> -->

                           <!-- Wrapper for slides -->

                           <div class="container carousel-inner" role="listbox">

                              <?php $check = 0;
                              $active = "active";
                              for ($i = 0; $i < count($listcontent); $i += 3) { ?>

                                 <?php if ($check == 0) { ?>
                                    <div class="item<?= $active ?>">
                                       <div class="row auto-clear">
                                          <?php if (!empty($listcontent[$i])) { ?>
                                             <article class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="post post-medium">
                                                   <div class="thumbr thumbr-corousel">
                                                      <a class="post-thumb" href="<?php echo base_url('/page/content/branch/' . $branch . '/id/' . $listcontent[$i]['content_id']) ?>">
                                                         <img class="img-responsive" src="<?php echo $backURL . "/img_content/" . $listcontent[$i]['content_thumbnail']; ?> " alt="#">
                                                      </a>
                                                   </div>
                                                   <div class="infor">
                                                      <h4>
                                                         <a class="title headcon" href="<?php echo base_url('/page/content/branch/' . $branch . '/id/' . $listcontent[$i]['content_id']) ?>"><?php echo $listcontent[$i]['content_head'] ?></a>
                                                      </h4>
                                                   </div>
                                                </div>
                                             </article>
                                          <?php } ?>

                                          <?php if (!empty($listcontent[$i + 1])) { ?>
                                             <article class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="post post-medium">
                                                   <div class="thumbr thumbr-corousel">
                                                      <a class="post-thumb" href="<?php echo base_url('/page/content/branch/' . $branch . '/id/' . $listcontent[$i + 1]['content_id']) ?>">
                                                         <img class="img-responsive" src="<?php echo $backURL . "/img_content/" . $listcontent[$i + 1]['content_thumbnail']; ?> " alt="#">
                                                      </a>
                                                   </div>
                                                   <div class="infor">
                                                      <h4>
                                                         <a class="title headcon" href="#"><?php echo $listcontent[$i + 1]['content_head']; ?></a>
                                                      </h4>
                                                   </div>
                                                </div>
                                             </article>
                                          <?php } ?>

                                          <?php if (!empty($listcontent[$i + 2])) { ?>
                                             <article class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="post post-medium">
                                                   <div class="thumbr thumbr-corousel">
                                                      <a class="post-thumb" href="<?php echo base_url('/page/content/branch/' . $branch . '/id/' . $listcontent[$i + 2]['content_id']) ?>">
                                                         <img class="img-responsive" src="<?php echo $backURL . "/img_content/" . $listcontent[$i + 2]['content_thumbnail']; ?> " alt="#">
                                                      </a>
                                                   </div>
                                                   <div class="infor">
                                                      <h4>
                                                         <a class="title headcon" href="#"><?php echo $listcontent[$i + 2]['content_head']; ?></a>
                                                      </h4>
                                                   </div>
                                                </div>
                                             </article>
                                          <?php } ?>

                                       </div>
                                    </div>

                                 <?php } ?>
                              <?php $active = "";
                                 $check = 0;
                              } ?>
                           </div>
                        </div>
                  </section>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
   </div>
<?php } else {
      } ?>
<!-- /Content -->
<?php if (!empty($path_livesteram)) { ?>
   <div id="channels-block" class="container-fluid">
      <div class="container-fluid ">
         <div class="col-md-12">
            <!-- CHANNELS -->
            <section id="channels">
               <div class="container">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-top: 5px solid #ffffff; padding-top: 20px;">
                     <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>รายการทีวี</h2>
                     <a href='<?php echo "/page/livesteam/branch/" . $branch ?>' ; class="btn btn-primary pull-right"> ดูทั้งหมด</a>
                     <div class="carousel-control-box">
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                     </div>

                     <!-- Wrapper for slides -->

                     <div class="container carousel-inner" role="listbox">

                        <?php $check = 0;
                        $active = "active";
                        for ($i = 0; $i < count($path_livesteram); $i += 3) { ?>

                           <?php if ($check == 0) { ?>

                              <div class="item <?= $active ?>">
                                 <div class="row auto-clear">

                                    <?php if (!empty($path_livesteram[$i])) { ?>
                                       <article class="col-lg-4 col-md-4 col-sm-4">
                                          <div class="post post-medium">
                                             <div class="thumbr thumbr-corousel">
                                                <a class="post-thumb" href="<?php echo base_url('/page/livesteam/id/' . $path_livesteram[$i]['livestream_id']) ?>">
                                                   <img class="img-responsive" src="<?php echo $backURL . "movie/livestream/" . $path_livesteram[$i]['livestream_img']; ?> " alt="#">
                                                </a>
                                             </div>
                                             <div class="infor">
                                                <h4>
                                                   <a class="title" href="<?php echo base_url('/page/livesteam/id/' . $path_livesteram[$i]['livestream_id']) ?>"><?php echo $path_livesteram[$i]['livestream_name'] ?></a>
                                                </h4>
                                             </div>
                                          </div>
                                       </article>
                                    <?php } ?>

                                    <?php if (!empty($path_livesteram[$i + 1])) { ?>
                                       <article class="col-lg-4 col-md-4 col-sm-4">
                                          <div class="post post-medium">
                                             <div class="thumbr thumbr-corousel">
                                                <a class="post-thumb" href="<?php echo base_url('/page/livesteam/id/' . $path_livesteram[$i + 1]['livestream_id']) ?>">
                                                   <img class="img-responsive" src="<?php echo $backURL . "movie/livestream/" . $path_livesteram[$i + 1]['livestream_img']; ?> " alt="#">
                                                </a>
                                             </div>
                                             <div class="infor">
                                                <h4>
                                                   <a class="title" href="<?php echo base_url('/page/livesteam/id/' . $path_livesteram[$i]['livestream_id']) ?>"><?php echo $path_livesteram[$i + 1]['livestream_name'] ?></a>
                                                </h4>
                                             </div>
                                          </div>
                                       </article>
                                    <?php } ?>

                                    <?php if (!empty($path_livesteram[$i + 2])) { ?>
                                       <article class="col-lg-4 col-md-4 col-sm-4">
                                          <div class="post post-medium">
                                             <div class="thumbr thumbr-corousel">
                                                <a class="post-thumb" href="<?php echo base_url('/page/livesteam/id/' . $path_livesteram[$i + 2]['livestream_id']) ?>">
                                                   <img class="img-responsive" src="<?php echo $backURL . "movie/livestream/" . $path_livesteram[$i + 2]['livestream_img']; ?> " alt="#">
                                                </a>
                                             </div>
                                             <div class="infor">
                                                <h4>
                                                   <a class="title" href="<?php echo base_url('/page/livesteam/id/' . $path_livesteram[$i]['livestream_id']) ?>"><?php echo $path_livesteram[$i + 2]['livestream_name'] ?></a>
                                                </h4>
                                             </div>
                                          </div>
                                       </article>
                                    <?php } ?>

                                 </div>
                              </div>

                           <?php } ?>
                        <?php $active = "";
                           $check = 0;
                        } ?>
                     </div>
                  </div>
            </section>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
<?php } else {
} ?>

<!-- <div class="row">
      <div class="col-lg-8 col-md-12">
         <section id="category">
            <div class="row auto-clear">
               <div class="col-lg-12 col-md-12 col-sm-12 category-video-grid">
                  <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>รายการคอนเทนต์</h2>
                  <div class="row">
                     <?php foreach ($listcontent as $value) { ?>
                        <article class="col-lg-4 col-md-6 col-sm-4">
                           <div class="post post-medium">
                              <div class="thumbr">
                                 <a class="post-thumb" href="<?php echo "/page/content/branch/" . $branch . "/id/" . $value['content_id']; ?>" data-lity>
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>

                                    <img class="img-responsive" src="<?php echo $value['content_thumbnail']; //echo $backURL . "/movie/content/" . $value['content_thumbnail']; 
                                                                     ?>" alt="#">
                                    <center>
                                       <p><?php echo $value['content_head']; ?></p>
                                    </center>
                                 </a>
                              </div>
                              <div class="infor">
                                 <a class="title" href="#"> <?php echo $value['content_head'] ?></a>
                              </div>
                           </div>
                        </article>
                     <?php  }  ?>
                  </div>
                  <div class="clearfix spacer"></div>
               </div>
            </div>
         </section>
      </div>
   </div> -->
</div>
<?php
//print_r($base_backurl);die;
?>

<script>
   function hidebtnAD1() {
      var x = document.getElementById("myDIV1");
      if (x.style.display === "none") {
         x.style.display = "block";
      } else {
         x.style.display = "none";
      }
   }

   function onClickAds(adsid, branch) {

      var backurl = '<?= $base_backurl ?>';
      debugger;
      $.ajax({
         url: backurl + "ads/sid/<?= session_id() ?>/adsid/" + adsid + "/branch/" + branch,
         async: true,
         success: function(response) {
            console.log(response); // server response
         }
      });
   }
</script>