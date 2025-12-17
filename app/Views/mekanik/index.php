<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<h4 class="mb-2 text-gray-800">Data Mekanik</h4>
<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-end py-3">
        <a href="<?= base_url('mekanik/tambah') ?>" class="btn btn-primary btn-sm mb-3">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Mekanik</th>
                        <th>Spesialisasi</th>
                        
                        <th>telepon</th>                      
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($model as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->nama_mekanik?></td>
                            <td><?= $row->spesialisasi?></td>
                            <td><?= $row->telepon?></td>
                            


                            <td class="text-center">
                                <a href="<?= base_url('mekanik/ubah/' . $row->id_mekanik) ?>"
                                    class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <a href="<?= base_url('mekanik/hapus/' . $row->id_mekanik) ?>"
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