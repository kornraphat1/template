<div class="col-md-4 ">

                <div class="sidebar hidden-xs hidden-sm">

                    <div class="celebrities">
                        <h4 class="sb-title">หมวดหมู่</h4>
                        
                        <?php foreach ($category_list as $value) { ?>

                            <div class="celeb-item">

                                <div class="celeb-author">

                                    <h3><a href="<?php echo base_url('/category/' . $value['category_id'] . "/" . urlencode($value['category_name'])); ?>" title=<?= $value['category_name'] ?>><?= $value['category_name'] ?></a></h3>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                </div>

                <?php 

                if (!empty($path_imgads)) {


                    foreach ($path_imgads as $value) {



                        if ($value['ads_position'] == "2") {

                ?>

                            <div class="col-sm-6 col-xs-6 col-md-12 col-lg-12">

                                <asidenone>

                                    <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url']; ?>" target="_blank">

                                        <img src="<?php echo $pathads . $value['ads_picture']; ?>" alt="<?php echo $value['ads_url']; ?>" title="<?php echo $value['ads_url']; ?>" style="width: 100%;margin-top: 20px;border-left-width: 10px;margin-left: 15px;" class="hoverimg">

                                    </a>

                                </asidenone>

                            </div>

                <?php

                        }
                    }
                }

                ?>

            </div>