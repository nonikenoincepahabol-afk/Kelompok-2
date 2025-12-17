<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h2>Daftar Servis</h2>

<a href="/servis/create" class="btn btn-primary">Tambah Servis</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nomor Polisi</th>
            <th>Pelanggan</th>
            <th>Mekanik</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($servis as $s): ?>
        <tr>
            <td><?= $s['id'] ?></td>
            <td><?= $s['nomor_polisi'] ?></td>
            <td><?= $s['nama_pelanggan'] ?></td>
            <td><?= $s['nama_mekanik'] ?></td>
            <td><?= $s['tanggal_servis'] ?></td>
            <td><?= ucfirst($s['status']) ?></td>
            <td>
                <a href="/servis/detail/<?= $s['id'] ?>" class="btn btn-sm btn-info">Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>