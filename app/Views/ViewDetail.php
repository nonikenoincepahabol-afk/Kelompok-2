<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h2>Detail Servis #<?= $model['id_servis'] ?></h2>

<div class="row">
    <div class="col-md-6">
        <p><strong>Motor:</strong> <?= $servis['nomor_polisi'] ?></p>
        <p><strong>Pelanggan:</strong> <?= $servis['nama_pelanggan'] ?></p>
        <p><strong>Mekanik:</strong> <?= $servis['nama_mekanik'] ?></p>
        <p><strong>Tanggal:</strong> <?= $servis['tanggal_servis'] ?></p>
        <p><strong>Keluhan:</strong> <?= $servis['keluhan'] ?></p>
        <p><strong>Status:</strong> <?= ucfirst($servis['status']) ?></p>
    </div>
</div>

<hr>

<h4>Detail Pekerjaan</h4>
<table class="table">
    <thead>
        <tr>
            <th>Jenis Pekerjaan</th>
            <th>Biaya</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model as $ds): ?>
        <tr>
            <td><?= $ds['jenis_pekerjaan'] ?></td>
            <td>Rp <?= number_format($ds['biaya'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h4>Detail Suku Cadang</h4>
<table class="table">
    <thead>
        <tr>
            <th>Nama Suku Cadang</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($detailSukuCadang as $dsc): ?>
        <tr>
            <td><?= $dsc['nama_suku_cadang'] ?></td>
            <td><?= $dsc['jumlah'] ?></td>
            <td>Rp <?= number_format($dsc['harga_satuan'], 0, ',', '.') ?></td>
            <td>Rp <?= number_format($dsc['jumlah'] * $dsc['harga_satuan'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h4>Pembayaran</h4>
<table class="table">
    <thead>
        <tr>
            <th>Tanggal Bayar</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pembayaran as $p): ?>
        <tr>
            <td><?= $p['tanggal_bayar'] ?></td>
            <td>Rp <?= number_format($p['jumlah_bayar'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<hr>

<div class="row">
    <div class="col-md-6">
        <p><strong>Total Biaya Servis:</strong> Rp <?= number_format($total_biaya_servis, 0, ',', '.') ?></p>
        <p><strong>Total Biaya Suku Cadang:</strong> Rp <?= number_format($total_biaya_suku_cadang, 0, ',', '.') ?></p>
        <p><strong>Total Keseluruhan:</strong> Rp <?= number_format($total_keseluruhan, 0, ',', '.') ?></p>
        <p><strong>Total Bayar:</strong> Rp <?= number_format($total_bayar, 0, ',', '.') ?></p>
        <p><strong>Sisa Bayar:</strong> Rp <?= number_format($sisa_bayar, 0, ',', '.') ?></p>
    </div>
</div>

<a href="/servis" class="btn btn-secondary">Kembali</a>

<?= $this->endSection() ?>