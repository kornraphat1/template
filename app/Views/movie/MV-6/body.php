<section class="movie-content text-center">
  <div class="container">
    <div class="row">
      <h3 class="manga-texthead ">
        <div class="text-title pull-left ">
          <div class="text-title">
            TOPIMDB
          </div>
          <!-- <div class="text-title-video">
          <?php //print_r($top_imdb);die; 
          ?>
            <?= $top_imdb['total_record'] ?> video
          </div> -->
        </div>

        <div class=" pull-right bottom-title ">


          <!-- <a class="title-link" ><button class="title-btn"> all</button></a> -->
          <a class="title-link"> <button class="title-btn2 button-prev-Nextpopular"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </button> </a>
          <a class="title-link"> <button class="title-btn2 button-next-Nextpopular"> <i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>

        </div>

      </h3>
    </div>




    <div class="movie-slide">
      <div id="Nextpopular" class="swiper-container">
        <div class="swiper-wrapper">
          <?php

          foreach ($top_imdb['list'] as  $val) {

            if (strtolower($val['movie_sound']) == 'th' || strtolower($val['movie_sound']) == 'thai') {
              $mo_sound = 'พากษ์ไทย';
            } else if (strtolower($val['movie_sound']) == 'eng') {
              $mo_sound = 'พากษ์อังกฤษ';
            } else {
              $mo_sound = '';
            }

            if (!($val['movie_view'])) {
              $view = 0;
            } else if (strlen($val['movie_view']) >= 5) {
              $view =  substr($val['movie_view'], 0, -3) . 'k';
            } else {
              $view = $val['movie_view'];
            }

            //echo "<pre>";print_r($val);die;
            $url_name = urldecode(str_replace([" ", "'"], ["-", ""], $val['movie_name']));
           
          ?>
            <div class="swiper-slide">
              <div class="movie-box">
                <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                  <img src="<?= $val['movie_picture'] ?>" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                </a>
                <span class="movie-score"><?= $val['movie_ratescore'] ?><i class="fas fa-star"></i></span>
                <span class="movie-view"><?= $view ?> <i class="fas fa-eye"></i></span>
                <?php if (!empty($val['movie_quality'])) { ?>
                  <span class="movie-quality"><?= $val['movie_quality'] ?></span>
                <?php } ?>
                <span class="movie-sound"><?= $mo_sound ?></span>
              </div>
              <div class="title-in">
                <h2>
                  <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" tabindex="-1" aalt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>"><?= $val['movie_name'] ?></a>
                </h2>
              </div>
            </div>

          <?php
          }
          ?>
        </div>
        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
</section>

<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos1'])) {
          foreach ($ads['pos1'] as $val) {

            if (substr($val['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $val['ads_picture'];
            } else {
              $ads_picture = $path_ads . $val['ads_picture'];
            }
        ?>
            <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $branch ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>


<section class="movie-title-zone text-center">

  <div class="col-md-12 col-lg-12 ">

    <a class="navbar-brand" href="<?php echo base_url() ?>">

      <img class="logo" src="<?= $path_setting . $setting['setting_logo'] ?> ">
      <!-- <img class="logo" src="<?= base_url() . '/public/logo.png' ?> "> -->
    </a>
    <!-- <h1>Dunung4U</h1> -->
    <div class="movie-title-des">
      <h2>หนังใหม่ ดูหนังออนไลน์ครบเรื่องทุกรสได้ที่ </h2>
    </div>

    <div class="movie-title-des">

      <h1> Dunung4U </h1>

    </div>
  </div>

</section>



<!-- Icons Grid -->
<section class="text-center">
  <div class="container">
    <div class="row">
      <h3 class="manga-texthead ">
        <div class="text-title pull-left ">
          <div class="text-title">
            หนังมาใหม่
          </div>
          <div class="text-title-video">
            21 video
          </div>
        </div>
        <div class=" pull-right bottom-title ">
          <a class="title-link" href="<?php echo base_url() . '/newmovie/' ?>"><button class="title-btn"> all</button></a>
          <a class="title-link"> <button class="title-btn2 button-prev-Nextnew"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </button> </a>
          <a class="title-link"> <button class="title-btn2 button-next-Nextnew"> <i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>
        </div>
      </h3>
    </div>

    <div class="movie-slide">
      <div id="Nextnew" class="swiper-container">
        <div class="swiper-wrapper">
          <?php
          // print_r($list_video);die;
          foreach ($list_video['list'] as  $val) {

            if (strtolower($val['movie_sound']) == 'th' || strtolower($val['movie_sound']) == 'thai') {
              $mo_sound = 'พากษ์ไทย';
            } else if (strtolower($val['movie_sound']) == 'eng') {
              $mo_sound = 'พากษ์อังกฤษ';
            } else {
              $mo_sound = '';
            }

            if (!($val['movie_view'])) {
              $view = 0;
            } else if (strlen($val['movie_view']) >= 5) {
              $view =  substr($val['movie_view'], 0, -3) . 'k';
            } else {
              $view = $val['movie_view'];
            }

            $url_name = urldecode(str_replace([" ", "'"], ["-", ""], $val['movie_name']));
          ?>
            <div class="swiper-slide">
              <div class="movie-box">

                <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                  <img src="<?= $val['movie_picture'] ?>" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                </a>
                <span class="movie-score"><?= $val['movie_ratescore'] ?><i class="fas fa-star"></i></span>
                <span class="movie-view"><?= $view ?> <i class="fas fa-eye"></i></span>
                <?php if (!empty($val['movie_quality'])) { ?>
                  <span class="movie-quality"><?= $val['movie_quality'] ?></span>
                <?php } ?>
                <span class="movie-sound"><?= $mo_sound ?></span>
              </div>
              <div class="title-in">
                <h2>
                  <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" tabindex="-1" aalt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>"><?= $val['movie_name'] ?></a>
                </h2>
              </div>
            </div>

          <?php
          }
          ?>
        </div>
        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>

  </div>
</section>
<?php
// echo "<pre>";
// print_r($video_cate);die;
foreach ($video_cate as $val_cate) {


?>


  <section class="text-center">
    <div class="container">
      <div class="row">
        <h3 class="manga-texthead ">
          <div class="text-title pull-left ">
            <div class="text-title">
              <?= $val_cate['list'][0]['category_name'] ?>
            </div>
            <div class="text-title-video">
              <?= $val_cate['total'] ?> video
            </div>
          </div>
          <div class=" pull-right bottom-title ">
            <a class="title-link" href="<?php echo base_url() . '/category/' . $val_cate['list'][0]['category_id'] . '/' . $val_cate['list'][0]['category_name'] ?>"><button class="title-btn"> all</button></a>
            <a class="title-link"> <button class="title-btn2 button-prev-next<?php echo $val_cate['list'][0]['category_id'] ?>"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </button> </a>
            <a class="title-link"> <button class="title-btn2 button-next-next<?php echo $val_cate['list'][0]['category_id'] ?>"> <i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>
          </div>
        </h3>
      </div>
      <div class="movie-slide">
        <div id="next<?php echo $val_cate['list'][0]['category_id'] ?>" class="swiper-container">
          <div class="swiper-wrapper">
            <?php

            foreach ($val_cate['list']  as $key => $val) {
              if ($key != 'total') {
                if (strtolower($val['movie_sound']) == 'th' || strtolower($val['movie_sound']) == 'thai') {
                  $mo_sound = 'พากษ์ไทย';
                } else if (strtolower($val['movie_sound']) == 'eng') {
                  $mo_sound = 'พากษ์อังกฤษ';
                } else {
                  $mo_sound = '';
                }

                if (!($val['movie_view'])) {
                  $view = 0;
                } else if (strlen($val['movie_view']) >= 5) {
                  $view =  substr($val['movie_view'], 0, -3) . 'k';
                } else {
                  $view = $val['movie_view'];
                }

                $url_name = urldecode(str_replace([" ", "'"], ["-", ""], $val['movie_name']));

            ?>
                <div class="swiper-slide">
                  <div class="movie-box">
                    <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                      <img src="<?= $val['movie_picture'] ?>" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                    </a>
                    <span class="movie-score"><?= $val['movie_ratescore'] ?><i class="fas fa-star"></i></span>
                    <span class="movie-view"><?= $view ?> <i class="fas fa-eye"></i></span>
                    <?php if (!empty($val['movie_quality'])) { ?>
                      <span class="movie-quality"><?= $val['movie_quality'] ?></span>
                    <?php } ?>
                    <span class="movie-sound"><?= $mo_sound ?></span>
                  </div>
                  <div class="title-in">
                    <h2>
                      <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" tabindex="-1" aalt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>"><?= $val['movie_name'] ?></a>
                    </h2>
                  </div>
                </div>

            <?php
              }
            }
            ?>

          </div>
          <!-- If we need navigation buttons -->
          <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      </div>

    </div>
  </section>
<?php
} ?>



<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos2'])) {
          foreach ($ads['pos2'] as $val) {
            if (substr($val['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $val['ads_picture'];
            } else {
              $ads_picture = $path_ads . $val['ads_picture'];
            }
        ?>
            <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $branch ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>





<script>
  window.onload = function() {


    var swiper = new Swiper('#Nextpopular', {
      speed: 800,
      slidesPerView: 1,
      slidesPerGroup: 1,
      loopFillGroupWithBlank: true,
      spaceBetween: 10,
      // mousewheel: true,
      freeMode: true,
      initialSlide: '1',
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
        clickable: true,
        renderBullet: function(index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
      },
      // Navigation arrows
      navigation: {
        nextEl: '.button-next-Nextpopular',
        prevEl: '.button-prev-Nextpopular',

      },

      breakpoints: {
        320: {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 20
        },

        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 30
        },

        768: {
          slidesPerView: 3,
          slidesPerGroup: 3,
          spaceBetween: 30
        },
        968: {
          slidesPerView: 4,
          slidesPerGroup: 4,
          spaceBetween: 40
        },
        1200: {
          slidesPerView: 5,
          slidesPerGroup: 5,
          spaceBetween: 50
        }

      },
    });


    var swiper = new Swiper('#Nextnew', {
      speed: 800,
      slidesPerView: 1,
      slidesPerGroup: 1,
      loopFillGroupWithBlank: true,
      spaceBetween: 10,
      // mousewheel: true,
      freeMode: true,
      initialSlide: '1',
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
        clickable: true,
        renderBullet: function(index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
      },
      // Navigation arrows
      navigation: {
        nextEl: '.button-next-Nextnew',
        prevEl: '.button-prev-Nextnew',

      },

      breakpoints: {
        320: {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 20
        },

        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 30
        },

        768: {
          slidesPerView: 3,
          slidesPerGroup: 3,
          spaceBetween: 30
        },
        968: {
          slidesPerView: 4,
          slidesPerGroup: 4,
          spaceBetween: 40
        },
        1200: {
          slidesPerView: 5,
          slidesPerGroup: 5,
          spaceBetween: 50
        }

      },
    });


    <?php foreach ($video_cate as $val_cate) { ?>

      var swiper = new Swiper('#next<?php echo $val_cate['list'][0]['category_id'] ?>', {
        speed: 800,
        slidesPerView: 1,
        slidesPerGroup: 1,
        loopFillGroupWithBlank: true,
        spaceBetween: 10,
        // mousewheel: true,
        freeMode: true,
        initialSlide: '1',
        pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true,
          renderBullet: function(index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
          },
        },
        // Navigation arrows
        navigation: {
          nextEl: '.button-next-next<?php echo $val_cate['list'][0]['category_id'] ?>',
          prevEl: '.button-prev-next<?php echo $val_cate['list'][0]['category_id'] ?>',

        },

        breakpoints: {
          320: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 20
          },

          // when window width is >= 480px
          480: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 30
          },

          768: {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 30
          },
          968: {
            slidesPerView: 4,
            slidesPerGroup: 4,
            spaceBetween: 40
          },
          1200: {
            slidesPerView: 5,
            slidesPerGroup: 5,
            spaceBetween: 50
          }

        },
      });

    <?php } ?>






  };
  $(document).ready(function() {
    ""
    var track_click = 2; //track user click on "load more" button, righ now it is 0 click
    var total_pages = '<?= $list_video['total_page'] ?>';
    if (track_click >= total_pages) {
      $("#movie-loadmore").hide(0);
    }
    $("#movie-loadmore").click(function(e) { //user clicks on button
      if (track_click <= total_pages) //user click number is still less than total pages
      {
        //post page number and load returned data into result element
        $.get('<?php echo $url_loadmore ?>', {
          'page': track_click
        }, function(data) {
          console.log(data);
          $("#list-movie").append(data); //append data received from server
          track_click++; //user click increment on load button
        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          alert(thrownError); //alert with HTTP error
        });
      }
      if (track_click >= total_pages) {
        $("#movie-loadmore").hide(0);
      }
    });
  });
</script>