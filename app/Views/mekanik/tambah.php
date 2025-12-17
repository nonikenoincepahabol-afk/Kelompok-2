<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Tambah Data Mekanik</h1>

    <div class="card shadow">
        <div class="card-header">
            <strong>Form Tambah Mekanik</strong>
        </div>

        <div class="card-body">

            <form action="<?= base_url('mekanik/tambah') ?>" method="post">

                <div class="form-group">
                    <label>Nama Mekanik</label>
                    <input type="text" name="nama_mekanik" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Spesialisasi</label>
                    <input type="text" name="spesialisasi" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" required>
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('mekanik') ?>" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>

<?= $this->endSection(); ?>
