<?php

namespace App\Controllers;
use App\Models\servisModel;

class view extends BaseController
{ protected $model;
    public function __construct() {
        $this->model = new servisModel();
    }
    public function index(): string
    {
        $data['model'] =  $this->model->findAll();
        return view('ViewDetail',$data);
    }
}
