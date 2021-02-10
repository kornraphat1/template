   <!-- ส่วนหลัก -->
   <section class="sec_main sec_main-mobile">
       <!-- เมนูหลักซ้าย -->
       <?php include('left.php') ?>
       <!-- จบเมนูหลักซ้าย -->

       <div class="sec_main-cen">
           <div class="h2-text" style="background-color: crimson;">
               <h1><?= str_replace('-', ' ', $title) ?></h1>
           </div>
           <div class="grid-movie">
               <?php  //echo "<pre>"; print_r($list_video);
                $quality = "";
                ?>
               <?php foreach ($list_video['list'] as $value) {
                    $id = $value['movie_id'];
                   
                    if ($value['movie_type'] == 'se') {
                        $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['movie_name'])))))));
                        $urlvideo = urldecode(base_url('/series/' . $id . '/' . $url_name));
                    } else {
                        $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['movie_name'])))))));
                        $urlvideo = urldecode(base_url('/video/' . $id . '/' . $url_name));
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
                       <a href="<?php echo  $urlvideo; ?>" onclick=" return count_view(<?= $id ?>) ">
                           <img width="300" height="452" src="<?php echo $value['movie_picture']; ?>" class="attachment-mediam size-mediam wp-post-image" title="<?php echo $value['movie_name']; ?>" alt="<?php echo $value['movie_name']; ?>" sizes="(max-width: 300px) 100vw, 300px" />
                           <h2>
                               <p>
                                   <?php echo $value['movie_name']; ?>
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
                                   <i class="fa fa-eye eye-icon" aria-hidden="true"></i><a rel="tag">
                                       <?php if ($value['movie_view'] == "") {
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
                           <div class="pagination2" style="text-align: center;padding-top: 4rem;">
                               <?= pagination($list_video['page'], $list_video['total_page']); ?>
                           </div>
                       </div>
                   </ul>
               </div>
           </div>
           <!-- /Pagination -->
       </div>
       <!-- ช่องหลักขวา -->
       <?php include('right.php') ?>

       </div> <!-- จบช่องหลักขวา -->
   </section>
   <!-- จบส่วนหลัก -->
   </main>
   </div>