<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembelianModel;

class Pembelian extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PembelianModel();
    }

    // INDEX
    public function index()
    {
        $data['model'] = $this->model->getAllPembelian();
        return view('pembelian/index', $data);
    }

    // TAMBAH
    public function tambah()
    {
        if ($this->request->getMethod() == 'POST') {
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('pembelian'));
        }

        $data = [
            'supplier' => $this->model->getSupplierDropdown()
        ];

        return view('pembelian/tambah', $data);
    }

    // UBAH
    public function ubah($id = null)
    {
        $model = $this->model->where('id_pembelian', $id)->first();

        if ($this->request->getMethod() == 'POST') {
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('pembelian'));
        }

        $data = [
            'model' => $model,
            'supplier' => $this->model->getSupplierDropdown()
        ];

        return view('pembelian/ubah', $data);
    }

    // HAPUS
    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('pembelian'));
    }
}
