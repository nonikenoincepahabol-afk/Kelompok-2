<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\pembayaranModel;
use App\Models\servisModel;
use CodeIgniter\HTTP\ResponseInterface;

class pembayaran extends BaseController
{
    protected $model;
    protected $servisModel;

    public function __construct() {
        $this->model = new pembayaranModel();
        $this->servisModel = new servisModel();   // tambahan
    }

    public function index()
    {
        $data['model'] = $this->model->findAll();
        return view('pembayaran/index',$data);
    }

    public function tambah()
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('pembayaran'));
        }

        $data['servis'] = $this->servisModel->findAll();

        return view('pembayaran/tambah', $data);
    }

    public function ubah($id = null)
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('pembayaran'));
        }

        $data['model']= $this->model->where('id_pembayaran', $id)->first();
        $data['servis'] = $this->servisModel->findAll();

        return view('pembayaran/ubah', $data);
    }

    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('pembayaran'));
    }
}
