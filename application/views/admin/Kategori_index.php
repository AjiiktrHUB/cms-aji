<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="modal fade show" id="basicModal" style="display: none; padding-right: 17px;" aria-modal="false">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('admin/kategori/simpan')?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Kategori</h5>
					<button type="button" class="close" data-dismiss="modal"><span></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Nama Kategori</label>
							<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required>
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
		Kategori</button>
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
							<th>Nama Katgeori Konten</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($kategori as $aa) { ?>
						<tr>
							<td><?= $no++?></td>
							<td><?= $aa['nama_kategori'] ?></td>
							<td>
								<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
									class="btn btn-sm btn-danger"
									onClick="return confirm('Anda yakin ingin menghapus data?')">
									<span><i class="fa-solid fa-trash"></i></span>
								</a>
								<button type="button" class="btn btn-sm btn-success mb-0" data-toggle="modal"
									data-target="#edit<?= $aa['id_kategori'] ?>">
									<span><i class="fa-solid fa-pen-to-square"></i></span>
								</button>
								<div class="modal fade show" id="edit<?= $aa['id_kategori'] ?>"
									style="display: none; padding-right: 17px;" aria-modal="false">
									<div class="modal-dialog" role="document">
										<form action="<?= base_url('admin/kategori/update')?>" method="post">
											<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Update Kategori Konten</h5>
													<button type="button" class="close"
														data-dismiss="modal"><span></span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Nama</label>
															<input type="text" class="form-control"
																value="<?= $aa['nama_kategori']?>" name="nama_kategori"
																required>
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
