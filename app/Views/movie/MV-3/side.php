
<div class="container">
   <!-- SIDEBAR -->
   <div class="col-lg-3 ">
      <aside class="dark-bg hidden-md hidden-sm hidden-xs ">
         <article>
            <h2 class="icon">หมวดหมู่หนัง</h2>

            <ul id="sidemenu" class="sidebar-links">
               <?php
               foreach ($category_list as $value) { ?>

                  <li >
                     <h3>
                        <a href="<?php echo base_url('/category/' . $value['category_id'] . '/' . urlencode($value['category_name'])); ?>">
                           <?php echo $value['category_name']; ?>
                        </a>
                     </h3>
                  </li>

               <?php
               }
               ?>
            </ul>
         </article>
         <div class="clearfix spacer"></div>
      </aside>



      <!-- ADS 3 -->
      <?php
      if (!empty($ads['pos3'])) {
         foreach ($ads['pos3'] as $value) {
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