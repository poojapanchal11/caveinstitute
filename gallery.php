<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<?php include 'links.php' ?>
</head>

<body>
	<!-- header -->
	<?php include 'header-top.php' ?>
	<?php include 'header.php' ?>
	<!-- banner -->
	<div class="inner_page_agile">

	</div>
	<!--//banner -->
	<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Gallery</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- Gallery -->
	<div class="gallery">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur <span>G</span>allery
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="agileinfo-gallery-row">
				<div class="row">
					<div class="col-md-4">
						<a href="images/g3.jpg" class="imghvr-hinge-right figure">
							<img  src="images/g3.jpg" alt="" title="" />
							<!-- <div class="agile-figcaption">
							<h4>Computer Lab</h4>
						</div> -->
						</a>
					</div>
					<div class="col-md-4">
						
							<a href="images/g4.jpg" class="imghvr-hinge-right figure">
								<img class="gallery-img" src="images/g4.jpg" alt="" title="" />
								<!-- <div class="agile-figcaption">
							<h4>Meditation</h4>
						</div> -->
							</a>
						
					</div>
					<div class="col-md-4">
						
							<a href="images/g1.jpg" class="imghvr-hinge-right figure">
								<img class="gallery-img" src="images/g1.jpg" alt="" title="" />
								<!-- <div class="agile-figcaption">
							<h4>Science</h4>
						</div> -->
							</a>
						
					</div>
				</div>
				<div class="row mt">
					<div class="col-md-4">
						
							<a href="images/g6.jpg" class="imghvr-hinge-right figure">
								<img src="images/g6.jpg" alt="" title="" />
								<!-- <div class="agile-figcaption">
							<h4>Group Discussion</h4>
						</div> -->
							</a>
						
					</div>
					<div class="col-md-4">
						
							<a href="images/g2.jpg" class="imghvr-hinge-right figure">
								<img class="gallery-img" src="images/g2.jpg" alt="" title="" />
								<!-- <div class="agile-figcaption">
							<h4>Chemical Lab</h4>
						</div> -->
							</a>
						
					</div>
					<div class="col-md-4">
					
							<a href="images/g5.jpg" class="imghvr-hinge-right figure">
								<img class="gallery-img" src="images/g5.jpg" alt="" title="" />
								<!-- <div class="agile-figcaption">
							<h4>Sports</h4>
						</div> -->
							</a>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Gallery -->

	<!-- footer -->
	<?php include 'footer.php' ?>
	<!--/footer -->

	<!-- js files -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- simple-lightbox -->
	<script type="text/javascript" src="js/simple-lightbox.js"></script>
	<script>
		$(function () {
			var gallery = $('.agileinfo-gallery-row a').simpleLightbox({
				navText: ['&lsaquo;', '&rsaquo;']
			});
		});
	</script>
	<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<!-- Light-box css -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>