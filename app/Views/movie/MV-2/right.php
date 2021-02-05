<!-- ช่องหลักขวา -->
<div class="sec_main-right">
    <style>
        .content-left .sidebar ul li {
            width: 50%;
        }
    </style>
    <div class="type">
        <div class="h3-text text-cat" style="background-color: crimson; padding-bottom: 1px; ">
            <h3>ปีที่ฉาย
            </h3>
        </div>
        <li id="wp_categories_widget-4" class="widget widget_wp_categories_widget">
            <ul>
                <div class="col-xs-12" style="width: 105%;">
                    <li class="cat-item cat-item-35">
                        <?php foreach ($listyear as $val) {
                            if ($val['movie_year'] > '1988') {
                        ?>
                                <h3> <a class="list-cate-year " href="<?php echo base_url('/year/' . $val['movie_year']); ?>" alt="<?php echo $val['movie_year']; ?>" title=" <?php echo $val['movie_year']; ?>"><?php echo $val['movie_year']; ?></a> </h3>
                        <?php
                            }
                        }
                        ?>
                    </li>
                </div>
            </ul>
        </li>
    </div>
    <div class="ad_right1">
    </div>
</div> <!-- จบช่องหลักขวา -->