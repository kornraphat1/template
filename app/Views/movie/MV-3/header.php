<!DOCTYPE html>
<html lang="th" class="standard-bg">

<head>
   <meta charset="utf-8">
   <title><?php echo $setting['setting_title']; ?></title>
   <meta name="description" content="<?php echo $setting['setting_description']; ?>" />
   <meta name="keywords" content=" <?php echo $setting['setting_keyword']; ?>" />
   <meta name="author" content="OrcasThemes">
   <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />

   <?php
      if (("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) != ('https://' . $_SERVER['HTTP_HOST'] . '/')) {
         echo '<link rel="canonical" href="' . 'https://' . $_SERVER['HTTP_HOST'] . '' . '" />';
      }
   ?>

   <meta property="og:url" content="<?= base_url(uri_string()) ?>" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="<?php echo  $setting['setting_title']; ?>" />
   <meta property="og:description" content="<?php echo  $setting['setting_description']; ?>" />
   <meta property="og:image" content="<?php echo $path_setting . $setting['setting_logo']; ?>" />

   <meta name="twitter:card" content="summary" />
   <meta name="twitter:title" content="<?php echo  $setting['setting_title']; ?>" />
   <meta name="twitter:description" content="<?php echo  $setting['setting_description']; ?>" />
   <meta property="og:image" content="<?php echo $setting['image']; ?>" />
   <meta name="twitter:site" content="@ondemandacademy" />

   <meta name="geo.region" content="TH" />
   <meta name="geo.position" content="14.897192;100.83273" />
   <meta name="ICBM" content="14.897192, 100.83273" />


   <link rel="icon" type="image/png" href='<?php echo $path_setting . $setting['setting_logo']; ?>' />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href='<?php echo $document_root . "assets/css/screen.css?v=1003"; ?>'>
   <link rel="stylesheet" href='<?php echo $document_root . "assets/css/animation.css"; ?>'>
   <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css'>
   <link href='https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.js' rel="stylesheet">
   <script src="<?= $document_root . 'assets/js/components_modals.js'; ?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>

   <?php 
   
      if (!empty($setting['setting_header'])) {
         echo base64_decode($setting['setting_header']);
      }

   ?>

   <script type="application/ld+json">
      {
         "@context": "https://Schema.org",
         "@type": "Movie",
         "name": "doonung8k",
         "image": "https://backend.doonung8k.com/public/setting/1589889484_449df8588a16440162d0.png",
         "url": "<?= base_url() ?>",
         "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "9.0",
            "bestRating": "9.8",
            "worstRating": "0",
            "ratingCount": "4892"
         },
         "review": {
            "@type": "Review",
            "author": {
               "@type": "Person",
               "name": "ฟ้าใส"
            },
            "reviewBody": "ดูเว็บนี้แทนเว็บอื่นได้อยู่นะ"
         },
         "sameAs": [
            "https://twitter.com/sansan610910101/",
            "<?php echo $setting['setting_fb']; ?>",
            "https://www.linkedin.com/company/casino-&-gaming-industry-cgi-/",
            "https://www.instagram.com/popslotscasino/",
            "https://line.me/R/ti/p/%40762asnmb/"
         ],
         "address": {
            "@type": "PostalAddress",
            "streetAddress": "Holly wood",
            "addressRegion": "New york",
            "postalCode": "42980",
            "addressCountry": "US"
         }
      }
   </script>

   <style type="text/css">
      @media only screen and (max-width: 600px) {

         .header-top {
            background-image: none !important;
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
            background-image: none !important;
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
            margin-top: 0px !important;
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
            width: 150px;
            height: 150px;
            margin-top: 0px;
            margin-bottom: 0px;
         }

         .navbar {
            margin-bottom: 0px !important;
         }

         /* .navbar-default .navbar-toggle {
            top: -150px !important;
         } */

         .header-top {
            background-image: none !important;
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

      .header-top {
         background-image: url(<?= base_url('/assets/img/headtop.png') ?>);
         background-repeat: no-repeat;
         background-size: contain;
         background-position: right;
         text-align: center;
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
         background: url('<?= base_url("/assets/img/backgrounds/Galaxy-Background-3.jpg") ?>') no-repeat center top fixed;
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
      h1,
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
         width: 100%;
         margin: 0 auto;
         border-radius: 0px;
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
         background: url(https://www.movie-th.com/wp-content/themes/keremiyav4/images/icon-star.png) no-repeat 0;
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

      /* .header-top {
         background-repeat: no-repeat;
         background-position: right;
      } */
      .carousel {
         display: block;
         margin: 2px 0;
      }

      .thumbr,
      .infor {
         display: block;
         border-radius: 0px;
      }

      #logo-line {
         width: 190%;
      }

      ul.social {
         margin: 30px 0;
         display: inherit;
         padding-left: 0;
      }
   </style>

</head>

<body class=" standard-bg">
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4QBGVR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
  
   <div class="container-fluid">
      <div class="container">
         <div class="col-md-12 row header-top">
            <div class="col-lg-3 col-md-6 col-sm-5 col-xs-8">
               <?php 
               // echo '<pre>',print_r($setting,true),'</pre>';die;
                  if (!empty($setting['setting_logo'])) {
                     if (substr($setting['setting_logo'], 0, 4) == 'http') {
                        $logo = $setting['setting_logo']; 
                     } else {
                        $logo = $path_setting . $setting['setting_logo'];
                     
                     }
                  }
               ?>

               <a href="<?php echo base_url() ?>" class="header__logo">
                  <img class="logo" src='<?php echo $logo  ?>' alt="" width="250"></a>
               </a>
            </div>
            <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">

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
                     <a href="<?php echo base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">หน้าหลัก<span class="pull-right"></span></a>
                  </li>
                  <?php
                  for ($x = 0; $x <= 2; $x++) { ?>
                     <li class="dropdown mega-dropdown">
                        <a href="<?php echo base_url('/categoty/' . $category_list[$x]['category_id'] . '/' . urlencode($category_list[$x]['category_name'])); ?>" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $category_list[$x]['category_name']; ?> <span class="pull-right"></span></a>
                     </li>
                  <?php
                  }
                  ?>
                  <li class="dropdown mega-dropdown">
                     <a href="<?php echo base_url('listseries'); ?>" role="button" aria-haspopup="true" aria-expanded="false"> ซีรีย์ Netflix <span class="pull-right"></span></a>
                  </li>
                  <li class="dropdown mega-dropdown">
                     <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ประเภทหนัง <span class="fa fa-chevron-down pull-right"></span></a>
                     <ul class="dropdown-menu">
                        <?php foreach ($category_list as $key => $value) { ?>
                           <li><a href="<?php echo base_url('/categoty/' . $value['category_id'] . '/' . urlencode($value['category_name'])); ?>"><?php echo $value['category_name']; ?></a></li>
                        <?php } ?>
                     </ul>
                  </li>
               </ul>
               <ul class="social" id="video_social" style="margin-top: 3px;">
                  <?php if (!empty($setting['setting_fb'])) { ?>
                     <li><a target="_blank" href="<?php echo $setting['setting_fb']; ?>"><img alt="<?php echo $setting['setting_fb']; ?>" title="<?php echo $setting['setting_fb']; ?>" src='<?php echo $document_root . "assets/img/social-icon/facebook-icon.png"; ?>' width="180%;"></a></li>
                  <?php } ?>
                  <?php if (!empty($setting['setting_line'])) { ?>
                     <li><a target="_blank" href="<?php echo $setting['setting_line']; ?>"><img alt="<?php echo $setting['setting_line']; ?>" title="<?php echo $setting['setting_line']; ?>" src='<?php echo $document_root . "assets/img/social-icon/line-logo.png"; ?>' width="200%;"></a></li>
                  <?php } ?>
               </ul>

               <div class="search-block">
                  <form id="formsearch">
                     <input type="search" id="search" placeholder="Search" value="<?=$keyword_string?>">
                  </form>
               </div>
            </div>
            <!-- /.nav-collapse -->
         </nav>

      </div>
      <div style="text-align: -webkit-center;">

         <div id="con-ads" class="container ads-head">

            <?php

            ?>
            <div class="col-xs-12 ads-head">
               <?php
            
               $style = "width: 100%;";
               $i = 0;
               if (!empty($ads)) {
                  foreach ($ads as $value) {
                     if ($value['ads_position'] == "1") {
                        if ($i != 0) {
                           $style = "width: 100%; margin-top: 20px;";
                        }
                        $i++;
               ?>
                        <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'] ?>" target="_blank">
                           <img alt="<?php echo $value['ads_url']; ?>" title="<?php echo $value['ads_url']; ?>" src="<?php echo $path_ads . $value['ads_picture']; ?>" style="<?= $style ?>" class="hoverimg">
                        </a>
               <?php
                     }
                  }
               }
               ?>
            </div>

         </div>

      </div>

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

      var backurl = '<?= $backURL ?>';
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