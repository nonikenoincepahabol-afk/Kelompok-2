<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailSukuCadangModel extends Model
{
    protected $table            = 'Detail_suku_cadang';
    protected $primaryKey       = 'id_detail_suku_cadang';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['jumlah','harga_satuan','id_servis','id_suku_cadang'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;


    public function getAllDetail()
{
    return $this->select('detail_suku_cadang.*, suku_cadang.nama_suku_cadang, servis.keluhan')
        ->join('suku_cadang', 'suku_cadang.id_suku_cadang = detail_suku_cadang.id_suku_cadang', 'left')
        ->join('servis', 'servis.id_servis = detail_suku_cadang.id_servis', 'left')
        ->findAll();
}

    
}
