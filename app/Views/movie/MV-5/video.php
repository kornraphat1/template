<body class="body">
	<section class="section section--details section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<div class=" card--details">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<div class="card__cover">
									<img src="<?php echo $video_data['movie_picture']; ?>" alt="">
									<span class="card__rate card__rate--green"><?php echo $video_data['movie_ratescore']; ?></span>
								</div>
								<!-- ADS2 -->
								<div class="ads">
									<?php
									if (!empty($ads['pos3'])) {
										foreach ($ads['pos3'] as $val) {
									?>
											<div class="slide-ads2">
												<img src='<?php echo  $backURL . "ads/" . $value['ads_picture']; ?>' style="padding-top: 10px;" alt="">
											</div>

									<?php
										}
									} else {
									}

									?>
								</div>

								<!-- /ADS2 -->
							</div>
							<!-- player -->

							<div class="col-lg-9 col-md-12">
								<iframe class="if-size" src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay) ?>" scrolling="no" frameborder="0"> </iframe>

								<?php
								if ($video_data['movie_type'] == 'se') {
								?>
									<div class="movie-series-content ">
										<div class="row">
											<div class="col-md-12">
												<?php
												$url_name =   str_replace('%', '%25', urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname']))))))));

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
												if (isset($video_data['name_ep'][$index + 1])) {

													$key = $index + 1;
													$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
													$disabled = '';
												} else {
													$key = $index;
													$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['name_ep'][$key])))))));
													$disabled = 'disabled';
												}

												?>

												<a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"><button style=" float: right; " <?= $disabled ?>>ตอนถัดไป</button></a>


											</div>
										</div>
									</div>

								<?php
								}
								?>
							</div>
							<div class="col-lg-12 col-md-12">

								<h1 class="section__title bd-hd"><?php echo $video_data['movie_thname']; ?></h1>
								<div class="movie-description">
									<p>
										<?php if (empty($video_data['movie_des'])) {
											echo "-";
										} else {
											echo $video_data['movie_des'];
										} ?>
									</p>
								</div>

								<div class="movie-single-ct main-content"><br>


									<div class="movie-single-ct main-content">
										<div class="row">
											<div class="col-md-12">
												<a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?= urlencode(base_url(uri_string())) ?>&display=popup&ref=plugin&src=share_button" target="_blank"><i class="fa fa-facebook-f"></i></a>

												<a href="https://social-plugins.line.me/lineit/share?url=<?= urlencode(base_url(uri_string())) ?>" target="_blank">
													<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="line" class="svg-inline--fa fa-line fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
														<path fill="currentColor" d="M272.1 204.2v71.1c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.1 0-2.1-.6-2.6-1.3l-32.6-44v42.2c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.8 0-3.2-1.4-3.2-3.2v-71.1c0-1.8 1.4-3.2 3.2-3.2H219c1 0 2.1.5 2.6 1.4l32.6 44v-42.2c0-1.8 1.4-3.2 3.2-3.2h11.4c1.8-.1 3.3 1.4 3.3 3.1zm-82-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 1.8 1.4 3.2 3.2 3.2h11.4c1.8 0 3.2-1.4 3.2-3.2v-71.1c0-1.7-1.4-3.2-3.2-3.2zm-27.5 59.6h-31.1v-56.4c0-1.8-1.4-3.2-3.2-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 .9.3 1.6.9 2.2.6.5 1.3.9 2.2.9h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.7-1.4-3.2-3.1-3.2zM332.1 201h-45.7c-1.7 0-3.2 1.4-3.2 3.2v71.1c0 1.7 1.4 3.2 3.2 3.2h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2V234c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2v-11.4c-.1-1.7-1.5-3.2-3.2-3.2zM448 113.7V399c-.1 44.8-36.8 81.1-81.7 81H81c-44.8-.1-81.1-36.9-81-81.7V113c.1-44.8 36.9-81.1 81.7-81H367c44.8.1 81.1 36.8 81 81.7zm-61.6 122.6c0-73-73.2-132.4-163.1-132.4-89.9 0-163.1 59.4-163.1 132.4 0 65.4 58 120.2 136.4 130.6 19.1 4.1 16.9 11.1 12.6 36.8-.7 4.1-3.3 16.1 14.1 8.8 17.4-7.3 93.9-55.3 128.2-94.7 23.6-26 34.9-52.3 34.9-81.5z"></path>
													</svg>
												</a>

												<a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=<?= $video_data['movie_thname'] ?>" class="btn-b" id="b"><i class="fa fa-twitter"></i></a>
												<?php
												if (!empty($ep_name)) {
													$ep_name = $ep_name;
												} else {
													$ep_name = '-';
												}

												?>
												<a onclick="goReport('<?= $video_data['movie_id'] ?>','<?= $video_data['branch_id'] ?>','<?= $video_data['movie_thname'] ?>','<?= $ep_name ?>')" class="redbtn-alert" style=" float: right;">แจ้งหนังเสีย</a>

											</div>
										</div>
									</div>

									<div id="movie-comment">

										<div class="fb-comments" data-href="<?= base_url(uri_string()) ?>" data-colorscheme="light" data-width="1200" data-numposts="5" style="text-align: center;background: aliceblue"></div>

										<div id="fb-root"></div>

										<script>
											(function(d, s, id) {

												var js, fjs = d.getElementsByTagName(s)[0];

												if (d.getElementById(id)) return;

												js = d.createElement(s);

												js.id = id;

												js.src =

													'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=254458338652270&autoLogAppEvents=1';

												fjs.parentNode.insertBefore(js, fjs);

											}(document, 'script', 'facebook-jssdk'));
										</script>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<!-- /ใส่ Video -->
	</section>
	<!-- end content -->


	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>