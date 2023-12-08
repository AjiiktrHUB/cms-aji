<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="modal fade show" id="basicModal" style="display: none; padding-right: 17px;" aria-modal="false">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('admin/Konten/simpan'); ?>" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Konten</h5>
					<button type="button" class="close" data-dismiss="modal"><span></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Judul</label>
							<input type="text" class="form-control" placeholder="Nama" name="judul" required>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach ($kategori as $aa) { ?>
								<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Foto</label>
							<input type="file" name="foto" class="form-control"
								accept="image/png, image/jpg, image/jpeg" />
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="col-lg-12">
	<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#basicModal">Tambah
		Konten</button>
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Kategori Konten</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table header-border table-responsive-sm">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Kategori Konten</th>
							<th>Tanggal</th>
							<th>Kreator</th>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($konten as $aa) { ?>
						<tr>
							<td><?= $no?></td>
							<td><?= $aa['judul'] ?></td>
							<td><?= $aa['nama_kategori'] ?></td>	
							<td><?= $aa['tanggal'] ?></td>
							<td><?= $aa['nama'] ?></td>
							<td>
								<a href="<?= base_url('assets/upload/konten/'.$aa['foto'])?>" target="_blank">
									<span><i class="fa-solid fa-magnifying-glass"></i>View Images</span>
								</a>
							</td>
							<td>
								<a href="<?php echo site_url('admin/konten/delete_data/'.$aa['foto']);?>"
									class="btn btn-sm btn-danger"
									onClick="return confirm('Anda yakin ingin menghapus data?')">
									<span><i class="fa-solid fa-trash"></i></span>
								</a>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#konten<?= $no; ?>">
									<i class="fa-solid fa-pen-to-square"></i>
								</button>
								<div class="modal fade show" id="konten<?= $no++ ?>" style="display: none; padding-right: 17px;"
									aria-modal="false">
									<div class="modal-dialog" role="document">
										<form action="<?= base_url('admin/Konten/update'); ?>" method="post"
											enctype="multipart/form-data">
											<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title"><?= $aa['judul'] ?></h5>
													<button type="button" class="close"
														data-dismiss="modal"><span></span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Judul</label>
															<input type="text" class="form-control" value="<?= $aa['judul'] ?>"
																name="judul"/>
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Kategori</label>
															<select name="id_kategori" class="form-control">
																<?php foreach ($kategori as $uu) { ?>
																<option 
																	<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected";} ?>
																	value="<?= $uu['id_kategori'] ?>">
																	<?= $uu['nama_kategori'] ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Keterangan</label>
															<textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Foto</label>
															<input type="file" name="foto" class="form-control"
																accept="image/png, image/jpg, image/jpeg" />
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary"
															data-dismiss="modal">Batal</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
