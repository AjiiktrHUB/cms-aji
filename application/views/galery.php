<section class="mt-5 blog-section spad">
	<div class="container">
		<div class="row"> <?php foreach ($galery as $uu) {?>
			<div class="col-6">
				<div class="blog-post single-post">
                    <img src="<?= base_url('assets/upload/galery/' . $uu['foto']);?>" alt="">
				</div>
			</div>
            <?php }?>
		</div>
	</div>
</section>
