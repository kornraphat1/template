<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
      <?php
        if( !empty($adstop) ){
          foreach($adstop as $ads){
            if(substr($ads['ads_picture'], 0, 4) == 'http'){
              $ads_picture = $ads['ads_picture'];
            }else{
              $ads_picture = $path_ads . $ads['ads_picture'];
            }
      ?>
        <a onclick="onClickAds(<?= $ads['ads_id']; ?>, <?= $branch ?>)" href="<?=$ads['ads_url']?>" alt="<?=$ads['ads_name']?>" title="<?=$ads['ads_name']?>">
          <img class="banners" src="<?=$ads_picture?>" alt="<?=$ads['ads_name']?>" title="<?=$ads['ads_name']?>">
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
<section class="text-center">
  <div class="container">
    <div id="movie-list" class="row">
      <?php
        $chkactive = [
          'cate' => 'active',
          'netflix' => ''
        ];

        if($cate_id=='28'){
          $chkactive = [
            'cate' => '',
            'netflix' => 'active'
          ];
        }
      ?>
      <ul id="menuMobile" class="nav nav-pills">
        <li><a href="<?=base_url()?>">New</a></li>
        <li><a data-toggle="tab" href="#mb-category" >Category</a></li>
        <li><a href="<?=base_url('/category/28/Netflix-Movie')?>" class="<?=$chkactive['netflix']?>">Netflix</a></li>
      </ul>

      <div class="tab-content">
        <div id="mb-home" class="tab-pane fade in active show">
          <div class="movie-title-list">
            <?php
              if (!empty($cate_name)) {
            
                $title = $cate_name ;

              } else if (!empty($keyword)) {
            
                $title = 'คุณกำลังค้นหา : '. $keyword;
          
              }
            ?>
            <h1><?= $title ?></h1>
          </div>

          <?php if (!empty($list_video['list'])) { ?>
          <ul id="list-movie" class="list-movie">

            <?PHP
              foreach ($list_video['list'] as $val) {

            ?>
                <li>
                  <div class="movie-box">

                    <?php if (substr($val['movie_picture'], 0, 4) == 'http') {
                      $movie_picture = $val['movie_picture'];
                    } else {
                      $movie_picture = $path_thumbnail . $val['movie_picture'];
                    }

                    $url_name = urlname_encode($val['movie_name']);
                    ?>

                    <a onclick="goView('<?= $val['movie_id'] ?>', '<?=$url_name?>', '<?=$val['movie_type']?>')" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                      <img src="<?= $movie_picture ?>" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>">
                      <div class="movie-overlay"></div>
                    </a>
                    
                    <?php
                      if (!($val['movie_view'])) {
                        $view = 0;
                      } else if (strlen($val['movie_view']) >= 5) {
                        $view =  substr($val['movie_view'], 0, -3) . 'k';
                      } else {
                        $view = $val['movie_view'];
                      }
                    ?>
                    <span class="movie-view"><?=$view?> <i class="fas fa-eye"></i></span>


                    <?php 
                      $sound_style=' style="top:0;" ';
                      if(!empty($interest['movie_quality'])){ 
                        $sound_style=''; 
                    ?>
                    <span class="movie-quality"><?=$val['movie_quality']?></span>
                    <?php } ?>

                    <?php
                      if (!empty($val['movie_sound'])) {
                        $sound = $val['movie_sound'];
                        if (strtolower($val['movie_sound'])=='th' || 
                        strtolower($val['movie_sound'])=='thai' ||
                        strpos(strtolower($val['movie_sound']),'thai')==true ||
                        strtolower($val['movie_sound'])=='ts') {
                          $sound = 'พากษ์ไทย';
                        } else if (strtolower($val['movie_sound'])=='eng') {
                          $sound = 'พากษ์อังกฤษ';
                        } else if (strtolower($val['movie_sound'])=='st' ||
                        strpos(strtolower($val['movie_sound']),'(t)')==true) {
                          $sound = 'ซับไทย';
                        }
                    ?>
                    <span class="movie-sound" <?=$sound_style?> ><?=$sound?></span>
                    <?php } ?>

                  </div>
                  <div class="title-in">
                    <h2>
                      <a onclick="goView('<?= $val['movie_id'] ?>', '<?=$url_name?>', '<?=$val['movie_type']?>')" tabindex="-1" alt="<?= $val['movie_name'] ?>" title="<?= $val['movie_name'] ?>"><?= $val['movie_name'] ?></a>
                    </h2>
                    
                    <div class="movie-score">
                    <?php
                      if( !empty($val['movie_ratescore']) && $val['movie_ratescore'] != 0 ){
                        $score = $val['movie_ratescore']/2;
                        if( strpos($score,'.') ){
                          $score = substr($score,0,3);
                        }else{
                          $score = substr($score,0);
                        }

                        

                        for($i=1;$i<=$score;$i++){
                    ?>
                      <i class="fas fa-star"></i>
                    <?php 
                        }

                        if(strpos($score,'.')==true && $score<5 ){
                    ?>
                    <i class="fas fa-star-half"></i>
                    <?php
                        }
                      } 
                    ?>
                    </div>

                  </div>
                </li>
              <?php  } ?>
          </ul>
          <?php
            } else {
          ?>

              <h3> ไม่พบหนังที่คุณค้นหา</h3>

          <?php } ?>

          <?php
            if ( !empty($list['list']) ) {
          ?>
            <button id="movie-loadmore">NEXT</button>
          <?php
            }
          ?>
        </div>
        <div id="mb-category" class="tab-pane fade">
          <ul id="list-category-name">
            <?php
              if(!empty($movie_category)){
                foreach($movie_category as $moviecate){
                  $cateurl = urlname_encode($moviecate['category_name']);
            ?>
              <li><a href="<?=base_url('category/'.$moviecate['category_id'].'/'.$cateurl)?>"><?=$moviecate['category_name']?></a></li>
            <?php 
                }
              }
            ?>
          </ul>

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
        if( !empty($adsbottom) ){
          foreach($adsbottom as $ads){
            if(substr($ads['ads_picture'], 0, 4) == 'http'){
              $ads_picture = $ads['ads_picture'];
            }else{
              $ads_picture = $path_ads . $ads['ads_picture'];
            }
      ?>
          <a onclick="onClickAds(<?= $ads['ads_id']; ?>, <?= $branch ?>)" href="<?=$ads['ads_url']?>" alt="<?=$ads['ads_name']?>" title="<?=$ads['ads_name']?>">
            <img class="banners" src="<?=$ads_picture?>" alt="<?=$ads['ads_name']?>" title="<?=$ads['ads_name']?>">
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
  $(document).ready(function() {
    var track_click = 1; //track user click on "load more" button, righ now it is 0 click
    var total_pages = '<?= $list_video['total_page'] ?>';
    var keyword = "<?= $keyword ?>";

    if( track_click >= total_pages ){
      $("#movie-loadmore").hide(0);
    }

    track_click = 2;

    $("#movie-loadmore").click(function(e) { //user clicks on button

      if (track_click <= total_pages) //user click number is still less than total pages
      {
        //post page number and load returned data into result element
        $.get('<?php echo $url_loadmore ?>', {
          'page': track_click,
          'keyword': keyword,
        }, function(data) {

         //  $("#anime-loadmore").show(); //bring back load more button
          $("#list-movie").append(data); //append data received from server

          track_click++; //user click increment on load button

        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          alert(thrownError); //alert with HTTP error
        });

      }

      if(track_click >= total_pages){

        $("#movie-loadmore").hide(0);

      }

      // alert(track_click+" "+total_pages)

    });
  });
</script>