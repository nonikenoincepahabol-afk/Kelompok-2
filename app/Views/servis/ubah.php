<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Ubah Servis</h4>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-end py-3">
        <button onclick="history.back()" class="btn btn-secondary btn-sm mb-3">
            <i class="fas fa-arrow-left"></i> Kembali
        </button>
    </div>

    <div class="card-body">
        <form action="<?= base_url('servis/ubah/'.$model->id_servis) ?>" method="post">

            <input type="hidden" name="id_servis" value="<?= $model->id_servis ?>">

            <!-- PILIH PELANGGAN -->
            <div class="form-group">
                <label for="">Pilih Pelanggan</label>
                <select name="id_pelanggan" id="id_pelanggan" class="form-control" required>
                    <option value="">-- Pilih Pelanggan --</option>
                    <?php foreach ($pelanggan as $p): ?>
                        <option value="<?= $p->id_pelanggan ?>"
                            <?= ($p->id_pelanggan == $model->id_pelanggan) ? 'selected' : '' ?>>
                            <?= $p->nama_pelanggan ?> - <?= $p->telepon ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- PILIH MOTOR -->
            <div class="form-group">
                <label for="">Pilih Motor</label>
                <select name="id_motor" id="id_motor" class="form-control" required>
                    <option value="">-- Pilih Motor --</option>
                    <?php foreach ($motor as $m): ?>
                        <option value="<?= $m->id_motor ?>"
                            <?= ($m->id_motor == $model->id_motor) ? 'selected' : '' ?>>
                            <?= $m->merk ?> <?= $m->model ?> (<?= $m->nomor_polisi ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="form-control"
                       value="<?= $model->tanggal_masuk ?>" required>
            </div>

            <div class="form-group">
                <label for="">Tanggal Keluar</label>
                <input type="date" name="tanggal_selesai" class="form-control"
                       value="<?= $model->tanggal_selesai ?>" required>
            </div>

            <div class="form-group">
                <label for="">Keluhan</label>
                <textarea name="keluhan" class="form-control" rows="4" required><?= $model->keluhan ?></textarea>
            </div>

            <div class="form-group">
                <label for="">Total Biaya</label>
                <input type="number" name="total_biaya" class="form-control"
                       value="<?= $model->total_biaya ?>" required>
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>

        </form>
    </div>
</div>

<script>
    document.getElementById('id_pelanggan').addEventListener('change', function () {
        let pelangganId = this.value;
        let motorSelect = document.getElementById('id_motor');

        motorSelect.innerHTML = '<option value="">Mengambil data motor...</option>';

        if (pelangganId !== "") {
            fetch('<?= base_url("servis/getMotorByPelanggan") ?>/' + pelangganId)
                .then(response => response.json())
                .then(data => {
                    motorSelect.innerHTML = '<option value="">-- Pilih Motor --</option>';
                    data.forEach(m => {
                        motorSelect.innerHTML += `
                            <option value="${m.id_motor}" ${m.id_motor == <?= $model->id_motor ?> ? 'selected' : ''}>
                                ${m.merk} ${m.model} (${m.nomor_polisi})
                            </option>
                        `;
                    });
                });
        } else {
            motorSelect.innerHTML = '<option value="">-- Pilih Motor --</option>';
        }
    });
</script>

<?= $this->endSection(); ?>
