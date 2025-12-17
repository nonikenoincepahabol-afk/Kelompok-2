<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pelanggan extends BaseController
{
    protected $model;
    public function __construct() {
        $this->model = new PelangganModel();
    }
    public function index()
    {
        $data['model'] = $this->model->findAll();
        return view('pelanggan/index',$data);
    }
    public function tambah()
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('pelanggan'));
        }
        return view('pelanggan/tambah');
    }   
    public function ubah($id = null)
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('pelanggan'));
        }
       $data['model'] = $this->model->where('id_pelanggan', $id)->first();
        return view('pelanggan/ubah', $data);
    }
    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('pelanggan'));
    }
    
}
