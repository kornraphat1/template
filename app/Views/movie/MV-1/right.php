<div class="content-right">
    <div class="sidebar">
        <div class="sidebar-header">
            <p style="font-size: 18px; text-align: center;">
                หมวดหมู่
            </p>
        </div>
        <ul>
            <?php foreach ($category_list as $value) {
                if ($value['category_type'] == 'category') {
            ?>
                    <li class="cat-item cat-left">
                        <h3 class="cate-name">
                            <a href="<?php echo base_url('/category/' . $value['category_id'] . '/' . urlencode(str_replace(' ', '-', $value['category_name']))); ?>" title=<?php echo $value['category_name']; ?> alt="<?php echo $value['category_name']; ?>">
                                <?php echo $value['category_name']; ?>
                            </a>
                        </h3>
                    </li>
            <?php }
            } ?>
        </ul>

    </div>
    <div class="sidebar">
        <div class="sidebar-header">
            <p style="font-size: 18px; text-align: center;">
                ประเภท
            </p>
        </div>

        <ul>
            <?php foreach ($category_list as $value) {
                if ($value['category_type'] == 'type') {
            ?>
                    <li class="cat-item cat-left">
                        <h3 class="cate-name">
                            <a href="<?php echo base_url('/category/' . $value['category_id'] . '/' . urlencode(str_replace(' ', '-', $value['category_name']))); ?>" title=<?php echo $value['category_name']; ?> alt="<?php echo $value['category_name']; ?>">
                                <?php echo $value['category_name']; ?>
                            </a>
                        </h3>
                    </li>
            <?php }
            } ?>
        </ul>

    </div>
</div>