<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">

    <h4 class="mb-2 text-gray-800">Ubah Detail Servis</h4>

    <div class="card shadow mb-4">

        <div class="card-header d-flex justify-content-end py-3">
            <button onclick="history.back()" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Kembali
            </button>
        </div>

        <div class="card-body">

            <form action="<?= base_url('detailServis/ubah/' . $model->id_detail_servis) ?>" method="post">

             <input type="hidden" name="id_detail_servis" value="<?= $model->id_detail_servis?>">
                <!-- MEKANIK -->
                <div class="form-group mb-3">
                    <label for="id_mekanik">Mekanik</label>
                    <select name="id_mekanik" id="id_mekanik" class="form-control" required>
                        <option value="" disabled>Pilih Mekanik</option>
                        <?php foreach ($mekanik as $m): ?>
                            <option value="<?= $m->id_mekanik ?>" <?= $m->id_mekanik == $model->id_mekanik ? 'selected' : '' ?>>
                                <?= $m->id_mekanik ?> - <?= esc($m->nama_mekanik) ?> - <?= esc($m->spesialisasi) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- SERVIS -->
                <div class="form-group mb-3">
                    <label for="id_servis">Service</label>
                    <select name="id_servis" id="id_servis" class="form-control" required>
                        <option value="" disabled>Pilih Service</option>
                        <?php foreach ($servis as $s): ?>
                            <option value="<?= $s->id_servis ?>" <?= $s->id_servis == $model->id_servis ? 'selected' : '' ?>>
                                <?= $s->id_servis ?> - <?= esc($s->keluhan) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- DESKRIPSI -->
                <div class="form-group mb-3">
                    <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan</label>
                    <textarea 
                        name="deskripsi_pekerjaan" 
                        id="deskripsi_pekerjaan" 
                        class="form-control" 
                        required
                    ><?= esc($model->deskripsi_pekerjaan) ?></textarea>
                </div>

                <!-- BIAYA -->
                <div class="form-group mb-3">
                    <label for="biaya_jasa">Biaya Jasa</label>
                    <input 
                        type="number" 
                        name="biaya_jasa" 
                        id="biaya_jasa" 
                        class="form-control" 
                        value="<?= esc($model->biaya_jasa) ?>" 
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
