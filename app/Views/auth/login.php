<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Bengkel - Login</title> <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        /* Mengubah latar belakang body menjadi warna yang lebih industrial/gelap */
        .bg-gradient-industrial {
            background-color: #343a40; /* Abu-abu gelap/hitam */
            background-image: linear-gradient(180deg, #5a6268 10%, #343a40 100%); /* Gradasi abu-abu */
        }
        
        /* Mengubah warna tombol utama dan warna gradasi utama */
        .btn-primary, .bg-gradient-primary {
            background-color: #030302ff; /* Kuning/Amber - Warna yang umum di alat berat/keselamatan */
            border-color: #ffc107;
        }

        /* Mengubah warna latar belakang body di kelas SB Admin 2 */
        body.bg-gradient-primary {
            background-color: #ffc107; /* Mengganti warna primary default SB Admin 2 */
            background-image: linear-gradient(180deg, #ffca2c 10%, #ffc107 100%); 
        }

        /* Override untuk menggunakan warna industrial pada body */
        body.bg-gradient-primary {
            /* Hapus kelas body.bg-gradient-primary dan ganti dengan kelas baru di elemen <body> */
        }
        
        /* Gambar latar belakang Login: Menggunakan gambar yang relevan dengan bengkel */
        .bg-bengkel-image {
            background: url('img/workshop-tools.jpg'); /* GANTI DENGAN PATH GAMBAR BENGKEL ANDA */
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #343a40; /* Fallback warna gelap */
        }
        
        /* Mengubah warna teks di dalam kartu agar kontras dengan warna gelap (jika body diubah ke industrial) */
        .text-gray-900 {
            color: #212529 !important; /* Biarkan tetap gelap jika menggunakan card latar belakang putih */
        }

        /* Mengubah tampilan card agar terlihat lebih kokoh, jika perlu */
        .card {
            border-radius: 1rem;
        }
    </style>
</head>

<body class="bg-gradient-industrial"> <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-bengkel-image"></div> 
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">🔧 Akses Sistem Bengkel 🛠️</h1>
                                    </div>

                                    <?php if(session()->getFlashdata('error')): ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    <?php endif; ?>

                                    <form class="user" action="<?= base_url('login/auth') ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="username" placeholder="Masukkan Nama Pengguna..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Kata Sandi" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-secondary btn-user btn-block">
                                            MASUK
                                        </button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Lupa Kata Sandi?</a>
                                    </div>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>