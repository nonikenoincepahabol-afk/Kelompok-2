<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServisModel;
use App\Models\detailSukuCadangModel;
use App\Models\SukuCadangModel;

class detailSukuCadang extends BaseController
{
    protected $model;
    protected $servis;
    protected $sukucadang;

    public function __construct()
    {
        $this->model       = new detailSukuCadangModel();
        $this->servis      = new ServisModel();          // perbaikan S kecil jadi S besar
        $this->sukucadang  = new SukuCadangModel();
    }

    public function index()
    {
        $data['model'] = $this->model->getAllDetail();
        return view('detailSukuCadang/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getMethod() == 'POST') {

            $this->model->save($this->request->getPost());

            return redirect()->to(base_url('detailSukuCadang'));
        }

        $data['serv']  = $this->servis->findAll();
        $data['model'] = $this->sukucadang->findAll();

        return view('detailSukuCadang/tambah', $data);
    }

    public function ubah($id = null)
    {
        if ($this->request->getMethod() == 'POST') {

            $this->model->save($this->request->getPost());

            return redirect()->to(base_url('detailSukuCadang'));
        }

        $data['serv']  = $this->servis->findAll();       // supaya dropdown tetap muncul
        $data['sukucadang'] = $this->sukucadang->findAll();
        $data['model'] = $this->model->where('id_detail_suku_cadang', $id)->first();

        return view('detailSukuCadang/ubah', $data);
    }

    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('detailSukuCadang'));
    }
}
