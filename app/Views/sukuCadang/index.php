<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Data Suku Cadang</h4>

<div class="card shadow mb-4">

    <div class="card-header d-flex justify-content-end py-3">
        <a href="<?= base_url('sukuCadang/tambah') ?>" class="btn btn-primary btn-sm mb-3">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                      
                        <th>Nama Suku Cadang</th>
                        <th>Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($model as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <!-- <td><?= $row->id_suku_cadang ?></td> -->
                            <td><?= $row->nama_suku_cadang ?></td>
                            <td><?= $row->stok ?></td>
                            <td><?= number_format($row->harga_beli, 0, ',', '.') ?></td>
                            <td><?= number_format($row->harga_jual, 0, ',', '.') ?></td>

                            <td class="text-center">
                                <a href="<?= base_url('sukuCadang/ubah/' . $row->id_suku_cadang) ?>" 
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>    

                                <a href="<?= base_url('sukuCadang/hapus/' . $row->id_suku_cadang) ?>"
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
