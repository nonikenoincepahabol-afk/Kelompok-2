<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h4 class="mb-2 text-gray-800">Ubah Supplier</h4>

<div class="card shadow mb-4">

    <div class="card-header d-flex justify-content-end py-3">
        <button onclick="history.back()" class="btn btn-secondary btn-sm mb-3">
            <i class="fas fa-arrow-left"></i> Kembali
        </button>
    </div>

    <div class="card-body">
        <form action="/supplier/ubah/<?= $model->id_supplier ?>" method="post">
            
    <input type="hidden" name="id_supplier" value="<?= $model->id_supplier ?>">

            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" 
                       name="nama" 
                       id="nama" 
                       class="form-control"
                       value="<?= $model->nama ?>">
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control"><?= $model->alamat ?></textarea>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" 
                       name="email" 
                       id="email" 
                       class="form-control"
                       value="<?= $model->email ?>">
            </div>

            <div class="form-group">
                <label for="">Telepon</label>
                <input type="number" 
                       name="telepon" 
                       id="telepon" 
                       class="form-control"
                       value="<?= $model->telepon ?>">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection(); ?>
