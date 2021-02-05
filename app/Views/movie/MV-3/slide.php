<style type="text/css">
   @font-face {
      font-family: myFirstFont;
      src: url('<?php echo base_url("/assets/font/Prompt-Bold.ttf") ?>');
   }

   ul.sidebar-links li a {
      color: #fff;
      text-decoration: none;
      font-family: 'Roboto Condensed', sans-serif;
      font-weight: 500;
      text-transform: uppercase;
      transition: all 0.1s linear 0s;
      letter-spacing: -0.4px;
      font-family: myFirstFont;
   }

   @media (min-width: 1200px) {
      .col-lg-2 {
         width: 18.666667%;
      }
   }

   aside {
      border: 4px solid var(--primary-color);
      padding: 24px;
      border-radius: 10px;
      margin: 0px;
      transition: all 0.1s linear 0s;

   }

   asidenone {
      border: 4px solid var(--primary-color);
      padding: 24px;
      border-radius: 10px;
      margin: 0px;
      margin-left: -38px;
      transition: all 0.1s linear 0s;
      border-style: none;
   }

   @media (max-width: 767px) {
      .show-xs {
         display: show;
      }
   }

   @media (min-width: 1024px) and (max-width: 1279px) {
      .show-md {
         border-radius: 4px;
         padding: 5px;
         width: 50%;
         display: table-cell;
      }
   }



   @media (min-width: 1200px) and (max-width: 1279px) {
      .show-md {
         border-radius: 4px;
         padding: 5px;
         width: 100%;
         display: table-cell;
      }
   }

   @media (min-width: 768px) and (max-width: 1024px) {
      .show-md {
         border-radius: 4px;
         padding: 5px;
         width: 50%;
         display: table-cell;
      }

   }
</style>

<?php
//echo "<pre>";
// print_r($path_imgads);
//echo base_url('/categoty/'.$category_id[0]['category_id'].'/'.urlencode($category_id[0]['category_name'])) ; 
//die;
?>
<div class="container">
   <!-- SIDEBAR -->
   <div class="col-lg-3 ">
      <aside class="dark-bg hidden-md hidden-sm hidden-xs ">
         <article>
            <h2 class="icon">หมวดหมู่หนัง</h2>

            <ul class="sidebar-links">
               <?php
               foreach ($category_id as $value) { ?>

                  <li >
                     <h3>
                        <a href="<?php echo base_url('/categoty/' . $value['category_id'] . '/' . urlencode($value['category_name'])); ?>">
                           <?php echo $value['category_name']; ?>
                        </a>
                     </h3>
                  </li>

               <?php
               }
               ?>
            </ul>
         </article>

         <!-- Category ประเภทหนังแยก -->
         <!-- <article>
            <h2 class="icon">categories</h2>
            <ul class="sidebar-links">
            <?php
            foreach ($category_id as $value) { ?>
                     <li class="fa fa-chevron-right"><a href="/categoty/<?= $value['category_id'] ?>"><?php echo $value['category_name']; ?></a></li>
                  <?php
               }
                  ?>
            </ul>
         </article> -->
         <div class="clearfix spacer"></div>
      </aside>



      <!-- ADS 3 -->
      <?php
      if (!empty($path_imgads)) {
         foreach ($path_imgads as $value) {
            if ($value['ads_position'] == "3") {
      ?>
               <div class="col-md-12 show-md show-xs">
                  <asidenone>
                     <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="https://slotgame66.com/" target="_blank">
                        <img src="<?php echo $backURL . "ads/" . $value['ads_picture']; ?>" style="width: 100%;margin-top: 20px;border-left-width: 10px;margin-left: 15px;" class="hoverimg">
                     </a>
                  </asidenone>
               </div>
      <?php
            }
         }
      }
      ?>


   </div>