<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\SukuCadangModel;
use App\Models\ServisModel;

class dash extends BaseController
{
    public function index()
    {
       
        $data = [
            'total_pelanggan' => 120,
            'total_suku_cadang' => 85,
            'total_transaksi' => 45,
            'servis_mingguan' => [5, 7, 4, 6, 10, 8, 3]
        ];

        return view('dashboard', $data);
    }
}
