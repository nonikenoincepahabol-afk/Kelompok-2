<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Tambah Pembayaran</h4>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-end py-3">
        <button onclick="history.back()" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> Kembali
        </button>
    </div>

    <div class="card-body">

        <form action="<?= base_url('pembayaran/tambah') ?>" method="post">

            <div class="form-group">
                <label for="">Pilih Servis</label>
                <select name="id_servis" id="id_servis" class="form-control" required>
                    <option value="">-- Pilih Servis --</option>
                    <?php foreach ($servis as $s): ?>
                        <option value="<?= $s->id_servis ?>">
                            Servis #<?= $s->id_servis ?> -
                            Motor ID: <?= $s->id_motor ?> -
                            Keluhan: <?= $s->keluhan ?> -
                            Biaya: Rp <?= number_format($s->total_biaya, 0, ',', '.') ?>
                        </option>
                    <?php endforeach; ?>
                </select>

            </div>


            <div class="form-group">
                <label for="">Tanggal Pembayaran</label>
                <input type="date" name="tgl_pembayaran" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Jumlah Pembayaran</label>
                <input type="number" name="jumlah_pembayaran" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Metode Pembayaran</label>
                <select name="metode_pembayaran" class="form-control" required>
                    <option value="">-- Pilih Metode --</option>
                    <option>Cash</option>
                    <option>Transfer</option>
                    <option>QRIS</option>
                    <option>Debit</option>
                    <option>Kredit</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>

        </form>

    </div>
</div>

<?= $this->endSection(); ?>