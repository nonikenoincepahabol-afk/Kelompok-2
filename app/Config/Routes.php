<?php 

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'Login::index'); // halaman login
$routes->post('login/auth', 'Login::auth'); // proses login
$routes->get('logout', 'Login::logout'); // logout


$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'dash::index');

    // // Dashboard atau view
    // $routes->get('/views', 'view::index');

    // Service
    // $routes->group('servis', function($routes){
    //     $routes->get('/', 'servis::index');
    //     $routes->get('create', 'servis::create');
    //     $routes->get('detail/(:num)', 'servis::detail/$1');
    // });



    // Pelanggan
    $routes->group('pelanggan', function($routes){
        $routes->get('/', 'Pelanggan::index');
        $routes->add('tambah', 'Pelanggan::tambah');
        $routes->add('ubah/(:any)', 'Pelanggan::ubah/$1');
        $routes->get('hapus/(:num)', 'Pelanggan::hapus/$1');
    });

    // Motor
    $routes->group('motor', function($routes){
        $routes->get('/', 'Motor::index');
        $routes->add('tambah', 'Motor::tambah');
        $routes->add('ubah/(:num)', 'Motor::ubah/$1');
        $routes->get('hapus/(:num)', 'Motor::hapus/$1');
    });

    // Mekanik
    $routes->group('mekanik', function($routes){
        $routes->get('/', 'Mekanik::index');
        $routes->add('tambah', 'Mekanik::tambah');
        $routes->add('ubah/(:num)', 'Mekanik::ubah/$1');
        $routes->get('hapus/(:num)', 'Mekanik::hapus/$1');
    });

    // Suku Cadang
    $routes->group('sukuCadang', function($routes){
        $routes->get('/', 'sukuCadang::index');
        $routes->add('tambah', 'sukuCadang::tambah');
        $routes->add('ubah/(:num)', 'sukuCadang::ubah/$1');
        $routes->get('hapus/(:num)', 'sukuCadang::hapus/$1');
    });

    // Servis
    $routes->group('servis', function($routes){
        $routes->get('/', 'servis::index');
        $routes->add('tambah', 'servis::tambah');
        $routes->add('ubah/(:num)', 'servis::ubah/$1');
        $routes->get('hapus/(:num)', 'servis::hapus/$1');
        $routes->get('getMotorByPelanggan/(:num)', 'Servis::getMotorByPelanggan/$1');
    });

    // Supplier
    $routes->group('supplier', function($routes){
        $routes->get('/', 'supplier::index');
        $routes->add('tambah', 'supplier::tambah');
        $routes->add('ubah/(:num)', 'supplier::ubah/$1');
        $routes->get('hapus/(:num)', 'supplier::hapus/$1');
    });

    // Pembayaran
    $routes->group('pembayaran', function($routes){
        $routes->get('/', 'pembayaran::index');
        $routes->add('tambah', 'pembayaran::tambah');
        $routes->add('ubah/(:num)', 'pembayaran::ubah/$1');
        $routes->get('hapus/(:num)', 'pembayaran::hapus/$1');
    });

    // Detail Suku Cadang
    $routes->group('detailSukuCadang', function($routes){
        $routes->get('/', 'detailSukuCadang::index');
        $routes->add('tambah', 'detailSukuCadang::tambah');
        $routes->add('ubah/(:num)', 'detailSukuCadang::ubah/$1');
        $routes->get('hapus/(:num)', 'detailSukuCadang::hapus/$1');
    });

    // Detail Servis
    $routes->group('detailServis', function($routes){
        $routes->get('/', 'detailServis::index');
        $routes->add('tambah', 'detailServis::tambah');
        $routes->add('ubah/(:num)', 'detailServis::ubah/$1');
        $routes->get('hapus/(:num)', 'detailServis::hapus/$1');
    });

    // Pembelian
    $routes->group('pembelian', function($routes){
        $routes->get('/', 'pembelian::index');
        $routes->add('tambah', 'pembelian::tambah');
        $routes->add('ubah/(:num)', 'pembelian::ubah/$1');
        $routes->get('hapus/(:num)', 'pembelian::hapus/$1');
    });

    // Detail Pembelian
    $routes->group('detailPembelian', function($routes){
        $routes->get('/', 'detailPembelianControllers::index');
        $routes->add('tambah', 'detailPembelianControllers::tambah');
        $routes->add('ubah/(:num)', 'detailPembelianControllers::ubah/$1');
        $routes->get('hapus/(:num)', 'detailPembelianControllers::hapus/$1');
    });

});
