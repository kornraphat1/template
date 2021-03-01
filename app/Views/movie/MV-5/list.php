<section class="home">
	<!-- home bg -->
	<div class="owl-carousel home__bg">
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
	</div>
	<!-- end home bg -->

	<!--  -->
</section>
<!-- end home -->

<!-- content กลาง -->
<section class="content">


	<div class="container">
		<div class="row">
			<?php include('left.php'); ?>


			<div class="col-lg-10 col-md-9 col-xs-6">
				<!-- content tabs -->
				<div class="tab-content">
					<div class="tab-pane fade show active" id="tab" role="tabpanel" aria-labelledby="1-tab">
						<h2 class="content__title"> <?= $title ?></h2>
						<div class="row">
							<!-- card -->
							<?php foreach ($list_video['list'] as $value) { ?>
								<?php
								$id = $value['movie_id'];
								$s_replace = [
									")", "(", " ", '%'
								];
								$e_replace = [
									"", "", "-", '%25'
								];
								$url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_name'])));
								if (!($value['movie_view'])) {
									$view = 0;
								} else if (strlen($value['movie_view']) >= 5) {
									$view =  substr($value['movie_view'], 0, -3) . 'k';
								} else {
									$view = $value['movie_view'];
								}
								?>
								

								<div class="col-6 col-sm-4 col-md-4 col-xl-2">
									<div class="card">
										<div class="card__cover">
											<img class="home-box" src="<?php echo $value['movie_picture']; ?>" alt="">
											<a onclick="goView('<?= $value['movie_id'] ?>', '<?= $url_name ?>', '<?= $value['movie_type'] ?>')" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
											<span class="card__rate card__rate--green"><?= $value['movie_ratescore'] ?></span>
										</div>
										<div class="card__content">
											<h3 class="card__title"><a onclick="goView('<?= $value['movie_id'] ?>', '<?= $url_name ?>', '<?= $value['movie_type'] ?>')"><?php echo $value['movie_name']; ?></a></h3>
											<span>
												<?php echo strtoupper($value['movie_quality']); ?>
											</span>
											<span class="movie-view "><?= $view ?> <i class="fa fa-eye"></i></span>
										</div>
									</div>
								</div>
							<?php } ?>
							<!-- end card -->

						</div>
						<!-- carousel -->
						<!-- Pagination -->
						<div class="box">
							<div class="navigation">
								<ul>
									<div class="topbar-filter">
										<div class="pagination2">
											<?= pagination($list_video['page'], $list_video['total_page']); ?>
										</div>
									</div>
								</ul>
							</div>
						</div>
						<!-- /Pagination -->
					</div>

				</div>
			</div>
			<!-- <div class="col-lg-2 col-md-3 col-xs-12 ">
			</div> -->
		</div>
	</div>
</section>
<!-- /content กลาง  -->