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
                    <a href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo $path_setting . $setting['setting_logo']; ?>" alt="<?php echo $setting['setting_title']; ?>" ></a>

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
                            <a href="<?php echo base_url('/category/10/หนังการ์ตูน'); ?>" title="หนังการ์ตูน" class="btn btn-default lv1">
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
                            <a href="<?php echo base_url('/category/6/หนังไทย'); ?>" class="btn btn-default lv1" title="หนังไทย">
                                หนังไทย
                            </a>
                        </li>
                        <li class="first">
                            <a href="<?php echo base_url('/category/7/หนังฝรั่ง'); ?>" class="btn btn-default lv1" title="หนังฝรั่ง">
                                หนังฝรั่ง
                            </a>
                        </li>

                        <li>
                            <a onclick="request_movie('<?php echo $branch; ?>')">ขอหนัง <span class="pull-right"></span></a>
                        </li>

                    </ul>

                    <div class="social" style="float: right;display: flex;">
                    <?php if(!empty($setting['setting_fb'])){ ?>
                        <a target="_blank" href="<?php echo $setting['setting_fb']; ?>"><i class="fa fa-facebook-square" aria-hidden="true" style=" font-size: 30px;margin: 0 5px;"></i></a>
                    <?php } ?>
                    <?php if(!empty($setting['setting_line'])){ ?>
                        <a target="_blank" href="<?php echo $setting['setting_line']; ?>"><i class="fab fa-line" aria-hidden="true" style=" font-size: 30px;margin: 0 5px;"></i></a>
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