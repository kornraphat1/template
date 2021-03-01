
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html lang="th" prefix="og: https://ogp.me/ns#">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo $document_root . "/assets/css/font-awesome.min.css?v=1"; ?>">
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/bootstrap-grid.min.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/owl.carousel.min.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/jquery.mCustomScrollbar.min.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/nouislider.min.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/ionicons.min.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/plyr.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/photoswipe.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/default-skin.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/main.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/css_size.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/font-manual.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/style.css"; ?>'>
	<link rel="stylesheet" href='<?php echo $document_root . "/assets/css/navigation.css"; ?>'>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href='<?php echo $document_root . "/assetsicon/favicon-32x32.png"; ?>' sizes="32x32">
	<link rel="apple-touch-icon" href='<?php echo $document_root . "/assets/icon/favicon-32x32.png"; ?>'>
	<link rel="apple-touch-icon" sizes="72x72" href='<?php echo $document_root . "/assets/apple-touch-icon-72x72.png"; ?>'>
	<link rel="apple-touch-icon" sizes="114x114" href='<?php echo $document_root . "/assets/apple-touch-icon-114x114.png"; ?>'>
	<link rel="apple-touch-icon" sizes="144x144" href='<?php echo $document_root . "/assets/icon/apsple-touch-icon-144x144.png"; ?>'>

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title><?php echo $setting['setting_title']; ?></title>
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
						<a href="<?php echo base_url(); ?>" class="header__logo">
							<img class="logo" src='<?php echo $document_root . "assets/img/logo/Donung8K Logo_6.png"; ?>' alt="" width="250"></a>
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="<?php echo base_url(); ?>">หน้าหลัก</a>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">หมวดหมู่หนัง</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
									<?php foreach ($category_list as $value) { ?>
										<li class="fa-chevron">
											<a onclick="goView2('<?php echo $value['category_id']; ?>','<?php echo $value['category_name']; ?>')"> <?php echo $value['category_name']; ?></a>
										</li>
									<?php } ?>
								</ul>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="<?php echo base_url('/category/6/หนังไทย'); ?>" title="หนังไทย" class="header__nav-link">หนังไทย</a>
							</li>

							<li class="header__nav-item">
								<a href="<?php echo base_url('/category/7/หนังฝรั่ง'); ?>" title="หนังฝรั่ง" class="header__nav-link">หนังฝรั่ง</a>
							</li>
							<li class="header__nav-item">
								<a href="#" onclick="request_movie('<?= $branch ?>')" title="ขอหนัง/ติดต่อ" class="header__nav-link">ขอหนัง</a>
							</li>
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">
							<form action="#" class="header__search" id="formsearch">
								<input class="header__search-input" type="text" placeholder="ค้นหา" id="search">
								<button class="header__search-button" type="button" onclick="goSearch()">
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

			<div style="width: 70%"class="banners">
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
							<img  src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
						</a>
				<?php
					}
				}
				?>
				 <!-- <img  src="https://backend.see4k.com/public/banners/1609065427_0c1402b719309c36e7a8.gif"> -->
			</div>
		</div>
	</div>
	<!-- home -->