<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\detailServisModel;

use CodeIgniter\HTTP\ResponseInterface;

class detailServis extends BaseController
{
    protected $model;
    public function __construct() {
        $this->model = new detailServisModel(); 
    }
    public function index()
    {
        $data['model'] = $this->model->getData();
        return view('detailServis/index',$data);
    }
    public function tambah()
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('detailservis'));
        }
         $data = [
        'mekanik' => $this->model->getMekanikDropdown(),
        'servis'  => $this->model->getServisDropdown()
    ];
         $data['model'] = $this->model->findAll();
        return view('detailservis/tambah',$data);
    }
    public function ubah($id = null)
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('detailServis'));
        }
         $data = [
        
        'mekanik' => $this->model->getMekanikDropdown(),
        'servis'  => $this->model->getServisDropdown()
    ];

        $data['model']= $this->model->where('id_detail_servis', $id)->first();
        return view('detailServis/ubah', $data);
    }
    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('detailservis'));
    }
    
}