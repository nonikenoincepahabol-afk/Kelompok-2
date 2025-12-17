<?php

namespace App\Models;

use CodeIgniter\Model;

class SukuCadangModel extends Model
{
    protected $table            = 'suku_cadang';
    protected $primaryKey       = 'id_suku_cadang';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_suku_cadang','stok','harga_beli','harga_jual',];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
}
