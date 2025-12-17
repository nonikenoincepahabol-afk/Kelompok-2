<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Ubah Suku Cadang</h4>

<div class="card shadow mb-4">

    <div class="card-header d-flex justify-content-end py-3">
        <button onclick="history.back()" class="btn btn-secondary btn-sm mb-3">
            <i class="fas fa-arrow-left"></i> Kembali
        </button>
    </div>

    <div class="card-body">

        <form action="<?= base_url('sukuCadang/ubah/' . $model->id_suku_cadang) ?>" method="post">

        <input type="hidden" name="id_suku_cadang" value="<?= $model->id_suku_cadang?>">

            <div class="form-group">
                <label>Nama Suku Cadang</label>
                <input type="text" name="nama_suku_cadang" class="form-control"
                       value="<?= $model->nama_suku_cadang ?>" required>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control"
                       value="<?= $model->stok ?>" required>
            </div>

            <div class="form-group">
                <label>Harga Beli</label>
                <input type="number" name="harga_beli" class="form-control"
                       value="<?= $model->harga_beli ?>" required>
            </div>

            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control"
                       value="<?= $model->harga_jual ?>" required>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm" type="submit">Simpan Perubahan</button>
            </div>

        </form>

    </div>
</div>

<?= $this->endSection(); ?>
