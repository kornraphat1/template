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
       </div> 