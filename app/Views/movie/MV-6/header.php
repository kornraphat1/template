<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $setting['setting_description']; ?>">
  <meta name="keywords" content="<?php echo $setting['setting_keyword']; ?>">
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
  <title><?php echo $setting['setting_title']; ?></title>
  <link rel="icon" type="image/png" href="<?= $path_setting . $setting['setting_icon'] ?>" />
  <!-- Bootstrap core CSS -->
  <link href="<?= $document_root ?>assets/vendor/bootstrap/css/bootstrap.min.css?v=1" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="<?= $document_root ?>assets/vendor/fontawesome-free/css/all.min.css?v=1" rel="stylesheet">
  <link href="<?= $document_root ?>assets/vendor/simple-line-icons/css/simple-line-icons.css?v=1" rel="stylesheet" type="text/css">
  <!-- Swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?= $document_root ?>assets/css/landing-page.css?v=7" rel="stylesheet">
  <?php
  if (("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) != ('https://' . $_SERVER['HTTP_HOST'] . '/')) {
  ?>
    <link rel="canonical" href="<?= 'https://' . $_SERVER['HTTP_HOST'] ?>" />
  <?php } ?>
  <!-- Bootstrap core JavaScript -->
  <script src="<?= $document_root ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= $document_root ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <?php
  if (!empty($setting['setting_header'])) {
    echo base64_decode($setting['setting_header']);
  }
  ?>
</head>

<body>
  <div id="overlay"></div>
  <header>
    <!-- Navigation -->
    <nav id="movie-menu" class="navbar navbar-expand-lg navbar-light static-top">
      <div class="container">
        <div class="col-sm-12 col-md-3 center-on-sm">
          <a class="navbar-brand" href="<?php echo base_url() ?>">
            <img class="logo" src="<?= $path_setting . $setting['setting_logo'] ?> ">
            <!-- <img class="logo" src="<?= base_url() . '/public/logo.png' ?> "> -->
          </a>
        </div>
        <div class="col-sm-12 col-md-5">
        </div>
        <div class="col-sm-12 col-md-4 center-on-sm" style="text-align:right;">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item <?= $chk_act['home'] ?>">
                <a class="nav-link" href="<?php echo base_url() ?>"><button class="home-btn"><i class="fa fa-home"></i></button></a>
              </li>
            </ul>
            <form id="movie-formsearch">
              <div class="input-group" id="adv-search">
                <?php
                if (!empty($keyword)) {
                  $value = $keyword;
                } else {
                  $value = '';
                }
                ?>
                <input id="movie-search" class="movie-search ml-auto" placeholder="Search..." value="<?php echo $value ?>" autocomplete="off">
              </div>
            </form>
            <?php if ($chk_act['category'] || $chk_act['contact'] || $chk_act['poppular']) {
              $change = 'change';
              $style = 'style="display: block;"';
            } else {
              $change = '';
              $style = '';
            }
            ?>
            <div class="hamburger <?= $change ?>" onclick="myFunction(this)">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="topnav">
        <div id="myLinks" <?= $style ?>>
          <div class="row">
            <ul class="movie-sup-manu">
              <li><a class=" <?= $chk_act['poppular'] ?>" href="<?= base_url() . '/popular/' ?>"> POPULAR</a></li>
              <li><a class=" <?= $chk_act['category'] ?>" href="<?= base_url() . '/category/' ?>"> Category</a></li>
              <li><a class=" <?= $chk_act['contact'] ?>" href="<?= base_url() . '/contact/' ?>">ขอหนัง/ติดต่อ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#movie-formsearch').submit(function(e) {
          goSearch();
          return false; //<---- Add this line
        });
      });

      function goSearch() {
        var search = $.trim($("#movie-search").val());
        var res = search.replace("%", "%25");
        if (res) {
          window.location.href = "/search/" + res;
        } else {
          window.location.href = "<?= base_url() ?>";
        }
      }

      function myFunction(x) {
        x.classList.toggle("change");
        var a = document.getElementById("myLinks");
        if (a.style.display === "block") {
          a.style.display = "none";
        } else {
          a.style.display = "block";
        }
      }
    </script>
    <!-- Slider main container -->
  </header>