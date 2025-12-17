<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">

    <h4 class="mb-2 text-gray-800">Ubah Detail Suku Cadang</h4>

    <div class="card shadow mb-4">

        <!-- Tombol Kembali -->
        <div class="card-header d-flex justify-content-end py-3">
            <button onclick="history.back()" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Kembali
            </button>
        </div>

        <div class="card-body">

            <form action="<?= base_url('detailSukuCadang/ubah/' . $model->id_detail_suku_cadang) ?>" method="post">

                <input type="hidden" name="id_detail_suku_cadang" value="<?= $model->id_detail_suku_cadang ?>">
                <!-- SERVIS -->
                <div class="form-group mb-3">
                    <label for="id_servis">Servis</label>
                   <select name="id_servis" id="id_servis" class="form-control" required>
    <option value="" disabled>Pilih Servis</option>

    <?php foreach ($serv as $row): ?>
        <option 
            value="<?= $row->id_servis ?>"
            <?= ($row->id_servis == $model->id_servis) ? 'selected' : '' ?>
        >
            <?= $row->id_servis ?> - <?= esc($row->keluhan) ?>
        </option>
    <?php endforeach; ?>
</select>

                </div>

                <!-- SUKU CADANG -->
                <div class="form-group mb-3">
                    <label for="id_suku_cadang">Suku Cadang</label>
                   <select name="id_suku_cadang" id="id_suku_cadang" class="form-control" required>
    <option value="" disabled>Pilih Suku Cadang</option>

    <?php foreach ($sc as $item): ?>
        <option 
            value="<?= $item->id_suku_cadang ?>"
            <?= ($item->id_suku_cadang == $model->id_suku_cadang) ? 'selected' : '' ?>
        >
            <?= esc($item->nama_suku_cadang) ?> (Stok: <?= $item->stok ?>)
        </option>
    <?php endforeach; ?>
</select>
                </div>

                <!-- JUMLAH -->
                <div class="form-group mb-3">
                    <label for="jumlah">Jumlah</label>
                    <input 
                        type="number" 
                        class="form-control" 
                        name="jumlah" 
                        id="jumlah"
                        value="<?= $model->jumlah ?>"
                        required
                    >
                </div>

                <!-- HARGA SATUAN -->
                <div class="form-group mb-3">
                    <label for="harga_satuan">Harga Satuan</label>
                    <input 
                        type="number" 
                        class="form-control" 
                        name="harga_satuan" 
                        id="harga_satuan"
                        value="<?= $model->harga_satuan ?>"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>

            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>
