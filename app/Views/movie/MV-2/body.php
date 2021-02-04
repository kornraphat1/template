   <!-- ส่วนหลัก -->
   <section class="sec_main sec_main-mobile">
       <!-- เมนูหลักซ้าย -->
       <div class="sec_main-left">
           <div class="cate">
               <div class="h3-text text-cat" style="background-color: crimson; padding-bottom: 1px;">
                   <h3>หมวดหมู่</h3>
               </div>
               <div class="grid-cate">
                   <ul>
                       <li id="nav_menu-4" class="widget widget_nav_menu">
                           <div class="menu-cate-menu-container">
                               <ul id="menu-cate-menu" class="menu">
                                   <li id="menu-item-38" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-38 list-cate">
                                       <?php foreach ($category_list as $value) { ?>
                                           <h3><a class=" list-cate" title=<?= $value['category_name'] ?> alt=<?= $value['category_name'] ?> href="<?php echo base_url('/category/' . $value['category_id'] . '/' . urlencode(str_replace(' ', '-', trim($value['category_name'])))); ?>"> <?= $value['category_name'] ?></a></h3>
                                       <?php } ?>
                                   </li>
                               </ul>
                           </div>
                       </li>
                       <li id="search-8" class="widget widget_search"></li>
                   </ul>
               </div>
           </div>
       </div> <!-- จบเมนูหลักซ้าย -->


       <div class="sec_main-cen">
           <div class="h2-text" style="background-color: crimson;">
               <h1>ดูหนังใหม่ หนังออนไลน์ ฟรี HD</h1>
           </div>
           <div class="grid-movie">
               <?php  //echo "<pre>"; print_r($list_video);die;
                $quality = "";
                ?>
               <?php foreach ($list_video['list'] as $value) {

                    $id = $value['movie_id'];
                    if (empty($value['movie_year'])) {
                        if (empty($value['movie_thname'])) {
                            $moviename =   $value['movie_enname'];
                        } else if (empty($value['movie_enname'])) {
                            $moviename =   $value['movie_thname'];
                        } else {
                            $moviename =   $value['movie_thname'] .  $value['movie_enname'];
                        }
                    } else {
                        if (empty($value['movie_thname'])) {
                            $moviename =   $value['movie_enname'] . ' ( ' . $value['movie_year'] . ' ) ';
                        } else if (empty($value['movie_enname'])) {
                            $moviename =   $value['movie_thname'] . ' ( ' . $value['movie_year'] . ' ) ';
                        } else {
                            $moviename =   $value['movie_thname'] . ' ( ' . $value['movie_year'] . ' ) ' . $value['movie_enname'];
                        }
                    }
                    $s_replace = [
                        ")", "(", " ", '%'
                    ];
                    $e_replace = [
                        "", "", "-", '%25'
                    ];
                    $url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $moviename)));
                   
                    if ($value['movie_type'] == 'se') {
                        $urlvideo = str_replace('%', '%25', urldecode(base_url('/series/' . $id . '/' . $url_name)));
                    } else {
                        $urlvideo = str_replace('%', '%25', urldecode(base_url('/video/' . $id . '/' . $url_name)));
                    }
                ?>
                   <div class="movie_box">
                       <?php if ($value['movie_quality'] = "hd") {
                            $quality = 'red;';
                        } else if ($value['movie_quality'] = "zoom") {
                            $quality = 'green;';
                        }
                        ?>
                       <span class="score-view"><i class="fa fa-star star-icon" aria-hidden="true"></i><?php echo  $value['movie_ratescore']; ?></span>
                       <span class="movie-view" style="background-color: <?php echo $quality; ?>"><?php echo strtoupper($value['movie_quality']); ?></span>
                       <a href="<?php echo  $urlvideo; ?>">
                           <img width="300" height="452" src="<?php echo $value['movie_picture']; ?>" class="attachment-mediam size-mediam wp-post-image" title="<?php echo $value['movie_thname']; ?>" alt="<?php echo $value['movie_thname']; ?>" sizes="(max-width: 300px) 100vw, 300px" />
                           <h2>
                               <p>
                                   <?php echo $moviename; ?>
                               </p>
                           </h2>
                           <div class="figure-box">
                               <span>
                                   <?php
                                    if (empty($value['movie_sound'])) {
                                        echo "";
                                    } else if ($value['movie_sound'] == "TS") {
                                        echo "Thai";
                                    } else if ($value['movie_sound'] == "ST") {
                                        echo "Subthai";
                                    } else {
                                        echo  $value['movie_sound'];
                                        // echo "เสียง / ".strtoupper($value['movie_sound']);
                                    } ?>
                               </span>
                               <div class="year-tag">
                                   <i class="fa fa-eye eye-icon" aria-hidden="true"></i><a rel="tag"><?php if ($value['movie_view'] == "") {
                                                                                                            echo "0";
                                                                                                        } else {
                                                                                                            echo $value['movie_view'];
                                                                                                        }  ?></a>
                               </div>
                           </div>
                       </a>
                   </div>
               <?php } ?>
           </div>
           <!-- Pagination -->
           <div class="box" style="padding-top: 4rem;">
               <div class="navigation">
                   <ul>
                       <div class="topbar-filter">
                           <div class="pagination2" style="text-align: center; padding-top: 4rem;">
                               <?= pagination($list_video['page'], $list_video['total_page']); ?>
                           </div>
                       </div>
                   </ul>
               </div>
           </div>
           <!-- /Pagination -->
       </div>
       <!-- ช่องหลักขวา -->
       <div class="sec_main-right">
           <style>
               .content-left .sidebar ul li {
                   width: 50%;
               }
           </style>
           <div class="type">
               <div class="h3-text text-cat" style="background-color: crimson; padding-bottom: 1px; ">
                   <h3>ประเภทหนัง
                   </h3>
               </div>
               <li id="wp_categories_widget-4" class="widget widget_wp_categories_widget">
                   <ul>
                       <div class="col-xs-12" style="width: 105%;">
                           <li class="cat-item cat-item-35">
                               <h3> <a class=" list-cate " href="<?php echo base_url('/category/7/' . urlencode('หนังบู๊')); ?>" alt="" title="">Action(แอคชั่น)</a> </h3>
                               <h3><a class=" list-cate " href="<?php echo base_url('/genres/40/' . urlencode('หนังผจญภัย')); ?>" alt="" title="">Adventure(ผจญภัย)</a></h3>
                               <h3><a class=" list-cate " href="<?php echo base_url('/genres/41/' . urlencode('หนังสงคราม')); ?>" alt="" title="">War(สงคราม)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/category/44/' . urlencode('หนังตลก')); ?>" alt="" title="">Comady(ตลก)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/category/46/' . urlencode('หนังดราม่า')); ?>" alt="" title="">Drama(ชีวิต)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/44/' . urlencode('หนังวิทยาศาสตร์')); ?>" alt="" title="">Sci-fi(วิทยาศาสตร์)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/45/' . urlencode('หนังครอบครัว')); ?>" alt="" title="">Family(ครอบครัว)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/46/' . urlencode('หนังระทึกขวัญ')); ?>" alt="" title="">Thiller(ระทึกขวัญ)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/category/50/' . urlencode('หนังสยองขวัญ')); ?>" alt="" title="">Horror(สยองขวัญ)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/category/45/' . urlencode('หนังอาชญากรรม')); ?>" alt="" title="">Crime(อาชญากรรม)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/49/' . urlencode('หนังสารคดี')); ?>" alt="" title="">Documentaries(สารคดี)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/50/' . urlencode('หนังอีโรติก')); ?>" alt="" title="">Erotic(อีโรติก)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/51/' . urlencode('หนังเทพนิยาย')); ?>" alt="" title="">Fantasy(เทพนิยาย)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/52/' . urlencode('หนังแนวเพลง')); ?>" alt="" title="">Music(เพลง)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/53/' . urlencode('หนังกีฬา')); ?>" alt="" title="">Sport(กีฬา)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/54/' . urlencode('หนังโรแมนติก')); ?>" alt="" title="">Romance(โรแมนติก)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/55/' . urlencode('หนังประวัติศาสตร์')); ?>" alt="" title="">History(ประวัติศาสตร์)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/56/' . urlencode('หนังชีวประวัติ')); ?>" alt="" title="">Biography(ชีวประวัติ)</a></h3>
                               <h3> <a class=" list-cate " href="<?php echo base_url('/genres/57/' . urlencode('หนังคาวบอย')); ?>" alt="" title="">Westren(คาวบอย)</a></h3>
                           </li>
                       </div>
                   </ul>
               </li>
           </div>
           <div class="ad_right1">
           </div>
       </div> <!-- จบช่องหลักขวา -->
   </section>
   <!-- จบส่วนหลัก -->
   </main>
   </div>