<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Data Detail Suku Cadang</h4>

<div class="card shadow mb-4">

    <div class="card-header d-flex justify-content-end py-3">
        <a href="<?= base_url('detailSukuCadang/tambah') ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Detail
        </a>
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>ID Servis</th>
                        <th>ID Suku Cadang</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($model as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->id_servis ?> - <?= $row->keluhan?> </td>

                            <td><?= $row->id_suku_cadang ?> - <?= $row->nama_suku_cadang?> </td>
                            <td><?= $row->jumlah ?></td>
                            <td>Rp <?= number_format($row->harga_satuan, 0, ',', '.') ?></td>

                            <td>
                                Rp <?= number_format($row->jumlah * $row->harga_satuan, 0, ',', '.') ?>
                            </td>

                            <td class="text-center">

                                <a href="<?= base_url('detailSukuCadang/ubah/' . $row->id_detail_suku_cadang) ?>"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <a href="<?= base_url('detailSukuCadang/hapus/' . $row->id_detail_suku_cadang) ?>"
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
