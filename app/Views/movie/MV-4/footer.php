<!-- footer section-->



<footer class="ht-footer">

	<div class="ft-copyright">

		<div class="ft-left" style="text-align: center;">

			<!-- <img class="logo hidden-xs" src='<?php // echo base_url("/assets/images/logo/Logo-05-1.png"); 
													?>' alt="" width="240" height="58"> -->

			<!-- <p >Copyright © 2020 Askmebet.com. All rights reserved.</p> -->

		</div>

		<div class="backtotop">

			<!-- <p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p> -->

		</div>

	</div>

</footer>

<!-- end of footer section-->

</body>

<!-- ADS2 -->

<div id="ads_fox_bottom">

	<div id="ads_fix_footer">

		<div style="text-align:center;">

			<div id="fix_footer">

				<?php foreach ($ads as $value) {

					if (empty($value['ads_position'] == "3")) {
					} else { ?>
						<!-- ปุ่ม close ADS ล่าง -->
						<a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>
				<?php }
				} ?>

			</div>

		</div>
		<?php

		foreach ($ads as $value) {

			if ($value['ads_position'] == "3") {
		?>
				<div style="clear:both;"></div>

				<div id="fix_footer2" style="width:100%; display:block;  overflow:hidden; line-height:0px;">

					<div style="display:inline-block; width:100%; text-align:center;">

						<div class="textwidget custom-html-widget">

							<center><a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url']; ?>" target="_blank" rel="noopener"><img alt="<?= $value['ads_name'] ?>" title="<?= $value['ads_name'] ?>" src="<?php echo  $backURL . "ads/" . $value['ads_picture']; ?>" width="50%"></a></center>

						</div>

					</div>

				</div>

				<div style="clear:both;"></div>

		<?php

			}
		}

		?>



	</div>

</div>

<!-- ADS2 -->



</html>



<script>
	function goView2(id, name) {

		var name = decodeURI(name);

		window.location.href = "/category/" + id + "/" + name;

	}
</script>



<script src='<?php echo $document_root . "/assets/js/jquery.js"; ?>'></script>

<script src='<?php echo $document_root . "/assets/js/plugins.js"; ?>'></script>

<script src='<?php echo $document_root . "/assets/js/plugins2.js"; ?>'></script>

<script src='<?php echo $document_root . "/assets/js/custom.js"; ?>'></script>



<script>
	jQuery("#formsearch").submit(function(event) {
		// alert("Esad");
		if (jQuery("#search").val()) {
			var url = "<?= base_url('/search') ?>" + '/' + jQuery("#search").val();
			window.location.href = url;
			event.preventDefault();
		} else {
			var url = "<?php echo base_url() ?>";
			window.location.href = url;
			event.preventDefault();
		}

	});

	jQuery("#formsearch-mobile").submit(function(event) {
		// alert("Esad");
		if (jQuery("#search-mobile").val()) {
			var url = "<?= base_url('/search') ?>" + '/' + jQuery("#search-mobile").val();
			window.location.href = url;
			event.preventDefault();
		} else {
			var url = "<?php echo base_url() ?>";
			window.location.href = url;
			event.preventDefault();
		}
	});


	function request_movie(branch) {

		console.log(branch);

		var movie = prompt('ของหนังกับทาง Admin');

		console.log(movie);
		if (movie != null) {
			jQuery.ajax({
				url: "/saverequest/branch/" + branch + "/movie/" + movie,
				type: 'GET',
				async: false,
				success: function(data) {
					console.log(data);
					if (data == "OK") {
						alert("Admin จะรีบดำเนินการให้เร็วที่สุด !");
					}
				}
			});
		}
	}



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
		debugger;
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
			id: "8"
		},
		success: function(result) {

			var res = result.substring(0, 2);

			if (res != "OK") {
				window.location.href = "https://info.aegistrex.com/close.html?d=<?= $_SERVER['HTTP_HOST']; ?>";
			}

		}
	});
</script>