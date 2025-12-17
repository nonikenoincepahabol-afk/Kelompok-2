<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Data Servis</h4>

<div class="card shadow mb-4">

    <div class="card-header d-flex justify-content-end py-3">
        <a href="<?= base_url('servis/tambah') ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Servis
        </a>
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Motor</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal selesai</th>
                        <th>Keluhan</th>
                        <th>Total Biaya</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($model as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->nama_pelanggan ?></td>
                            <td><?= $row->merk . ' ' . $row->model . ' (' . $row->nomor_polisi . ')' ?></td>
                            <td><?= $row->tanggal_masuk ?></td>
                            <td><?= $row->tanggal_selesai ?></td>
                            <td><?= $row->keluhan ?></td>
                            <td>Rp <?= number_format($row->total_biaya, 0, ',', '.') ?></td>

                            <td class="text-center">
                                <!-- <a href="<?= base_url('servis/detail/' . $row->id_servis) ?>"
                                   class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i> Detail
                                </a> -->

                                <a href="<?= base_url('servis/ubah/' . $row->id_servis) ?>"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <a href="<?= base_url('servis/hapus/' . $row->id_servis) ?>"
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
