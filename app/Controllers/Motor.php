<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MotorModel;
use App\Models\PelangganModel;

class Motor extends BaseController
{
    protected $motorModel;
    protected $pelangganModel;

    public function __construct()
    {
        $this->motorModel     = new MotorModel();
        $this->pelangganModel = new PelangganModel();
    }

    public function index()
    {
        $data['model'] = $this->motorModel->getMotor();
        return view('Motor/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'POST') {
            $this->motorModel->save($this->request->getPost());
            return redirect()->to(base_url('motor'));
        }

        // meskipun kosong → tetap harus dikirim!
        $data['pelanggan'] = $this->pelangganModel->findAll();

        return view('Motor/tambah', $data);
    }
     public function ubah($id = null)
    {
        if($this->request->getMethod()=='POST'){
            $this->motorModel->save($this->request->getPost());
            return redirect()->to(base_url('motor'));
        }
        
       $data['model'] = $this->motorModel->where('id_motor', $id)->first();
       $data['pelanggan'] = $this->pelangganModel->findAll();                                           
        return view('motor/ubah', $data);
    }

    public function hapus($id = null)
    {
        $this->motorModel->delete($id);
        return redirect()->to(base_url('motor'));
    }
}
