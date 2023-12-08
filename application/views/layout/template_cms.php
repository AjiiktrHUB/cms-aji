<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?= $judul; ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="TheQuest Gaming Magazine Template">
	<meta name="keywords" content="gaming, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="<?= base_url('assets/quest/');?>img/favicon.ico" rel="shortcut icon" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
		rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/quest/');?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/quest/');?>css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/quest/');?>css/magnific-popup.css" />
	<link rel="stylesheet" href="<?= base_url('assets/quest/');?>css/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/quest/');?>css/animate.css" />
	<link rel="stylesheet" href="<?= base_url('assets/quest/');?>css/slicknav.min.css" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/quest/');?>css/style.css" />
	<style>
		pre {
			color: #8c8c8c;
		}

	</style>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a class="main-menu text-light white">
			<img src="<?= base_url('assets/quest/img/skandakra-logo.png')?>" alt="" width="70">
		</a>
		<ul class="main-menu">
			<li><a href="<?= base_url('')?>">Home</a></li>
			<li><a href="<?= base_url('Home/galery')?>">Galeri</a></li>
			<?php foreach ($kategori as $value) { ?>
			<li><a href="<?= base_url('home/kategori/'.$value['id_kategori'])?>"><?= $value['nama_kategori'];?></a></li>
			<?php }?>
		</ul>
		<a href="<?= base_url('auth')?>" class="site-btn">Admin</a>
	</header>
	<!-- Header section end -->


	<!-- Hero section end -->

	<!-- Blog section -->
	<?= $contents;?>
	<!-- Blog list section end -->

	<!-- Footer section -->
	<div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-widget">
						<div>
							<img src="<?= base_url('assets/quest/img/skandakra-logo.png')?>" alt="" width="70">
							<p class="text-light">
								<?= $konfig->profil_website;?>
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Kategori</h2>
						<ul>
							<li><a href="<?= base_url()?>">Home</a></li>
							<?php foreach ($kategori as $value) { ?>
							<li>
								<a
									href="<?= base_url(base_url('home/kategori/'.$value['id_kategori']))?>"><?= $value['nama_kategori'];?></a>
							</li>
							<?php }?>

						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">About Us</h2>
						<ul>
							<p> Projeck Akhir Semester 1 Membuat Website CMS berisi konten dari rangkain mapel</p>
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright"><a href="">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());

						</script> All rights reserved | <?= $konfig->judul_website?>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="<?= $konfig->instagram; ?>"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="<?= $konfig->facebook; ?>"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="<?= $konfig->email; ?>"><i class="fa fa-envelope"></i><span>email</span></a>
					<a href="<?= $konfig->no_wa; ?>"><i class="fa fa-whatsapp"></i><span>whatsapp</span></a>
					<a href="<?= $konfig->alamat; ?>"><i class="fa fa-map-marker"></i><span>alamat</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url('assets/quest/');?>js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('assets/quest/');?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/quest/');?>js/jquery.slicknav.js"></script>
	<script src="<?= base_url('assets/quest/');?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/quest/');?>js/circle-progress.min.js"></script>
	<script src="<?= base_url('assets/quest/');?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/quest/');?>js/main.js"></script>


</body>

</html>
