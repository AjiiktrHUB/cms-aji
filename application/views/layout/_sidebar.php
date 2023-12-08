<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Menu</li>
            <li><a href="<?= site_url('admin/home')?>" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Dashboard</span></a>
            <li><a href="<?= site_url('admin/caraousel')?>" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Coraousel</span></a>
            <li><a href="<?= site_url('admin/galery')?>" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Galery</span></a>
            <li><a href="<?= site_url('admin/kategori')?>" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Kategori Konten</span></a>
            <li><a href="<?= site_url('admin/konten')?>" aria-expanded="false"><i class="icon icon-form"></i><span class="nav-text">Konten</span></a>
            <?php if($this->session->userdata('level')=='Admin'){ ?>
            <li><a href="<?= site_url('admin/user')?>" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">User</span></a>`
            <li><a href="<?= site_url('admin/konfigurasi')?>" aria-expanded="false"><i class="icon icon-globe-2"></i><span class="nav-text">Konfigurasi</span></a>
            <?php } ?>
            </li>
        </ul>
    </div>
</div>