<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<h4 class="mb-2 text-gray-800">Tambah pelanggan</h4>
<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-end py-3">
        <button onclick="history.back()" class="btn btn-secondary btn-sm mb-3">
            <i class="fas fa-arrow-left    "></i> Kembali
        </button>
    </div>

    <div class="card-body">
        <form action="/pelanggan/tambah" method="post">
            <div class="form-group">
              <label for="">Nama Pelanggan</label>
              <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Telepon</label>
              <input type="number" name="telepon" id="telepon" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>