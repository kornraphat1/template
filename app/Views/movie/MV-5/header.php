<!DOCTYPE html>
<html lang="en" class="no-js">

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/bootstrap-reboot.min.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/bootstrap-grid.min.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/owl.carousel.min.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/jquery.mCustomScrollbar.min.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/nouislider.min.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/ionicons.min.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/plyr.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/photoswipe.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/default-skin.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/main.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/css_size.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/font-manual.css";?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/style.css";?>'>

	<!-- Favicons -->
	<link rel="icon" type="image/png" href='<?php echo $document_root . "/assetsicon/favicon-32x32.png"; ?>' sizes="32x32" >
	<link rel="apple-touch-icon" href='<?php echo $document_root . "/assets/icon/favicon-32x32.png"; ?>'>
	<link rel="apple-touch-icon" sizes="72x72" href='<?php echo $document_root . "/assets/apple-touch-icon-72x72.png"; ?>'>
	<link rel="apple-touch-icon" sizes="114x114" href='<?php echo $document_root . "/assets/apple-touch-icon-114x114.png"; ?>'>
	<link rel="apple-touch-icon" sizes="144x144" href='<?php echo $document_root . "/assets/icon/apsple-touch-icon-144x144.png";?>'>

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>ดูหนัง 4</title>
</head>

<!-- BEGIN | Header -->
<style>
	.page-single {
		background-color: #020d18;
		padding: 0px 0;
	}
	.row {
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	    margin-right: -7px;
	    margin-left: -7px;
	}

</style>

<body class="body">
<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="/page/home" class="header__logo">
						<img class="logo" src='<?php echo $document_root . "assets/img/logo/Donung8K Logo_6.png"; ?>' alt="" width="250" ></a>
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">หน้าหลัก</a>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">หมวดหมู่หนัง</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
									<li><a href="catalog.html">หนังใหม่ HD</a></li>
									<li><a href="details.html">หนัง Action</a></li>
									<li><a href="details.html">หนังโรแมนติก</a></li>
									<li><a href="details.html">หนัง Action</a></li>
									<li><a href="details.html">หนัง Action</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="pricing.html" class="header__nav-link">หนังตลก</a>
							</li>

							<li class="header__nav-item">
								<a href="faq.html" class="header__nav-link">ซีรีย์</a>
							</li>
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">
							<form action="#" class="header__search">
								<input class="header__search-input" type="text" placeholder="ค้นหา">
								<button class="header__search-button" type="button">
									<i class="icon ion-ios-search"></i>
								</button>
								<button class="header__search-close" type="button">
									<i class="icon ion-md-close"></i>
								</button>
							</form>

							<button class="header__search-btn" type="button">
								<i class="icon ion-ios-search"></i>
							</button>

							<!-- dropdown -->
							<!-- <div class="dropdown header__lang">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
									<li><a href="#">English</a></li>
									<li><a href="#">Spanish</a></li>
									<li><a href="#">Russian</a></li>
								</ul>
							</div> -->
							<!-- end dropdown -->

							<a href="signin.html" class="header__sign-in d-none">
								<i class="icon ion-ios-log-in "></i>
								<span>ติดต่อ</span>
							</a>
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-xs-12 ads-head">
				<?php
				$style = "width: 100%;padding-top: 100px;";
				$i = 0;
				if (!empty($ads)) {
					foreach ($ads as $value) {
						if ($value['ads_position'] == "1") {
							if ($i != 0) {
								$style = "width: 100%; margin-top: 5px;";
							}
							$i++;
				?>
							<a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'] ?>" target="_blank">
								<img src="<?php echo $backURL . 'ads/' . $value['ads_picture'] ?>" style="<?= $style ?>" class="hoverimg">
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
<!-- home -->





		