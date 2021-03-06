<div id="content">
	<div id="secondseo">
		<h2>ดูหนังฟรีได้แบบไม่เสียเงินหรือเลือกดูหนังออนไลน์อัพเดตใหม่ก่อนใคร</h2>
		<h2>เลือกหนังที่จะดูได้ตามหมวดหมู่หรือเลือกดูหนังออนไลน์ที่อัพใหม่ได้ที่หน้าแรก</h2>
		<h2>เลือกดูหนังตามปีที่ฉาย</h2>
	</div>
	<?php include('left.php'); ?>


	<div class="content-main">
		<div class="box">
			<div class="box-header">
				<div class="title">
					<h1>
						<?php echo $video_data['movie_thname']; ?>
					</h1>
				</div>
			</div>
			<div class="movie-header">
				<div class="movie-thumbnail">
					<img src="<?php echo $video_data['movie_picture']; ?>" alt="<?php echo $video_data['movie_thname']; ?>" title="<?php echo $video_data['movie_thname']; ?>">
				</div>
				<div class="movie-trailer">
					<?php
					$yb = explode('?v=', $video_data['movie_preview']);
					if (count($yb) > 1) {
						$url = "https://www.youtube.com/embed/" . $yb[1];
					} else {
						$url = "https://www.youtube.com/embed/" . $yb[0];
					}
					?>
					<iframe src="<?php echo $url; ?>" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="filmicerik">
				<div class="movie-description">
					<div class="description align-left">
						<h2 style="color:#f2d45f">เรื่องย่อ</h2>
						<p style="font-size:100%;font-weight: normal;">
							<?php
							if (!empty($video_data['movie_des'])) {
								echo "<strong>" . $video_data['movie_thname'] . "</strong> ";
								echo $video_data['movie_des'];
							} else {
								echo "-";
							}
							?>
						</p>
					</div>
				</div>
				<div id="sound_sub" class="sound_container">
					<?php
					foreach ($video_data['name_ep'] as $key => $value) {
						$url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname'])))))));
						$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value)))))));
					?>
						<p class="series-list"><a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"> <?php echo $video_data['movie_thname'] . ' - ' . $value ?> </a></p>
					<?php
					}
					?>
				</div>
				<style>
					.resolution_path {
						margin-right: 20px;
					}

					.ads_movie {
						position: absolute;
						z-index: 98;
					}

					.movie_player {}

					.player_container {
						position: relative;
						width: 100%;
						height: 440px;
					}

					.player_ep {
						margin: 5px 0 10px 0;
					}

					.register-ads {
						position: absolute;
						z-index: 99;
						top: 20%;
						right: 0px;
						border-top-right-radius: 0;
						border-bottom-right-radius: 0;
						color: #fff;
						background-color: rgb(148, 13, 13);
						border-color: rgb(148, 13, 13);
						padding: 20px 21px 18px;
						line-height: 20px;
						font-size: 20px;
						opacity: .9;
						cursor: pointer;
					}

					.skip-ads {
						position: absolute;
						z-index: 99;
						top: 40%;
						right: 0px;
						border-top-right-radius: 0;
						border-bottom-right-radius: 0;
						color: #fff;
						background-color: #222;
						border-color: #151515;
						padding: 20px 21px 18px;
						line-height: 20px;
						font-size: 20px;
						opacity: .9;
					}

					.jw-controlbar {
						display: none;
					}

					.btn-primary {
						color: #fff;
						background-color: #158cba;
						border-radius: 2px;
					}

					.play-ep {
						/* border-color: #127ba3; */
					}

					.btn {
						display: inline-block;
						margin-bottom: 0;
						text-align: center;
						vertical-align: middle;
						-ms-touch-action: manipulation;
						touch-action: manipulation;
						cursor: pointer;
						background-image: none;
						border: 1px solid transparent;
						white-space: nowrap;
						padding: 7px 12px;
						font-size: 14px;
						border-radius: 4px;
					}
				</style>
			</div>
		</div>
		<div id="fb-root"></div>
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
		<style>
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

			.text-tw {
				color: #fff;
				font-size: 10px;
			}
		</style>
		<div style="display: inline-flex;">
			<!-- ปุ่มแชร์ facebook -->
			<div class="fb-share-button" data-href="<?= base_url(uri_string()) ?>" data-layout="button_count"></div>
			<!-- ปุ่มแชร์ twitter -->
			<div class="btn-twitter navbar-right" data-scribe="component:button" style="width: 72px;">
				<a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
					<span style="padding: 0px 0px 0px;" class="label" id="l">
						<font color="white" size="2">Share</font>
					</span>
				</a>
			</div>

			<!-- ปุ่มแชร์ไลน์ -->
			<div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="<?= base_url(uri_string()) ?>" data-color="default" data-size="small" data-count="false" style="display: none;"></div>
			<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer">

			</script>
			<link rel="me" href="https://twitter.com/twitterdev" />
		</div>
		<!-- สุ่มหนัง ก่อน Footer -->
		<div class="box">
			<div class="box-header">เรื่องอื่นๆ</div>
			<?php foreach ($vdorandom as  $value) {
				$id = $value['movie_id'];
				$title_encode = urlencode(str_replace(' ', '-', $value['movie_thname']));
				$urlvideo = base_url('/video/' . $id . '/' . $title_encode);
			?>
				<div class="movie">
					<div class="movie-box">
						<div class="movie-title">
							<h2>
								<a href='<?php echo $urlvideo; ?>' onclick="countView('<?= $value['movie_id'] ?>')">
									<span class="movie-title-color"><?php echo $value['movie_thname']; ?></span>
								</a>
							</h2>
						</div>
						<div class="movie-imdb">
							<b><span><?php echo $value['movie_ratescore']; ?></span></b>
						</div>
						<div class="movie-view">
							<b style="word-wrap: break-word;"><i class="fa fa-eye" aria-hidden="true"></i>
								<?php
								if (empty($value['movie_view'])) {
									echo "0";
								} else {
									echo $value['movie_view'];
								}
								?> คน
							</b>
						</div>
						<?php
						if ($value['movie_quality'] == "hd") {
							$display = "red";
						} else if ($value['movie_quality'] == "sd") {
							$display = "green";
						} else {
							$display = "green";
						}
						?>
						<div class="movie-corner movie-HD" style=" background-color: <?php echo $display; ?>;"><?php echo strtoupper($value['movie_quality']); ?></div>
						<div class="movie-image">
							<a href='<?php echo $urlvideo; ?>' onclick="countView('<?= $value['movie_id'] ?>')">
								<img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">
							</a>
						</div>
					</div>
				</div>
			<?php	} ?>
		</div>
	</div>
	<?php include('right.php'); ?>

	<!-- ADS ล่าง -->
	<div id="ads_fox_bottom">
		<div id="ads_fix_footer">
			<div style="text-align:center;">
				<div id="fix_footer">
					<?php
					if (!empty($ads['pos4'])) {
						foreach ($ads['pos4'] as $val) {
							if (substr($val['ads_picture'], 0, 4) == 'http') {
								$ads_picture = $val['ads_picture'];
							} else {
								$ads_picture = $path_ads . $val['ads_picture'];
							}
					?>
							<div style="text-align:center;">
								<div id="fix_footer">

									<!-- ปุ่ม close ADS ล่าง -->
									<a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>

								</div>
							</div>

							<a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $val['branch_id'] ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
								<img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
							</a>
					<?php
						}
					}
					?>
				</div>
			</div>
			<!-- ADS ล่าง -->
			<!-- สุ่มหนัง ก่อน Footer -->
			<style>
				.movie-imdb b {
					background: url('https://www.webdoonung.com/images/icon-star.png') no-repeat 0;
					background-size: 11px 11px;
				}

				.imdb-rating {
					background: url(https://www.webdoonung.com/images/IMDb.png) no-repeat;
					background-size: 100% 100%;
					width: 160px;
					height: 36px;
					vertical-align: top;
					display: inline-block;
				}

				.description {
					padding: 10px;
					background-color: #2b2b2b;
					margin: 10px;
					border-radius: 4px;
					color: #f3f3f3;
				}

				.description p:first {
					font-size: 18px;
				}

				.description p:nth-child() {
					font-size: 14px;
					color: white;
				}
			</style>
			
			<div class="clearfix"></div>