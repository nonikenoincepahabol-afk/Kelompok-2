<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <h4 class="mb-2 text-gray-800">Tambah Pembelian</h4>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-end py-3">
            <button onclick="history.back()" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Kembali
            </button>
        </div>

        <div class="card-body">
            <form action="<?= base_url('pembelian/tambah') ?>" method="post">

                <div class="form-group mb-3">
                    <label for="id_supplier">Supplier</label>
                    <select name="id_supplier" class="form-control" required>
                        <option value="" disabled selected>Pilih Supplier</option>
                        <?php foreach($supplier as $s): ?>
                            <option value="<?= $s->id_supplier ?>"><?= $s->nama ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="total">Total</label>
                    <input type="number" name="total" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
