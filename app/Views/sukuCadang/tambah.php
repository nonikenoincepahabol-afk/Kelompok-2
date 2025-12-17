<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Tambah Suku Cadang</h4>

<div class="card shadow mb-4">

    <div class="card-header d-flex justify-content-end py-3">
        <button onclick="history.back()" class="btn btn-secondary btn-sm mb-3">
            <i class="fas fa-arrow-left"></i> Kembali
        </button>
    </div>

    <div class="card-body">

        <form action="<?= base_url('sukuCadang/tambah') ?>" method="post">

            <div class="form-group">
                <label>Nama Suku Cadang</label>
                <input type="text" name="nama_suku_cadang" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Harga Beli</label>
                <input type="number" name="harga_beli" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
            </div>

        </form>

    </div>
</div>

<?= $this->endSection(); ?>
