<div class="col-lg-2 col-md-3 col-xs-12 ">
	<div class="price d-none d-sm-block">
		<div class="price__item price__item--first "><span>หมวดหมู่หนัง</span></div>
		<?php foreach ($category_list as $value) { ?>
			<div class="price__item">
			<span  onclick="goView2('<?php echo $value['category_id'];?>','<?php echo $value['category_name'];?>')"><?php echo $value['category_name']; ?></span>
			</div>
		<?php } ?>
		<!-- <a href="#" class="price__btn">Choose Plan</a> -->

	</div>


	<?php foreach ($ads as $value) {
		if ($value['ads_position'] == "3") {
	?>
			<div class="slide-ads">
				<img class="mx-auto d-block" src='<?php echo  $backURL . "ads/" . $value['ads_picture']; ?>' style="padding-top: 10px;width: 100%;" alt="" title="">
			</div>
	<?php } else {
		}
	}
	?>
</div>