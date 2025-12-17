<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\servisModel;
use App\Models\PelangganModel;
use App\Models\MotorModel;
use CodeIgniter\HTTP\ResponseInterface;

class servis extends BaseController
{
    protected $model;
    protected $pelangganModel;
    protected $motorModel;
    public function __construct() {
        $this->model = new servisModel();
        $this->pelangganModel = new PelangganModel();
        $this->motorModel = new MotorModel();
    }
    public function index()
    {
      
        $data['model'] = $this->model->getAll();
       
        return view('servis/index',$data);
    }
    public function tambah()
    {
        if($this->request->getMethod()=='POST'){
            $this->model->save($this->request->getPost());
            return redirect()->to(base_url('servis'));

        }
         $data['pelanggan'] = $this->pelangganModel->findAll();
         $data['motor'] = $this->motorModel->findAll();
        return view('servis/tambah',$data);
    }
   public function ubah($id = null)
{
    $servis = $this->model->where('id_servis', $id)->first();
    if (!$servis) {
        return redirect()->to(base_url('servis'));
    }

    if ($this->request->getMethod() == 'POST') {
        $this->model->save($this->request->getPost());
        return redirect()->to(base_url('servis'));
    }

    
    $motorServis = $this->motorModel->find($servis->id_motor);

    // inject id_pelanggan ke object $servis
    $servis->id_pelanggan = $motorServis->id_pelanggan;

    // ambil semua motor milik pelanggan tersebut
    $data['motor'] = $this->motorModel
        ->where('id_pelanggan', $motorServis->id_pelanggan)
        ->findAll();

    $data['pelanggan'] = $this->pelangganModel->findAll();
    $data['model'] = $servis;

    return view('servis/ubah', $data);
}


    public function hapus($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('servis'));
    }
    public function getMotorByPelanggan($id_pelanggan)
{
    $motor = $this->motorModel
        ->where('id_pelanggan', $id_pelanggan)
        ->findAll();

    return $this->response->setJSON($motor);
}

}