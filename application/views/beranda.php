<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<?php foreach ($caraousel as $sel) { ?>
		<div class="hero-item set-bg" data-setbg="<?= base_url('assets/upload/caraousel/'.$sel['foto']);?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<h2><?= $sel['judul'];?></h2>
						<!-- <a href="#" class="site-btn">Read More</a> -->
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</section>

<!-- Blog section -->
<section class="blog-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 blog-posts">
				<div class="row">
					<?php foreach ($konten as $uu) { ?>
					<div class="col-md-6">
						<div class="blog-post">
							<img src="<?= base_url('assets/upload/konten/'.$uu['foto'])?>">
							<div class="post-date"><?= $uu['tanggal'];?></div>
							<h4><?= $uu['judul']?></h4>
							<div class="post-metas">
								<div class="post-meta"><?= $uu['nama']?></div>
								<div class="post-meta"><a href="#"><?= $uu['nama_kategori']?></a></div>
							</div>
							<a href="<?= base_url('home/artikel/'. $uu['slug'])?>" class="read-more">Baca
								Selengkapnya</a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-4 sidebar">
				<div class="sb-widget">
				</div>
				<div class="sb-widget">
					<h2 class="sb-title">Recents Post</h2>
					<div class="latest-news-widget">
						<?php foreach ($res_post as $res) {?>
						<div class="ln-item">
							<img src="<?= base_url('assets/upload/konten/' . $res['foto']);?>" alt="">
							<div class="ln-text">
								<div class="ln-date"><?= $res['tanggal'];?></div>
								<h6><?= $res['judul'];?></h6>
								<div class="ln-metas">
									<div class="ln-meta"><?= $res['nama']?></div>
									<div class="post-meta"><a href="#"><?= $uu['nama_kategori']?></a></div>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog section end -->

<!-- Blog list section -->
<!-- Blog list section end -->
