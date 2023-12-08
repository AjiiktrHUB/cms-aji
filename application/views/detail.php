<section class="mt-5 blog-section spad">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="blog-post single-post">
                    <img src="<?= base_url('assets/upload/konten/' . $konten->foto);?>" alt="">
                    <div class="post-date"><?= $konten->tanggal?></div>
					<h3><?= $konten->judul?></h3>
					<div class="post-metas">
						<div class="post-meta"><?= $konten->nama?></div>
						<div class="post-meta"><a href="#"><?= $konten->nama_kategori?></a></div>
					</div>
					<p><?= $konten->keterangan ?>. </p>
				</div>
			</div>
		</div>
	</div>
</section>
