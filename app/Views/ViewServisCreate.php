<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h2>Tambah Servis Baru</h2>

<form action="/servis/create" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label>Motor</label>
        <select name="motor_id" class="form-control" required>
            <option value="">-- Pilih Motor --</option>
            <?php foreach ($motor as $m): ?>
                <option value="<?= $m['id'] ?>"><?= $m['nomor_polisi'] ?> - <?= $m['nama_pelanggan'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Mekanik</label>
        <select name="mekanik_id" class="form-control" required>
            <option value="">-- Pilih Mekanik --</option>
            <?php foreach ($mekanik as $mek): ?>
                <option value="<?= $mek['id'] ?>"><?= $mek['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal Servis</label>
        <input type="date" name="tanggal_servis" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Keluhan</label>
        <textarea name="keluhan" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/servis" class="btn btn-secondary">Batal</a>
</form>

<?= $this->endSection() ?>