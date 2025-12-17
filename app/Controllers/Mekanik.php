<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MekanikModel;
use CodeIgniter\HTTP\ResponseInterface;

class Mekanik extends BaseController
{
    protected $model;
    public function __construct() {
        $this->model = new MekanikModel();
    }
    public function index()
    {
        $data['model'] = $this->model->findAll();
        return view('mekanik/index',$data);
    }
    public function tambah()
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('mekanik'));
        }
        return view('mekanik/tambah');
    }
    public function ubah($id = null)
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('mekanik'));
        }
        $data['model']= $this->model->where('id_mekanik', $id)->first();
        return view('mekanik/ubah', $data);
    }
    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('mekanik'));
    }
    
}
