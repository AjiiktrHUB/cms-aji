<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= $judul_halaman?></title>
	<?php require_once('_css.php')?>
	<!-- Favicon icon -->
	<!-- Place the first <script> tag in your HTML's <head> -->
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>

	<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->


	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->

		<?php require_once('_navbar.php')?>
		<!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="search_bar dropdown">
								<div class="dropdown-menu p-0 m-0">
								</div>
							</div>
						</div>

						<ul class="navbar-nav header-right">
							<title><?= $judul_halaman?> </title>
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<i class="mdi mdi-account"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="./app-profile.html" class="dropdown-item">
										<i class="icon-user"></i>
										<span class="ml-2"><?= $this->session->userdata('nama')?></span>
										<small class="text-muted"><?= $this->session->userdata('level')?></small>
									</a>
									<a href="<?= base_url('auth/logout')?>" class="dropdown-item">
										<i class="icon-key"></i>
										<span class="ml-2">Logout</span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<?php require_once('_sidebar.php')?>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body" style="min-height: 732px;">
			<div class="container-fluid">
				<!-- row -->

				<div class="row">
					<?= $contents; ?>
				</div>
			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->


		<!--**********************************
            Footer start
        ***********************************-->
		<?php require_once('_footer.php')?>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<?php require_once('_js.php')?>

	<script>
		$('#ngilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);

	</script>

	<!-- Required vendors -->

	<!-- Circle progress -->
	<script>
		<!-- Place the first <script> tag in your HTML's <head> 
		-->
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>

	<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
		});

	</script>
	</script>

</body>

</html>
