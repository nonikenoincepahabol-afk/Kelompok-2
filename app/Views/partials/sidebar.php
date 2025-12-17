<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-tools"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bengkel Motor</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- DATA MASTER -->
    <div class="sidebar-heading">Data Master</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterData"
            aria-expanded="true" aria-controls="masterData">
            <i class="fas fa-fw fa-database"></i>
            <span>Master Data</span>
        </a>
        <div id="masterData" class="collapse" aria-labelledby="headingMaster" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('pelanggan'); ?>">Pelanggan</a>
                <a class="collapse-item" href="<?= base_url('motor'); ?>">Motor</a>
                <a class="collapse-item" href="<?= base_url('mekanik'); ?>">Mekanik</a>
                <a class="collapse-item" href="<?= base_url('sukuCadang'); ?>">Suku Cadang</a>
                <a class="collapse-item" href="<?= base_url('supplier'); ?>">Supplier</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- SERVIS -->
    <div class="sidebar-heading">Servis</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuServis"
            aria-expanded="true" aria-controls="menuServis">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Servis Motor</span>
        </a>
        <div id="menuServis" class="collapse" aria-labelledby="headingServis" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('servis'); ?>">Data Servis</a>
                <a class="collapse-item" href="<?= base_url('detailServis'); ?>">Detail Servis</a>
                <a class="collapse-item" href="<?= base_url('detailSukuCadang'); ?>">Penggunaan Suku Cadang</a>
                <a class="collapse-item" href="<?= base_url('pembayaran'); ?>">Pembayaran Servis</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- PEMBELIAN -->
    <div class="sidebar-heading">Pembelian</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuPembelian"
            aria-expanded="true" aria-controls="menuPembelian">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Pembelian</span>
        </a>
        <div id="menuPembelian" class="collapse" aria-labelledby="headingPembelian" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('pembelian'); ?>">Data Pembelian</a>
                <a class="collapse-item" href="<?= base_url('detailPembelian'); ?>">Detail Pembelian</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- LAPORAN -->
    <!-- <div class="sidebar-heading">Laporan</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuLaporan"
            aria-expanded="true" aria-controls="menuLaporan">
            <i class="fas fa-fw fa-chart-line"></i>
            <span>Laporan</span>
        </a>
        <div id="menuLaporan" class="collapse" aria-labelledby="headingLaporan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('laporan/servis'); ?>">Laporan Servis</a>
                <a class="collapse-item" href="<?= base_url('laporan/pembelian'); ?>">Laporan Pembelian</a>
                <a class="collapse-item" href="<?= base_url('laporan/keuangan'); ?>">Laporan Keuangan</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
