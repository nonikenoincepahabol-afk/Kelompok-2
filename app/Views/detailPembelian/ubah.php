<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <h4 class="mb-2 text-gray-800">Ubah Detail Pembelian</h4>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-end py-3">
            <button onclick="history.back()" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Kembali
            </button>
        </div>

        <div class="card-body">
            <form action="<?= base_url('detailPembelian/ubah/'.$model->id_detail_pembelian) ?>" method="post">

                <div class="form-group mb-3">
                    <label for="id_pembelian">Pembelian</label>
                    <select name="id_pembelian" class="form-control" required>
                        <option value="" disabled>Pilih Pembelian</option>
                        <?php foreach($pembelian as $p): ?>
                            <option value="<?= $p->id_pembelian ?>" <?= $p->id_pembelian == $model->id_pembelian ? 'selected' : '' ?>>
                                <?= $p->id_pembelian ?> - <?= $p->tanggal ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="id_suku_cadang">Suku Cadang</label>
                    <select name="id_suku_cadang" class="form-control" required>
                        <option value="" disabled>Pilih Suku Cadang</option>
                        <?php foreach($suku_cadang as $s): ?>
                            <option value="<?= $s->id_suku_cadang ?>" <?= $s->id_suku_cadang == $model->id_suku_cadang ? 'selected' : '' ?>>
                                <?= $s->nama_suku_cadang ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" value="<?= $model->jumlah ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="harga_beli_satuan">Harga Beli Satuan</label>
                    <input type="number" name="harga_beli_satuan" class="form-control" value="<?= $model->harga_beli_satuan ?>" required>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
