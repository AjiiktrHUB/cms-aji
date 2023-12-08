<div id="ngilang">
    <?= $this->session->flashdata('alert')?>
</div>
<div class="modal fade show" id="basicModal" style="display: none; padding-right: 17px;" aria-modal="false">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('admin/user/simpan')?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal"><span></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Level</label>
                        <select name="level" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Kontributor">Kontributor</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12">
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#basicModal">Tambah User</button>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tabel Pengguna</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table header-border table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($user as $aa) { ?>
                    <tr>
                        <td><?= $aa['username'] ?></td>
                        <td><?= $aa['nama'] ?></td>
                        <td><?= $aa['level'] ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>" class="btn btn-sm btn-danger" onClick="return confirm('Anda yakin ingin menghapus data?')"> <span><i class="fa-solid fa-trash"></i></span></a>
                            <button type="button" class="btn btn-sm btn-success mb-0" data-toggle="modal" data-target="#edit<?= $aa['id_user'] ?>"><span><i class="fa-solid fa-pen-to-square"></i></span></button>
                                <div class="modal fade show" id="edit<?= $aa['id_user'] ?>" style="display: none; padding-right: 17px;" aria-modal="false">
                                <div class="modal-dialog" role="document">
                                    <form action="<?= base_url('admin/user/update')?>" method="post">
                                    <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit User</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" class="form-control" value="<?= $aa['nama'] ?>" name="nama" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label">Username</label>
                                                    <input type="text" class="form-control" value="<?= $aa['username'] ?>" name="username" readonly>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
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