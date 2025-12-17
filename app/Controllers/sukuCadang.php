<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\sukuCadangModel;
use CodeIgniter\HTTP\ResponseInterface;

class sukuCadang extends BaseController
{
    protected $model;
    public function __construct() {
        $this->model = new sukuCadangModel();
    }
    public function index()
    {
        $data['model'] = $this->model->findAll();
        return view('sukuCadang/index',$data);
    }
    public function tambah()
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('sukuCadang'));
        }
        return view('sukuCadang/tambah');
    }
    public function ubah($id = null)
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('sukuCadang'));
        }
        $data['model']= $this->model->where('id_suku_cadang', $id)->first();
        return view('sukucadang/ubah', $data);
    }
    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('sukuCadang'));
    }

    
    
}