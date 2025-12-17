<?php

namespace App\Models;

use CodeIgniter\Model;

class MekanikModel extends Model
{
    protected $table            = 'mekanik';
    protected $primaryKey       = 'id_mekanik';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_mekanik','spesialisasi','telepon'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
}
