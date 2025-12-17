<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h4 class="h3 mb-2 text-gray-800">Data Detail Servis</h4>

    <!-- Card Tabel -->
    <div class="card shadow mb-4">
        
       <div class="card-header d-flex justify-content-end py-3">
        <a href="<?= base_url('detailServis/tambah') ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Detail
        </a>
    </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>ID Mekanik</th>
                            <th>ID Servis</th>
                            <th>Deskripsi Pekerjaan</th>
                            <th>Biaya Jasa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($model as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->id_mekanik ?> - <?= esc($row->nama_mekanik) ?></td>
                            <td><?= $row->id_servis?> - <?= esc($row->keluhan) ?></td>
                            <td><?= $row->deskripsi_pekerjaan ?></td>
                            <td>Rp <?= number_format($row->biaya_jasa, 0, ',', '.') ?></td>

                            <td class="text-center">
                                <a href="<?= base_url('detailServis/ubah/'.$row->id_detail_servis) ?>" 
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                
                                <a href="<?= base_url('detailServis/hapus/'.$row->id_detail_servis) ?>"
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

</div>

<?= $this->endSection(); ?>
