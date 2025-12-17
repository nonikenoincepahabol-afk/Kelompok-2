<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\detailPembelianModel;
use App\Models\MekanikModel;
use CodeIgniter\HTTP\ResponseInterface;

class detailPembelianControllers extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new DetailPembelianModel();
    }

    // INDEX
    public function index()
    {
        $data['model'] = $this->model->getAllDetail();
        return view('detailPembelian/index', $data);
    }

    // TAMBAH
    public function tambah()
    {
        if($this->request->getMethod() == 'POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('detailPembelian'));
        }

        $data = [
            'pembelian' => $this->model->getPembelianDropdown(),
            'suku_cadang' => $this->model->getSukuCadangDropdown()
        ];

        return view('detailPembelian/tambah', $data);
    }

    // UBAH
    public function ubah($id = null)
    {
        $model = $this->model->where('id_detail_pembelian', $id)->first();

        if($this->request->getMethod() == 'POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('detailPembelian'));
        }

        $data = [
            'model' => $model,
            'pembelian' => $this->model->getPembelianDropdown(),
            'suku_cadang' => $this->model->getSukuCadangDropdown()
        ];

        return view('detailPembelian/ubah', $data);
    }

    // HAPUS
    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('detailPembelian'));
    }
}