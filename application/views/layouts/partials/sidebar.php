<div class="sidebar-wrapper active">
    <div class="sidebar-header bg-primary">
        <h4 class="text-center"><b class="text-white">SURAT ONLINE</b></h4>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class='sidebar-title'>Menu Utama</li>
            <li class="sidebar-item <?= set_active('surat_masuk') ?>">
                <a href="<?= site_url('surat_masuk') ?>" class='sidebar-link'>
                    <i data-feather="mail" width="20"></i> 
                    <span>Surat Masuk</span>
                </a>
            </li>

            <li class="sidebar-item <?= set_active('surat_keluar') ?>">
                <a href="<?= site_url('surat_keluar') ?>" class='sidebar-link'>
                    <i data-feather="mail" width="20"></i> 
                    <span>Surat Keluar</span>
                </a>
            </li>
           
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>