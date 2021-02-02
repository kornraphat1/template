<div class="content-left">
        <div class="sidebar">
            <div class="sidebar-header" style="width: 100%;">
                <p style="font-size: 18px; text-align: center;">
                    ปีที่ฉาย
                </p>
            </div>
            <ul>
                <?php


                foreach ($listyear as $val) {
                    if ($val['movie_year'] > '1988') {
                ?>
                        <div class="col-xs-6">
                            <li class="cat-item">
                                <a href="<?php echo base_url('/year/' . $val['movie_year']); ?>" alt="<?php echo $val['movie_year']; ?>" title="<?php echo $val['movie_year']; ?>"><?php echo $val['movie_year']; ?></a>
                            </li>
                        </div>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>