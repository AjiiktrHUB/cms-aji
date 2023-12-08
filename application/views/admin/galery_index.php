<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="col-12">
	<div class="card">
		<form action="<?= base_url('admin/galery/simpan'); ?>" method="post" enctype="multipart/form-data">
			<div class="card-header">
				<h4 class="card-title">Input File</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">nama</label>
						<input type="text" class="form-control" placeholder="nama Foto" name="nama" required>
					</div>
				</div>
				<div class="basic-form custom_file_input">
					<label for="formFile" class="form-label">Pilih Foto</label>
					<input class="form-control" type="file" name="foto">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
	<?php foreach ($galery as $gl){ ?>
	<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-4">
		<div class="card mb-3">
			<img class="card-img-top img-fluid" src="<?= base_url('assets/upload/galery/'.$gl['foto'])?>">
			<div class="card-header">
				<h5 class="card-title"><?= $gl['nama']?></h5>
			</div>
			<a href="<?php echo site_url('admin/galery/delete_data/'.$gl['foto']);?>" class="btn btn-sm btn-danger"
				onClick="return confirm('Anda yakin ingin menghapus data?')">
				<span><i class="fa-solid fa-trash"></i></span>
			</a>
		</div>
	</div>
	<?php } ?>
</div>
