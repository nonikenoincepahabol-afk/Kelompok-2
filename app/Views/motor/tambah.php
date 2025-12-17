<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Tambah Motor</h4>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-end py-3">
        <button onclick="history.back()" class="btn btn-secondary btn-sm mb-3">
            <i class="fas fa-arrow-left"></i> Kembali
        </button>
    </div>

    <div class="card-body">
        <form action="/motor/tambah" method="post">

            <div class="form-group">
                <label for="">Pilih Pelanggan</label>
                <select name="id_pelanggan" id="id_pelanggan" class="form-control" required>
                    <option value="">-- Pilih Pelanggan --</option>
                    <?php foreach ($pelanggan as $p): ?>
                        <option value="<?= $p->id_pelanggan ?>">
                            <?= $p->nama_pelanggan ?> - <?= $p->telepon ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Merk</label>
                <input type="text" name="merk" id="merk" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Model</label>
                <input type="text" name="model" id="model" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Tahun Pembuatan</label>
                <input type="number" name="tahun_pembuatan" id="tahun_pembuatan" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Nomor Polisi</label>
                <input type="text" name="nomor_polisi" id="nomor_polisi" class="form-control">
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection(); ?>
