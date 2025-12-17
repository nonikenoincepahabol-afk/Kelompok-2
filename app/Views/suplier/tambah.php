<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Tambah Data Supplier</h1>

    <div class="card shadow">
        <div class="card-header">
            <strong>Form Tambah Supplier</strong>
        </div>

        <div class="card-body">

            <form action="<?= base_url('supplier/simpan') ?>" method="post">

                <div class="form-group">
                    <label>Nama Supplier</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" required>
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('supplier') ?>" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>

<?= $this->endSection(); ?>
