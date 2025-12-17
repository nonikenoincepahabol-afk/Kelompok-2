<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Data Detail Pembelian</h4>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-end py-3">
        <a href="<?= base_url('detailPembelian/tambah') ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Detail Pembelian
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Pembelian (Tanggal)</th>
                        <th>Suku Cadang</th>
                        <th>Jumlah</th>
                        <th>Harga Beli Satuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($model as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->tanggal ?></td>
                        <td><?= $row->nama_suku_cadang ?></td>
                        <td><?= $row->jumlah ?></td>
                        <td>Rp <?= number_format($row->harga_beli_satuan, 0, ',', '.') ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('detailPembelian/ubah/'.$row->id_detail_pembelian) ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="<?= base_url('detailPembelian/hapus/'.$row->id_detail_pembelian) ?>" class="btn btn-danger btn-sm"
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
