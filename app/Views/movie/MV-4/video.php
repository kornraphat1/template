<style>
	.movie-single .ads {

		margin-left: 0px;

	}



	.btn-twitter {

		position: relative;

		height: 20px;

		box-sizing: border-box;

		padding: 1px 8px 1px 6px;

		background-color: #1b95e0;

		color: #fff;

		border-radius: 3px;

		font-weight: 500;

		cursor: pointer;

	}



	.btn-twitter i {

		position: relative;

		top: 2px;

		display: inline-block;

		width: 14px;

		height: 14px;

		background: transparent 0 0 no-repeat;

		background-image: url(data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E);

	}

	.report-movie {

		background-color: red;

	}

	.margin-top {
		background-color: #020d18;
		padding-top: 4rem;
	}
</style>

<!-- Video body -->

<div class="page-single movie-single movie_single">
	<div class="container">

		<!-- ADS TOP -->
		<div class="dark-bg" style="padding-top: 8rem;">
			<?php
			$style = "width: 100%;";
			$i = 0;
			if (!empty($path_imgads)) {

				foreach ($path_imgads as $value) {

					if ($value['ads_position'] == "1") {

						if ($i != 0) {
							$style = "width: 100%; ";
						}
						$i++;
			?>
						<a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'] ?>" target="_blank">

							<img alt="<?php echo $value['ads_url'] ?>" title="<?php echo $value['ads_url'] ?>" src="<?php echo $backURL . 'banners/' . $value['ads_picture'] ?>" style="<?= $style ?>" class="hoverimg">

						</a>

			<?php

					}
				}
			} else {
			}

			?>

		</div>
		<!-- /ADS TOP -->



		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="movie-img">
				<div class="crop-video">

				<?php
                            if (substr($video_data['movie_picture'], 0, 4) == 'http') {
                            ?>

                                <a href="<?php echo $urlvideo; ?>">
                                    <img src="<?php echo $video_data['movie_picture']; ?>" alt="<?php echo $video_data['movie_thname']; ?>" title="<?php echo $video_data['movie_thname']; ?>">
                                </a>

                            <?php
                            } else {
                            ?>

                                <a href="<?php echo $urlvideo; ?>">
                                    <img src="<?php echo $backURL. $img_backurl . $video_data['movie_picture']; ?>" alt="<?php echo $video_data['movie_thname']; ?>" title="<?php echo $video_data['movie_thname']; ?>">
                                </a>

                            <?php
                            }
                            ?>




				</div>
				<div class="movie-btn">
					<div class="btn-transform transform-vertical red">
						<?php if (!empty($video_data['movie_preview'])) { ?>
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> ดูตัวอย่างหนัง</a></div>
						<?php } else {
						} ?>
						<?php
						$yb = explode('?v=', $video_data['movie_preview']);
						if (count($yb) > 1) {
							$url = "https://www.youtube.com/embed/" . $yb[1];
						} else {

							$url = "https://www.youtube.com/embed/" . $yb[0];
						}
						?>
						<?php if (!empty($video_data['movie_preview'])) { ?>
							<div><a href="<?php echo $url; ?>" class="item item-2 redbtn fancybox-media hvr-grow" target="_blank"><i class="ion-play"></i></a></div>

						<?php } else {
						} ?>
					</div>
				</div>
			</div>
			<?php
			if (!empty($path_imgads)) {
				foreach ($path_imgads as $value) {
					if ($value['ads_position'] == "2") {
			?>
						<div class="col-sm-6 col-md-12 col-xs-12 col-lg-12">
							<asidenone>
								<a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'];?>" target="_blank">
									<img src="<?php echo $backURL . "banners/" . $value['ads_picture']; ?>" style="width: 100%;margin-top: 20px;border-left-width: 10px;margin-left: 0px;" class="hoverimg">
								</a>
							</asidenone>
						</div>
			<?php
					}
				}
			}

			?>



		</div>

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

			<iframe class="if-size" src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay) ?>" scrolling="no" frameborder="0"></iframe>
			<p><strong style="color: red;"><?php echo $video_data['movie_thname']; ?></strong> <?php echo $video_data['movie_des']; ?></p>
			<h1 class="name-movie bd-hd"> <?php echo $video_data['movie_thname']; ?></h1>

			<br>
			<?php
							if ($video_data['movie_type'] == 'se') {
			?>
								<div class="movie-series-content ">
									<div class="row">
										<div class="col-md-12">
											<?php
												$url_name =  str_replace('%', '%25', urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname']))))))));

											if ($index > 0) {
												$key = $index - 1;
												$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
												$disabled = '';
											} else {
												$key = $index;
												$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
												$disabled = 'disabled';
											}

											?>

											<a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"><button <?= $disabled ?> style=" float: left;">ตอนก่อนหน้า</button></a>


											<select onchange="click_ep(this)">

												<?php

												foreach ($video_data['name_ep'] as $key => $value) {

													$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value)))))));

													$select = "";
													if ($value == $video_data['name_ep'][$index]) {

														$select = 'selected';
													}

													// $href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname 

												?>

													<option value="<?php echo $url_name . '/' . $key . '/' . $url_epname ?>" <?= $select; ?>><?php echo $video_data['movie_thname'] . ' - ' . $value ?> </option>
												<?php } ?>
											</select>

											<?php
											if (isset($video_data['name_ep'][$index+1])) {
												$key = $index + 1;
												$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
												$disabled = '';
											} else {
												$key = $index;
												$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
												$disabled = 'disabled';
											}

											?>

											<a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"><button style=" float: right; "<?= $disabled ?> >ตอนถัดไป</button></a>


										</div>
									</div>
								</div>

							<?php
							}
?>
			<div class="movie-single-ct main-content" style="display:flex;width:100%;margin-bottom: 20px;"><br>

				<!-- ปุ่มแชร์เฟสบุ้ค -->
				<div id="fb-root"></div>
				<div class="fb-share-button" data-href="<?= base_url(uri_string()) ?>" data-layout="button_count"></div>

				<!-- ปุ่มแชร์ทวิตเตอร์ -->
				<a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
					<div class="btn-twitter" data-scribe="component:button" style="width: 65px;">
						<a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
							<span style="padding: 0px 0px 0px;" class="label" id="l">
								<font color="white" size="2">Tweet</font>
							</span>
						</a>
					</div>

				<!-- ปุ่มแชร์ไลน์ -->
				<div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="<?= base_url(uri_string()) ?>" data-color="default" data-size="small" data-count="false" style="display: none;"></div>

				<button class="pull-right btn redbtn" onclick="goReport('<?= $video_data['movie_id'] ?>','<?= $video_data['branch_id'] ?>')" style="margin-left: auto;">
					<font color="white">แจ้งหนังเสีย</font>
				</button>

			</div>

			<div class="fb-comments col-lg-12 col-md-12 col-xs-12 hidden-xs" style="background-color: aliceblue; text-align: center;" data-href="<?= base_url(uri_string()) ?>" data-numposts="5" data-width=""></div>



			<br><br>

			<style>
				.flex-wrap-movielist-random {

					display: -webkit-flex;

					display: -moz-box;

					display: -ms-flexbox;

					display: flex;

					align-items: center;

					justify-content: flex-start;

					/* flex-wrap: wrap; */

					align-items: inherit;

					margin-right: 0px;

				}
			</style>

		</div>



		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">



		</div>

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="position: relative; min-height: 1px;padding-left: 0px;padding-right: 0px;">

			<div class="title-hd" style="padding-top:20px">

				<h2>หนังอื่น ๆ </h2>

			</div>



			<div class="flex-wrap-movielist">

				<?php foreach ($random_movie as $value) {

					$id = $value['movie_id'];
					if($value['movie_type']=='mo'){
						$urlvideo = base_url('/video/' . $id . '/'. urlencode(str_replace(' ','-',$value['movie_thname'])));
					}else if($value['movie_type']=='se'){
						$urlvideo = base_url('/series/' . $id . '/'. urlencode(str_replace(' ','-',$value['movie_thname'])));
					}

				?>

					<div class="movie-item-style-2 movie-item-style-1">

						<div class="mv-img-style-resize">

							<img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">

						</div>



						<div class="hvr-inner">

							<a href="<?php echo $urlvideo; ?>">ดูหนัง <i class="ion-ios-arrow-righ"></i></a>

						</div>

						<div class="mv-item-infor">

							<h2>
								<a href="<?php echo $urlvideo; ?>">
									<?php echo $value['movie_thname'] ?>
								</a>
							</h2>

							<p class="rate">
								<i class="ion-android-star"></i>
								<span><?php echo $value['movie_ratescore']; ?></span>&nbsp; 
								<span style="float: right;"><i class="fa fa-eye" aria-hidden="true"></i>
									<?php 
										if (empty($value['movie_view'])) {
											echo "0";
										} else {
											echo $value['movie_view'];
										} 
									?>
								</span> 
							</p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<br><br>
	<script>
		(function(d, s, id) {

			var js, fjs = d.getElementsByTagName(s)[0];

			if (d.getElementById(id)) return;

			js = d.createElement(s);

			js.id = id;

			js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=254458338652270&autoLogAppEvents=1';

			fjs.parentNode.insertBefore(js, fjs);

		}(document, 'script', 'facebook-jssdk'));
	</script>



	<script>
		(function(d, s, id) {

			var js, fjs = d.getElementsByTagName(s)[0];

			if (d.getElementById(id)) return;

			js = d.createElement(s);

			js.id = id;

			js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";

			fjs.parentNode.insertBefore(js, fjs);

		}(document, 'script', 'facebook-jssdk'));
	</script>

	<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">

		$( document ).ready(function() {
				var url = "<?php echo base_url(); ?>" +"/movie_view_add/movie_id/" + <?php echo $video_data['movie_id'];?> + "/branch/" + "<?php echo $video_data['branch_id'];?>";
				jQuery.ajax({
	            url: url,
	            async: true,
	            success: function(response) {
	           	console.log(url); // server response
	            }

	        });
	    
	});

	</script>

</div>

</div>

<script>
	function click_ep(selectObject) {
		var value = selectObject.value;

		// alert(value)



		window.location.href = "<?= base_url() ?>/series/<?= $video_data['movie_id'] ?>/" + value;

	}
</script>