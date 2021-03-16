<div class="container">
	<div class="row copyright-bottom text-center">
		<div class="col-md-12 text-center">
			<center>
				<h1 class="imghead">
					<a href="<?php echo base_url(); ?>">


						<img src='<?php echo $backURL . "setting/" . $setting['setting_logo']; ?>' width="10%" alt="<?php echo $setting['setting_title']; ?>" title="<?php echo $setting['setting_title']; ?>"> <br>


						<h6 style="position: relative; margin: 0 auto; display: block; width: fit-content; color:red">nungdedhd.com</h6>
					</a>
				</h1>
				<p class="content-footer">
					<strong><a href="">Nungdedhd</a></strong>
					<strong><a href="">ดูหนังใหม่</a></strong>
					ฟรี โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์
					<strong><a href="">ดูหนังออนไลน์</a></strong>
					หนังไทย หนังฝรั่ง หนังเอเชีย หนังการ์ตูน Netflix Movie หนังบู๊ หนังตลก หนังดราม่า สยองขวัญ หนังผจญภัย หนังอาชญากรรม
					ซีรี่ส์จากเน็ตฟลิก
					และยังมี
					<strong><a href="">หนังใหม่</a></strong>
					ให้รับชมอีกมากมาย
					สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมงที่
					<strong><a href="">nungdedhd.com</a></strong>
				</p>
			</center>
		</div>
	</div>
</div>


<!-- ADS2 -->
<div id="ads_fox_bottom">
	<div id="ads_fix_footer">
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



<!-- ADS2 -->
<!-- <footer>
	<p>&copy;Copyright © 2020 <a rel="home"> Askmebet.com. All rights reserved.</a></p>
</footer> -->
<script type="text/javascript">
	var _Hasync = _Hasync || [];
	_Hasync.push(['Histats.start', '1,4313843,4,128,112,33,00010001']);
	_Hasync.push(['Histats.fasi', '1']);
	_Hasync.push(['Histats.track_hits', '']);
	(function() {
		var hs = document.createElement('script');
		hs.type = 'text/javascript';
		hs.async = true;
		hs.src = ('//s10.histats.com/js15_as.js');
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
	})();
</script>
<noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4313843&101" alt="counter free hit unique web" border="0"></a></noscript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/37e3c13129.js"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v4.0&appId=599318023929202&autoLogAppEvents=1"></script>
<style type="text/css">
	/* start wp categories widget CSS */
	.widget_wp_categories_widget {
		background: #fff;
		position: relative;
	}

	.widget_wp_categories_widget h2 {
		color: #4a5f6d;
		font-size: 20px;
		font-weight: 400;
		margin: 0 0 25px;
		line-height: 24px;
		text-transform: uppercase
	}

	.widget_wp_categories_widget ul li {
		font-size: 14px;
		margin: 0px;
		position: relative;
		list-style-type: none;
		line-height: 35px;
	}

	.widget_wp_categories_widget ul li:last-child {
		border: none;
	}

	.widget_wp_categories_widget ul li a {
		display: inline-block;
		color: #007acc;
		transition: all .5s ease;
		-webkit-transition: all .5s ease;
		-ms-transition: all .5s ease;
		-moz-transition: all .5s ease;
		text-decoration: none;
	}

	.widget_wp_categories_widget ul li a:hover,
	.widget_wp_categories_widget ul li.active-cat a,
	.widget_wp_categories_widget ul li.active-cat span.post-count {
		color: #ee546c
	}

	.widget_wp_categories_widget ul li span.post-count {
		height: 30px;
		min-width: 35px;
		text-align: center;
		top: 0px;
		float: right;
		margin-top: 2px;
	}

	li.cat-item.cat-have-child>span.post-count {
		float: inherit;
	}

	li.cat-item.cat-item-7.cat-have-child {
		background: #f8f9fa;
	}

	li.cat-item.cat-have-child>span.post-count:before {
		content: "(";
	}

	li.cat-item.cat-have-child>span.post-count:after {
		content: ")";
	}

	.cat-have-child.open-m-menu ul.children li {
		border-top: 1px solid #d8d8d8;
		border-bottom: none;
	}

	li.cat-item.cat-have-child:after {
		position: absolute;
		right: 8px;
		top: 8px;
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABmJLR0QA/wD/AP+gvaeTAAAAoklEQVQ4je3PzQpBURSG4WfknztxGS6BKOIaDQwkSXJTnI7J2rXbhSND3lqTtb/19m3+NGWANVof3LTiZpAWXVxQY4t2A0k7snXcdmGMKpY1dui8kHQik/JVOMAC9+zxlFfO6GFfSDZlaI5bFjpjWEgOhWT9rHYpu2CEPo7Z/v5KklgW37zG5JLlO0liVjTLJaumkmeyj5qUTEP2lSQxiflVHtR5PTMAQTkfAAAAAElFTkSuQmCC);
		content: "";
		width: 18px;
		height: 18px;
		transform: rotate(270deg);
	}

	ul.children li.cat-item.cat-have-child:after {
		content: "";
		background-image: none;
	}

	.cat-have-child ul.children {
		display: none;
		z-index: 9;
		width: auto;
		position: relative;
		margin: 0px;
		padding: 0px;
		margin-top: 0px;
		padding-top: 10px;
		padding-bottom: 10px;
		list-style: none;
		text-align: left;
		background: #f8f9fa;
		padding-left: 5px;
	}

	.widget_wp_categories_widget ul li ul.children li {
		border-bottom: 1px solid #fff;
		padding-right: 5px;
	}

	.cat-have-child.open-m-menu ul.children {
		display: block;
	}

	li.cat-item.cat-have-child.open-m-menu:after {
		transform: rotate(0deg);
	}

	.widget_wp_categories_widget>li.product_cat {
		list-style: none;
	}

	.widget_wp_categories_widget>ul {
		padding: 0px;
	}

	.widget_wp_categories_widget>ul li ul {
		padding-left: 15px;
	}

	/* End category widget CSS*/
</style>
<script>
	jQuery(document).ready(function($) {
		jQuery('li.cat-item:has(ul.children)').addClass('cat-have-child');
		jQuery('.cat-have-child').removeClass('open-m-menu');
		jQuery('li.cat-have-child > a').click(function() {
			window.location.href = jQuery(this).attr('href');
			return false;
		});
		jQuery('li.cat-have-child').click(function() {
			if (jQuery(this).hasClass('open-m-menu')) {
				jQuery('.cat-have-child').removeClass('open-m-menu');
			} else {
				jQuery('.cat-have-child').removeClass('open-m-menu');
				jQuery(this).addClass('open-m-menu');
			}
		});
	});
</script>

</body>

</html>

<script>
	function goReport(id, branch, name, ep) {
		var request = prompt('แจ้งหนังเสืย');
		if (request != null) {
			jQuery.ajax({
				url: "/savereport/branch/" + branch + "/id/" + id + "/reason/" + request + "/name/" + name + "/" + ep,
				type: 'GET',
				crossDomain: true,
				cache: false,
				success: function(data) {
					console.log(request);
					alert('เราจะดำเนินการให้เร็วที่สุด');
				}

			});

		} else {}
	};

	function contact_ads() {

		if (!jQuery("#namesurname").val() && !jQuery('#email').val() && !jQuery('#lindid').val() && !jQuery('#phone').val()) {
			return false;
		} else {

			var url = "<?php echo base_url('/contact_ads/'); ?>"

			var namesurname = jQuery("#namesurname").val();
			var email = jQuery('#email').val();
			var lineid = jQuery('#lineid').val();
			var phone = jQuery('#phone').val();

			jQuery.ajax({
				url: url,
				method: "POST",
				async: false,
				data: {
					namesurname: namesurname,
					email: email,
					lineid: lineid,
					phone: phone,

				},
				success: function(result) {
					alert('ส่งข้อมูลสำเร็จ Admin จะติดต่อกลับภายหลัง')
					window.location.href = "<?php echo base_url(); ?>"
					return false
				}

			});
			return false
		}

	}




	function request_movie() {

		if (!jQuery("#request").val()) {
			return false;
		} else {


			var request = jQuery("#request").val();
			var branch = <?= $branch ?>;
			jQuery.ajax({
				url: "/saverequest/branch/" + branch + "/movie/" + request,
				type: 'GET',
				async: false,
				success: function(data) {
					console.log(data);
					
					return false
					if (data == "OK") {
						alert("Admin จะรีบดำเนินการให้เร็วที่สุด !");
						window.location.href = "<?php echo base_url(); ?>";
					}
				}
			});
			return false
		}

	}


	// function request_movie(branch) {
	// 	console.log(branch);
	// 	var movie = prompt('ของหนังกับทาง Admin');
	// 	console.log(movie);
	// 	if (movie != null) {
	// 		jQuery.ajax({
	// 			url: "/saverequest/branch/" + branch + "/movie/" + movie,
	// 			type: 'GET',
	// 			async: false,
	// 			success: function(data) {
	// 				console.log(data);
	// 				if (data == "OK") {
	// 					alert("Admin จะรีบดำเนินการให้เร็วที่สุด !");
	// 				}
	// 			}
	// 		});
	// 	}
	// }
	jQuery("#formsearch").submit(function(event) {
		// alert("Esad");
		if (jQuery("#search").val()) {
			var url = +'/' + jQuery("#search").val();
			window.location.href = url;
			event.preventDefault();
		}
	});

	function goView(id, name, type) {

		count_view(id);
		var url = '';

		if (type == 'se') {

			url = "<?= base_url() ?>/series/" + id + '/' + decodeURI(name);

		} else {

			url = "<?= base_url() ?>/video/" + id + '/' + decodeURI(name);
		}
	}

	function count_view(id) {

		var url = "<?= base_url('/countview') ?>/" + id

		jQuery.ajax({
			url: url,
			async: true,
			success: function(response) {
				console.log(url); // server response
			}
		});
	}

	function onClickAds(adsid, branch) {
		var backurl = '<?= $backURL ?>';

		jQuery.ajax({
			url: backurl + "ads/sid/<?= session_id() ?>/adsid/" + adsid + "/branch/" + branch,
			async: true,
			success: function(response) {
				console.log(url); // server response
			}
		});
	}
</script>
<script>
	$.ajax({
		url: "https://pirateback.aegistrex.com/checkstatus",
		method: "POST",
		data: {
			id: "21"
		},
		success: function(result) {

			var res = result.substring(0, 2);

			if (res != "OK") {
				window.location.href = "https://info.aegistrex.com/close.html?d=<?= $_SERVER['HTTP_HOST']; ?>";
			}

		}
	});
</script>
</body>

</html>