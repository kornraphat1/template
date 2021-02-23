<!-- footer -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="footer__content">
					<a href="index.html" class="footer__logo">
						<img src="img/logo.svg" alt="">
					</a>

					<span class="footer__copyright">© 2019 Prirate.Company<br> Create by <a href="#" target="_blank">Prirate.Company</a></span>
					<!-- <nav class="footer__nav">
							<a href="about.html">About Us</a>
							<a href="contacts.html">Contacts</a>
							<a href="privacy.html">Privacy Policy</a>
						</nav> -->
					<button class="footer__back" type="button">
						<i class="icon ion-ios-arrow-round-up"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- end footer -->
<!-- ADS2 -->
<div id="ads_fox_bottom">
	<div id="ads_fix_footer">
		<div style="text-align:center;">
			<div id="fix_footer">
				<?php foreach ($ads as $value) {
					if (empty($value['ads_position'] == "2")) {
					} else { ?>
						<a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>
				<?php }
				} ?>
			</div>
		</div>
		<?php
		foreach ($ads as $value) {
			if ($value['ads_position'] == "2") {
		?>
				<div style="clear:both;"></div>
				<div id="fix_footer2" style="width:100%; display:block; float:left; margin:-7px 0 0 0; overflow:hidden; line-height:0px;">
					<div style="display:inline-block; width:100%; text-align:center;">
						<div class="textwidget custom-html-widget">
							<center><a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="https://slotgame66.com" target="_blank" rel="noopener"><img alt="<?= $value['ads_name'] ?>" title="<?= $value['ads_name'] ?>" src="<?php echo  $backURL . "ads/" . $value['ads_picture']; ?>"></a></center>
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
<!-- JS -->
<script src="<?php echo $document_root ?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/jquery.mousewheel.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/jquery.mCustomScrollbar.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/wNumb.js"></script>
<script src="<?php echo $document_root ?>/assets/js/nouislider.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/jquery.morelines.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/plyr.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/photoswipe.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/photoswipe-ui-default.min.js"></script>
<script src="<?php echo $document_root ?>/assets/js/main.js"></script>
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
<script>
	function goView(id, name, type) {

		count_view(id);
		var url = '';

		if (type == 'se') {

			url = "<?= base_url() ?>/series/" + id + '/' + decodeURI(name);

		} else {

			url = "<?= base_url() ?>/video/" + id + '/' + decodeURI(name);

		}

		window.open(url, '_parent');



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



	function goView2(id, name) {

		var name = decodeURI(name);

		window.location.href = "/category/" + id + "/" + name;

	}


	jQuery("#formsearch").submit(function(event) {

		// alert("Esad");

		if (jQuery("#search").val()) {

			var url = "<?= base_url('/search') ?>" + '/' + jQuery("#search").val();

			window.location.href = url;

			event.preventDefault();

		} else {
			var url = "<?= base_url() ?>";

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
</script>
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0"></script>
<link rel="stylesheet" href='<?php echo base_url("/assets/css/css_size.css"); ?>'>
</body>

</html>