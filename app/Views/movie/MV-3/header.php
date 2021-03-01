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
   <!-- <link href='https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.js' rel="stylesheet"> -->
   <link rel="stylesheet" href='<?php echo $document_root . "assets/css/custom.css"; ?>'>
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
                        <a href="<?php echo base_url('/category/' . $category_list[$x]['category_id'] . '/' . urlencode($category_list[$x]['category_name'])); ?>" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $category_list[$x]['category_name']; ?> <span class="pull-right"></span></a>
                     </li>
                  <?php
                  }
                  ?>

                  <li class="dropdown mega-dropdown">
                     <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ประเภทหนัง <span class="fa fa-chevron-down pull-right"></span></a>
                     <ul class="dropdown-menu">
                        <?php foreach ($category_list as $key => $value) { ?>
                           <li><a href="<?php echo base_url('/category/' . $value['category_id'] . '/' . urlencode($value['category_name'])); ?>"><?php echo $value['category_name']; ?></a></li>
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

        
            <div class="col-xs-12 ads-head">
               <?php
            
               $style = "width: 100%;";
               $i = 0;
               if (!empty($ads['pos1'])) {
                  foreach ($ads['pos1'] as $value) {
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

<?php include('side.php') ?>