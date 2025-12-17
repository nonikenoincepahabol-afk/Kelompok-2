<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <h4 class="mb-2 text-gray-800">Ubah Pembelian</h4>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-end py-3">
            <button onclick="history.back()" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Kembali
            </button>
        </div>

        <div class="card-body">
            <form action="<?= base_url('pembelian/ubah/'.$model->id_pembelian) ?>" method="post">
                    <input type="hidden" name="id_pembelian" value="<?= $model->id_pembelian ?>">

                <div class="form-group mb-3">
                    <label for="id_supplier">Supplier</label>
                    <select name="id_supplier" class="form-control" required>
                        <option value="" disabled>Pilih Supplier</option>
                        <?php foreach($supplier as $s): ?>
                            <option value="<?= $s->id_supplier ?>" <?= $s->id_supplier == $model->id_supplier ? 'selected' : '' ?>>
                                <?= $s->nama ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $model->tanggal ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="total">Total</label>
                    <input type="number" name="total" class="form-control" value="<?= $model->total ?>" required>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
