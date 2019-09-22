<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<div class="type-1371">
			<div class="container" style="margin-top: 10px;">
				<div class="row">
					<img class="img-fix" src="../1371/images/logo.jpg" alt="logo">
					<!-- Swiper -->
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="row">
									<div class="item-wrap">
										<div class="body-top">
											<h2>Loft Above The City</h2>
											<div class="item-address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>Hope Street (Stop P),London SW11, UK</span>
											</div>
										</div>
										<div class="body-center">
										<div class="label-status"><a href="#">FOR RENT</a></div>
											<img class="img-responsive" src="../1371/images/property6-370x210.jpg" alt="photo6">
										</div>
										<div class="body-bottom">
											<ul>
												<li><i class="fa fa-line-chart updatefa" aria-hidden="true"></i>1660 m2</li>
												<li><i class="fa fa-bed updatefa" aria-hidden="true"></i>3 Bedrooms</li>
												<li><i class="fa fa-university updatefa" aria-hidden="true"></i>2 Bathrooms</li>
											</ul>
										</div>
									</div>
									<div class="item-footer">
										<div class="row item">
											<div class="col-md-8 item-8">
												<a href="#" class="price">$ 84,000 / <span>month</span></a>
											</div>
											<div class="col-md-4 item-8">
												<div class="col-md-4 sub-item-8"><a href="#" ><i class="fa fa-heart-o priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-exchange priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-share-alt priceupdate" aria-hidden="true"></i></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="row">
									<div class="item-wrap">
										<div class="body-top">
											<h2>Villa in Melbourne</h2>
											<div class="item-address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>NJ 0, USA</span>
											</div>
										</div>
										<div class="body-center">
										<div class="label-status"><a href="#">FOR RENT</a></div>
											<img class="img-responsive" src="../1371/images/property4-370x210.jpg" alt="photo6">
										</div>
										<div class="body-bottom">
											<ul>
												<li><i class="fa fa-line-chart updatefa" aria-hidden="true"></i>2800 m2</li>
												<li><i class="fa fa-bed updatefa" aria-hidden="true"></i>6 Bedrooms</li>
												<li><i class="fa fa-home updatefa" aria-hidden="true"></i>5 Garages</li>
												<li><i class="fa fa-university updatefa" aria-hidden="true"></i>5 Bathrooms</li>
											</ul>
										</div>
									</div>
									<div class="item-footer">
										<div class="row item">
											<div class="col-md-8 item-8">
												<a href="#" class="price"><span>From</span> $ 12,000 / <span>month</span></a>
											</div>
											<div class="col-md-4 item-8">
												<div class="col-md-4 sub-item-8"><a href="#" ><i class="fa fa-heart-o priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-exchange priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-share-alt priceupdate" aria-hidden="true"></i></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="row">
									<div class="item-wrap">
										<div class="body-top">
											<h2>Villa on Hollywood Boulevard</h2>
											<div class="item-address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>12 Beacon Ave,Jersey City,NJ 07306, USA</span>
											</div>
										</div>
										<div class="body-center">
										<div class="label-status"><a href="#">FOR RENT</a></div>
											<img class="img-responsive" src="../1371/images/property2-370x210.jpg" alt="photo6">
										</div>
										<div class="body-bottom">
											<ul>
												<li><i class="fa fa-line-chart updatefa" aria-hidden="true"></i>6666 m2</li>
												<li><i class="fa fa-bed updatefa" aria-hidden="true"></i>3 Bedrooms</li>
												<li><i class="fa fa-home updatefa" aria-hidden="true"></i>5 Garages</li>
												<li><i class="fa fa-university updatefa" aria-hidden="true"></i>3 Bathrooms</li>
											</ul>
										</div>
									</div>
									<div class="item-footer">
										<div class="row item">
											<div class="col-md-8 item-8">
												<a href="#" class="price">$ 600,000</a>
											</div>
											<div class="col-md-4 item-8">
												<div class="col-md-4 sub-item-8"><a href="#" ><i class="fa fa-heart-o priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-exchange priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-share-alt priceupdate" aria-hidden="true"></i></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="row">
									<div class="item-wrap">
										<div class="body-top">
											<h2>Villa on Hollywood Boulevard</h2>
											<div class="item-address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>12 Beacon Ave,Jersey City,NJ 07306, USA</span>
											</div>
										</div>
										<div class="body-center">
										<div class="label-status"><a href="#">FOR RENT</a></div>
											<img class="img-responsive" src="../1371/images/property3-370x210.jpg" alt="photo6">
										</div>
										<div class="body-bottom">
											<ul>
												<li><i class="fa fa-line-chart updatefa" aria-hidden="true"></i>6666 m2</li>
												<li><i class="fa fa-bed updatefa" aria-hidden="true"></i>3 Bedrooms</li>
												<li><i class="fa fa-home updatefa" aria-hidden="true"></i>5 Garages</li>
												<li><i class="fa fa-university updatefa" aria-hidden="true"></i>3 Bathrooms</li>
											</ul>
										</div>
									</div>
									<div class="item-footer">
										<div class="row item">
											<div class="col-md-8 item-8">
												<a href="#" class="price">$ 600,000</a>
											</div>
											<div class="col-md-4 item-8">
												<div class="col-md-4 sub-item-8"><a href="#" ><i class="fa fa-heart-o priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-exchange priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-share-alt priceupdate" aria-hidden="true"></i></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="row">
									<div class="item-wrap">
										<div class="body-top">
											<h2>Loft Above The City</h2>
											<div class="item-address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>Hope Street (Stop P),London SW11, UK</span>
											</div>
										</div>
										<div class="body-center">
										<div class="label-status"><a href="#">FOR RENT</a></div>
											<img class="img-responsive" src="../1371/images/property5-370x210.jpg" alt="photo6">
										</div>
										<div class="body-bottom">
											<ul>
												<li><i class="fa fa-line-chart updatefa" aria-hidden="true"></i>1660 m2</li>
												<li><i class="fa fa-bed updatefa" aria-hidden="true"></i>3 Bedrooms</li>
												<li><i class="fa fa-university updatefa" aria-hidden="true"></i>2 Bathrooms</li>
											</ul>
										</div>
									</div>
									<div class="item-footer">
										<div class="row item">
											<div class="col-md-8 item-8">
												<a href="#" class="price">$ 84,000 / <span>month</span></a>
											</div>
											<div class="col-md-4 item-8">
												<div class="col-md-4 sub-item-8"><a href="#" ><i class="fa fa-heart-o priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-exchange priceupdate" aria-hidden="true"></i></a></div>
												<div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-share-alt priceupdate" aria-hidden="true"></i></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
						<!-- Add Arrows -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
			</div>
		</div>
		<script>
		var swiper = new Swiper('.swiper-container', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		pagination: {
		el: '.swiper-pagination',
		clickable: true,
		},
		navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
		},
		});
		</script>
	</body>
</html>