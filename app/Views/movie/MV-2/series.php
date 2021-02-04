<div class="sec_main sec_main-mobile-single">
	<!-- เมนูหลักซ้าย -->
	<!-- เมนูหลักซ้าย -->
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
                                       <?php foreach ($category_id as $value) { ?>
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
       </div> <!-- จบเมนูหลักซ้าย -->
	<div class="sec_main-cen">
	<div class="h2-text" style="background-color: crimson;">
			<h1><?php echo $video_data['movie_thname']; ?></h1>
		</div>
		<div class="info-blog">
			<div class="blog1">
				<span class="year">ปีที่ฉาย : <a rel="tag" style="color:#fff;"><?php echo $video_data['movie_year']; ?></a></span>
				<span class="year">คะแนน : <a rel="tag" style="color:#fff;"><?php echo $video_data['movie_ratescore']; ?> / 10</a></span>
				<!-- <span class="res1"> <?php //echo strtoupper($video_data['movie_quality']); 
											?> </span> -->
			</div>
			<!-- <div class="blog4">
								<span><a href="https://24moviehd.com/documentary/" title="Documentary">Documentary</a><a href="https://24moviehd.com/musical/" title="Musical">Musical</a><a href="https://24moviehd.com/netflix/" title="NETFLIX">NETFLIX</a><a href="https://24moviehd.com/%e0%b8%94%e0%b8%b9%e0%b8%ab%e0%b8%99%e0%b8%b1%e0%b8%87-2019/" title="ดูหนัง 2019">ดูหนัง 2019</a></span>
							</div> -->
			<?php if (!empty($video_data['movie_des'])) { ?>
				<div class="blog5">
					<p style="color:#fff;border-style: solid;padding: 17px;border-radius: 15px;background: #3c3c3c;">
						<strong></strong> <?php echo "เรื่องย่อ : " . $video_data['movie_des']; ?> </p>
				</div>
			<?php } else {
			} ?>
		</div>
		<div class="show-movie">
		</div>
		<!--&poster=</*?php echo $thumb_url */?>-->
		<!-- ปุ่มเปลี่ยนภาษา -->
		<div class="blog2">
			<h4 style="color:#fff" ;>ตัวอย่างหนัง : <?php echo $video_data['movie_thname']; ?></h4>
		</div>
		<!-- รายละเอียดหนัง -->
		<?php // echo  "<pre>"; print_R($video_data); 
		?>
		<div class="info-movie">
			<div class="img-movie">
				<div class="thumb-img">
					<img width="203" height="300" src="<?php echo $video_data['movie_picture']; ?>" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 203px) 100vw, 203px" /> </div>
				<div class="box-triler">
					<?php
					$yb = explode('?v=', $video_data['movie_preview']);
					if (count($yb) > 1) {
						$url = "https://www.youtube.com/embed/" . $yb[1];
					} else {
						$url = "https://www.youtube.com/embed/" . $yb[0];
					}
					?>
					<iframe width="560" height="315" src="<?php echo $url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
		</div>
		<div style="display: block; padding: 15px;" class="movie_player">
			<!-- Movie source -->
			<!-- <iframe src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay) ?>" id="player_iframe" style="width: 100%; height: 420px; border: none;/* position: relative; z-index: 2147483647*/" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" scrolling="no" __idm_id__="993216513"></iframe> -->
			<div class="video-info">
				<!-- 16:9 aspect ratio  -->
				<!-- Your share button code -->
				<!-- ********************* SOURCS MOVIES  ****************************  -->
				<div class="embed-responsive embed-responsive-16by9 video-embed-box" style="height: 436px; margin-bottom: 10px;">
					<!-- <iframe src="https://freeball95.com/E/M07814.mp4" width="500px" class="embed-responsive-item"></iframe> -->
					<?php // echo base_url();die; 
					?>
					<?php
					foreach ($video_data['name_ep'] as $key => $value) {
						$url_name =  str_replace('%', '%25',urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname']))))))));
						$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value)))))));
					?>
						<p class="series-list"><a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"> <?php echo $video_data['movie_thname'] . ' - ' . $value ?> </a></p>
					<?php } ?>
				</div>
				<!-- ********************* SOURCS MOVIES  ****************************  -->
			</div>
			<!-- /Movie source -->
		</div>
		<div style="display: inline-flex;">
			<!-- ปุ่มแชร์ facebook -->
			<div class="fb-share-button" style="margin-top: 0px;" data-href="<?= base_url(uri_string()) ?>" data-layout="button_count"></div>
			<!-- ปุ่มแชร์ไลน์ -->
			<div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="<?= base_url(uri_string()) ?>" data-color="default" data-size="small" data-count="false">
			</div>
			<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
			<!-- <link rel="me" href="https://twitter.com/twitterdev" /> -->
			<!-- ปุ่มแชร์ twitter -->
			<div class="btn-twitter navbar-right" data-scribe="component:button" style="width: 59px;">
				<a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
					<span>
						Share
					</span>
				</a>
			</div>
		</div>
		<style>
			.report-movie {
				background-color: red;
				border: solid;
				color: white;
				padding: 5px 4px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
				border-radius: 5px;
			}
		</style>
		<div class="row" style="float: right;">
			<button class="pull-right btn report-movie" onclick="goReport('<?= $video_data['movie_id'] ?>','<?= $video_data['branch_id'] ?>')">
				<span class="text-white">แจ้งหนังเสีย</span>
			</button>
		</div>
		<!-- ปุ่มคอมเม้น ตัวอย่าง -->
		<style>
			.btn-twitter {
				position: relative;
				height: 20px;
				box-sizing: border-box;
				background-color: #1b95e0;
				color: #fff;
				border-radius: 3px;
				margin-top: 0px;
				font-weight: 500;
				margin-bottom: 38px;
			}
			.btn-twitter i {
				padding-left: 13px;
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
		<div id="fb-root" style="background-color: black;"></div>
		<div class="box" style="position: relative;">
			<h3 style="color:black"> แสดงความคิดเห็น</h3>
			<div class="fb-comments" data-href="<?= base_url(uri_string()) ?>" data-colorscheme="dark" data-width="760" data-numposts="5"></div>
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
		<!-- <div class="show-trailer">
					</div> -->
		<!-- <div class="show-ss">
						<div class="model">
							<span class="close">&times;</span>
							<img class="model-content" id="img01">
						</div>
					</div> -->
	</div>
	<div class="sec_main-right">
		<!-- <div class="year">
<div class="h3-text">
<h3>ปีที่ฉาย</h3>
</div>
<div class="year-box">
<p>พิมพ์เป็น คริสตศักราช ค.ศ.</p>
<div class="search-year">
<?/*php dynamic_sidebar( 'serarch_top' ); */?>
</div>
</div>
</div>-->
		<style>
			.content-left .sidebar ul li {
				width: 50%;
			}
		</style>
		<div class="type">
			<div class="h3-text">
				<h3 style="background-color: crimson;
    padding-top: 15px;
    padding-bottom: 11px;">ประเภทหนัง</h3>
			</div>
			<li id="wp_categories_widget-4" class="widget widget_wp_categories_widget">
				<ul>
					<div class="col-xs-12" style="width: 105%;">
						<li class="cat-item cat-item-35">
							<h3> <a class=" list-cate " href="<?php echo base_url('/category/7/' . urlencode('หนังบู๊')); ?>" alt="" title="">Action(แอคชั่น)</a> </h3>
							<h3><a class=" list-cate " href="<?php echo base_url('/genres/40/' . urlencode('หนังผจญภัย')); ?>" alt="" title="">Adventure(ผจญภัย)</a></h3>
							<h3><a class=" list-cate " href="<?php echo base_url('/genres/41/' . urlencode('หนังสงคราม')); ?>" alt="" title="">War(สงคราม)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/category/44/' . urlencode('หนังตลก')); ?>" alt="" title="">Comady(ตลก)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/category/46/' . urlencode('หนังดราม่า')); ?>" alt="" title="">Drama(ชีวิต)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/44/' . urlencode('หนังวิทยาศาสตร์')); ?>" alt="" title="">Sci-fi(วิทยาศาสตร์)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/45/' . urlencode('หนังครอบครัว')); ?>" alt="" title="">Family(ครอบครัว)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/46/' . urlencode('หนังระทึกขวัญ')); ?>" alt="" title="">Thiller(ระทึกขวัญ)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/category/50/' . urlencode('หนังสยองขวัญ')); ?>" alt="" title="">Horror(สยองขวัญ)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/category/45/' . urlencode('หนังอาชญากรรม')); ?>" alt="" title="">Crime(อาชญากรรม)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/49/' . urlencode('หนังสารคดี')); ?>" alt="" title="">Documentaries(สารคดี)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/50/' . urlencode('หนังอีโรติก')); ?>" alt="" title="">Erotic(อีโรติก)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/51/' . urlencode('หนังเทพนิยาย')); ?>" alt="" title="">Fantasy(เทพนิยาย)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/52/' . urlencode('หนังแนวเพลง')); ?>" alt="" title="">Music(เพลง)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/53/' . urlencode('หนังกีฬา')); ?>" alt="" title="">Sport(กีฬา)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/54/' . urlencode('หนังโรแมนติก')); ?>" alt="" title="">Romance(โรแมนติก)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/55/' . urlencode('หนังประวัติศาสตร์')); ?>" alt="" title="">History(ประวัติศาสตร์)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/56/' . urlencode('หนังชีวประวัติ')); ?>" alt="" title="">Biography(ชีวประวัติ)</a></h3>
							<h3> <a class=" list-cate " href="<?php echo base_url('/genres/57/' . urlencode('หนังคาวบอย')); ?>" alt="" title="">Westren(คาวบอย)</a></h3>
						</li>
					</div>
				</ul>
			</li>
		</div>
		<div class="ad_right1">
			<!-- <li id="media_image-81" class="widget widget_media_image">
                            <h2 class="widgettitle">E1</h2>
                            <img width="192" height="230" src="https://24moviehd.com/wp-content/uploads/2020/03/24-banner-E1.jpg" class="image wp-image-8417  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" title="E1" srcset="https://24moviehd.com/wp-content/uploads/2020/03/24-banner-E1.jpg 192w, https://24moviehd.com/wp-content/uploads/2020/03/24-banner-E1-125x150.jpg 125w" sizes="(max-width: 192px) 100vw, 192px" />
                        </li>
                        <li id="media_image-122" class="widget widget_media_image">
                            <h2 class="widgettitle">E2</h2>
                            <a href="https://lin.ee/wn3XdO1" rel="nofollow noopener noreferrer" target="_blank"><img width="192" height="230" src="https://24moviehd.com/wp-content/uploads/2020/05/BG-192-230.gif" class="image wp-image-9252  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" title="E2" /></a>
                        </li>
                        <li id="media_image-163" class="widget widget_media_image">
                            <h2 class="widgettitle">E3</h2>
                            <img width="192" height="230" src="https://24moviehd.com/wp-content/uploads/2020/03/24-banner-E3.jpg" class="image wp-image-8419  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" srcset="https://24moviehd.com/wp-content/uploads/2020/03/24-banner-E3.jpg 192w, https://24moviehd.com/wp-content/uploads/2020/03/24-banner-E3-125x150.jpg 125w" sizes="(max-width: 192px) 100vw, 192px" />
                        </li>
                        <li id="media_image-103" class="widget widget_media_image">
                            <h2 class="widgettitle">H2</h2>
                            <a href="https://ufabetxx.com"><img width="192" height="710" src="https://24moviehd.com/wp-content/uploads/2019/11/ufabetxx-H2-192x710.gif" class="image wp-image-7179  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" /></a>
                        </li> -->
		</div>
	</div> <!-- จบช่องหลักขวา -->
</div>
<!-- จบส่วนหลัก -->
</main>
</div>
<!-- สิ้นสุดเนื้อหา -->
<!-- ส่วนท้าย -->