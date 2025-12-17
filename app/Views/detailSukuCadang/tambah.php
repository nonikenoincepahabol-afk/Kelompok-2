<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">

    <h4 class="mb-2 text-gray-800">Tambah Detail Suku Cadang</h4>

    <div class="card shadow mb-4">

       
        <div class="card-header d-flex justify-content-end py-3">
            <button onclick="history.back()" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Kembali
            </button>
        </div>

        <div class="card-body">

            <form action="<?= base_url('detailSukuCadang/tambah') ?>" method="post">

       
                <div class="form-group mb-3">
                    <label for="id_servis">Servis</label>
                    <select name="id_servis" id="id_servis" class="form-control" required>
                        <option value="" disabled selected>Pilih Servis</option>
                        <?php foreach ($serv as $row): ?>
                            <option value="<?= $row->id_servis ?>">
                                <?= $row->id_servis ?> - <?= esc($row->keluhan) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

          
                <div class="form-group mb-3">
                    <label for="id_suku_cadang">Suku Cadang</label>
                    <select name="id_suku_cadang" id="id_suku_cadang" class="form-control" required>
                        <option value="" disabled selected>Pilih Suku Cadang</option>
                        <?php foreach ($model as $item): ?>
                            <option value="<?= $item->id_suku_cadang ?>">
                                <?= esc($item->nama_suku_cadang) ?> (Stok: <?= $item->stok ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

            
                <div class="form-group mb-3">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" required>
                </div>

               
                <div class="form-group mb-3">
                    <label for="harga_satuan">Harga Satuan</label>
                    <input type="number" class="form-control" name="harga_satuan" id="harga_satuan" required>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> Simpan
                </button>

            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>
