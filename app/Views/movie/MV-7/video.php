<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($adstop)) {
          foreach ($adstop as $ads) {
            if (substr($ads['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $ads['ads_picture'];
            } else {
              $ads_picture = $path_ads . $ads['ads_picture'];
            }
        ?>
            <a href="<?= $ads['ads_url'] ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- Icons Grid -->
<section id="movie-video" class="text-center">
  <div class="container">
    <div class="row">
      <?php if (substr($video_data['movie_picture'], 0, 4) == 'http') {
        $movie_picture = $video_data['movie_picture'];
      } else {
        $movie_picture = $path_thumbnail . $video_data['movie_picture'];
      }
      $url_name = urlname_encode($val['movie_name']);


      ?>
      <div id="movie-player">
        <div class="movie-header">
          <div class="movie-trailer">
            <?php
            $yb = explode('?v=', $video_data['movie_preview']);
            if (count($yb) > 1) {
              $urlyb = "https://www.youtube.com/embed/" . $yb[1];
            } else {
              $urlyb = "https://www.youtube.com/embed/" . $yb[0];
            }

            ?>
            <iframe src="<?= $urlyb ?>" frameborder="0" allowfullscreen=""></iframe>
          </div>
          <div class="movie-thumbnail">
            <img src="<?php echo $video_data['movie_picture']; ?>" alt="<?= $video_data['movie_name'] ?>" title="<?= $video_data['movie_name'] ?>">
          </div>
        </div>
        <iframe id="player" class="player" src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay) ?>" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>

        <!-- สำหรับ series -->
        <?php if ($video_data['movie_type'] == 'se') { 
          // echo '<pre>',print_r($video_data,true),'</pre>';die;
          ?>
          <div class="movie-episode">
            <div id="NextEP" class="swiper-container">
              <div class="swiper-wrapper">

                <?php
                foreach ($video_data['name_ep'] as $key => $val) {
                  // echo '<pre>',print_r($key,true),'</pre>';die;
                  $active = '';
                  if ($index == $key) {
                    $active = 'active';
                  }
                  $url_name = urlname_encode($val['movie_name']);


                ?>
                  <div class="swiper-slide">
                    <a onclick="goEP('<?= $video_data['movie_id'] ?>','<?= $url_name ?>','<?= trim($key) ?>','<?= $url_nameep ?>')" tabindex="-1">
                      <img src="<?= $movie_picture ?>">
                      <span class="<?= $active ?>"><?= $video_data['name_ep'][$key] ?></span>
                    </a>
                  </div>
                <?php } ?>

              </div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>

              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
        <?php } ?>
      </div>

      <div id="movie-detail">
        <div class="movie-card-detail">
          <h1 class="movie-title"><?= $video_data['movie_name'] ?> </h1>
          <div class="movie-description">
            <p>
              เรื่องย่อ: <?php if (empty($video_data['movie_des'])) {
                            echo "-";
                          } else {
                            echo $video_data['movie_des'];
                          } ?>
            </p>
          </div>
          <div class="movie-box">

            <div class="movie-score">
              <?php
              if (!empty($video_data['movie_ratescore']) && $video_data['movie_ratescore'] != 0) {
                if (strpos($video_data['movie_ratescore'], '.')) {
                  $score = substr($video_data['movie_ratescore'], 0, 3);
                } else {
                  $score = substr($video_data['movie_ratescore'], 0);
                }
              ?>
                <i class="fas fa-star"></i> <?= $score ?>
              <?php } ?>
            </div>

            <div class="movie-social">
              <a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?= urlencode(base_url(uri_string())) ?>&display=popup&ref=plugin&src=share_button" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>

              <a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=<?= $url_name ?>">
                <i class="fab fa-twitter"></i>
              </a>

              <a href="https://social-plugins.line.me/lineit/share?url=<?= urlencode(base_url(uri_string())) ?>" target="_blank">
                <i class="fab fa-line"></i>
              </a>
              <?php
              if (!empty($ep_name)) {
                $ep_name = $ep_name;
              } else {
                $ep_name = '-';
              }

              ?>
              <button class="movie-btn-report" onclick="goReport('<?= $video_data['movie_id'] ?>','<?= $video_data['branch_id'] ?>','<?= $video_data['movie_thname'] ?>','<?= $ep_name ?>')">แจ้งหนังเสีย</button>
            </div>
          </div>

          <?php if (!empty($video_data['cate_data'])) { ?>
            <div class="movie-category">
              Category:
              <?php
              foreach ($video_data['cate_data'] as $val) {
                $catename = str_replace(' ', '-', $val['category_name']);
              ?>
                <a href="<?php echo base_url() . '/category/' . $val['category_id'] . '/' . $catename ?>" target="_blank">
                  <span class="cate-name"><?= $val['category_name'] ?></span>
                </a>
              <?php } ?>
            </div>
          <?php } ?>

        </div>
      </div>

    </div>
  </div>
</section>

<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($adsbottom)) {
          foreach ($adsbottom as $ads) {
            if (substr($ads['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $ads['ads_picture'];
            } else {
              $ads_picture = $path_ads . $ads['ads_picture'];
            }
        ?>
            <a href="<?= $ads['ads_url'] ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>

<section id="movie-footer" class="text-center">
  <div class="container">
    <div class="row">
      <div class="movie-title-list">
        <h1>คุณอาจจะสนใจ</h1>
      </div>
      <ul id="list-movie" class="list-movie">
        <?php foreach ($video_random as $val) { ?>
          <li>
            <div class="movie-box">

              <?php if (substr($val['movie_picture'], 0, 4) == 'http') {
                $movie_picture = $val['movie_picture'];
              } else {
                $movie_picture = $path_thumbnail . $val['movie_picture'];
              }

              $url_name = urlencode(str_replace(' ', '-', $val['movie_name']));
              ?>

              <a onclick="goView('<?= $val['movie_id'] ?>', '<?=$url_name?>', '<?=$val['movie_type']?>')"  alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                <img src="<?= $movie_picture ?>" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
              </a>
              <div class="movie-overlay"></div>
              <?php
              if (!($val['movie_view'])) {
                $view = 0;
              } else if (strlen($val['movie_view']) >= 5) {
                $view =  substr($val['movie_view'], 0, -3) . 'k';
              } else {
                $view = $val['movie_view'];
              }
              ?>
              <span class="movie-view"><?= $view ?> <i class="fas fa-eye"></i></span>


              <?php
              $sound_style = ' style="top:0;" ';
              if (!empty($val['movie_quality'])) {
                $sound_style = '';
              ?>
                <span class="movie-quality"><?= $val['movie_quality'] ?></span>
              <?php } ?>

              <?php
              if (!empty($val['movie_sound'])) {
                $sound = $val['movie_sound'];
                if (
                  strtolower($val['movie_sound']) == 'th' ||
                  strtolower($val['movie_sound']) == 'thai' ||
                  strpos(strtolower($val['movie_sound']), 'thai') == true ||
                  strtolower($val['movie_sound']) == 'ts'
                ) {
                  $sound = 'พากษ์ไทย';
                } else if (strtolower($val['movie_sound']) == 'eng') {
                  $sound = 'พากษ์อังกฤษ';
                } else if (
                  strtolower($val['movie_sound']) == 'st' ||
                  strpos(strtolower($val['movie_sound']), '(t)') == true
                ) {
                  $sound = 'ซับไทย';
                }
              ?>
                <span class="movie-sound" <?= $sound_style ?>><?= $sound ?></span>
              <?php } ?>

            </div>
            <div class="title-in">
              <h2>
                <a onclick="goView('<?= $val['movie_id'] ?>', '<?=$url_name?>', '<?=$val['movie_type']?>')" tabindex="-1" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>"><?= $val['movie_name'] ?></a>
              </h2>

              <?php
              if (!empty($val['movie_ratescore']) && $val['movie_ratescore'] != 0) {
                if (strpos($val['movie_ratescore'], '.')) {
                  $score = substr($val['movie_ratescore'], 0, 3);
                } else {
                  $score = substr($val['movie_ratescore'], 0);
                }
              ?>
                <div class="movie-score">
                  <i class="fas fa-star"></i> <?= $score ?>
                </div>
              <?php } ?>

            </div>
          </li>
        <?php } ?>

      </ul>

      <div id="movie-comment">
        <div class="fb-comments" data-href="<?= base_url(uri_string()) ?>" data-colorscheme="light" data-width="1000" data-numposts="5"></div>
        <div id="fb-root"></div>
        <script>
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src =
              'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=254458338652270&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>
      </div>
    </div>
  </div>
</section>

<script>
  window.onload = function() {

    var swiper = new Swiper('#NextEP', {
      speed: 800,
      slidesPerView: 4,
      slidesPerGroup: 4,
      loopFillGroupWithBlank: true,
      spaceBetween: 10,
      mousewheel: true,
      freeMode: true,
      initialSlide: '<?= $index ?>',

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
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

  };
</script>