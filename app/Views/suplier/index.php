<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Supplier</h1>

    <a href="<?= base_url('supplier/tambah') ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Supplier
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Supplier</h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">

                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>ID Supplier</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($model as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->id_supplier ?></td>
                            <td><?= $row->nama ?></td>
                            <td><?= $row->alamat ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= $row->telepon ?></td>

                            <td class="text-center">
                                <a href="<?= base_url('supplier/edit/'.$row->id_supplier) ?>" 
                                   class="btn btn-warning btn-sm">
                                   <i class="fas fa-edit"></i>
                                </a>

                                <a href="<?= base_url('supplier/hapus/'.$row->id_supplier) ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus?')">
                                   <i class="fas fa-trash"></i>
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
