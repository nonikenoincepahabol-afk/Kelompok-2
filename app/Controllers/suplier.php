<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\suplierModel;
use CodeIgniter\HTTP\ResponseInterface;

class suplier extends BaseController
{
    protected $model;
    public function __construct() {
        $this->model = new suplierModel();
    }
    public function index()
    {
        $data['model'] = $this->model->findAll();
        return view('suplier/index',$data);
    }
    public function tambah()
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('suplier'));
        }
        return view('suplier/tambah');
    }
    public function ubah($id = null)
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('suplier'));
        }
        $data['model']= $this->model->where('id_suplier', $id)->first();
        return view('suplier/ubah', $data);
    }
    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('suplier'));
    }
    
}