<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Data Pembayaran</h4>

<div class="card shadow mb-4">

    <div class="card-header d-flex justify-content-end py-3">
        <a href="<?= base_url('pembayaran/tambah') ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Pembayaran
        </a>
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>ID Servis</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Jumlah Pembayaran</th>
                        <th>Metode Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($model as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->id_servis ?></td>
                            <td><?= $row->tgl_pembayaran ?></td>
                            <td>Rp <?= number_format($row->jumlah_pembayaran, 0, ',', '.') ?></td>
                            <td><?= $row->metode_pembayaran ?></td>

                            <td class="text-center">

                                <a href="<?= base_url('pembayaran/ubah/' . $row->id_pembayaran) ?>"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <a href="<?= base_url('pembayaran/hapus/' . $row->id_pembayaran) ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>
